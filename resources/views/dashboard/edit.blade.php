@extends('_layouts.layout')

@section('title')
    Edit the Menu
@endsection

@section('content')
    <h1 class="text-center my-10">Edit the menu page here</h1>
    <a href="{{ route('editMenu') }}" class="p-1 bg-gray-500 text-white rounded-md hover:bg-gray-600 mb-5 ml-10">GO BACK</a>
    <div class="ml-10">
        <form action="{{ route('update-menu') }}" method="POST">
            @csrf
            @method('post')
            <p class="my-5 text-xl">{{ ucfirst($item->type) }} </p>
            </select>
            <label class="block" for="name">Name:</label>
            <input class="border block mb-5" type="text" name="name" id="name" value="{{ $item->name }}">
            <label class="block" for="description">Description:</label>
            <textarea class="border" name="description" id="description" cols="30" rows="5">{{ $item->description }}</textarea>
            <label class="block" for="price">Price:</label>
            <input class="border block mb-5" type="number" name="price" id="price" value="{{ $item->price }}">
            <label class="block" for="image">Image URL:</label>
            <input class=" border block mb-5" type="text" name="image" id="image" value="{{ $item->image }}">
            <div class="inline-block w-auto mr-3">
                <label class="block" for="gluten">Gluten?</label>
                <select class="block" name="gluten" id="gluten">
                    <option value=""></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="inline-block w-auto mr-3">
                <label class="block" for="lactose">Lactose?</label>
                <select class="block" name="lactose" id="lactose">
                    <option value=""></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="inline-block w-auto mr-3">
                <label class="block" for="nuts">Nuts?</label>
                <select class="block mb-5" name="nuts" id="nuts">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <input type="hidden" name="id" value="{{ $item->id }}">
            <button class="p-1 bg-red-500 text-white rounded-md hover:bg-red-600 block">Edit</button>
        </form>
    </div>
@endsection
