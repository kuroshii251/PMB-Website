
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
<body class="open-sans">
<div class="grid grid-cols-[260px_1fr] min-h-screen bg-gray-100">

        <aside class="bg-black text-gray-400 p-8 space-y-8">
<div class="aspect-square bg-white rounded-full size-15 mx-auto">
        <img src="{{ asset('binus3.svg') }} " class="size-12 mb-10 mx-auto" alt="">

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


        <div class=" gap-8">
<div class="overflow-x-auto">
    <table class="w-full text-sm text-left bg-white rounded-2xl shadow-lg overflow-hidden">

        <thead class="text-xs uppercase bg-gray-100 text-gray-700 tracking-wider">
            <tr>
                <th class="px-6 py-4">Nama</th>
                <th class="px-6 py-4">Nilai</th>
                <th class="px-6 py-4">Status</th>
                <th class="px-6 py-4 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @foreach($datas as $item)
                <tr class="hover:bg-gray-50 transition duration-200">

                    <td class="px-6 py-4 font-semibold text-gray-800">
                        {{ $item->nama }}
                    </td>

                    <td class="px-6 py-4">
                        <span class="font-bold text-blue-600">
                            {{ $item->nilai }}
                        </span>
                    </td>

                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full
                            {{ $item->status == 'Lulus'
                                ? 'bg-green-100 text-green-700'
                                : ($item->status == 'Tidak Lulus'
                                    ? 'bg-red-100 text-red-700'
                                    : 'bg-yellow-100 text-yellow-700') }}">
                            {{ $item->status ?? 'Belum Diproses' }}
                        </span>
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex gap-3 justify-center">
<form action="/hasil/lulus/{{ $item->id }}" method="POST">    @csrf
    <button type="submit"
        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-xs font-semibold shadow transition">
        Lulus
    </button>
</form>

<form action="/hasil/tidaklulus/{{ $item->id }}" method="POST">
        @csrf
    <button type="submit"
        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-xs font-semibold shadow transition">
        Tidak Lulus
    </button>
</form>

                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>
</div>
        </div>

    </main>

</div>



</body>
</html>
