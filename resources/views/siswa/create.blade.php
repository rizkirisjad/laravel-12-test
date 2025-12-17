<x-layout>
    <h1 class="text-xl mb-6 font-bold">Create siswa</h1>
    <form action="{{ route('siswa.store') }}" method="POST" class="space-y-4 max-w-4xl">
        @csrf
        {{-- Nama  --}}
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" required
                class="mt-2 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('nama') }}">

            @error('nama')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Tangggal Lahir --}}
        <div>
            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required
                class="mt-2 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('tanggal_lahir') }}">

            @error('tanggal_lahir')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Jurusan --}}
        <div>
            <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" required
                class="mt-2 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('jurusan') }}">

            @error('jurusan')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Usia --}}
        <div>
            <label for="usia" class="block text-sm font-medium text-gray-700">Usia</label>
            <input type="number" name="usia" id="usia" required
                class="mt-2 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('usia') }}">

            @error('usia')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Mentor Dropdown --}}
        <div>
            <label for="mentor_id" class="block text-sm font-medium text-gray-700">Mentor</label>
            <select name="mentor_id" id="mentor_id" required
                class="mt-2 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('mentor_id') }}">
                <option value="">-- Pilih Mentor --</option>
                @foreach ($mentors as $mentor)
                    <option value="{{ $mentor->id }}">{{ $mentor->nama }}</option>
                @endforeach
            </select>

            @error('mentor_id')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"
            class="rounded-md mt-4 bg-teal-600 hover:bg-teal-700 px-5 py-2.5 text-sm font-medium text-white shadow-sm w-full transition duration-300">Simpan
            Data</button>

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors as $error)
                        <li class="text-red-600 text-sm">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </form>

    <x-slot:footer>
        <strong>Create Siswa</strong>
    </x-slot:footer>
</x-layout>
