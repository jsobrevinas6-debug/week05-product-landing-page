<footer class="border-t border-white/10 bg-[#0a0a0a]">
    <div class="mx-auto max-w-7xl px-5 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-[1.4fr_1fr_1fr_1fr]">
            <div>
                <a href="#home" class="inline-flex items-center" aria-label="D' Real Z home">
                    <img
                        src="{{ asset('images/logo/drz-logo.png') }}"
                        alt="D' Real Z Logo"
                        class="h-14 w-auto object-contain"
                    >
                </a>

                <p class="mt-5 max-w-sm text-sm leading-7 text-gray-500">
                    D' Real Z is a local streetwear and accessories brand from
                    Majayjay, Laguna, focused on everyday pieces with real community style.
                </p>
            </div>

            <div>
                <h2 class="text-sm font-bold uppercase text-white">
                    Quick Links
                </h2>

                <nav class="mt-5 grid gap-3">
                    <a href="#home" class="text-sm text-gray-500 transition hover:text-white">Home</a>
                    <a href="#features" class="text-sm text-gray-500 transition hover:text-white">Features</a>
                    <a href="#pricing" class="text-sm text-gray-500 transition hover:text-white">Pricing</a>
                    <a href="#testimonials" class="text-sm text-gray-500 transition hover:text-white">Testimonials</a>
                    <a href="#contact" class="text-sm text-gray-500 transition hover:text-white">Contact</a>
                </nav>
            </div>

            <div>
                <h2 class="text-sm font-bold uppercase text-white">
                    Contact
                </h2>

                <div class="mt-5 grid gap-3 text-sm text-gray-500">
                    <p>Majayjay, Laguna</p>
                    <a href="mailto:contact@drealz.local" class="transition hover:text-white">
                        contact@drealz.local
                    </a>
                    <a href="tel:+639000000000" class="transition hover:text-white">
                        +63 900 000 0000
                    </a>
                </div>
            </div>

            <div>
                <h2 class="text-sm font-bold uppercase text-white">
                    Socials
                </h2>

                <div class="mt-5 flex gap-3">
                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10
                               text-xs font-bold text-gray-400 transition hover:border-white/30 hover:text-white"
                        aria-label="Facebook"
                    >
                        FB
                    </a>

                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10
                               text-xs font-bold text-gray-400 transition hover:border-white/30 hover:text-white"
                        aria-label="Instagram"
                    >
                        IG
                    </a>

                    <a
                        href="#"
                        class="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10
                               text-xs font-bold text-gray-400 transition hover:border-white/30 hover:text-white"
                        aria-label="TikTok"
                    >
                        TT
                    </a>
                </div>
            </div>
        </div>

        <div
            class="mt-12 flex flex-col gap-3 border-t border-white/10 pt-6
                   text-sm text-gray-600 sm:flex-row sm:items-center sm:justify-between"
        >
            <p>
                Copyright {{ date('Y') }} D' Real Z. All rights reserved.
            </p>

            <p>
                Responsive Product Landing Page - ITST 302 Week 5
            </p>
        </div>
    </div>
</footer>
