
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Orbitron:wght@400..900&family=Outfit:wght@600&family=Oxanium:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="open-sans">
<div class="grid grid-cols-[260px_1fr] min-h-screen bg-gray-100">

    <aside class="bg-black text-gray-400 p-8 space-y-8">
<div class="aspect-square bg-white rounded-full size-15 mx-auto">
        <img src="binus3.svg" class="size-12 mb-10 mx-auto" alt="">

</div>
        <nav class="space-y-8 text-sm m-5">

            <a href="/halamanadmin" class="flex items-center space-x-3 hover:text-white transition">
                <i class="fa-solid fa-gauge"></i>
                <span>Dashboard</span>
            </a>

            <a href="/halamanadmin/daftarform" class="flex items-center space-x-3 hover:text-white transition">
                <i class="fa-solid fa-address-card"></i>
                <span>Daftar Form</span>
            </a>

            <a href="/halamanadmin/hasilujian" class="flex items-center space-x-3 hover:text-white transition">
                <i class="fa-solid fa-square-poll-horizontal"></i>
                <span>Hasil Ujian</span>
            </a>

            <a href="/halamanadmin/daftarsoal" class="flex items-center space-x-3 hover:text-white transition">
                <i class="fa-solid fa-file-lines"></i>
                <span>Daftar Soal</span>
            </a>

            <a href="/daftarulangform" class="flex items-center space-x-3 hover:text-white transition">
                <i class="fa-solid fa-paper-plane"></i>
                <span>Daftar Ulang</span>
            </a>
            <a href="/halamanadmin/daftaruser" class="flex items-center space-x-3 hover:text-white transition">
                <i class="fa-solid fa-user"></i>
                <span>Daftar User</span>
            </a>
            <a href="/logout" class="flex items-center space-x-3 hover:text-red-400 transition pt-10">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </nav>
    </aside>

    <main class="p-10">

        <div class="flex justify-end items-center bg-white shadow-sm rounded-2xl p-4 mb-10">
            <div class="flex items-center space-x-3 text-gray-600">
                <i class="fa-solid fa-user text-lg"></i>
                <span class="font-semibold">Admin</span>
            </div>
        </div>

@yield('content')

    </main>

</div>



</body>
</html>
