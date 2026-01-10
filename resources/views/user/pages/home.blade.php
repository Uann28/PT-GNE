@extends('user.layout.app')

@section('title', 'Home')

@section('content')

{{-- HERO + NAVBAR OVERLAY --}}
<section class="relative min-h-screen text-white">

    {{-- HERO BACKGROUND (sementara solid, nanti ganti image) --}}
    <div class="absolute inset-0 bg-gray-900"></div>
    <div class="absolute inset-0 bg-black/60"></div>


    {{-- HERO CONTENT --}}
    <div class="relative z-10 flex items-center justify-center min-h-[80vh] text-center px-6">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Selamat Datang di Website Resmi<br>
                PT. Gerbang NTB Emas
            </h1>

            <a href="{{ route('contact') }}"
               class="inline-block mt-8 bg-red-700 hover:bg-red-800 px-8 py-3 rounded-full font-semibold">
                Contact Us
            </a>

            <h2 class="text-4xl md:text-xl font-bold leading-tight">
                <br>Akses Informasi Terbaru dan Terlengkap Mengenai<br>
                PT Gerbang NTB Emas Sekarang
            </h2>
        </div>
    </div>

</section>

{{-- STATS --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        @php
            $stats = [
                ['2018', 'Established'],
                ['100+', 'Employees'],
                ['5+', 'Products'],
                ['5+', 'Cities Served'],
            ];
        @endphp

        @foreach($stats as [$value, $label])
        <div class="border p-6">
            <h3 class="text-3xl font-bold text-red-700">{{ $value }}</h3>
            <p class="mt-2 text-sm text-gray-600">{{ $label }}</p>
        </div>
        @endforeach
    </div>
</section>

{{-- ABOUT --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div class="grid grid-cols-2 gap-4">
            <div class="bg-gray-300 h-48"></div>
            <div class="bg-gray-400 h-48 mt-8"></div>
        </div>

        <div>
            <span class="text-red-700 text-sm font-semibold uppercase">About Us</span>

            <h2 class="text-3xl font-bold mt-4">
                Learn About our Company,<br>
                Infrastructure and Work
            </h2>

            <p class="mt-6 text-gray-600 leading-relaxed">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text.
            </p>

            <a href="{{ route('about') }}"
               class="inline-block mt-8 bg-red-700 text-white px-6 py-3 rounded-full text-sm">
                Read More About Us
            </a>
        </div>
    </div>
</section>

{{-- PRODUCTS SLIDER --}}
<section class="bg-red-700 py-20">
    <div class="max-w-7xl mx-auto px-6 text-white">

        <div class="text-center">
            <span class="uppercase text-sm tracking-wide">Produk Kami</span>
            <h2 class="text-3xl font-bold mt-2">
                Sektor Manufaktur & Konstruksi
            </h2>
        </div>

        {{-- SLIDER --}}
        <div
            id="product-slider"
            class="mt-12 flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory px-[10%] scrollbar-hide"
        >

            @php
                $products = [
                    [
                        'name' => 'Paving Block',
                        'desc' => 'Material beton pracetak untuk kebutuhan infrastruktur dan perumahan.',
                    ],
                    [
                        'name' => 'U-Ditch',
                        'desc' => 'Saluran beton berkualitas tinggi untuk drainase.',
                    ],
                    [
                        'name' => 'Box Culvert',
                        'desc' => 'Struktur beton pracetak untuk jembatan dan gorong-gorong.',
                    ],
                    [
                        'name' => 'Batu Split',
                        'desc' => 'Material agregat untuk proyek konstruksi.',
                    ],
                    [
                        'name' => 'Alat Berat',
                        'desc' => 'Dukungan alat konstruksi untuk berbagai skala proyek.',
                    ],
                ];
            @endphp

            @foreach($products as $product)
            <div
                class="min-w-[80%] md:min-w-[60%] bg-white text-gray-800 rounded-xl p-8 snap-center flex gap-6 items-center"
            >
                {{-- IMAGE (KIRI) --}}
                <div class="w-40 h-32 bg-gray-300 rounded-lg flex-shrink-0"></div>

                {{-- CONTENT (KANAN) --}}
                <div>
                    <h3 class="text-xl font-bold">
                        {{ $product['name'] }}
                    </h3>

                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                        {{ $product['desc'] }}
                    </p>

                    <a href="{{ route('products') }}"
                       class="inline-block mt-4 text-sm font-semibold text-red-700">
                        Lihat Detail →
                    </a>
                </div>
            </div>
            @endforeach

        </div>

        {{-- INDICATOR DOTS --}}
        <div class="flex justify-center mt-6 gap-2" id="slider-dots">
            @foreach($products as $index => $product)
                <span
                    class="w-2.5 h-2.5 rounded-full bg-white/40 transition-all duration-300"
                    data-index="{{ $index }}"
                ></span>
            @endforeach
        </div>

    </div>
</section>


{{-- APPROVED VENDORS --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold mb-8">Mitra</h2>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
            @foreach(range(1,5) as $vendor)
            <div class="border p-4 bg-gray-100 h-16"></div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section --}}
<section class="relative bg-gray-900 text-white py-24">

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        {{-- LEFT CONTENT --}}
        <div>
            <h2 class="text-3xl md:text-4xl font-bold leading-tight">
                We're proud to be a useful and valuable partner
                to our customers and communities
            </h2>

            <a href="{{ route('contact') }}"
               class="inline-block mt-8 bg-red-700 hover:bg-red-800 px-8 py-3 rounded-full font-semibold">
                Contact Us
            </a>
        </div>

        {{-- RIGHT IMAGES --}}
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-gray-300 h-56"></div>
            <div class="bg-gray-400 h-56 mt-10"></div>
        </div>

    </div>
</section>

{{-- CONTACT & LOCATION --}}
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12">

        {{-- CONTACT INFO --}}
        <div>
            <span class="text-red-700 text-sm font-semibold uppercase">
                Contact & Location
            </span>

            <h2 class="text-3xl font-bold mt-4">
                Hubungi Kami
            </h2>

            <p class="mt-6 text-gray-600 leading-relaxed">
                Untuk informasi lebih lanjut mengenai produk dan layanan
                PT. Gerbang NTB Emas, silakan hubungi kami melalui kontak berikut.
            </p>

            <ul class="mt-8 space-y-4 text-gray-700">
                <li class="flex items-start gap-3">
                    <span class="text-red-700">📍</span>
                    <span>
                        Jl. Selaparang No.60, Mayura, Kec. Cakranegara, Kota Mataram,<br> 
                        Nusa Tenggara Barat. 83239
                    </span>
                </li>

                <li class="flex items-center gap-3">
                    <span class="text-red-700">📞</span>
                    <span>(0370) 631646</span>
                </li>

                <li class="flex items-center gap-3">
                    <span class="text-red-700">✉</span>
                    <span>info@gne.co.id</span>
                </li>
            </ul>
        </div>

        {{-- LOCATION / MAP --}}
        <div class="w-full h-80 bg-gray-200 flex items-center justify-center">
            <span class="text-gray-500 text-sm">
                Google Maps / Location Embed
            </span>
        </div>

    </div>
</section>


@endsection
