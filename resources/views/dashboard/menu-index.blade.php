@extends('_layouts.layout')
@section('title')
    Edit The menu
@endsection

@section('content')

@section('content')
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h1 class="text-4xl text-center font-bold tracking-tight text-black sm:mt-10 sm:text-6xl">EDIT THE MENU</h1>
        @foreach ($menuByType as $type => $items)
            <h2 class="text-3xl text-center">
                @if ($type == 'main_course')
                    Main Course
                @else
                    {{ ucfirst($type) }}
                @endif
            </h2>
            <div>
                @foreach ($items as $item)
                    <div class="border-solid border-black border-2 p-3 w-1/2 mx-auto">
                        <form action="">
                            <img src="{{ asset($item->image) }}" alt="" class="h-40">
                            <h3>{{ $item->name }}</h3>
                            <p> {{ $item->description }}</p>

                            <p>
                                @if ($item->gluten)
                                    #Gluten
                                @endif
                                @if ($item->lactose)
                                    #Lactose
                                @endif
                                @if ($item->nuts)
                                    #Nuts
                                @endif
                            </p>
                            <p>${{ $item->price }}</p>

                            <input type="hidden" name="name" value="{{ $item->name }}">
                            <input type="hidden" name="description" value="{{ $item->description }}">
                            <input type="hidden" name="price" value="{{ $item->price }}">
                            <input type="hidden" name= "image" value="{{ $item->image }}">
                            <input type="hidden" name="gluten" value=" {{ $item->gluten }}">
                            <input type="hidden" name="lactose" value="{{ $item->lactose }}">
                            <input type="hidden" name="nuts" value="{{ $item->nuts }}">
                            <button type="submit" class="p-1 bg-red-500 text-white rounded-md hover:bg-red-600">Replace
                                this
                                Item</button>
                    </div>
                    </form>
                    <br>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
