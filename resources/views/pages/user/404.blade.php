<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
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
    <div class="flex p-3">
        <div class="flex flex-1">
            <img src="bendera.png" class="pl-10 w-23" alt="">
            <img src="binus3.svg" class="pl-10" alt="">

        </div>
        <div class="justify-end flex space-x-1 pr-10 items-end ">

            <img src="Binus Logo.svg" class="size-12 mr-10" alt="">
            <a href="/login">
                <div class="bg-blue-500 w-30 rounded-l-4xl size-10">

                    <img src="gabungs.svg" class="size-10 rounded-r-2xl mx-auto" alt="">
                </div>
            </a>
            <a href="/login">
                <div class="bg-orange-500 w-50 size-10 p-1  rounded-r-4xl">
                    <h1
                        class="text-white text-center items-center flex    mx-auto justify-center open-sans text-md mt-1 font-semibold">
                        MULAI DARI SINI →</h1>
                </div>
            </a>
        </div>

    </div>
    <div class="flex " id="home">
        <div class="flex-1 ">
        </div>
        <div class="justify-end flex space-x-10 items-end pr-20 mb-5 ">
            <a href="#home" class="text-gray-500 text-lg hover:text-orange-500">Home</a>
            <a href="#about" class="text-gray-500 text-lg hover:text-orange-500">About</a>
            <a href="#facility" class="text-gray-500 text-lg hover:text-orange-500">Facility</a>
            <a href="#contact" class="text-gray-500 text-lg hover:text-orange-500">Contact</a>
        </div>
    </div>

<div class="w-150 mx-auto justify-center text-center">
<h1 class="text-red-500 text-7xl mt-5 font-bold">404</h1>
<p class="text-red-500 mt-5 mb-20  font-semibold text-xl">Halaman error, silahkan kembali ke halaman awal.</p>

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
