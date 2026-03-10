@extends('pages.layouts.headeruser')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-linear-to-br from-green-50 to-emerald-100 p-6">

    <div class="max-w-md w-full bg-white rounded-3xl shadow-2xl p-10 text-center">

        <div class="w-24 h-24 mx-auto mb-6 flex items-center justify-center rounded-full bg-green-100">
            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" stroke-width="3"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 13l4 4L19 7" />
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-green-700 mb-4">
            Pembayaran Berhasil!
        </h1>

        <p class="text-gray-600 mb-8 leading-relaxed">
            Terima kasih!<br>
            Pembayaran Anda telah kami terima.
            Silakan lanjut untuk mengerjakan soal ujian.
        </p>

        <a href="/soals"
           class="inline-block w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-2xl shadow-lg transition duration-300 hover:scale-[1.03] hover:shadow-xl">
           Kerjakan Soal
        </a>

    </div>

</div>


   <footer class="bg-green-900 text-white">

    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-10">

        <div>
            <h1 class="font-bold text-3xl mb-4">GABUNG BINUS</h1>
            <p class="text-lg">BINUS UNIVERSITY</p>
            <p class="text-lg mb-4">HIGHER EDUCATION</p>
            <p class="text-sm text-green-200">
                Wujudkan masa depan pendidikan terbaik bersama BINUS Higher Education.
            </p>
        </div>

        <div>
            <h2 class="font-semibold text-xl mb-4">Locations</h2>
            <ul class="grid grid-cols-2 gap-2 text-green-200 text-sm">
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

    <div class="border-t border-green-700 py-5 text-center text-sm text-green-300">
        © {{ date('Y') }} BINUS Higher Education. All rights reserved.
    </div>

</footer>

@endsection
