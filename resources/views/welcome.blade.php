@extends('_layouts.layout')

@section('title')
    Home-Page
@endsection

@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center ">
        <div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto mt-50">
            <h2 class="text-2xl font-semibold mb-4 text-center">Welcome</h2>

            <form action="/home" method="GET">
                <div class="mt-6">
                    <button type="submit"
                        class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">Guest</button>
            </form>

            <form action="{{ route('loginGet') }}" method="GET">
                <div class="mt-6">
                    <button type="submit"
                        class=" w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Employee</button>
            </form>
        </div>
    </div>
@endsection
