@extends('pages.layouts.headeruser')
@section('content')
<div class=" min-h-screen justify-center items-center pt-20 ">

<div class="flex justify-center mt-10">
    <div id="ktm" class="w-125 bg-white rounded-2xl shadow-xl overflow-hidden border">

        <div class="bg-blue-600 flex items-center gap-4 p-4">
            <div class="bg-white rounded-full p-2">
                <img src="{{ asset('binus3.svg') }}" class="w-12 h-12" alt="">
            </div>
            <h1 class="text-white text-xl font-semibold tracking-wide">
                KARTU MAHASISWA
            </h1>
        </div>

        <div class="bg-gray-50 p-6 flex justify-between items-start gap-4">

            <div class="flex-1 space-y-3">

                @if($data1)
                    <h2 class="text-lg font-bold text-blue-700">
                        {{ strtoupper($data1->nama) }}
                    </h2>
                @endif

                @if($data2)
                    <p class="text-sm text-gray-700">
                        <span class="font-semibold">NIM :</span> {{ $data2->nim }}
                    </p>
                @endif

                <div class="pt-3">
                    <img src="{{ asset('qrcode.png') }}" class="w-20 h-20" alt="QR Code">
                </div>

                <p class="text-[10px] text-gray-500 leading-tight">
                    Berlaku selama menjadi mahasiswa BINUS University.
                    Setiap semester mahasiswa wajib melakukan registrasi ulang.
                </p>
            </div>

            <div class="w-27.5 h-35 rounded-lg overflow-hidden border shadow-sm bg-white">
                @if($data1)
                    <img src="{{ asset('uploads/image/foto_pas/' . $data1->foto_pas) }}"
                         class="w-full h-full object-cover"
                         alt="Foto Pas">
                @endif
            </div>

        </div>

    </div>
</div>
<div class="flex justify-center mt-6">
    <button onclick="downloadKTM()"
        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow">
        Download KTM
    </button>
</div>
</div>

   <footer class="bg-green-900 text-white">

        <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-10">

            <div>
                <h1 class="font-bold text-3xl mb-4">GABUNG BINUS</h1>
                <p class="text-lg">BINUS UNIVERSITY</p>
                <p class="text-lg mb-4">HIGHER EDUCATION</p>
                <p class="text-sm text-green-200">
                    Wujudkan masa depan pendidikan terbaik bersama BINUS Higher Education.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-xl mb-4">Locations</h2>
                <ul class="grid grid-cols-2 gap-2 text-green-200 text-sm">
                    <li>BINUS @Kemanggisan</li>
                    <li>BINUS @Alam Sutera</li>
                    <li>BINUS @Senayan</li>
                    <li>BINUS @Bekasi</li>
                    <li>BINUS @Bandung</li>
                    <li>BINUS @Malang</li>
                    <li>BINUS @Semarang</li>
                    <li>BINUS @Medan</li>
                </ul>
            </div>

        </div>

        <div class="border-t border-green-700 py-5 text-center text-sm text-green-300">
            © {{ date('Y') }} BINUS Higher Education. All rights reserved.
        </div>

    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
function downloadKTM() {
    const ktm = document.getElementById('ktm');

    html2canvas(ktm, {
        scale: 3, // biar HD
        useCORS: true
    }).then(canvas => {
        const link = document.createElement('a');
        link.download = 'KTM.png';
        link.href = canvas.toDataURL('image/png');
        link.click();
    });
}
</script>

@endsection
