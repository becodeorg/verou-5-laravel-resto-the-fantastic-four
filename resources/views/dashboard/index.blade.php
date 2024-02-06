@extends('_layouts.layout')

@section('title')
    @auth
        Hello, {{ auth()->user()->name }}!
    @endauth
@endsection

@section('content')

    <body class="bg-gray-300">
        <main class="container mx-auto w-4/5 ">
            @auth
                <h1 class="text-center py-10 text-4xl">Welcome back, <span
                        class="font-bold text-blue-700">{{ auth()->user()->name }}</span>!</h1>
            @endauth
            <div class="container mx-auto flex flex-col w-72 p-10 box-border bg-gray-100 rounded-lg shadow-lg">
                <a class="inline-block rounded border border-blue-500 bg-blue-500 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-blue-500 focus:outline-none focus:ring active:text-blue-500 w-12/12 text-center mx-auto mb-10 shadow-md"
                    href="{{ route('reservations') }}">
                    See Reservations
                </a>
                <a class="inline-block rounded border border-blue-500 bg-blue-500 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-blue-500 focus:outline-none focus:ring active:text-blue-500 w-12/12 text-center mx-auto shadow-md"
                    href=" {{ route('editMenu') }}">
                    Change Menu Items
                </a>
            </div>
        </main>
    </body>
@endsection
