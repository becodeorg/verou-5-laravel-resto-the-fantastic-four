@extends('_layouts.layout')

@section('title')
    @auth
        Hello, {{ auth()->user()->name }}!
    @endauth
@endsection

@section('content')
    <main class="container mx-auto w-4/5">
        @auth
            <h1 class="text-center my-10 text-4xl">Welcome back, <span
                    class="font-bold text-blue-600">{{ auth()->user()->name }}</span>!</h1>
        @endauth
        <div class="container mx-auto flex flex-col w-72 p-10 box-border bg-slate-100 rounded-lg shadow-lg">
            <a class="inline-block rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500 w-12/12 text-center mx-auto mb-10 shadow-md"
                href="">
                See Reservations
            </a>
            <a class="inline-block rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500 w-12/12 text-center mx-auto shadow-md"
                href="">
                Change Menu Items
            </a>
        </div>
    </main>
@endsection
