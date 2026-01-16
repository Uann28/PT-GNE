<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Info Box --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Total Informasi</h3>
                    <p class="text-3xl font-bold mt-2">12</p>
                </div>

                <div class="bg-green-600 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Draft Menunggu</h3>
                    <p class="text-3xl font-bold mt-2">3</p>
                </div>

                <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Admin Aktif</h3>
                    <p class="text-3xl font-bold mt-2">1</p>
                </div>

            </div>

            {{-- Quick Actions --}}
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Aksi Cepat</h3>
                <div class="flex gap-4">
                    <a href="{{ route('information.create') }}"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Tambah Informasi
                    </a>

                    <a href="{{ route('information.index') }}"
                        class="px-4 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-800">
                        Kelola Informasi
                    </a>
                </div>
            </div>

            {{-- Welcome --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-700">
                    Selamat datang, <strong>{{ Auth::user()->name }}</strong>!  
                    Anda berada di panel admin.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
