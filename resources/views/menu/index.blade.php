@extends('_layouts.layout')
@section('title')
    home
@endsection

@section('content')

  @section('content')
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h1 class="text-4xl text-center font-bold tracking-tight text-blue-900 sm:mt-10 sm:text-6xl">Our Delicious Menu</h1>
      @foreach($menuByType as $type => $items)
          <h2 class="mt-12 text-4xl text-center font-bold tracking-tight text-blue-900">                
            @if ($type == 'main_course')
            Main Course
        @else
            {{ ucfirst($type) }}
        @endif</h2>
          <div class="mt-6 grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8">
              @foreach($items as $item)
              <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                  <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                      <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                  </div>
                  <div class="flex flex-1 flex-col space-y-2 p-4">
                      <h3 class="text-sm font-medium text-gray-900">{{ $item->name }}</h3>
                      <p class="text-sm text-gray-500">{{ $item->description }}</p>
                      <div class="flex flex-1 flex-col justify-end">
                          <p class="text-sm italic text-gray-500">
                              @if($item->gluten) #Gluten @endif
                              @if($item->lactose) #Lactose @endif
                              @if($item->nuts) #Nuts @endif
                          </p>
                          <p class="text-base font-medium text-gray-900">${{ $item->price }}</p>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      @endforeach
  </div>
  @endsection
