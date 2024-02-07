@extends('_layouts.layout')
@section('title')
    home
@endsection

@section('content')
    <div class="bg-gray-900">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h1 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-6xl">Our Menu</h1>
            <h2 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-2xl">Appetizers</h2>
            <br><br>
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-4 lg:gap-x-8">
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Cesar_Salad.jpg') }}" alt="Ceasar Salad"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Ceasar Salad
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"An Emperor's Choice: The Ultimate Caesar Salad Experience!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Healthy</p>
                            <p class="text-base font-medium text-gray-900">$25</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Cheese_Wraps.jpg') }}" alt="Cheese Wraps"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Cheese Wraps
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"Say Cheese! Our Gourmet Wraps Are The Perfect Blend of Comfort and
                            Class!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Vegan</p>
                            <p class="text-base font-medium text-gray-900">$22</p>
                        </div>
                    </div>
                </div>

                <!-- More products... -->
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/AntiPasti_Bites.jpg') }}" alt="AntiPasti Bites"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                AntiPasti Bites
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"A Taste of Tradition: Savor Every Moment with Our Antipasti
                            Bites!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Yummy</p>
                            <p class="text-base font-medium text-gray-900">$30</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Stuffed_Baguette.jpg') }}" alt="Stuffed Baguette"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Stuffed Baguette
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"Crusty on the Outside, Heavenly Inside: Discover the Delight of
                            Our Stuffed Baguettes!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Bread</p>
                            <p class="text-base font-medium text-gray-900">$22</p>
                        </div>
                    </div>
                </div>

            </div>
            <h2 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-2xl">Main Courses
            </h2><br><br>
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-4 lg:gap-x-8">
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Steak_and_fries.jpg') }}" alt="Steak & Fries"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Steak & Fries
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"Steak & Fries: A Classic Duo Reimagined for the Gourmet Soul!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#MeatLovers</p>
                            <p class="text-base font-medium text-gray-900">$56</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Patato_Gratin.jpg') }}" alt="Potato Gratin"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Potato Gratin
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"Layers of Indulgence: Dive into Our Decadent Potato Gratin!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Potatoes & Tomatoes :)</p>
                            <p class="text-base font-medium text-gray-900">$38</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Spaghetti_Bolognese.jpg') }}" alt="Spaghetti Bolognese"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Spaghetti Bolognese
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"Twirl into Comfort: Our Spaghetti Bolognese, Where Tradition
                            Meets Taste!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Viva Italia</p>
                            <p class="text-base font-medium text-gray-900">$42</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Grilled_Salmon.jpg') }}" alt="Grilled Salmon"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Grilled Salmon
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"Ocean's Bounty: Savor the Succulent Perfection of Our Grilled
                            Salmon!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Here Fishy Fishy</p>
                            <p class="text-base font-medium text-gray-900">$51</p>
                        </div>
                    </div>
                </div>

            </div>
            <h2 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-2xl">Desserts</h2>
            <br><br>
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-4 lg:gap-x-8">
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Cheese_Plank.jpg') }}" alt="Cheese Plank"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Cheese Plank
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"A Symphony of Flavors: Explore Our Exquisite Cheese Plank
                            Selection!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Cheesy</p>
                            <p class="text-base font-medium text-gray-900">$25</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Ice_Cream.jpg') }}" alt="Ice Cream"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Ice Cream
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"A Scoop of Happiness: Indulge in Our Irresistible Ice Cream
                            Creations!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Delicious</p>
                            <p class="text-base font-medium text-gray-900">$18</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/Whipped_Yoghurt_With_roasted_Strawberries.jpg') }}"
                            alt="Whipped Yoghurt With roasted Strawberries"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Whipped Yoghurt With roasted Strawberries
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"Berry Bliss: Whipped Yogurt with Roasted Strawberries - A
                            Delightful Symphony of Flavors!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Dessert</p>
                            <p class="text-base font-medium text-gray-900">$22</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="{{ asset('images/CheeseCake.jpg') }}" alt="Cheese Cake"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Cheese Cake
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">"Decadently Smooth: Our Cheesecake, A Slice of Pure Bliss!"</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">#Yummy</p>
                            <p class="text-base font-medium text-gray-900">$25</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
