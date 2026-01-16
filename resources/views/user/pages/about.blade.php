@extends('user.layout.app')

@section('title', 'About Us')

@section('content')

{{-- HERO --}}
<section class="relative min-h-[85vh] md:min-h-[45vh] text-white flex items-center pt-32">

    {{-- BACKGROUND --}}
    <div class="absolute inset-0 bg-gray-900"></div>
    <div class="absolute inset-0 bg-black/60"></div>

    {{-- CONTENT --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            Tentang PT Gerbang NTB Emas
        </h1>
        <p class="mt-6 max-w-2xl text-gray-200 leading-relaxed">
            Perusahaan yang bergerak di sektor manufaktur dan konstruksi
            untuk mendukung pembangunan dan kebutuhan masyarakat.
        </p>
    </div>
</section>

{{-- COMPANY OVERVIEW --}}
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <div>
            <span class="text-red-700 text-sm font-semibold uppercase">
                Company Overview
            </span>

            <h2 class="text-3xl font-bold mt-4">
                Mengenal Lebih Dekat PT. Gerbang NTB Emas
            </h2>

            <p class="mt-6 text-gray-600 leading-relaxed">
                PT Gerbang NTB Emas merupakan perusahaan yang berfokus pada
                sektor manufaktur dan konstruksi, dengan komitmen untuk
                menyediakan produk dan layanan yang berkualitas serta
                berkelanjutan.
            </p>

            <p class="mt-4 text-gray-600 leading-relaxed">
                Kami melayani kebutuhan proyek skala besar hingga kebutuhan
                personal, dengan mengedepankan profesionalisme dan kepercayaan.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="bg-gray-300 h-48"></div>
            <div class="bg-gray-400 h-48 mt-8"></div>
        </div>

    </div>
</section>

{{-- COMPANY HISTORY (HORIZONTAL TIMELINE) --}}
<section class="bg-gray-50 py-28 overflow-x-hidden">
    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="mb-20">
            <span class="text-red-700 text-sm font-semibold uppercase tracking-wider">
                Our Journey
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">
                Sejarah Berdirinya Perusahaan
            </h2>
        </div>

        {{-- TIMELINE --}}
        <div class="relative">

            {{-- TRACK --}}
            <div class="absolute top-7 left-0 right-0 h-1 bg-red-200"></div>

            {{-- ITEMS --}}
            <div class="relative grid grid-cols-5 gap-8">

                {{-- ITEM --}}
                <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 rounded-full bg-red-700 text-white flex items-center justify-center font-bold">
                    1957
                </div>
                <div class="mt-6 bg-white p-5 rounded-xl shadow-sm">
                    <p class="text-sm text-gray-600">
                    Departemen Perindustrian membentuk Induk Pande Besi Lombok di Mataram.
                    </p>
                </div>
                </div>

                {{-- ITEM --}}
                <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 rounded-full bg-red-700 text-white flex items-center justify-center font-bold">
                    1961
                </div>
                <div class="mt-6 bg-white p-5 rounded-xl shadow-sm">
                    <p class="text-sm text-gray-600">
                    Berubah nama menjadi PNPR Wisaya Yasa.
                    </p>
                </div>
                </div>

                {{-- ITEM --}}
                <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 rounded-full bg-red-700 text-white flex items-center justify-center font-bold">
                    1969
                </div>
                <div class="mt-6 bg-white p-5 rounded-xl shadow-sm">
                    <p class="text-sm text-gray-600">
                    Menjadi Perusahaan Daerah Tingkat 1 Unit Logam.
                    </p>
                </div>
                </div>

                {{-- ITEM --}}
                <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 rounded-full bg-red-700 text-white flex items-center justify-center font-bold">
                    1980
                </div>
                <div class="mt-6 bg-white p-5 rounded-xl shadow-sm">
                    <p class="text-sm text-gray-600">
                    Berstatus otonomi dengan nama PD Wisaya Yasa.
                    </p>
                </div>
                </div>

                {{-- ITEM --}}
                <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 rounded-full bg-red-700 text-white flex items-center justify-center font-bold">
                    2006
                </div>
                <div class="mt-6 bg-white p-5 rounded-xl shadow-sm">
                    <p class="text-sm text-gray-600">
                    Berubah menjadi <strong>PT Gerbang NTB Emas</strong>.
                    </p>
                </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- VISION & MISSION --}}
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16">

        {{-- VISION --}}
        <div>
            <h3 class="text-2xl font-bold text-red-700">
                Visi
            </h3>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Menjadi Perseroan Terbatas (PT) kompetitif dan Gemilang 
                untuk mendorong industrialisasi pembangunan daerah.
            </p>
        </div>

        {{-- MISSION --}}
        <div>
            <h3 class="text-2xl font-bold text-red-700">
                Misi
            </h3>
            <ul class="mt-4 space-y-3 text-gray-600 list-disc list-inside">
                <li>Menghadirkan manajemen tata kerja perusahaan yang kompeten, sistematis, dan profesional</li>
                <li>Membangun perusahaan yang sehat, bersih, efektif, dan membangun kepercayaan publik melalui reformasi sistem kerja transparan</li>
                <li>Membangun bisnis berbasis potensi daerah dan peluang pasar yang secara nyata berdampak pada perluasan lapangan usaha dan penciptaan lapangan kerja</li>
                <li>Mengembangkan perusahaan yang mempunyai daya saing kompetitif dan menghasilkan profit yang tinggi bagi perusahaan dan pemegang saham</li>
                <li>Meningkatkan kualitas hidup dengan membangun program rumah terjangkau dan rumah bersubsidi (program rumah gemilang)</li>
                <li>Membangun jaringan distribusi dan pemasaran di setiap kabupaten dengan cabang-cabang penjualan hingga ke desa sebagai bentuk penguasaan market bagi bisnis GNE dimasa depan dalam bentuk Ownership Jaringan  Bisnis Ritel dan Grosir Provinsi NTB</li>
            </ul>
        </div>

    </div>
</section>

{{-- BOARD OF DIRECTORS --}}
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center">
            <span class="text-red-700 text-sm font-semibold uppercase">
                Leadership
            </span>
            <h2 class="text-3xl font-bold mt-3">
                Jajaran Direksi
            </h2>
        </div>

        <div class="grid grid-cols-3 md:grid-cols-1 gap-5 mt-16">

            @foreach(range(1,3) as $item)
            <div class="text-center">
                <div class="bg-gray-300 h-48 rounded-lg"></div>
                <h3 class="mt-4 font-bold">
                    Nama Direksi
                </h3>
                <p class="text-sm text-gray-600">
                    Jabatan
                </p>
            </div>
            @endforeach

        </div>

    </div>
</section>

{{-- ORGANIZATION STRUCTURE --}}
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="text-red-700 text-sm font-semibold uppercase">
            Organization
        </span>
        <h2 class="text-3xl font-bold mt-3">
            Struktur Organisasi
        </h2>

        <div class="mt-12 bg-gray-200 h-96 flex items-center justify-center">
            <span class="text-gray-500">
                Diagram Struktur Organisasi
            </span>
        </div>

    </div>
</section>

{{-- CLOSING CTA --}}
<section class="bg-gray-900 text-white py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold">
            Mari Berkembang Bersama PT Gerbang NTB Emas
        </h2>
        <a href="{{ route('contact') }}"
           class="inline-block mt-8 bg-red-700 px-8 py-3 rounded-full font-semibold">
            Hubungi Kami
        </a>
    </div>
</section>

@endsection
