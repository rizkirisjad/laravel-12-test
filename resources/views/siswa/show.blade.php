<x-layout>
    <div class="flow-root">
        <dl class="-my-3 divide-y divide-gray-200 text-sm *:even:bg-gray-50">
            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">ID</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $siswa->id }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Nama</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $siswa->nama }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Tanggal Lahir</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $siswa->tanggal_lahir }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Jurusan</dt>

                <dd class="text-gray-700 sm:col-span-2">{{ $siswa->jurusan }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Usia</dt>

                <dd class="text-gray-700 sm:col-span-2">
                    {{ $siswa->usia }}
                </dd>
            </div>
            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                <dt class="font-medium text-gray-900">Mentor</dt>

                <dd class="text-gray-700 sm:col-span-2">
                    {{ $siswa->mentor?->nama ?? 'Belum ada mentor' }}
                </dd>
            </div>
        </dl>
    </div>

    <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"
            class="rounded-md mt-6 my-8 bg-red-500 hover:bg-red-600 px-5 py-2.5 text-sm font-medium text-white shadow-sm cursor-pointer transition duration-300">
            Delete
        </button>
    </form>

    <x-slot:footer>
        <strong>Detail Siswa</strong>
    </x-slot:footer>
</x-layout>
