@extends('pages.layouts.headeruser')
@section('content')

<div class="min-h-screen bg-gray-100 py-10 px-6">

    <div class="max-w-6xl mx-auto bg-linear-to-r from-blue-600 to-blue-500 text-white rounded-3xl p-10 shadow-xl mb-12">

        <h1 class="text-3xl font-bold mb-3">
            Selamat Datang, {{ Auth::user()->name }} 👋
        </h1>

        <div class="space-y-1 text-blue-100">

        @if (!empty($donedaftarulang) && !empty($donedaftarulang->nim))
            <p>NIM : <span class="font-semibold">{{$donedaftarulang->nim }}</span></p>

        @elseif($payments && !$donedaftarulang)
            <p>Nomor Test : <span class="font-semibold">{{ $payments->kode_tes }}</span></p>

        @endif

        @if(Auth::user()->jurusan)
            <p>Program Studi : <span class="font-semibold">{{ Auth::user()->jurusan }}</span></p>
        @endif

        </div>

    </div>


    <div class="max-w-6xl mx-auto grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

        <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition">

            <div class="bg-blue-100 text-blue-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5 text-xl">
                <i class="fa-solid fa-upload"></i>
            </div>

            <h2 class="font-bold text-xl mb-2">Registrasi Form</h2>

            <p class="text-gray-600 mb-6">
                Lengkapi data pendaftaran Anda.
            </p>

            <a href="{{ !empty($sudahbayar) ? '/berhasilform' : '/form' }}"
               class="block text-center bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition">
               Isi Form
            </a>

        </div>


        @if(!empty($sudahform))

        <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition">

            <div class="bg-blue-100 text-blue-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5 text-xl">
                <i class="fa-solid fa-money-bill"></i>
            </div>

            <h2 class="font-bold text-xl mb-2">Payment</h2>

            <p class="text-gray-600 mb-6">
                Lakukan pembayaran biaya pendaftaran.
            </p>

            <a href="{{ $sudahbayar ? '/berhasilpayment' : '/payment' }}"
               class="block text-center bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition">
               Bayar
            </a>

        </div>

        @endif

        @if($sudahbayar)

        <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition">

            <div class="bg-blue-100 text-blue-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5 text-xl">
                <i class="fa-solid fa-file"></i>
            </div>

            <h2 class="font-bold text-xl mb-2">Ujian</h2>

            <p class="text-gray-600 mb-6">
                Kerjakan soal ujian online.
            </p>

            <a href="{{ $alreadyexam ? '/berhasilsoal' : '/soals' }}"
               class="block text-center bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition">
               Kerjakan Soal
            </a>

        </div>

        @endif

        @if($alreadysubmitted)

        <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition">

            <div class="bg-blue-100 text-blue-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5 text-xl">
                <i class="fa-solid fa-bullhorn"></i>
            </div>

            <h2 class="font-bold text-xl mb-2">Pengumuman</h2>

            <p class="text-gray-600 mb-6">
                Cek hasil ujian Anda.
            </p>

            @if($alreadysubmitted)
                <a href="/result"
                   class="block text-center bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition">
                   Cek Hasil
                </a>
            @else
                <button disabled
                    class="w-full bg-gray-300 text-gray-600 py-3 rounded-xl font-semibold cursor-not-allowed">
                    Belum Bisa Cek
                </button>
            @endif

        </div>

        @endif

        @if($alreadyexam)

        <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition">

            <div class="bg-blue-100 text-blue-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5 text-xl">
                <i class="fa-solid fa-file"></i>
            </div>

            <h2 class="font-bold text-xl mb-2">Daftar Ulang</h2>

            <p class="text-gray-600 mb-6">
                Lakukan proses daftar ulang.
            </p>

            <a href="/daftarulang"
               class="block text-center bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition">
               Daftar Ulang
            </a>

        </div>

        @endif

        @if(!empty($donedaftarulang) && !empty($donedaftarulang->nim))

        <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition">

            <div class="bg-blue-100 text-blue-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5 text-xl">
                <i class="fa-solid fa-id-card"></i>
            </div>

            <h2 class="font-bold text-xl mb-2">Kartu Tanda Mahasiswa</h2>

            <p class="text-gray-600 mb-6">
                Silahkan download KTM Anda.
            </p>

            <a href="/ktm"
               class="block text-center bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold transition">
               Cek KTM
            </a>

        </div>

        @endif


        @if($donedaftarulang)

        <div class="bg-white rounded-2xl shadow-md p-8 hover:shadow-xl hover:-translate-y-1 transition">

            <div class="bg-blue-100 text-blue-600 w-14 h-14 flex items-center justify-center rounded-xl mb-5 text-xl">
                <i class="fa-brands fa-whatsapp"></i>
            </div>

            <h2 class="font-bold text-xl mb-2">Grup WhatsApp</h2>

            <p class="text-gray-600 mb-6">
                Bergabung dengan grup mahasiswa baru.
            </p>

            <a href="/masukgrup"
               class="block text-center bg-green-500 hover:bg-green-600 text-white py-3 rounded-xl font-semibold transition">
               Masuk Grup
            </a>

        </div>

        @endif

    </div>

</div>

@endsection
