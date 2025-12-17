<x-layout>
    <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>

    <div class="overflow-x-auto mb-4">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-3 whitespace-nowrap">ID</th>
                    <th class="px-3 py-3 whitespace-nowrap">Nama</th>
                    <th class="px-3 py-3 whitespace-nowrap">Tanggal Lahir</th>
                    <th class="px-3 py-3 whitespace-nowrap">Jurusan</th>
                    <th class="px-3 py-3 whitespace-nowrap">Usia</th>
                    <th class="px-3 py-3 whitespace-nowrap">Details</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 *:even:bg-gray-50">
                @foreach ($data as $siswa)
                    <tr class="*:text-gray-900 *:first:font-medium">
                        <td class="px-3 py-3 whitespace-nowrap">{{ $siswa->id }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">{{ $siswa->nama }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">{{ $siswa->tanggal_lahir }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">{{ $siswa->jurusan }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">{{ $siswa->usia }}</td>
                        <td class="px-3 py-3 whitespace-nowrap">
                            <a href="{{ route('siswa.show', $siswa->id) }}"
                                class="rounded-md bg-teal-600 hover:bg-teal-700 px-2 py-1 text-sm font-medium text-white shadow-sm">
                                View Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="p-8">
        {{ $data->appends(request()->query())->links() }}
    </div>

    <x-slot:footer>
        <strong>Daftar Siswa</strong>
    </x-slot:footer>
</x-layout>
