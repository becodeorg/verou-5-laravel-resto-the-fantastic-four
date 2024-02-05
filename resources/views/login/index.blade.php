@extends('_layouts.layout')

@section('title')
    Login
@endsection

@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center ">
        <div class="bg-white p-8 rounded shadow-md max-w-md w-full mx-auto mt-50">
            <h2 class="text-2xl font-semibold mb-4">Employees log-in</h2>

            <form action="{{ route('loginPost') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mt-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="w-full p-3 bg-blue-500 text-white rounded-md hover:bg-blue-600">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
