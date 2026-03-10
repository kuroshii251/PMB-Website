<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .open-sans {
            font-family: "Open Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }
    </style>
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Orbitron:wght@400..900&family=Outfit:wght@600&family=Oxanium:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="open-sans">
<div class="flex items-center justify-between p-4 bg-white shadow-md">
    <div class="flex-1">
        <img src="binus3.svg" alt="Logo" class="h-10">
    </div>
    <div class="flex space-x-8 items-center">
        <a href="/dashboard" class="text-lg font-semibold text-gray-700 hover:text-orange-500 transition">Dashboard</a>
        <a href="/form" class="text-lg font-semibold text-gray-700 hover:text-orange-500 transition">Daftar Form</a>
        <a href="/result" class="text-lg font-semibold text-gray-700 hover:text-orange-500 transition">Hasil Ujian</a>
        <a href="/logout" class="text-lg font-semibold text-gray-700 hover:text-red-500 transition">Logout</a>
    </div>
</div>

<div class="flex justify-center items-center min-h-screen bg-linear-to-br from-blue-50 to-gray-100 p-6">
    <div class="bg-white shadow-2xl rounded-3xl p-10 w-full max-w-md text-center relative overflow-hidden">

        <div class="absolute -top-10 -right-10 w-40 h-40 bg-blue-200 rounded-full blur-3xl opacity-40"></div>

        <div class="w-28 h-28 rounded-full bg-green-100 flex items-center justify-center mx-auto shadow-inner">
            <svg class="w-14 h-14 text-green-600" fill="none" stroke="currentColor" stroke-width="3"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 13l4 4L19 7" />
            </svg>
        </div>

        <h1 class="text-2xl font-bold mt-6 text-gray-800">
            Pendaftaran Berhasil 🎉
        </h1>

        <p class="text-gray-600 mt-3 leading-relaxed">
            Selamat! Data pendaftaran kamu telah berhasil dikirim.
            Silakan lanjutkan ke tahap pembayaran untuk menyelesaikan proses registrasi.
        </p>

        <a href="/payment"
            class="inline-block mt-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
            Lanjut ke Pembayaran
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

</body>

</html>
