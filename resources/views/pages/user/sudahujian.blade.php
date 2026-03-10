@extends('pages.layouts.headeruser')
@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-6">

    <div class="bg-white shadow-xl rounded-3xl p-12 text-center max-w-lg w-full">
        <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center rounded-full bg-green-100">
           <i class="fa-solid fa-check text-4xl font-extrabold text-green-600"></i>
        </div>

        <h1 class="text-3xl font-bold text-green-600 mb-4">
Ujian Selesai
        </h1>
        <p class="text-gray-600 text-lg mb-4">
            Terima kasih telah menyelesaikan ujian.
        </p>
        <p class="text-gray-500 text-sm mb-8">
            Hasil ujian Anda akan divalidasi oleh admin.
Silakan cek hasil ujian di menu hasil nanti.
        </p>

        <a href="/dashboard"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-2xl font-semibold transition shadow-md">
        Kembali ke Dashboard
        </a>

    </div>

</div>

@endsection
