@extends('pages.layouts.headeruser')
@section('content')
   <div class="min-h-screen bg-gray-100 py-12 px-6">

    <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-lg p-10">

        <h1 class="text-3xl font-bold text-center mb-8">
            Silakan Lakukan Pembayaran
        </h1>

        <div class="bg-blue-50 rounded-2xl p-6 mb-8 space-y-3">
            <h2 class="text-xl font-semibold mb-4">Rincian Biaya</h2>

            <div class="flex justify-between">
                <span>Biaya Form</span>
                <span>Rp 200.000</span>
            </div>

            <div class="flex justify-between">
                <span>Uang Gedung</span>
                <span>Rp 40.000.000</span>
            </div>

            <div class="flex justify-between">
                <span>Uang Masuk</span>
                <span>Rp 20.000.000</span>
            </div>

            <hr>

            <div class="flex justify-between font-bold text-lg">
                <span>Total</span>
                <span>Rp 60.200.000</span>
            </div>
        </div>

        <div class="text-center mb-10">
            <p class="mb-4 font-medium">Scan QR atau Transfer ke Rekening Berikut</p>
            <img src="kiris.png" class="w-100 mx-auto rounded-xl shadow-md" alt="">
        </div>

        <form action="/payment" enctype="multipart/form-data" method="POST">
            @csrf

            <label for="dropzone-file"
                class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed border-gray-300 rounded-2xl cursor-pointer hover:bg-gray-50 transition">

                <div class="flex flex-col items-center justify-center pt-5 pb-6 text-gray-500">
                    <svg class="w-10 h-10 mb-4" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 16v-8m0 0-3 3m3-3 3 3M20 16.5A4.5 4.5 0 0015.5 12H15a5 5 0 10-9.9 1A4 4 0 004 16.5A3.5 3.5 0 007.5 20h9A3.5 3.5 0 0020 16.5z" />
                    </svg>

                    <p class="mb-2 text-sm">
                        <span class="font-semibold">Klik untuk upload</span> atau drag & drop
                    </p>
                    <p class="text-xs text-gray-400">PNG, JPG (Max 2MB)</p>
<p id="file-name" class="text-sm text-green-600 mt-2"></p>

                </div>

                <input id="dropzone-file" type="file" name="foto_payment" class="hidden" required />
            </label>

            <button type="submit"
                class="mt-8 w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-2xl font-semibold transition shadow-md">
                Kirim Bukti Pembayaran
            </button>

        </form>

    </div>

</div>


<script>
    const input = document.getElementById('dropzone-file');
    const fileName = document.getElementById('file-name');

    input.addEventListener('change', function () {
        if (input.files.length > 0) {
            fileName.textContent = "File dipilih: " + input.files[0].name;
        }
    });
</script>



@endsection
