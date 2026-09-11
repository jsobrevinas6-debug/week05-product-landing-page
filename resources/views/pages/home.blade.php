@extends('layouts.app')

@section('title', "D' Real Z | Streetwear & Accessories")

@section('content')

    {{-- HERO SECTION --}}
    <x-hero />


    {{-- FEATURES SECTION --}}
    <section
        id="features"
        class="border-y border-white/10 bg-[#0a0a0a] py-24"
    >

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            {{-- Section Heading --}}
            <div class="mx-auto mb-14 max-w-2xl text-center">

                <p
                    class="mb-4 text-xs font-semibold uppercase
                           tracking-[0.4em] text-gray-500"
                >
                    Why D' Real Z
                </p>

                <h2
                    class="text-3xl font-black uppercase
                           text-white sm:text-4xl"
                >
                    Why Choose D' Real Z?
                </h2>

                <p class="mt-4 text-gray-500">
                    More than just clothes - it's quality,
                    style, and local identity.
                </p>

            </div>


            {{-- Feature Grid --}}
            <div
                class="grid grid-cols-1 gap-5
                       sm:grid-cols-2 lg:grid-cols-3"
            >

                <x-feature-card
                    icon="01"
                    title="Premium Quality"
                    description="Carefully selected clothing and accessories made for everyday wear."
                />

                <x-feature-card
                    icon="02"
                    title="Unique Designs"
                    description="Streetwear pieces with designs that help you stand out from the crowd."
                />

                <x-feature-card
                    icon="03"
                    title="Local Brand"
                    description="Proudly representing the local streetwear community of Majayjay, Laguna."
                />

                <x-feature-card
                    icon="04"
                    title="Affordable Style"
                    description="Stylish clothing and accessories available at reasonable prices."
                />

                <x-feature-card
                    icon="05"
                    title="Clothing & Accessories"
                    description="From graphic shirts to beanies, earrings, slides, and everyday essentials."
                />

                <x-feature-card
                    icon="06"
                    title="Support Local"
                    description="Every purchase helps support and grow a local clothing business."
                />

            </div>

        </div>

    </section>


    {{-- PRODUCT SHOWCASE --}}
    <section
        id="products"
        class="bg-black py-24"
    >

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            {{-- Heading --}}
            <div
                class="mb-14 flex flex-col justify-between gap-6
                       md:flex-row md:items-end"
            >

                <div>

                    <p
                        class="mb-4 text-xs font-semibold uppercase
                               tracking-[0.4em] text-gray-500"
                    >
                        Our Products
                    </p>

                    <h2
                        class="text-3xl font-black uppercase
                               text-white sm:text-4xl"
                    >
                        Latest Collection
                    </h2>

                    <p class="mt-4 max-w-xl text-gray-500">
                        Streetwear pieces and accessories made
                        for everyday style.
                    </p>

                </div>

                <a
                    href="#pricing"
                    class="text-sm font-semibold text-white
                           transition hover:text-gray-400"
                >
                    View All Products -&gt;
                </a>

            </div>


            {{-- Product Grid --}}
            <div
                class="grid grid-cols-1 gap-6
                       sm:grid-cols-2 lg:grid-cols-4"
            >

                {{-- PRODUCT 1 --}}
                <div
                    class="group overflow-hidden rounded-lg
                           border border-white/10 bg-[#111]"
                >

                    <div
                        class="aspect-square overflow-hidden
                               bg-[#0d0d0d]"
                    >

                        <img
                            src="{{ asset('images/products/map-shirt.jpg') }}"
                            alt="D' Real Z Graphic Shirt"
                            class="h-full w-full object-cover
                                   transition duration-500
                                   group-hover:scale-105"
                        >

                    </div>

                    <div class="p-5">

                        <p
                            class="text-xs uppercase
                                   tracking-[0.25em]
                                   text-gray-500"
                        >
                            Graphic Tee
                        </p>

                        <h3
                            class="mt-2 text-lg
                                   font-bold text-white"
                        >
                            Map Graphic Shirt
                        </h3>

                        <p
                            class="mt-2 text-sm
                                   leading-6 text-gray-500"
                        >
                            Streetwear graphic tee with
                            a bold printed design.
                        </p>

                    </div>

                </div>


                {{-- PRODUCT 2 --}}
                <div
                    class="group overflow-hidden rounded-lg
                           border border-white/10 bg-[#111]"
                >

                    <div
                        class="aspect-square overflow-hidden
                               bg-[#0d0d0d]"
                    >

                        <img
                            src="{{ asset('images/products/essentials-shirt.jpg') }}"
                            alt="Essentials Shirt"
                            class="h-full w-full object-cover
                                   transition duration-500
                                   group-hover:scale-105"
                        >

                    </div>

                    <div class="p-5">

                        <p
                            class="text-xs uppercase
                                   tracking-[0.25em]
                                   text-gray-500"
                        >
                            Essentials
                        </p>

                        <h3
                            class="mt-2 text-lg
                                   font-bold text-white"
                        >
                            Everyday Essentials
                        </h3>

                        <p
                            class="mt-2 text-sm
                                   leading-6 text-gray-500"
                        >
                            Simple and comfortable clothing
                            for everyday wear.
                        </p>

                    </div>

                </div>


                {{-- PRODUCT 3 --}}
                <div
                    class="group overflow-hidden rounded-lg
                           border border-white/10 bg-[#111]"
                >

                    <div
                        class="aspect-square overflow-hidden
                               bg-[#0d0d0d]"
                    >

                        <img
                            src="{{ asset('images/products/beanies.jpg') }}"
                            alt="D' Real Z Beanies"
                            class="h-full w-full object-cover
                                   transition duration-500
                                   group-hover:scale-105"
                        >

                    </div>

                    <div class="p-5">

                        <p
                            class="text-xs uppercase
                                   tracking-[0.25em]
                                   text-gray-500"
                        >
                            Accessories
                        </p>

                        <h3
                            class="mt-2 text-lg
                                   font-bold text-white"
                        >
                            Street Beanies
                        </h3>

                        <p
                            class="mt-2 text-sm
                                   leading-6 text-gray-500"
                        >
                            Casual accessories that complete
                            your everyday fit.
                        </p>

                    </div>

                </div>


                {{-- PRODUCT 4 --}}
                <div
                    class="group overflow-hidden rounded-lg
                           border border-white/10 bg-[#111]"
                >

                    <div
                        class="aspect-square overflow-hidden
                               bg-[#0d0d0d]"
                    >

                        <img
                            src="{{ asset('images/products/earrings-silver.jpg') }}"
                            alt="Silver Earrings"
                            class="h-full w-full object-cover
                                   transition duration-500
                                   group-hover:scale-105"
                        >

                    </div>

                    <div class="p-5">

                        <p
                            class="text-xs uppercase
                                   tracking-[0.25em]
                                   text-gray-500"
                        >
                            Accessories
                        </p>

                        <h3
                            class="mt-2 text-lg
                                   font-bold text-white"
                        >
                            Statement Earrings
                        </h3>

                        <p
                            class="mt-2 text-sm
                                   leading-6 text-gray-500"
                        >
                            Minimal accessories designed
                            to add detail to your look.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- LOCAL BRAND SHOWCASE --}}
    <section class="bg-[#0a0a0a] py-20">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div
                class="grid overflow-hidden rounded-lg
                       border border-white/10
                       lg:grid-cols-2"
            >

                {{-- Store Image --}}
                <div class="min-h-[380px]">

                    <img
                        src="{{ asset('images/products/store.jpg') }}"
                        alt="D' Real Z Store"
                        class="h-full w-full object-cover"
                    >

                </div>


                {{-- Content --}}
                <div
                    class="flex items-center
                           bg-[#111] p-10 lg:p-14"
                >

                    <div>

                        <p
                            class="mb-4 text-xs uppercase
                                   tracking-[0.4em]
                                   text-gray-500"
                        >
                            Local Streetwear
                        </p>

                        <h2
                            class="text-3xl font-black
                                   uppercase text-white
                                   sm:text-4xl"
                        >
                            Built From The Local Community
                        </h2>

                        <p
                            class="mt-5 max-w-lg
                                   leading-7 text-gray-400"
                        >
                            D' Real Z brings clothing and
                            accessories to the local community
                            with a focus on streetwear style,
                            everyday comfort, and unique pieces.
                        </p>


                        {{-- Highlights --}}
                        <div
                            class="mt-8 grid
                                   grid-cols-2 gap-5"
                        >

                            <div
                                class="border-l
                                       border-white/20
                                       pl-4"
                            >

                                <p
                                    class="font-bold
                                           text-white"
                                >
                                    Majayjay
                                </p>

                                <p
                                    class="mt-1 text-sm
                                           text-gray-500"
                                >
                                    Laguna
                                </p>

                            </div>

                            <div
                                class="border-l
                                       border-white/20
                                       pl-4"
                            >

                                <p
                                    class="font-bold
                                           text-white"
                                >
                                    Clothing
                                </p>

                                <p
                                    class="mt-1 text-sm
                                           text-gray-500"
                                >
                                    & Accessories
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- PRICING SECTION --}}
    <section
        id="pricing"
        class="border-y border-white/10 bg-black py-24"
    >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mb-14 max-w-2xl text-center">
                <p class="mb-4 text-xs font-semibold uppercase tracking-[0.4em] text-gray-500">
                    Pricing
                </p>

                <h2 class="text-3xl font-black uppercase text-white sm:text-4xl">
                    Shop By Fit
                </h2>

                <p class="mt-4 text-gray-500">
                    Choose a ready-to-wear set that matches your everyday streetwear style.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                <x-pricing-card
                    name="Starter Fit"
                    price="399"
                    image="images/products/essentials-shirt.jpg"
                    :features="[
                        'Essential shirt selection',
                        'Comfortable daily wear',
                        'Local pickup support',
                        'Style recommendation'
                    ]"
                />

                <x-pricing-card
                    name="Real Cuzzi Set"
                    price="799"
                    image="images/products/map-shirt.jpg"
                    :features="[
                        'Graphic shirt collection',
                        'Accessory pairing option',
                        'Priority item reservation',
                        'Best for statement outfits'
                    ]"
                    :featured="true"
                />

                <x-pricing-card
                    name="Street Complete"
                    price="1199"
                    image="images/products/beanies.jpg"
                    :features="[
                        'Full clothing and accessory bundle',
                        'Beanie or slide add-on',
                        'Flexible mix-and-match options',
                        'Recommended for group orders'
                    ]"
                />
            </div>
        </div>
    </section>


    {{-- TESTIMONIALS SECTION --}}
    <section
        id="testimonials"
        class="bg-[#0a0a0a] py-24"
    >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mb-14 flex flex-col justify-between gap-6 md:flex-row md:items-end">
                <div>
                    <p class="mb-4 text-xs font-semibold uppercase tracking-[0.4em] text-gray-500">
                        Testimonials
                    </p>

                    <h2 class="text-3xl font-black uppercase text-white sm:text-4xl">
                        Worn By The Community
                    </h2>
                </div>

                <p class="max-w-xl text-gray-500">
                    Customers choose D' Real Z for pieces that feel personal, comfortable,
                    and easy to style.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <x-testimonial-card
                    photo="images/testimonials/jordan.jpg"
                    name="Jordan Noriel"
                    position="Student"
                    review="Sobrang solid ng mga clothing dito."
                />

                <x-testimonial-card
                    photo="images/testimonials/edmar.jpg"
                    name="John Edmar"
                    position="Local Customer"
                    review="solid hikaw mo cuh"
                />

                <x-testimonial-card
                    photo="images/testimonials/neil-ivan.jpg"
                    name="Neil Ivan"
                    position="Streetwear Buyer"
                    review="solid talaga kumuha dito pag chrome hearts enjoy ka"
                />
            </div>
        </div>
    </section>


    {{-- CALL TO ACTION SECTION --}}
    <section
        id="contact"
        class="bg-black py-24"
    >
        <div class="mx-auto max-w-5xl px-6 text-center lg:px-8">
            <p class="mb-4 text-xs font-semibold uppercase tracking-[0.4em] text-gray-500">
                Ready To Order
            </p>

            <h2 class="text-4xl font-black uppercase text-white sm:text-5xl">
                Build Your Next Fit With D' Real Z
            </h2>

            <p class="mx-auto mt-6 max-w-2xl text-base leading-7 text-gray-400">
                Message the shop for available sizes, product reservations, bundles,
                and local order inquiries.
            </p>

            <div class="mt-9 flex flex-wrap justify-center gap-4">
                <x-button href="#pricing" size="lg">
                    Start Shopping
                </x-button>

                <x-button href="mailto:contact@drealz.local" variant="secondary" size="lg">
                    Contact Sales
                </x-button>
            </div>
        </div>
    </section>

@endsection

