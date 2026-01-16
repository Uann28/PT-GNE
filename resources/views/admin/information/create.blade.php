<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            Tambah Informasi
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        <form action="{{ route('information.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block font-medium">Judul</label>
                <input name="title" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label class="block font-medium">Isi Berita</label>
                <textarea name="content" class="w-full h-32 border p-2 rounded" required></textarea>
            </div>

            <div>
                <label class="block font-medium">Status</label>
                <select name="status" class="border p-2 rounded">
                    <option value="draft">Draft</option>
                    <option value="publish">Publish</option>
                </select>
            </div>

            <div>
                <label class="block font-medium">Gambar</label>
                <input type="file" name="image" class="border p-2 rounded">
            </div>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Simpan
            </button>
        </form>
    </div>
</x-app-layout>
