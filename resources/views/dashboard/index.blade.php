@extends('_layouts.layout')

@section('title')
    @auth
        Hello, {{ auth()->user()->name }}!
    @endauth
@endsection

@section('content')
    @auth
        <h1>Welcome back, {{ auth()->user()->name }}</h1>
    @endauth
@endsection
