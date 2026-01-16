<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PT Gerbang NTB Emas')</title>

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    {{-- Optional: future JS --}}
    @vite(['resources/css/products.css', 'resources/js/products.js'])
</head>
<body class="bg-white text-gray-800 antialiased">

    {{-- NAVBAR --}}
    @include('user.component.navbar')

    {{-- MAIN CONTENT --}}
    <main class="overflow-x-hidden">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('user.component.footer')

</body>
</html>
