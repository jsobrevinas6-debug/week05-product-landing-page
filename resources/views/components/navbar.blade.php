<header class="absolute left-0 top-0 z-50 w-full">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-5 lg:px-8">
        <a href="#home" class="flex items-center" aria-label="D' Real Z home">
            <img
                src="{{ asset('images/logo/drz-logo.png') }}"
                alt="D' Real Z Logo"
                class="h-12 w-auto object-contain sm:h-14"
            >
        </a>

        <div class="hidden items-center gap-8 md:flex">
            <a href="#home" class="text-sm text-white transition hover:text-gray-400">Home</a>
            <a href="#features" class="text-sm text-gray-300 transition hover:text-white">Features</a>
            <a href="#pricing" class="text-sm text-gray-300 transition hover:text-white">Pricing</a>
            <a href="#testimonials" class="text-sm text-gray-300 transition hover:text-white">Testimonials</a>
            <a href="#contact" class="text-sm text-gray-300 transition hover:text-white">Contact</a>
        </div>

        <div class="hidden items-center gap-3 md:flex">
            <x-button href="#" variant="secondary" size="sm">
                Sign In
            </x-button>

            <x-button href="#pricing" size="sm">
                Get Started
            </x-button>
        </div>

        <details class="group relative md:hidden">
            <summary
                class="flex h-10 w-10 cursor-pointer list-none items-center justify-center rounded-lg
                       border border-white/10 bg-black/40 text-white backdrop-blur transition hover:bg-white/10"
                aria-label="Toggle navigation menu"
            >
                <span class="text-xl leading-none group-open:hidden">=</span>
                <span class="hidden text-xl leading-none group-open:block">x</span>
            </summary>

            <div
                class="absolute right-0 mt-3 w-64 rounded-lg border border-white/10
                       bg-[#0a0a0a]/95 p-4 shadow-2xl shadow-black/40 backdrop-blur"
            >
                <div class="grid gap-1">
                    <a href="#home" class="rounded-lg px-3 py-2 text-sm text-white hover:bg-white/10">Home</a>
                    <a href="#features" class="rounded-lg px-3 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">Features</a>
                    <a href="#pricing" class="rounded-lg px-3 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">Pricing</a>
                    <a href="#testimonials" class="rounded-lg px-3 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">Testimonials</a>
                    <a href="#contact" class="rounded-lg px-3 py-2 text-sm text-gray-300 hover:bg-white/10 hover:text-white">Contact</a>
                </div>

                <div class="mt-4 grid gap-3 border-t border-white/10 pt-4">
                    <x-button href="#" variant="secondary" size="sm" class="w-full">
                        Sign In
                    </x-button>

                    <x-button href="#pricing" size="sm" class="w-full">
                        Get Started
                    </x-button>
                </div>
            </div>
        </details>
    </nav>
</header>
