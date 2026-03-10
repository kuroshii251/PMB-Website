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
    <div class="grid grid-cols-2 h-150  justify-center items-center mx-auto">
        <div class="">
            <img src={{ asset('uploads/image/1.png') }} alt="">
        </div>
       <div class="min-h-screen flex items-center justify-center">

    <div class=" w-full max-w-xl p-15 rounded-2xl">

         <h1 class="text-3xl font-extrabold text-center text-black">
Sign Up
        </h1>

        <p class="text-center text-gray-600 mt-2 mb-8 font-semibold">
            Please register your account
        </p>

            <div class="">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
            <div class="mb-6">

                        <input type="text"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            name="name" required placeholder="Nama Lengkap...">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            <div class="mb-6">
                        <input type="email"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            name="email" required placeholder="Email...">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            <div class="mb-6">
                        <input type="password"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            name="password" required placeholder="Password...">

                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

            <div class="mb-6">

                        <input type="password"
                            class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            name="confirm_password" required placeholder="Confirm Password...">

                        @error('confirm_password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                <button
                type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 transition text-white font-bold py-3 rounded-lg"
            >
                SIGN UP
            </button>
                    <p class="text-center mt-5 font-semibold">Already Have Account? <a href="/login"
                            class="text-blue-700 font-bold">Sign In</a></p>
                </form>
            </div>


    </div>



</body>

</html>



{{-- <form action="{{ route('login') }}" method="POST">

                @csrf
                <div class="w-100 mx-auto mb-7">
                    <p class="mb-1">Email*</p>

                    <input type="email" class="w-full p-2 rounded-md shadow-md" name="email" required autofocus
                        placeholder="Email...">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-100 mx-auto">
                    <p class="mb-1">Password*</p>

                    <input type="password" class="w-full p-2 rounded-md shadow-md" name="password" required autofocus
                        placeholder="Password...">

                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div
                    class="items-center mx-auto text-center w-100 bg-orange-500 mt-5 rounded-4xl p-4  text-white font-bold">
                    <button type="submit">SIGN IN</button>

                </div>
                <p class="text-center mt-5">Doesn't Have Account? <a href="/register">SignUp</a></p>
            </form> --}}
