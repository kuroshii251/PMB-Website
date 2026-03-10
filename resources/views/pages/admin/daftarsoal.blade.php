@extends('pages.layouts.headeradmin')
@section('content')


<div class="max-w-6xl mx-auto py-10 px-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Soal</h1>
        <a href="{{ url('/halamanadmin/soal/tambah') }}"
           class="bg-green-700 hover:bg-green-800 text-white px-5 py-2 rounded-lg shadow transition">
           + Tambah Soal
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-xl shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pertanyaan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opsi A</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opsi B</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opsi C</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opsi D</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jawaban</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($data2 as $index => $data)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $data->pertanyaan }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $data->opsi_a }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $data->opsi_b }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $data->opsi_c }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $data->opsi_d }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-semibold">{{ $data->jawaban }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium flex justify-center gap-2">
                        <button onclick="openEditModal({{ $data->id }}, '{{ addslashes($data->pertanyaan) }}', '{{ addslashes($data->opsi_a) }}', '{{ addslashes($data->opsi_b) }}', '{{ addslashes($data->opsi_c) }}', '{{ addslashes($data->opsi_d) }}', '{{ addslashes($data->jawaban) }}')"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-sm">
                            Edit
                        </button>
                        <form action="{{ url('/halamanadmin/soal/delete/' . $data->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus soal ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-4 text-center text-gray-500">Belum ada soal yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


</div>


    <div id="editModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
        <div class="bg-white w-full max-w-lg rounded-xl p-6 shadow-xl">
            <h2 class="text-xl font-bold mb-4">Edit Soal</h2>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-3">
                    <input type="text" name="pertanyaan" id="editPertanyaan" class="w-full border p-2 rounded" placeholder="Pertanyaan">
                    <input type="text" name="opsi_a" id="editOpsiA" class="w-full border p-2 rounded" placeholder="Opsi A">
                    <input type="text" name="opsi_b" id="editOpsiB" class="w-full border p-2 rounded" placeholder="Opsi B">
                    <input type="text" name="opsi_c" id="editOpsiC" class="w-full border p-2 rounded" placeholder="Opsi C">
                    <input type="text" name="opsi_d" id="editOpsiD" class="w-full border p-2 rounded" placeholder="Opsi D">
                    <input type="text" name="jawaban" id="editJawaban" class="w-full border p-2 rounded" placeholder="Jawaban">
                </div>
                <div class="flex justify-end gap-3 mt-6">
                    <button type="button" onclick="closeEditModal()" class="bg-gray-400 px-4 py-2 rounded text-white">Batal</button>
                    <button type="submit" class="bg-green-600 px-4 py-2 rounded text-white">Simpan</button>
                </div>
            </form>
        </div>

    <script>
        function openEditModal(id, pertanyaan, a, b, c, d, jawaban) {
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editModal').classList.add('flex');

            document.getElementById('editPertanyaan').value = pertanyaan;
            document.getElementById('editOpsiA').value = a;
            document.getElementById('editOpsiB').value = b;
            document.getElementById('editOpsiC').value = c;
            document.getElementById('editOpsiD').value = d;
            document.getElementById('editJawaban').value = jawaban;

            document.getElementById('editForm').action = "/halamanadmin/soal/update/" + id;
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
            document.getElementById('editModal').classList.remove('flex');
        }
    </script>

    <footer class="bg-green-900 text-white mt-16">
        <div class="max-w-6xl mx-auto py-10 px-6 grid md:grid-cols-2 gap-10">
            <div>
                <h1 class="font-bold text-2xl mb-2">GABUNG BINUS</h1>
                <p>BINUS UNIVERSITY</p>
                <p>HIGHER EDUCATION</p>
            </div>

            <div>
                <h2 class="font-semibold mb-2">Location:</h2>
                <ul class="space-y-1 text-sm list-disc list-inside">
                    <li>BINUS @Kemanggisan</li>
                    <li>BINUS @Alam Sutera</li>
                    <li>BINUS @Senayan</li>
                    <li>BINUS @Bekasi</li>
                    <li>BINUS @Bandung</li>
                    <li>BINUS @Malang</li>
                    <li>BINUS @Semarang</li>
                    <li>BINUS @Medan</li>
                </ul>
            </div>
        </div>

        <div class="text-center py-4 border-t border-green-700 text-sm">
            © BINUS Higher Education. All rights reserved
        </div>
    </footer>


@endsection
