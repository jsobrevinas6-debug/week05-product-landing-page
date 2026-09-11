@props([
    'name',
    'price',
    'image',
    'features' => [],
    'featured' => false,
])

<div
    class="group relative overflow-hidden rounded-lg border
           {{ $featured ? 'border-white/30 bg-white/[0.06]' : 'border-white/10 bg-[#111]' }}
           transition duration-300 hover:-translate-y-2 hover:border-white/30"
>
    @if ($featured)
        <div
            class="absolute right-4 top-4 z-10 rounded-full bg-white px-3 py-1
                   text-[10px] font-bold uppercase tracking-[0.2em] text-black"
        >
            Popular
        </div>
    @endif

    <div class="aspect-[4/3] overflow-hidden bg-[#0d0d0d]">
        <img
            src="{{ asset($image) }}"
            alt="{{ $name }}"
            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
        >
    </div>

    <div class="p-6">
        <h3 class="text-xl font-bold text-white">
            {{ $name }}
        </h3>

        <p class="mt-3 text-3xl font-black text-white">
            PHP {{ $price }}
        </p>

        <ul class="mt-6 space-y-3">
            @foreach ($features as $feature)
                <li class="flex items-start gap-3 text-sm text-gray-400">
                    <span class="mt-[2px] text-white">
                        &#10003;
                    </span>

                    <span>
                        {{ $feature }}
                    </span>
                </li>
            @endforeach
        </ul>

        <a
            href="#contact"
            class="mt-7 block w-full rounded-lg
                   {{ $featured ? 'bg-white text-black hover:bg-gray-200' : 'border border-white/20 text-white hover:bg-white/10' }}
                   px-5 py-3 text-center text-sm font-bold transition"
        >
            Inquire Now
        </a>
    </div>
</div>
