@extends('pages.layouts.headeradmin')
@section('content')
        <main class="p-10">
           <div class="grid md:grid-cols-3 gap-8">

    <div class="md:col-span-3">
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="px-6 py-4 border-b bg-gray-50">
            <h2 class="text-lg font-semibold text-gray-700">
                Data Mahasiswa
            </h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                    <tr>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">Jurusan</th>
                        <th class="px-6 py-3">Ijazah</th>
                        <th class="px-6 py-3">Kartu Keluarga</th>
                        <th class="px-6 py-3">KTP</th>
                        <th class="px-6 py-3">NIM</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach ($datas as $item)
                        <tr class="hover:bg-gray-50 transition duration-200">
                            <td class="px-6 py-4 font-medium text-gray-800">
                                {{ $item->nama }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $item->jurusan }}
                            </td>

                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-600 rounded-full">
                                    {{ $item->ijazah }}
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-600 rounded-full">
                                    {{ $item->kartu_keluarga }}
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs font-medium bg-purple-100 text-purple-600 rounded-full">
                                    {{ $item->ktp }}
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                {{ $item->nim ?? '-' }}
                            </td>

                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('tambahNim', $item->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-xs font-medium transition duration-200 shadow-sm">
                                        Tambah NIM
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

</div>

        </main>

    </div>



</body>

</html>


@endsection
