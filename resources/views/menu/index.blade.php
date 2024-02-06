@extends('_layouts.layout')
@section('title')
    home
@endsection

@section('content')
    <div class="bg-gray-900">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h1 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-6xl">Our Menu</h1> 
          <h2 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-2xl">Appetizers</h2><br><br>
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg"
                            alt="example menu"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee 8-Pack
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Get the full lineup of our Basic Tees. Have a fresh shirt all
                            week, and an extra for laundry day.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">8 colors</p>
                            <p class="text-base font-medium text-gray-900">$256</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                            alt="Front of plain black t-shirt."
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                            day.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">Black</p>
                            <p class="text-base font-medium text-gray-900">$32</p>
                        </div>
                    </div>
                </div>
                
                <!-- More products... -->
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                  <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                      <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                          alt="Front of plain black t-shirt."
                          class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                  </div>
                  <div class="flex flex-1 flex-col space-y-2 p-4">
                      <h3 class="text-sm font-medium text-gray-900">
                          <a href="#">
                              <span aria-hidden="true" class="absolute inset-0"></span>
                              Basic Tee
                          </a>
                      </h3>
                      <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                          day.</p>
                      <div class="flex flex-1 flex-col justify-end">
                          <p class="text-sm italic text-gray-500">Black</p>
                          <p class="text-base font-medium text-gray-900">$32</p>
                      </div>
                  </div>
              </div>
              <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                        alt="Front of plain black t-shirt."
                        class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                </div>
                <div class="flex flex-1 flex-col space-y-2 p-4">
                    <h3 class="text-sm font-medium text-gray-900">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Basic Tee
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                        day.</p>
                    <div class="flex flex-1 flex-col justify-end">
                        <p class="text-sm italic text-gray-500">Black</p>
                        <p class="text-base font-medium text-gray-900">$32</p>
                    </div>
                </div>
            </div>
            
            </div>
            <h2 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-2xl">Main Courses</h2><br><br>
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg"
                            alt="example menu"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee 8-Pack
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Get the full lineup of our Basic Tees. Have a fresh shirt all
                            week, and an extra for laundry day.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">8 colors</p>
                            <p class="text-base font-medium text-gray-900">$256</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                  <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                      <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                          alt="Front of plain black t-shirt."
                          class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                  </div>
                  <div class="flex flex-1 flex-col space-y-2 p-4">
                      <h3 class="text-sm font-medium text-gray-900">
                          <a href="#">
                              <span aria-hidden="true" class="absolute inset-0"></span>
                              Basic Tee
                          </a>
                      </h3>
                      <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                          day.</p>
                      <div class="flex flex-1 flex-col justify-end">
                          <p class="text-sm italic text-gray-500">Black</p>
                          <p class="text-base font-medium text-gray-900">$32</p>
                      </div>
                  </div>
              </div>
              <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                        alt="Front of plain black t-shirt."
                        class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                </div>
                <div class="flex flex-1 flex-col space-y-2 p-4">
                    <h3 class="text-sm font-medium text-gray-900">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Basic Tee
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                        day.</p>
                    <div class="flex flex-1 flex-col justify-end">
                        <p class="text-sm italic text-gray-500">Black</p>
                        <p class="text-base font-medium text-gray-900">$32</p>
                    </div>
                </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                      alt="Front of plain black t-shirt."
                      class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                  <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          Basic Tee
                      </a>
                  </h3>
                  <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                      day.</p>
                  <div class="flex flex-1 flex-col justify-end">
                      <p class="text-sm italic text-gray-500">Black</p>
                      <p class="text-base font-medium text-gray-900">$32</p>
                  </div>
              </div>
          </div>

        </div>
        <h2 class="mt-24 text-4xl text-center font-bold tracking-tight text-white sm:mt-10 sm:text-2xl">Desserts</h2><br><br>
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg"
                            alt="example menu"
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee 8-Pack
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Get the full lineup of our Basic Tees. Have a fresh shirt all
                            week, and an extra for laundry day.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">8 colors</p>
                            <p class="text-base font-medium text-gray-900">$256</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                  <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                      <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                          alt="Front of plain black t-shirt."
                          class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                  </div>
                  <div class="flex flex-1 flex-col space-y-2 p-4">
                      <h3 class="text-sm font-medium text-gray-900">
                          <a href="#">
                              <span aria-hidden="true" class="absolute inset-0"></span>
                              Basic Tee
                          </a>
                      </h3>
                      <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                          day.</p>
                      <div class="flex flex-1 flex-col justify-end">
                          <p class="text-sm italic text-gray-500">Black</p>
                          <p class="text-base font-medium text-gray-900">$32</p>
                      </div>
                  </div>
              </div>
              <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                        alt="Front of plain black t-shirt."
                        class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                </div>
                <div class="flex flex-1 flex-col space-y-2 p-4">
                    <h3 class="text-sm font-medium text-gray-900">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Basic Tee
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                        day.</p>
                    <div class="flex flex-1 flex-col justify-end">
                        <p class="text-sm italic text-gray-500">Black</p>
                        <p class="text-base font-medium text-gray-900">$32</p>
                    </div>
                </div>
            </div>
            <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
              <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                      alt="Front of plain black t-shirt."
                      class="h-full w-full object-cover object-center sm:h-full sm:w-full">
              </div>
              <div class="flex flex-1 flex-col space-y-2 p-4">
                  <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          Basic Tee
                      </a>
                  </h3>
                  <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every
                      day.</p>
                  <div class="flex flex-1 flex-col justify-end">
                      <p class="text-sm italic text-gray-500">Black</p>
                      <p class="text-base font-medium text-gray-900">$32</p>
                  </div>
              </div>
          </div>

    </div>
    
          </div>
@endsection
