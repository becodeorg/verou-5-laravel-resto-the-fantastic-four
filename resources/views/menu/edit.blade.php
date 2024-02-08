@extends('_layouts.layout')

@section('title')
    Edit the Menu
@endsection

@section('content')
    <h1 class="text-center my-10">Edit the menu page here</h1>

    <div>
        <form action="">
            <label for="type">Item Type:</label>
            <select name="type" id="type">
                <option value=""></option>
                <option value="appetizer">Appetizer</option>
                <option value="main_course">Main Course</option>
                <option value="dessert">Dessert</option>
                <option value="drinks">Drinks</option>
            </select>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price">
            <label for="image">Image URL:</label>
            <input type="text" name="image" id="image">

        </form>
    </div>
@endsection
