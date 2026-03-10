@extends('pages.layouts.headeruser')
@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-6">

    <div class="bg-white shadow-xl rounded-3xl p-12 text-center max-w-lg w-full">
        <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center rounded-full bg-red-100">
            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-red-600 mb-4">
            Anda Tidak Lulus
        </h1>

        <p class="text-gray-600 text-lg mb-8">
            Program Studi:
            <span class="font-semibold text-gray-800">
                Teknik Informatika
            </span>
        </p>

        <a href="/dashboard"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-2xl font-semibold transition shadow-md">
           Kembali ke Dashboard
        </a>

    </div>

</div>


@endsection
