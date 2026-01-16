<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            Kelola Informasi
        </h2>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-300 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- TOMBOL TAMBAH --}}
        <div class="mb-4">
            <a href="{{ route('information.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + Tambah Informasi
            </a>
        </div>

        {{-- TABLE --}}
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-200 text-gray-600">
                    <tr>
                        <th class="px-4 pr-2">Gambar</th>
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Tanggal Publish</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($information as $item)
                    <tr class="border-b">
                        <td class="px-4 py-2">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" 
                                    class="w-64 h-42 object-cover rounded">
                            @else
                                <span class="text-gray-500">-</span>
                            @endif
                        </td>
                        <td class="px-4 py-2">{{ $item->title }}</td>
                        <td class="px-4 py-2 capitalize">
                            <span class="px-2 py-1 text-sm rounded 
                                {{ $item->status == 'publish' ? 'bg-green-200 text-green-700' : 'bg-yellow-200 text-yellow-700' }}">
                                {{ $item->status }}
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            {{ $item->published_at ? $item->published_at->format('d M Y') : '-' }}
                        </td>
                        <td class="px-4 py-2 flex gap-2">
                            
                            {{-- Edit --}}
                            <a href="{{ route('information.edit', $item->id) }}"
                                class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                Edit
                            </a>

                            {{-- Hapus --}}
                            <form action="{{ route('information.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-4 text-center text-gray-500">
                            Belum ada informasi yang ditambahkan.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        {{-- PAGINATION --}}
        <div class="mt-4">
            {{ $information->links() }}
        </div>

    </div>
</x-app-layout>
