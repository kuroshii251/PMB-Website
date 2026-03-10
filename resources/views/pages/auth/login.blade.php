<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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

<body class="open-sans bg-gray-100">
    <div class="grid grid-cols-2 h-100  justify-center items-center mx-auto">
<div class="">
<img src={{ asset("uploads/image/1.png") }} alt="">
</div>
        <div class="min-h-screen flex items-center justify-center">

    <div class=" w-full max-w-xl p-15 rounded-2xl">
        <h1 class="text-3xl font-extrabold text-center text-black">
            Welcome Back
        </h1>

        <p class="text-center text-gray-600 mt-2 mb-8 font-semibold">
            Please Login With Your Account
        </p>

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-5">
                <input
                    type="email"
                    name="email"
                    placeholder="Email..."
                    required
                    class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                >

                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <input
                    type="password"
                    name="password"
                    placeholder="Password..."
                    required
                    class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                >

                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 transition text-white font-bold py-3 rounded-lg"
            >
                SIGN IN
            </button>

            <p class="text-center mt-6 text-sm">
                Doesn't Have Account?
                <a href="/register" class="text-blue-600 font-bold hover:underline">
                    Sign Up
                </a>
            </p>

        </form>

    </div>

</div>


    </div>



</body>

</html>
