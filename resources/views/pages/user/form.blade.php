
@extends('pages.layouts.headeruser')
@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 p-5">
    <form action="{{ route('simpan') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-lg">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Form Pendaftaran</h2>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
            @error('nama')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Email</label>
            <input type="email" name="email" placeholder="Masukkan email" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
            @error('email')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
<label class="block mb-1 font-medium text-gray-600">Pilih Jurusan</label>
<select name="jurusan" required
        class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
    <option value="" disabled selected>-- Pilih Jurusan --</option>
    <option value="Teknik Informatika">Teknik Informatika</option>
    <option value="Sistem Informasi">Sistem Informasi</option>
    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
    <option value="Manajemen">Manajemen</option>
    <option value="Akuntansi">Akuntansi</option>
    <option value="Psikologi">Psikologi</option>
</select>
            @error('jurusan')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Jenis Kelamin</label>
<select name="jenis_kelamin" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
</select>             @error('jenis_kelamin')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Agama</label>
<select name="agama" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="Buddha">Buddha</option>
    <option value="Konghucu">Konghucu</option>
</select>
   @error('agama')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" placeholder="Masukkan tempat lahir" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
            @error('tempat_lahir')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
            @error('tanggal_lahir')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Foto Pas</label>
            <input type="file" name="foto_pas" class="w-full" required>
            @error('foto_pas')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">NISN</label>
            <input type="text" name="nisn" placeholder="Masukkan NISN" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
            @error('nisn')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" placeholder="Masukkan asal sekolah" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
            @error('asal_sekolah')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-medium text-gray-600">Nomor Telepon</label>
            <input type="text" name="nomor_telepon" placeholder="Masukkan nomor telepon" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
            @error('nomor_telepon')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <div class="mb-6">
            <label class="block mb-1 font-medium text-gray-600">NIK</label>
            <input type="text" name="nik" placeholder="Masukkan NIK" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-orange-400" required>
            @error('nik')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
        </div>
        <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-2xl transition-all duration-300">Submit</button>
    </form>
</div>


@endsection
