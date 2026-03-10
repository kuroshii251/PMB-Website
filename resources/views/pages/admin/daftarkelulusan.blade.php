@extends('pages.layouts.headeradmin')
@section('content')

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
