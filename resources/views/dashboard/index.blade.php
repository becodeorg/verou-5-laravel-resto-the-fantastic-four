@extends('_layouts.layout')

@section('title')
    @auth
        Hello, {{ auth()->user()->name }}!
    @endauth
@endsection

@section('content')
    <main>
        @auth
            <h1 class="text-center">Welcome back, {{ auth()->user()->name }}</h1>
        @endauth
    </main>
@endsection
