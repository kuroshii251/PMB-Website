@extends('pages.layouts.headeruser')
@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-6">

    <div class="bg-white shadow-xl rounded-3xl p-12 text-center max-w-lg w-full">
        <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center rounded-full bg-red-100">
           <i class="fa-solid fa-check text-4xl font-extrabold"></i>
        </div>

        <h1 class="text-3xl font-bold text-blue-500 mb-4">
Selamat Anda Lulus di
        </h1>
        <p class="text-gray-600 text-lg mb-8">
            Program Studi:
            <span class="font-semibold text-gray-800">
                Teknik Informatika
            </span>
        </p>

        <a href="/daftarulang"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-2xl font-semibold transition shadow-md">
        Daftar Ulang
        </a>

    </div>

</div>

<div class="bg-green-900 p-5">
<div class="grid grid-cols-2">
<div class="p-5 text-white">
<h1 class="font-semibold text-2xl">GABUNG BINUS</h1>
<h1 class="font-semibold text-2xl"> BINUS UNIVERSITY </h1>
<h1 class="font-semibold text-2xl"> HIGHER EDUCATION </h1>
</div>
<div class="">
<h1 class="text-white">Location:</h1>
<ul class="list-style-none text-white">
<li>BINUS @Kemanggisan
</li>
<li>BINUS @Alam Sutera
</li>
<li>BINUS @Kemanggisan
</li>
<li>BINUS @Alam Sutera
</li>
<li>BINUS @Senayan
</li>
<li>BINUS @Senayan</li>
<li>BINUS @Bekasi
</li>
<li>BINUS @Bandung
</li>
<li>BINUS @Malang
</li>
<li>BINUS @Semarang
</li>
<li>BINUS @Medan
</li>
</ul>


</div>
</div>
</div>
<div class="bg-green-900 p-5 border-white border ">
<p class="text-center text-white"> Copyright © BINUS Higher Education. All rights reserved </p>
</div>


@endsection
