@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Welcome to Promodise</h1>
    <p>This is the home page of Promodise, your go-to solution for business and digital marketing.</p>
    <a href="{{ url('/about') }}" class="btn">Learn More About Us</a>
</div>
@endsection
