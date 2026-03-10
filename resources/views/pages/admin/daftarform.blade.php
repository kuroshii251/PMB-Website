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
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Orbitron:wght@400..900&family=Outfit:wght@600&family=Oxanium:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="open-sans">

<div class="grid grid-cols-[260px_1fr] min-h-screen bg-gray-100">

    <aside class="bg-black text-gray-400 p-8 space-y-8">
<div class="aspect-square bg-white rounded-full size-15 mx-auto">
        <img src="{{ asset('binus3.svg') }}" class="size-12 mb-10 mx-auto" alt="">

</div>
        <nav class="space-y-5 text-sm">

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

            <a href="/halamanadmin/hasildaftarulang" class="flex items-center space-x-3 hover:text-white transition">
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

   <main class="p-10 bg-gray-50 min-h-screen">
  <div class="flex justify-end items-center bg-white shadow-sm rounded-2xl p-4 mb-10">
    <div class="flex items-center space-x-3 text-gray-600">
      <i class="fa-solid fa-user text-lg"></i>
      <span class="font-semibold">Admin</span>
    </div>
  </div>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($datas as $item)
    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">

        <div class="bg-linear-to-r from-blue-500 to-indigo-600 p-4 text-white">
            <h2 class="text-lg font-semibold">{{ $item->nama }}</h2>
            <p class="text-sm opacity-90">{{ $item->jurusan }}</p>
        </div>

        <div class="p-5 space-y-3 text-sm text-gray-700">

            <div class="grid grid-cols-2 gap-2">
                <p><span class="font-semibold">Jenis Kelamin:</span><br>{{ $item->jenis_kelamin }}</p>
                <p><span class="font-semibold">Agama:</span><br>{{ $item->agama }}</p>
                <p><span class="font-semibold">Tempat Lahir:</span><br>{{ $item->tempat_lahir }}</p>
                <p><span class="font-semibold">Tanggal Lahir:</span><br>{{ $item->tanggal_lahir }}</p>
                <p><span class="font-semibold">NISN:</span><br>{{ $item->nisn }}</p>
                <p><span class="font-semibold">NIK:</span><br>{{ $item->nik }}</p>
            </div>

            <p>
                <span class="font-semibold">Asal Sekolah:</span><br>
                {{ $item->asal_sekolah }}
            </p>

            <p>
                <span class="font-semibold">Nomor Telepon:</span><br>
                {{ $item->nomor_telepon }}
            </p>

            <!-- Foto -->
            <div class="pt-3">
                <p class="font-semibold mb-2">Foto Pas:</p>
                <img
                    src="{{ asset('uploads/image/foto_pas/' . $item->foto_pas) }}"
                    alt="Foto Pas"
                    class="w-32 h-40 object-cover rounded-lg border shadow-sm"
                >
            </div>

            <!-- Buttons -->
            <div class="flex gap-3 pt-4">
                <button
                    onclick="openModal(
                        '{{ $item->id }}',
                        '{{ $item->nama }}',
                        '{{ $item->jurusan }}',
                        '{{ $item->jenis_kelamin }}',
                        '{{ $item->tempat_lahir }}',
                        '{{ $item->tanggal_lahir }}',
                        '{{ $item->asal_sekolah }}',
                        '{{ $item->nisn }}',
                        '{{ $item->nik }}',
                        '{{ $item->agama }}',
                        '{{ $item->nomor_telepon }}',
                        '{{ $item->foto_pas }}',
                        '{{ $item->foto_payment }}'
                    )"
                    class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg text-sm font-medium transition duration-200"
                >
                    Edit
                </button>

                <a href="/halamanadmin/daftarform/delete/{{ $item->id }}"
                   class="flex-1 text-center bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg text-sm font-medium transition duration-200">
                    Delete
                </a>
            </div>

        </div>
    </div>
    @endforeach
</div>
</main>


</div>

<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
    <div class="bg-white w-full max-w-2xl p-6 rounded-xl shadow-lg relative">

        <h2 class="text-xl font-semibold mb-4">Edit Data</h2>

        <form id="editForm" method="POST">
            @csrf
            @method('POST')

            <input type="hidden" id="edit_id">

            <div class="grid grid-cols-2 gap-4">

                <input type="text" name="nama" id="edit_nama" class="border p-2 rounded" placeholder="Nama">
                <input type="text" name="jurusan" id="edit_jurusan" class="border p-2 rounded" placeholder="Jurusan">
                <input type="text" name="jenis_kelamin" id="edit_jenis_kelamin" class="border p-2 rounded" placeholder="Jenis Kelamin">
                <input type="text" name="tempat_lahir" id="edit_tempat_lahir" class="border p-2 rounded" placeholder="Tempat Lahir">
                <input type="date" name="tanggal_lahir" id="edit_tanggal_lahir" class="border p-2 rounded">
                <input type="text" name="asal_sekolah" id="edit_asal_sekolah" class="border p-2 rounded" placeholder="Asal Sekolah">
                <input type="text" name="nisn" id="edit_nisn" class="border p-2 rounded" placeholder="NISN">
                <input type="text" name="nik" id="edit_nik" class="border p-2 rounded" placeholder="NIK">
                <input type="text" name="agama" id="edit_agama" class="border p-2 rounded" placeholder="Agama">
                <input type="text" name="nomor_telepon" id="edit_nomor_telepon" class="border p-2 rounded" placeholder="Nomor Telepon">
                <img id="preview_foto_pas" class="w-32 mb-2">
<img id="preview_foto_payment" class="w-32 mb-2">


            </div>

            <div class="flex justify-end gap-3 mt-6">
                <button type="button" onclick="closeModal()"
                    class="px-4 py-2 bg-gray-400 text-white rounded">
                    Batal
                </button>

                <button type="submit"
                    class="px-4 py-2 bg-green-600 text-white rounded">
                    Simpan
                </button>
            </div>

        </form>
    </div>
</div>

<script>
function openModal(id, nama, jurusan, jenis_kelamin, tempat_lahir, tanggal_lahir, asal_sekolah, nisn, nik, agama, nomor_telepon, foto_pas, foto_payment) {

    document.getElementById('editForm').action = "/halamanadmin/daftarform/" + id;

    document.getElementById('edit_nama').value = nama;
    document.getElementById('edit_jurusan').value = jurusan;
    document.getElementById('edit_jenis_kelamin').value = jenis_kelamin;
    document.getElementById('edit_tempat_lahir').value = tempat_lahir;
    document.getElementById('edit_tanggal_lahir').value = tanggal_lahir;
    document.getElementById('edit_asal_sekolah').value = asal_sekolah;
    document.getElementById('edit_nisn').value = nisn;
    document.getElementById('edit_nik').value = nik;
    document.getElementById('edit_agama').value = agama;
    document.getElementById('edit_nomor_telepon').value = nomor_telepon;

    // preview gambar lama
    document.getElementById('preview_foto_pas').src =
        "/uploads/image/foto_pas/" + foto_pas;

    document.getElementById('preview_foto_payment').src =
        "/uploads/image/foto_payment/" + foto_payment;

    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editModal').classList.add('flex');
}

function closeModal() {
    document.getElementById('editModal').classList.add('hidden');
}
</script>


</body>
</html>
