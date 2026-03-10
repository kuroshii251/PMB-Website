@extends('pages.layouts.headeruser')
@section('content')
<div class="min-h-auto p-10">
 <div class="bg-white shadow-xl rounded-2xl w-full  justify-center mx-auto max-w-lg p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Form Daftar Ulang
        </h1>
<form action="{{ route('simpandokumen') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Upload bukti kelulusan
                </label>
                <input type="file" name="bukti_kelulusan"
                    class="w-full border border-gray-300 rounded-lg p-2 bg-gray-50
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-lg file:border-0
                           file:text-sm file:font-semibold
                           file:bg-green-600 file:text-white
                           hover:file:bg-green-700">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Upload Ijazah
                </label>
                <input type="file" name="ijazah"
                    class="w-full border border-gray-300 rounded-lg p-2 bg-gray-50
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-lg file:border-0
                           file:text-sm file:font-semibold
                           file:bg-green-600 file:text-white
                           hover:file:bg-green-700">


            </div>

  <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Upload Kartu Keluarga
                </label>
                <input type="file" name="kartu_keluarga"
                    class="w-full border border-gray-300 rounded-lg p-2 bg-gray-50
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-lg file:border-0
                           file:text-sm file:font-semibold
                           file:bg-green-600 file:text-white
                           hover:file:bg-green-700">



            </div>

<div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Upload KTP
                </label>
                <input type="file" name="ktp"
                    class="w-full border border-gray-300 rounded-lg p-2 bg-gray-50
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-lg file:border-0
                           file:text-sm file:font-semibold
                           file:bg-green-600 file:text-white
                           hover:file:bg-green-700">



            </div>

<div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Upload Akte Kelahiran
                </label>
                <input type="file" name="akte_kelahiran"
                    class="w-full border border-gray-300 rounded-lg p-2 bg-gray-50
                           file:mr-4 file:py-2 file:px-4
                           file:rounded-lg file:border-0
                           file:text-sm file:font-semibold
                           file:bg-green-600 file:text-white
                           hover:file:bg-green-700">



            </div>

            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg shadow-md transition duration-200">
                Kirim Dokumen
            </button>

        </form>

    </div>
</div>

</body>
</html>


@endsection
