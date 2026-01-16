@extends('user.layout.app')

@section('title', 'Products')

@section('content')

<section class="relative min-h-[45vh] text-white flex items-center pt-24">
    <div class="absolute inset-0 bg-gray-900"></div>
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <span class="text-red-600 uppercase text-sm font-semibold">
            Produk Kami
        </span>
        <h1 class="text-4xl md:text-5xl font-bold mt-2">
            Solusi Manufaktur & Konstruksi
        </h1>
        <p class="mt-4 max-w-2xl text-gray-200">
            Produk beton pracetak dan kebutuhan konstruksi berkualitas
            untuk proyek skala besar hingga personal.
        </p>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 flex gap-4 justify-center">

        <button
            class="sector-btn active"
            data-sector="manufaktur"
            onclick="switchSector('manufaktur')"
        >
            Sektor Manufaktur
        </button>

        <button
            class="sector-btn"
            data-sector="konstruksi"
            onclick="switchSector('konstruksi')"
        >
            Sektor Konstruksi
        </button>

    </div>
</section>

<section id="manufaktur-product-list" class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-5 gap-8">

        @php
        $products = [
            [
                'key' => 'paving',
                'name' => 'Paving Block',
                'image' => '/images/produk/paving.jpg'
            ],
            [
                'key' => 'kanstein',
                'name' => 'Kanstein',
                'image' => '/images/produk/kanstein.jpg'
            ],
            [
                'key' => 'buis',
                'name' => 'Buis Beton',
                'image' => '/images/produk/buis.jpg'
            ],
            [
                'key' => 'uditch',
                'name' => 'U-Ditch',
                'image' => '/images/produk/uditch.jpg'
            ],
            [
                'key' => 'boxculvert',
                'name' => 'Box Culvert',
                'image' => '/images/produk/boxculvert.jpg'
            ],
        ];
        @endphp


        @foreach($products as $p)
        <div
            class="cursor-pointer group"
            onclick="selectProduct('{{ $p['key'] }}')"
        >
            <div class="h-40 rounded-xl mb-4 overflow-hidden bg-gray-0
                        group-hover:ring-2 group-hover:ring-red-600">
                <img
                    src="{{ $p['image'] }}"
                    alt="{{ $p['name'] }}"
                    class="w-full h-full object-contain p-4 transition-transform
                        group-hover:scale-105"
                >
            </div>

            <h4 class="font-bold text-center">
                {{ $p['name'] }}
            </h4>
        </div>
        @endforeach


    </div>
</section>

{{-- SEKTOR MANUFAKTUR --}}
<section id="sector-manufaktur" class="bg-white py-24">
    <div class="mx-auto max-w-7xl px-6">

        <div class="grid gap-16 lg:grid-cols-[1.8fr_2.0fr_1.8fr] items-start">

        {{-- LEFT --}}
        <div class="space-y-10">

        {{-- Title --}}
        <div>
            <h2 id="product-title" class="text-4xl font-extrabold text-gray-900"></h2>
            <p id="product-desc" class="mt-4 max-w-md text-gray-600"></p>
        </div>

        {{-- Divider --}}
        <div class="h-px w-24 bg-red-600"></div>

        {{-- Cocok Untuk --}}
        <ul id="product-usecases" class="mt-5 space-y-3 text-sm"></ul>

        {{-- CTA (lebih soft, nyambung) --}}
        <div class="rounded-xl border border-gray-200 p-6">
            <p class="text-sm text-gray-700">
            Butuh bantuan menentukan mutu beton, jumlah kebutuhan,
            atau estimasi harga proyek?
            </p>

            <a href="{{ route('contact') }}"
            class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-red-600 hover:text-red-700">
            Konsultasi Sekarang
            <span class="text-lg">→</span>
            </a>
        </div>

        </div>


        {{-- CENTER --}}
        <div class="text-center">
            <img id="mainImage"
                class="mx-auto max-h-[340px] object-contain"
                alt="Product Image">

            <div id="product-thumbs"
                class="mt-8 flex justify-center gap-2"></div>
        </div>  

        {{-- RIGHT --}}
        <div class="space-y-6 min-w-0">

        {{-- RIGHT --}}
        <div id="product-accordions" class="space-y-6">

            <div class="border-b pb-6" data-accordion="about">
                <button onclick="toggleAccordion(0)"
                class="flex w-full justify-between text-left text-sm font-semibold text-gray-900">
                Tentang Produk
                <span id="icon-0">−</span>
                </button>

                <div id="content-0" class="mt-4 text-sm text-gray-700 hidden">
                    <p id="about-desc" class="leading-relaxed"></p>

                    <ul id="about-list"
                        class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-3">
                    </ul>
                </div>
            </div>

            <div class="border-b pb-6" data-accordion="prices">
                <button onclick="toggleAccordion(1)"
                class="flex w-full justify-between text-left text-sm font-semibold text-gray-900">
                Daftar Harga
                <span id="icon-1">+</span>
                </button>

                <div id="content-1" class="mt-6 hidden">
                    <div>
                        <table class="w-full border-collapse border text-sm">
                            <thead class="bg-gray-900 text-white">
                                <tr id="price-head"></tr>
                            </thead>
                            <tbody id="price-table"></tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="border-b pb-6" data-accordion="models">
                <button onclick="toggleAccordion(2)"
                class="flex w-full justify-between text-left text-sm font-semibold text-gray-900">
                Model
                <span id="icon-2">+</span>
                </button>

                <div id="content-2" class="mt-6 hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full border text-sm">
                        <thead class="bg-gray-900 text-white">
                            <tr>
                            <th class="border px-3 py-2">Model</th>
                            <th class="border px-3 py-2">Ukuran</th>
                            <th class="border px-3 py-2">Kebutuhan</th>
                            </tr>
                        </thead>
                        <tbody id="model-table"></tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="border-b pb-6" data-accordion="colors">
                <button onclick="toggleAccordion(3)"
                class="flex w-full justify-between text-left text-sm font-semibold text-gray-900">
                Pewarnaan
                <span id="icon-3">+</span>
                </button>

                <div id="content-3" class="mt-6 hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full border text-sm">
                        <thead class="bg-gray-900 text-white">
                            <tr>
                            <th class="border px-3 py-2">Warna</th>
                            <th class="border px-3 py-2">Harga</th>
                            <th class="border px-3 py-2">Satuan</th>
                            </tr>
                        </thead>
                        <tbody id="color-table"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>


{{-- SEKTOR KONSTRUKSI --}}
<section id="sector-konstruksi" class="bg-white py-24 sector-section hidden">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <div>
            <div>
                <img
                    id="konstruksiImage"
                    src="/images/konstruksi/excavator.jpg"
                    class="h-80 w-full object-contain rounded-xl bg-gray-300"
                    alt="Alat Berat"
                >
            </div>
        </div>

        <div>
            <span class="text-red-700 text-sm font-semibold uppercase">
                Sektor Konstruksi
            </span>

            <h2 class="text-3xl font-bold mt-3">
                Alat Berat
            </h2>

            <p class="mt-4 text-gray-600 leading-relaxed">
                Penyediaan alat berat dan material konstruksi
                untuk mendukung proyek infrastruktur.
            </p>

            <div class="grid grid-cols-2 gap-4 mt-8">
                <button class="variant" onclick="selectAlat('excavator')">Excavator</button>
                <button class="variant" onclick="selectAlat('bulldozer')">Bulldozer</button>
                <button class="variant" onclick="selectAlat('batu_split')">Batu Split</button>
            </div>

        </div>

    </div>
</section>



{{-- INFORMASI PENGIRIMAN (GLOBAL) --}}
<section class="bg-gray-50 py-20">
  <div class="mx-auto max-w-7xl px-6">

    <div class="mb-10">
      <h2 class="text-2xl font-bold text-gray-900">
        Informasi Pengiriman & Pembayaran
      </h2>
      <p class="mt-2 max-w-2xl text-sm text-gray-600">
        Berlaku untuk seluruh produk beton pracetak yang kami sediakan.
      </p>
    </div>

    <div class="grid gap-8 md:grid-cols-2">

      {{-- Pembayaran --}}
      <div class="rounded-2xl border bg-white p-6">
        <h4 class="mb-3 text-sm font-bold uppercase tracking-wide text-gray-900">
          Metode Pembayaran
        </h4>
        <p class="text-sm text-gray-700 leading-relaxed">
          Pembayaran dapat dilakukan secara <strong>tunai</strong> atau
          <strong>transfer bank</strong>.  
          Pengiriman dilakukan setelah pembayaran diterima.
        </p>
      </div>

      {{-- Biaya Kirim --}}
      <div class="rounded-2xl border bg-white p-6">
        <h4 class="mb-4 text-sm font-bold uppercase tracking-wide text-gray-900">
          Biaya Kirim (Kabupaten / Kota)
        </h4>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border text-sm">
            <thead class="bg-gray-900 text-white">
                <tr>
                <th class="border px-3 py-2">Wilayah</th>
                <th class="border px-3 py-2">Biaya</th>
                <th class="border px-3 py-2">Satuan</th>
                </tr>
            </thead>
            <tbody>
              <tr><td class="border px-3 py-2">Mataram</td><td class="border px-3 py-2 text-center">0</td><td class="border px-3 py-2 text-center">m²</td></tr>
              <tr class="bg-gray-50"><td class="border px-3 py-2">Lombok Barat</td><td class="border px-3 py-2 text-center">10.000 – 20.000</td><td class="border px-3 py-2 text-center">m²</td></tr>
              <tr><td class="border px-3 py-2">Lombok Tengah</td><td class="border px-3 py-2 text-center">10.000 – 20.000</td><td class="border px-3 py-2 text-center">m²</td></tr>
              <tr class="bg-gray-50"><td class="border px-3 py-2">Lombok Timur</td><td class="border px-3 py-2 text-center">15.000 – 35.000</td><td class="border px-3 py-2 text-center">m²</td></tr>
              <tr><td class="border px-3 py-2">Lombok Utara</td><td class="border px-3 py-2 text-center">15.000 – 35.000</td><td class="border px-3 py-2 text-center">m²</td></tr>
              <tr class="bg-gray-50"><td class="border px-3 py-2">Sumbawa Barat</td><td class="border px-3 py-2 text-center">60.000</td><td class="border px-3 py-2 text-center">m²</td></tr>
              <tr><td class="border px-3 py-2">Sumbawa Besar</td><td class="border px-3 py-2 text-center">70.000</td><td class="border px-3 py-2 text-center">m²</td></tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- CTA --}}
<section class="bg-red-700 py-24 text-white text-center">
    <h2 class="text-3xl font-bold">
        Butuh Solusi Produk untuk Proyek Anda?
    </h2>

    <a href="{{ route('contact') }}"
       class="inline-block mt-8 bg-white text-red-700 px-8 py-3 rounded-full font-semibold">
        Hubungi Kami
    </a>
</section>

@endsection
