@extends('pages.layouts.headeradmin')
@section('content')
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-lg">

        <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Tambah Soal Baru</h1>

        <form action="{{ route('tambah') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-semibold text-gray-700" for="pertanyaan">Pertanyaan</label>
                <input type="text" name="pertanyaan" id="pertanyaan"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                    placeholder="Masukkan pertanyaan">
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700" for="opsi_a">Opsi A</label>
                <input type="text" name="opsi_a" id="opsi_a"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                    placeholder="Jawaban opsi A">
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700" for="opsi_b">Opsi B</label>
                <input type="text" name="opsi_b" id="opsi_b"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                    placeholder="Jawaban opsi B">
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700" for="opsi_c">Opsi C</label>
                <input type="text" name="opsi_c" id="opsi_c"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                    placeholder="Jawaban opsi C">
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700" for="opsi_d">Opsi D</label>
                <input type="text" name="opsi_d" id="opsi_d"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                    placeholder="Jawaban opsi D">
            </div>

            <div>
                <label class="block mb-1 font-semibold text-gray-700" for="jawaban">Jawaban Benar</label>
                <input type="text" name="jawaban" id="jawaban"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-green-500 focus:outline-none"
                    placeholder="Jawaban yang benar (A/B/C/D)">
            </div>

            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition">Simpan
                Soal</button>
        </form>
    </div>

@endsection
