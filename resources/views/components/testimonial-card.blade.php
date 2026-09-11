@props([
    'photo',
    'name',
    'position',
    'review',
])

<article
    {{ $attributes->merge([
        'class' => 'rounded-lg border border-white/10 bg-white/[0.03] p-7 shadow-2xl shadow-black/20 transition duration-300 hover:-translate-y-2 hover:border-white/20 hover:bg-white/[0.06]',
    ]) }}
>
    <div class="flex items-center gap-4">
        <img
            src="{{ asset($photo) }}"
            alt="{{ $name }}"
            class="h-14 w-14 rounded-full border border-white/10 object-cover"
        >

        <div>
            <h3 class="font-bold text-white">
                {{ $name }}
            </h3>

            <p class="mt-1 text-xs uppercase tracking-[0.2em] text-gray-500">
                {{ $position }}
            </p>
        </div>
    </div>

    <p class="mt-6 text-sm leading-7 text-gray-400">
        "{{ $review }}"
    </p>
</article>
