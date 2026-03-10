<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Orbitron:wght@400..900&family=Outfit:wght@600&family=Oxanium:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="open-sans">
<div class="bg-white shadow-md">

    <div class="max-w-6xl mx-auto flex items-center justify-between px-6 py-5">

        <div class="flex items-center">
            <img src="binus3.svg" alt="logo" class="h-12">
        </div>

        <div class="flex items-center space-x-8 text-lg font-semibold text-gray-700">

            <a href="/dashboard"
               class="hover:text-blue-600 transition">
               Dashboard
            </a>

            <a href="/form"
               class="hover:text-blue-600 transition">
               Daftar Form
            </a>

            <a href="/result"
               class="hover:text-blue-600 transition">
               Hasil Ujian
            </a>

            <a href="/logout"
               class="bg-red-500 text-white px-5 py-2 rounded-lg hover:bg-red-600 transition">
               Logout
            </a>

        </div>

    </div>

</div>

@yield('content')

@include('pages.layouts.footer')
</body>
</html>
