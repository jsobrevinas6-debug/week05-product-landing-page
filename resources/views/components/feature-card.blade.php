@props([
    'icon',
    'title',
    'description'
])

<div
    class="group rounded-lg border border-white/10 bg-white/[0.03]
           p-7 transition duration-300
           hover:-translate-y-2 hover:border-white/20 hover:bg-white/[0.06]"
>

    <div
        class="mb-6 flex h-12 w-12 items-center justify-center
               rounded-lg border border-white/10 bg-white/[0.05]
               text-2xl"
    >
        {{ $icon }}
    </div>

    <h3 class="text-lg font-bold text-white">
        {{ $title }}
    </h3>

    <p class="mt-3 text-sm leading-6 text-gray-500">
        {{ $description }}
    </p>

</div>
