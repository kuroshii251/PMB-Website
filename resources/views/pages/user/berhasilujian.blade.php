@extends('pages.layouts.headeruser')
@section('content')

    <div class="max-w-3xl mx-auto mt-16 bg-white rounded-xl shadow-lg p-10 text-center">
        <h1 class="text-3xl font-bold text-green-800 mb-6">Anda telah menyelesaikan ujian</h1>
        <p class="text-gray-700 mb-6">Silahkan lihat hasilnya.</p>
        <a href="/result"
           class="inline-block bg-blue-500 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition duration-200">
Cek Hasil
        </a>
    </div>

    <footer class="mt-16 bg-green-900 text-white">
        <div class="max-w-6xl mx-auto py-10 px-6 grid md:grid-cols-2 gap-10">
            <div class="space-y-2">
                <h1 class="font-bold text-2xl">GABUNG BINUS</h1>
                <p class="font-semibold">BINUS UNIVERSITY</p>
                <p class="font-semibold">HIGHER EDUCATION</p>
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
