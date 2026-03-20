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
@if (session('success'))
  <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
    <ul class="list-disc list-inside">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

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

            <div class="pt-3">
                <p class="font-semibold mb-2">Foto Pas:</p>
                <img
                    src="{{ asset('uploads/image/foto_pas/' . $item->foto_pas) }}"
                    alt="Foto Pas"
                    class="w-32 h-40 object-cover rounded-lg border shadow-sm"
                >
            </div>

            <div class="pt-3">
                <p class="font-semibold mb-2">Bukti Pembayaran:</p>
                @php $paymentPhoto = $item->user->payments->first()?->foto_payment ?? null; @endphp
                @if($paymentPhoto)
                <img
                    src="{{ asset('uploads/payment/' . $paymentPhoto) }}"
                    alt="Bukti Pembayaran"
                    class="w-32 h-40 object-cover rounded-lg border shadow-sm"
                >
                @else
                <p class="text-gray-500 text-sm">Belum ada bukti pembayaran</p>
                @endif
            </div>

            <div class="flex gap-3 pt-4">
                <button
onclick="openModal(
                        '{{ $item->id }}',
                        '{{ $item->nama }}',
                        '{{ $item->email }}',
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
                        '{{ $item->user->payments->first()?->foto_payment ?? "" }}'
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

<div id="editModal" class="fixed inset-0 bg-black/50 hidden justify-center items-center z-50">

    <div class="bg-white w-full max-w-3xl rounded-2xl shadow-xl relative max-h-[90vh] overflow-y-auto p-6">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Edit Data</h2>

        <form id="editForm" method="POST" class="space-y-4" enctype="multipart/form-data">
@csrf

            <input type="hidden" id="edit_id">
            <input type="hidden" name="email" id="edit_email">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 shadow-sm shadow-black rounded-2xl p-3">

<label for="">Nama</label>

                <input type="text" name="nama" id="edit_nama"
                    class="input-style" placeholder="Nama">

<label for="">Jurusan</label>


                <input type="text" name="jurusan" id="edit_jurusan"
                    class="input-style" placeholder="Jurusan">
<label for="">Jenis Kelamin</label>


                <input type="text" name="jenis_kelamin" id="edit_jenis_kelamin"
                    class="input-style" placeholder="Jenis Kelamin">

<label for="">Tempat Lahir</label>


                <input type="text" name="tempat_lahir" id="edit_tempat_lahir"
                    class="input-style" placeholder="Tempat Lahir">

<label for="">Tanggal Lahir</label>


                <input type="date" name="tanggal_lahir" id="edit_tanggal_lahir"
                    class="input-style">

<label for="">Asal Sekolah</label>


                <input type="text" name="asal_sekolah" id="edit_asal_sekolah"
                    class="input-style" placeholder="Asal Sekolah">

<label for="">NISN</label>


                <input type="text" name="nisn" id="edit_nisn"
                    class="input-style" placeholder="NISN">

<label for="">NIK</label>


                <input type="text" name="nik" id="edit_nik"
                    class="input-style" placeholder="NIK">

<label for="">Agama</label>


                <input type="text" name="agama" id="edit_agama"
                    class="input-style" placeholder="Agama">
<label for="">Nomor Telepon</label>


                <input type="text" name="nomor_telepon" id="edit_nomor_telepon"
                    class="input-style" placeholder="Nomor Telepon">

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">

                <div class="upload-box shadow-sm shadow-black p-3 rounded-2xl">
                    <p class="text-sm font-medium text-gray-600 mb-2">Foto Pas</p>
                    <img id="preview_foto_pas"
                        class="w-32 h-32 object-cover rounded-lg border mb-3 bg-gray-100">
                    <input type="file" name="foto_pas" id="edit_foto_pas"
                        class="file-style">
                </div>

                <div class="upload-box shadow-sm shadow-black p-3 rounded-2xl">
                    <p class="text-sm font-medium text-gray-600 mb-2">Bukti Pembayaran</p>
                    <img id="preview_foto_payment"
                        class="w-32 h-32 object-cover rounded-lg border mb-3 bg-gray-100">
                    <input type="file" name="foto_payment" id="edit_foto_payment"
                        class="file-style">
                </div>

            </div>

            <div class="flex justify-end gap-3 mt-6">
                <button type="button" onclick="closeModal()"
                    class="px-4 py-2 bg-gray-400 hover:bg-gray-500 text-white rounded-lg transition">
                    Batal
                </button>

                <button type="submit"
                    class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition">
                    Simpan
                </button>
            </div>

        </form>
    </div>
</div>

<script>
function openModal(id, nama, email, jurusan, jenis_kelamin, tempat_lahir, tanggal_lahir, asal_sekolah, nisn, nik, agama, nomor_telepon, foto_pas, foto_payment) {

    document.getElementById('editForm').action = "/halamanadmin/daftarform/" + id;

    document.getElementById('edit_email').value = email;

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

    if (foto_payment) {
        document.getElementById('preview_foto_payment').src = "/uploads/payment/" + foto_payment;
    } else {
        document.getElementById('preview_foto_payment').src = "data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTI4IiBoZWlnaHQ9IjEyOCIgdmlld0JveD0iMCAwIDEyOCAxMjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0zIDBoMTI4VjEyOEgzWiIgZmlsbD0iI0UzRTNFMyIvPgo8L3N2Zz4K";
    }

    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editModal').classList.add('flex');
}

function closeModal() {
    document.getElementById('editModal').classList.add('hidden');
}
</script>


</body>
</html>
