<header class="absolute top-0 left-0 w-full z-50 text-white">

    {{-- TOP INFO BAR (TRANSPARENT) --}}
    <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center text-sm">
        <span class="font-bold text-xl">PT. GNE</span>

        <div class="hidden md:flex gap-6 text-s">
            <span>📞 +62 812 3456 7890</span>
            <span>✉ info@gerbangntbemas.co.id</span>
            <span>📍 NTB, Indonesia</span>
        </div>
    </div>

    {{-- MAIN NAV STRIP --}}
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center bg-red-700 rounded-full px-2 py-1">

            {{-- MENU --}}
            <nav class="flex text-sm font-semibold">
                <a href="{{ route('home') }}"
                   class="px-5 py-2 rounded-full bg-black">
                    Home
                </a>
                <a href="{{ route('about') }}"
                   class="px-5 py-2 rounded-full hover:bg-red-800">
                    About Us
                </a>
                <a href="{{ route('products') }}"
                   class="px-5 py-2 rounded-full hover:bg-red-800">
                    Products
                </a>
                <a href="{{ route('contact') }}"
                   class="px-5 py-2 rounded-full hover:bg-red-800">
                    Contact Us
                </a>
            </nav>

            {{-- VENDOR BUTTON --}}
            <div class="ml-auto">
                <a href="#"
                   class="bg-black text-white px-6 py-2 rounded-full text-sm font-semibold">
                    Become a Vendor
                </a>
            </div>

        </div>
    </div>

</header>
