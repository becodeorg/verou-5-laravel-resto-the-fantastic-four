@extends('_layouts.layout')
@section('title')
home
@endsection

@section('content')
<body>
    <div class="relative min-h-screen">
        <!-- Fullscreen background image with styles for size and position -->
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" src="{{ asset('images/pexels-roman-odintsov-4551832.jpg') }}" alt="Background">
            <!-- Overlay with decreased opacity -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <div class="relative z-10 bg-transparent">
            <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
                <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-56 lg:pt-48 xl:col-span-6">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        </div>
                        <h1 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-6xl">Rain or shine, it’s a fine time to dine.</h1>
                        <p class="mt-6 text-sm leading-6 text-white">Step into "Flavor Fiesta," where every meal is a celebration and your taste buds are the guests of honor! Here, we don't just serve food; we serve smiles, one plate at a time, in a vibrant setting that's as lively as our dishes. From sizzling fajitas that dance on your plate to our legendary "Laughing Guacamole," made fresh at your table with a side of chuckles, every bite promises a fiesta of flavors that'll have you salsa dancing in your seat.</p>
                        <div class="mt-10 flex flex-col items-center justify-center gap-x-6">
                          <a href="{{route("reservation")}}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Book A Table</a>
                          {{-- <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more about our restaurant<span aria-hidden="true"> →</span></a> --}}
                        </div>
                        {{-- <div class="relative rounded-full px-3 py-1 text-sm text-center leading-6 text-white ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Welcome To Resto App. Where every flavor tells a story. <a href="#" class="whitespace-nowrap font-semibold text-orange-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                          </div> --}}
                    </div>
                </div>
                <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
                </div>
            </div>
        </div>
    </div> 
</body>
@endsection
