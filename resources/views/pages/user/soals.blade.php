@extends('pages.layouts.headeruser')
@section('content')

    <main class="flex-1 flex flex-col items-center justify-center px-6 py-10">
        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-3xl w-full space-y-6">

            <h2 class="text-2xl font-semibold text-gray-800 text-center">Sebelum Memulai Ujian</h2>

            <div class="bg-gray-100 p-4 rounded-lg border border-gray-300">
                <h3 class="font-semibold text-gray-700 mb-2">Peraturan Ujian:</h3>
                <ul class="list-disc list-inside text-gray-600 space-y-1">
                    <li>Pastikan koneksi internet stabil selama ujian berlangsung.</li>
                    <li>Ujian bersifat individu, dilarang bekerja sama dengan peserta lain.</li>
                    <li>Jawaban tidak bisa diubah setelah menekan tombol Next.</li>
                    <li>Waktu ujian terbatas, harap perhatikan waktu pada layar.</li>
                    <li>Jangan keluar dari halaman ujian, bisa menyebabkan skor tidak tersimpan.</li>
                </ul>
            </div>

            @if($soalPertama)
            <div class="text-center mt-6">
                <a href="/soal/{{ $soalPertama->id }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-xl shadow-md transition">
                    Mulai Ujian
                </a>
            </div>
            @else
            <p class="text-center text-red-500 font-semibold">Tidak ada soal tersedia</p>
            @endif

        </div>
    </main>

@endsection
