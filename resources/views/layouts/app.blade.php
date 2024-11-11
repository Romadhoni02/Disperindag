<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Promodise')</title>
    <!-- Link ke file CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Bagian Navbar -->
    <header>
        <nav class="navbar">
            <a href="{{ url('/') }}">
                <!-- Gambar Logo -->
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
            <!-- Tautan lain untuk navigasi -->
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <!-- Konten Utama Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- Bagian Footer -->
    <footer>
        <p>&copy; 2024 Promodise. All rights reserved.</p>
    </footer>

    <!-- Link ke file JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
