@extends('_layouts.layout')

@section('title', 'Home')

@section('content')

    <body class="bg-transparent">
        <div class="relative min-h-screen flex items-center justify-center">
            <!-- Fullscreen background image with styles for size and position -->
            <img class="absolute inset-0 w-full h-full object-cover z-0"
                src="{{ asset('images/pexels-roman-odintsov-4551832.jpg') }}" alt="Background">
            <!-- Overlay with decreased opacity -->
            <div class="absolute inset-0 bg-black opacity-50 z-10"></div>

            <!-- Content -->
            <div class="z-20 text-center text-white p-4 mx-auto max-w-5xl lg:mx-0">
                <h1 class="text-4xl font-bold tracking-tight sm:text-6xl">Rain or shine, it’s a fine time to dine.</h1>
                <p class="mt-6 text-sm leading-6">Step into "Flavor Fiesta," where every meal is a celebration and your taste
                    buds are the guests of honor! Here, we don't just serve food; we serve smiles, one plate at a time, in a
                    vibrant setting that's as lively as our dishes. From sizzling fajitas that dance on your plate to our
                    legendary "Laughing Guacamole," made fresh at your table with a side of chuckles, every bite promises a
                    fiesta of flavors that'll have you salsa dancing in your seat.</p>
                <div class="mt-10">
                    <a href="{{ route('reservations') }}"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">Book
                        A Table</a>
                </div>
            </div>
        </div>
    </body>
@endsection
