<section
    id="home"
    class="relative flex min-h-screen items-center overflow-hidden bg-black"
>
    <div class="absolute right-0 top-0 h-full w-1/2 bg-gradient-to-l from-white/[0.06] to-transparent"></div>

    <div
        class="pointer-events-none absolute right-[8%] top-[30%] hidden rotate-[-10deg]
               text-7xl font-black text-white/[0.03] lg:block"
    >
        REAL CUZZI
    </div>

    <div
        class="relative z-10 mx-auto grid w-full max-w-7xl grid-cols-1 items-center
               gap-10 px-5 pb-14 pt-28 sm:px-6 sm:pt-32 lg:grid-cols-2 lg:px-8"
    >
        <div>
            <p class="mb-5 text-xs font-medium uppercase tracking-[0.35em] text-gray-400 sm:tracking-[0.45em]">
                D' REAL Z
            </p>

            <h1
                class="max-w-2xl text-4xl font-black uppercase leading-none text-white
                       sm:text-6xl lg:text-7xl"
            >
                More Than Fits.

                <span class="mt-2 block text-gray-400">
                    It's a Lifestyle.
                </span>
            </h1>

            <p class="mt-7 max-w-lg text-base leading-7 text-gray-400 sm:text-lg">
                Streetwear essentials made for real ones. Quality pieces, unique style,
                and a growing community from Majayjay, Laguna.
            </p>

            <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                <x-button href="#products" size="lg" class="w-full sm:w-auto">
                    Shop Now -&gt;
                </x-button>

                <x-button href="#products" variant="secondary" size="lg" class="w-full sm:w-auto">
                    Explore Collection
                </x-button>
            </div>

            <div
                class="mt-12 grid max-w-xl grid-cols-1 gap-5 border-t border-white/10 pt-7
                       sm:grid-cols-3 sm:divide-x sm:divide-white/10"
            >
                <div class="sm:pr-5">
                    <p class="text-lg font-bold text-white">Premium</p>
                    <p class="mt-1 text-xs text-gray-500">Quality Pieces</p>
                </div>

                <div class="sm:px-5">
                    <p class="text-lg font-bold text-white">Local</p>
                    <p class="mt-1 text-xs text-gray-500">Clothing Brand</p>
                </div>

                <div class="sm:pl-5">
                    <p class="text-lg font-bold text-white">Majayjay</p>
                    <p class="mt-1 text-xs text-gray-500">Laguna</p>
                </div>
            </div>
        </div>

        <div class="relative flex min-h-[280px] items-center justify-center sm:min-h-[360px] lg:min-h-[550px]">
            <div class="absolute h-64 w-64 rounded-full bg-white/[0.03] blur-3xl sm:h-[420px] sm:w-[420px]"></div>

            <div class="relative text-center">
                <img
                    src="{{ asset('images/logo/drz-logo.png') }}"
                    alt="D' Real Z product mark"
                    class="mx-auto w-64 max-w-full object-contain opacity-90 sm:w-80 lg:w-[420px]"
                >

                <p class="mt-6 text-xs uppercase tracking-[0.35em] text-gray-600 sm:tracking-[0.5em]">
                    Real Style / Real People
                </p>
            </div>
        </div>
    </div>

    <div
        class="absolute bottom-8 left-1/2 hidden -translate-x-1/2 flex-col items-center
               text-gray-600 md:flex"
    >
        <span class="mb-2 text-[10px] uppercase tracking-[0.3em]">
            Scroll
        </span>

        <span aria-hidden="true">v</span>
    </div>
</section>
