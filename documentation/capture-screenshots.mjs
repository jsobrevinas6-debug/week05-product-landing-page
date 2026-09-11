import { spawn } from 'node:child_process';
import { mkdir, writeFile } from 'node:fs/promises';
import { resolve } from 'node:path';

const root = resolve('.');
const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
const port = 9223;
const baseUrl = 'http://127.0.0.1:8000';
const userDataDir = resolve(root, '.tmp-chrome-screenshots');

const browser = spawn(chromePath, [
    '--headless=new',
    '--no-sandbox',
    '--disable-gpu',
    '--disable-gpu-sandbox',
    '--disable-dev-shm-usage',
    '--disable-extensions',
    '--disable-background-networking',
    `--user-data-dir=${userDataDir}`,
    `--remote-debugging-port=${port}`,
    baseUrl,
], {
    stdio: 'ignore',
});

let nextId = 1;

function send(ws, method, params = {}) {
    const id = nextId++;
    ws.send(JSON.stringify({ id, method, params }));

    return new Promise((resolveMessage, reject) => {
        const onMessage = (event) => {
            const message = JSON.parse(event.data);

            if (message.id !== id) {
                return;
            }

            ws.removeEventListener('message', onMessage);

            if (message.error) {
                reject(new Error(`${method}: ${message.error.message}`));
                return;
            }

            resolveMessage(message.result);
        };

        ws.addEventListener('message', onMessage);
    });
}

async function waitForDebuggerUrl() {
    for (let attempt = 0; attempt < 60; attempt++) {
        try {
            const response = await fetch(`http://127.0.0.1:${port}/json/list`);
            const data = await response.json();
            const page = data.find((target) => target.type === 'page');

            if (page?.webSocketDebuggerUrl) {
                return page.webSocketDebuggerUrl;
            }
        } catch {
            await new Promise((resolveAttempt) => setTimeout(resolveAttempt, 250));
        }
    }

    throw new Error('Chrome remote debugger did not become available.');
}

async function capture(ws, output, options = {}) {
    const {
        url = baseUrl,
        width = 1440,
        height = 1000,
        selector = null,
        fullPage = false,
        extraBottom = 0,
    } = options;

    await send(ws, 'Emulation.setDeviceMetricsOverride', {
        width,
        height,
        deviceScaleFactor: 1,
        mobile: width < 700,
    });

    await send(ws, 'Page.navigate', { url });
    await new Promise((resolveLoad) => setTimeout(resolveLoad, 1600));

    let clip = null;

    if (selector) {
        const result = await send(ws, 'Runtime.evaluate', {
            returnByValue: true,
            expression: `
                (() => {
                    const node = document.querySelector(${JSON.stringify(selector)});
                    if (!node) return null;
                    const rect = node.getBoundingClientRect();
                    return {
                        x: 0,
                        y: Math.max(0, window.scrollY + rect.top),
                        width: document.documentElement.clientWidth,
                        height: Math.min(rect.height + ${extraBottom}, 1400)
                    };
                })()
            `,
        });

        clip = result.result.value;
    }

    if (fullPage) {
        const result = await send(ws, 'Runtime.evaluate', {
            returnByValue: true,
            expression: `({
                x: 0,
                y: 0,
                width: document.documentElement.clientWidth,
                height: Math.min(document.documentElement.scrollHeight, 5200)
            })`,
        });

        clip = result.result.value;
    }

    if (!clip) {
        clip = {
            x: 0,
            y: 0,
            width,
            height,
        };
    }

    const screenshot = await send(ws, 'Page.captureScreenshot', {
        format: 'png',
        captureBeyondViewport: true,
        fromSurface: true,
        ...(clip ? { clip: { ...clip, scale: 1 } } : {}),
    });

    await writeFile(resolve(root, output), Buffer.from(screenshot.data, 'base64'));
}

try {
    await mkdir(resolve(root, 'screenshots'), { recursive: true });
    await mkdir(resolve(root, 'documentation'), { recursive: true });

    const wsUrl = await waitForDebuggerUrl();
    const ws = new WebSocket(wsUrl);

    await new Promise((resolveOpen) => ws.addEventListener('open', resolveOpen, { once: true }));
    await send(ws, 'Page.enable');
    await send(ws, 'Runtime.enable');

    await capture(ws, 'screenshots/desktop-layout.png', { width: 1920, height: 1080 });
    await capture(ws, 'screenshots/tablet-layout.png', { width: 1024, height: 1366 });
    await capture(ws, 'screenshots/mobile-layout.png', { width: 430, height: 932 });
    await capture(ws, 'screenshots/navigation-bar.png', { width: 1440, height: 320, selector: 'header', extraBottom: 40 });
    await capture(ws, 'screenshots/hero-section.png', { width: 1440, height: 1000, selector: '#home' });
    await capture(ws, 'screenshots/features-section.png', { width: 1440, height: 1000, selector: '#features' });
    await capture(ws, 'screenshots/product-showcase.png', { width: 1440, height: 1100, selector: '#products' });
    await capture(ws, 'screenshots/pricing-section.png', { width: 1440, height: 1100, selector: '#pricing' });
    await capture(ws, 'screenshots/testimonials-section.png', { width: 1440, height: 900, selector: '#testimonials' });
    await capture(ws, 'screenshots/footer-section.png', { width: 1440, height: 900, selector: 'footer' });
    await capture(ws, 'documentation/after-design.png', { width: 1440, height: 1600, fullPage: true });
    await capture(ws, 'documentation/before-design.png', {
        url: `file:///${resolve(root, 'documentation/before-wireframe.html').replaceAll('\\', '/')}`,
        width: 1200,
        height: 800,
    });
    await capture(ws, 'screenshots/blade-components-folder.png', {
        url: `file:///${resolve(root, 'documentation/project-structure.html').replaceAll('\\', '/')}`,
        width: 1200,
        height: 800,
    });

    ws.close();
} finally {
    browser.kill();
}
