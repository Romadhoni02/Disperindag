@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <h1>Contact Us</h1>
    <p>If you have any questions, feel free to reach out to us.</p>
    <form action="#" method="post">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="btn">Send Message</button>
    </form>
</div>
@endsection
