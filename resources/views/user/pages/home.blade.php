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
                <br>Menyediakan Produk Manufaktur dan Konstruksi<br>
                untuk Proyek Infrastruktur dan Kebutuhan Masyarakat
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

{{-- WHY CHOOSE US --}}
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-red-700 text-sm font-semibold uppercase">
                Why Choose Us
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">
                Alasan Memilih PT Gerbang NTB Emas
            </h2>
            <p class="mt-4 text-gray-600">
                Kami hadir sebagai mitra terpercaya dalam penyediaan produk
                manufaktur dan konstruksi untuk berbagai kebutuhan.
            </p>
        </div>

        {{-- CONTENT --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">

            {{-- ITEM 1 --}}
            <div class="bg-white rounded-xl p-8 text-center shadow-sm hover:shadow-md transition">
                <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-full bg-red-700 text-white text-2xl">
                    🏗️
                </div>
                <h3 class="mt-6 font-bold text-lg">
                    Produk Berkualitas
                </h3>
                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Menggunakan material dan proses produksi yang terstandar
                    untuk memastikan kualitas dan ketahanan produk.
                </p>
            </div>

            {{-- ITEM 2 --}}
            <div class="bg-white rounded-xl p-8 text-center shadow-sm hover:shadow-md transition">
                <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-full bg-red-700 text-white text-2xl">
                    🤝
                </div>
                <h3 class="mt-6 font-bold text-lg">
                    Mitra Terpercaya
                </h3>
                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Dipercaya oleh berbagai mitra dan proyek di sektor
                    konstruksi dan manufaktur.
                </p>
            </div>

            {{-- ITEM 3 --}}
            <div class="bg-white rounded-xl p-8 text-center shadow-sm hover:shadow-md transition">
                <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-full bg-red-700 text-white text-2xl">
                    🚚
                </div>
                <h3 class="mt-6 font-bold text-lg">
                    Distribusi Fleksibel
                </h3>
                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Melayani kebutuhan proyek skala besar maupun pembelian
                    personal dengan pengiriman yang terencana.
                </p>
            </div>

            {{-- ITEM 4 --}}
            <div class="bg-white rounded-xl p-8 text-center shadow-sm hover:shadow-md transition">
                <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-full bg-red-700 text-white text-2xl">
                    🧑‍💼
                </div>
                <h3 class="mt-6 font-bold text-lg">
                    Tim Profesional
                </h3>
                <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                    Didukung oleh tim berpengalaman yang siap memberikan
                    solusi dan layanan terbaik.
                </p>
            </div>

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
            class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory py-6 scrollbar-hide"
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
                        'name' => 'Alat Berat',
                        'desc' => 'Dukungan alat konstruksi untuk berbagai skala proyek.',
                    ],
                ];
            @endphp

            @foreach($products as $product)
            <div
                class="min-w-[280px] md:min-w-[360px] lg:min-w-[420px] bg-white text-gray-800 rounded-xl p-8 snap-center flex gap-6 items-center"
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
        <div class="flex justify-center items-center gap-6 mt-6">

            {{-- LEFT ARROW --}}
            <button
                id="prevBtn"
                onclick="slideProducts(-1)"
                class="w-9 h-9 rounded-full bg-white text-red-700 shadow
                    flex items-center justify-center hover:bg-gray-100"
            >
                ‹
            </button>

            {{-- DOTS --}}
            <div class="flex gap-2" id="slider-dots">
                @foreach($products as $index => $product)
                    <button
                        class="w-2.5 h-2.5 rounded-full bg-white/40 transition-all duration-300"
                        onclick="goToSlide({{ $index }})"
                    ></button>
                @endforeach
            </div>

            {{-- RIGHT ARROW --}}
            <button
                id="nextBtn"
                onclick="slideProducts(1)"
                class="w-9 h-9 rounded-full bg-white text-red-700 shadow
                    flex items-center justify-center hover:bg-gray-100"
            >
                ›
            </button>

        </div>
    </div>
</section>


{{-- APPROVED VENDORS --}}
<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold mb-8">Dipercaya oleh Berbagai Mitra & Proyek</h2>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
            @foreach(range(1,5) as $vendor)
            <div class="border p-4 bg-gray-100 h-16"></div>
            @endforeach
        </div>
    </div>
</section>

{{-- NEWS / BERITA --}}
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center max-w-2xl mx-auto">
            <span class="text-red-700 text-sm font-semibold uppercase">
                Berita & Informasi
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">
                Kabar Terbaru dari Kami
            </h2>
            <p class="mt-4 text-gray-600">
                Informasi terkini seputar kegiatan, proyek, dan perkembangan
                PT Gerbang NTB Emas.
            </p>
        </div>

        {{-- LIST BERITA --}}
        <div class="grid gap-8 mt-16 md:grid-cols-2 lg:grid-cols-3">

            @php
                // sementara dummy, nanti ganti dari backend
                $news = [
                    [
                        'title' => 'Produksi Paving Block Meningkat',
                        'excerpt' => 'Peningkatan kapasitas produksi untuk memenuhi kebutuhan proyek infrastruktur daerah.',
                        'image' => null,
                        'slug' => '#',
                        'date' => '2024-06-01'
                    ],
                    [
                        'title' => 'Distribusi Produk ke Lombok Timur',
                        'excerpt' => 'Pengiriman produk beton pracetak untuk mendukung pembangunan wilayah Lombok Timur.',
                        'image' => null,
                        'slug' => '#',
                        'date' => '2024-05-20'
                    ],
                    [
                        'title' => 'Komitmen Mutu & Standar Produksi',
                        'excerpt' => 'PT Gerbang NTB Emas terus menjaga kualitas melalui standar produksi berkelanjutan.',
                        'image' => null,
                        'slug' => '#',
                        'date' => '2024-05-10'
                    ],
                ];
            @endphp

            @foreach($news as $item)
            <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">

                {{-- IMAGE --}}
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    @if($item['image'])
                        <img
                            src="{{ asset('storage/'.$item['image']) }}"
                            alt="{{ $item['title'] }}"
                            class="w-full h-full object-cover">
                    @else
                        <span class="text-gray-400 text-sm">
                            Image Berita
                        </span>
                    @endif
                </div>

                {{-- CONTENT --}}
                <div class="p-6">
                    <span class="text-xs text-gray-500">
                        {{ \Carbon\Carbon::parse($item['date'])->format('d M Y') }}
                    </span>

                    <h3 class="mt-2 font-bold text-lg leading-snug">
                        {{ $item['title'] }}
                    </h3>

                    <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                        {{ $item['excerpt'] }}
                    </p>

                    <a href="{{ $item['slug'] }}"
                       class="inline-block mt-4 text-sm font-semibold text-red-700">
                        Baca Selengkapnya →
                    </a>
                </div>

            </article>
            @endforeach

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