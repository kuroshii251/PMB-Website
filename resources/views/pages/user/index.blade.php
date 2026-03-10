<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
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

<body class="open-sans">
    <div class="flex">
        <div class="flex flex-1 mt-0 pt-0  m-0">
            <img src="bendera.png" class="pl-10 w-20" alt="">
            <a href="/">
                <img src="binus3.svg" class="pl-10" alt="">

            </a>

        </div>
        <div class="justify-end flex space-x-1 pr-10 items-end ">

            <img src="Binus Logo.svg" class="size-12 mr-10" alt="">
            <a href="/login">
                <div class="bg-blue-500 w-30 rounded-l-4xl size-10">

                    <img src="gabungs.svg" class="size-10 rounded-r-2xl mx-auto" alt="">
                </div>
            </a>
            <a href="/login">
                <div class="bg-orange-500 w-50 size-10 p-1  rounded-r-4xl">
                    <h1
                        class="text-white text-center items-center flex    mx-auto justify-center open-sans text-md mt-1 font-semibold">
                        MULAI DARI SINI →</h1>
                </div>
            </a>
        </div>
    </div>
    <div class="flex " id="home">
        <div class="flex-1 ">
        </div>
        <div class="justify-end flex pt-5 space-x-10 items-end pr-20 mb-5 ">
            <a href="#home" class="text-gray-700 text-lg font-semibold hover:text-orange-600">Home</a>
            <a href="#about" class="text-gray-700 text-lg font-semibold hover:text-orange-600">About</a>
            <a href="#facility" class="text-gray-700 text-lg font-semibold hover:text-orange-600">Facility</a>
            <a href="#contact" class="text-gray-700 font-semibold text-lg hover:text-orange-600">Contact</a>
        </div>
    </div>

    <div class="relative h-130">
        <div class="absolute inset-0 bg-[url('image.png')]
              bg-no-repeat bg-cover">
        </div>

        <div class="relative  pt-50 p-10 h-full">
            <h1 class="text-4xl">
                THE UNIVERSITY YOU DREAM OF <br> THE FUTURE THEY BELIEVE IN

            </h1>
            <div class="relative w-fit p-5 ml-5 mt-10">
                <div class="absolute -left-6 top-1/2 -translate-y-1/2">
                    <img src="{{ asset('mulaidarisini.svg') }}" class="w-30 h-25 rounded-full  " alt="">
                </div>
                <a href="/login">
                    <div
                        class="bg-orange-500 text-white font-semibold
                pl-20 pr-8 py-4 rounded-full text-lg">
                        MULAI DARI SINI →
                    </div>
                </a>
            </div>



        </div>
    </div>
    <div class="p-5  h-150 flex "id="about">
        <div class="grid grid-cols-2 p-5 pt-10 place-items-center">
            <div class="justify-center items-center">
                <h1 class="text-4xl font-black mb-5">ABOUT BINUS UNIVERSITY</h1>
                <p class="font-normal text-sm">BINUS University adalah Institusi Pendidikan Tinggi Indonesia bertaraf
                    dunia yang telah meraih akreditasi Unggul dari BAN-PT dan berada di peringkat 10 besar universitas
                    terbaik di Indonesia menurut World University Ranking 2026. Selain itu, BINUS University juga
                    mendapat predikat universitas bintang 5 menurut QS University Ranking. BINUS University tidak hanya
                    membekali Binusian dengan pengalaman belajar di kampus tetapi juga memberikan pengalaman langsung di
                    industri. Komitmen ini diwujudkan melalui program (2+1)+1, yang mencakup 2 tahun belajar di kampus
                    asal, 1 tahun di kampus BINUS lain di kota yang berbeda, dan 1 tahun dalam salah satu dari 7 program
                    enrichment, yaitu: Magang, Pengabdian Masyarakat, Penelitian, Kewirausahaan, Studi ke Luar Negeri,
                    Studi Mandiri Khusus, dan Studi Lanjutan. Program ini mempersiapkan BINUSIAN untuk menjadi individu
                    yang lebih kompeten dan siap bersaing di dunia profesional global sesuai bidang pilihan dan aspirasi
                    masa depan mereka.</p>

            </div>
            <div class="w-200">
                <img src="{{ asset('gedungbinus.png') }}" class="size-80 w-auto mx-30 " alt="">
            </div>

        </div>
    </div>
    <div class="p-0 m-0 pt-10 text-center h-150">
        <h1 class="m-0 leading-none text-4xl font-normal">
            ACHIEVEMENT
        </h1>
        <h1 class="m-0 leading-none text-5xl font-bold">
            BINUS UNIVERSITY
        </h1>

        <img src="wur.svg" class="block mt-10 mb-5 w-200 mx-auto" alt="">
    </div>




    <div class="bg-[#0097da] p-4">
        <div class="flex justify-center items-center flex-col h-30">
            <h1 class="text-white text-3xl">Mengapa Memilih</h1>
            <h1 class="text-white text-5xl font-extrabold">BINUS UNIVERSITY?</h1>

        </div>
        <div class="grid grid-cols-3 space-x-2 space-y-3 pt-10 place-items-center ">
            <div class="bg-white p-4 h-80 rounded-3xl">
                <div class="mt-5">
                    <img src="program.svg" class="size-30 mx-auto " alt="">
                </div>
                <div class="text-center p-3">
                    <h1 class="font-bold text-xl mt-3 mb-2">(2+1)+1 Program</h1>
                    <p class="text-xs w-70 font-normal">Mahasiswa akan menjalani 2 tahun kuliah di kampus asal, 1 tahun
                        kuliah di kampus BINUS di kota lain, dan 1 tahun mengambil salah satu dari 7 program enrichment.
                    </p>
                </div>

            </div>
            <div class="bg-white p-4 h-80 rounded-3xl">
                <div class="mt-5">
                    <img src="globalcareer.avif" class="size-30 mx-auto " alt="">
                </div>
                <div class="text-center p-3">
                    <h1 class="font-bold text-xl mt-3 mb-2">Global Career & <br>Entrepreneurship Opportunity
                    </h1>
                    <p class="text-xs w-80 mx-auto font-normal">BINUS University mengantar 2 dari 3 lulusannya untuk
                        bekerja di perusahaan multinasional atau berwirausaha.
                    </p>
                </div>

            </div>
            <div class="bg-white p-4 h-80 rounded-3xl">
                <div class="mt-5">
                    <img src="internalization.avif" class="size-30 mx-auto " alt="">
                </div>
                <div class="text-center">

                    <h1 class="font-bold text-xl mt-3 mb-2">Internationalization</h1>
                    <p class="text-xs font-normal w-80">BINUS University mempersiapkan beragam program dan kegiatan
                        internasionalisasi untuk membekali kamu dengan pengalaman internasional.</p>
                </div>

            </div>
            <div class="bg-white p-4 h-80 rounded-3xl">
                <div class="mt-5">
                    <img src="minorprogram.avif" class="size-30 mx-auto " alt="">
                </div>
                <div class="text-center">
                    <h1 class="font-bold text-xl mt-3 mb-2">Minor Program</h1>
                    <p class="text-xs w-80">BINUS memungkinkan mahasiswa memiliki fleksibilitas dalam mengembangkan
                        potensi akademik sesuai passion-nya.</p>
                </div>

            </div>
            <div class="bg-white p-4 h-80 rounded-3xl">
                <div class="mt-5">
                    <img src="globalopportunities.avif" class="size-30 mx-auto " alt="">
                </div>
                <div class="text-center">
                    <h1 class="font-bold text-xl mt-3 mb-2">Global Opportunities</h1>
                    <p class="text-xs w-80">BINUS University membekali mahasiswa dengan pengalaman dengan berbagai
                        kegiatan baik di dalam maupun luar negeri</p>
                </div>

            </div>

        </div>
    </div>



    <div class="h-300 shadow bg-slate-50 rounded-xl items-center m-8 shadow-black justify-center flex-1 ">
        <div class="grid grid-cols-2 p-10 place-content-center gap-12">
            <div class=" w-400">
                <img src="{{ asset('Binuskemanggisan.avif') }}" class="rounded-xl " alt="">
            </div>
            <div class="ml-5">
                <h1 class="font-bold text-4xl">BINUS @Kemanggisan</h1>
                <div class="mb-2 mt-2">
                    <a href="https://maps.app.goo.gl/amnEz4FTHVSbb2vU6" class="text-black text-md text-decoration-none">Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat</a>

                </div>
                <p class="font-thin text-sm">Kampus ini tersebar di Kampus Anggrek, Kampus Syahdan, Kampus Kijang, dan
                    BINUS Square. Dengan program akademik yang berorientasi pada industri, kampus ini bertujuan untuk
                    menciptakan lulusan yang siap berkontribusi dalam dunia kerja dan masyarakat. Niat dan tujuan inilah
                    yang tercermin dalam tagline Binus Kemanggisan, "KITA: Kemanggisan Inovasi Tanpa Akhir."</p>
                <h1 class="font-bold text-2xl mt-5">
                    FAKULTAS
                </h1>
                <ul class="font-thin text-sm">
                    <li>School of Computer Science

                    </li>
                    <li>School of Information Systems</li>
                    <li> School of Design
                    </li>
                    <li> Business School
                    </li>
                    <li> School of Accounting
                    </li>
                    <li> Faculty of Digital Communication and Hotel & Tourism
                    </li>
                    <li> Faculty of Humanities
                    </li>
                    <li> Faculty of Engineering</li>
                </ul>
            </div>
        </div>
        <div class="bg-white text-center mt-5 p-3">
            <h1 class="text-5xl font-bold">PROGRAMS</h1>
            <p class="font-normal text-xl">BINUS @Kemanggisan</p>
        </div>
        <div class="grid grid-cols-3 place-content-center p-5">
            <div class="p-3 h-100 border-r-2 border-gray-300">
                <div class="">
                    <h1 class="font-black text-xl ">SCHOOL OF COMPUTER SCIENCE</h1>
                    <ul>
                        <li>Artificial Intelligence</li>
                        <li>Cyber Security</li>
                        <li>Game Application and Technology</li>
                        <li>Computer Science</li>
                        <li>Data Science</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">SCHOOL OF INFORMATION SYSTEMS</h1>
                    <ul>
                        <li>Information Systems</li>
                        <li>Business Analytics</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">SCHOOL OF DESIGN</h1>
                    <ul>
                        <li>Interior Design</li>
                        <li>Visual Communication Design - <br> Animation</li>
                        <li>Game Application and Technology</li>
                        <li>Visual Communication Design - <br>Creative Advertising</li>
                        <li>Visual Communication Design - <br>New Media</li>
                </div>

                </ul>
            </div>
            <div class="p-3 h-100 border-r-2 border-gray-300 m-5">
                <div class="pt-5">
                    <h1 class="font-black text-xl">SCHOOL OF <br>ACCOUNTING</h1>
                    <ul>
                        <li> Accounting</li>
                        <li> Taxation</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">FACULTY OF DIGITAL <br>COMMUNICATION AND <br>HOTEL & TOURISM</h1>
                    <ul>
                        <li> Communication - Marketing Communication
                        </li>
                        <li>Digital Media Communication</li>
                        <li> Hotel Management (D4)
                        </li>
                        <li> Event & Travel Business</li>
                </div>

                .
            </div>

            <div class="p-3 h-100m-5">
                <div class="pt-5">
                    <h1 class="font-black text-xl">BINUS BUSINESS SCHOOL <br>(UNDERGRADUATE)</h1>
                    <ul>
                        <li> Global Business Marketing
                        </li>
                        <li>Management</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">FACULTY OF DIGITAL <br>COMMUNICATION AND <br>HOTEL & TOURISM</h1>
                    <ul>
                        <li> Communication - Marketing Communication
                        </li>
                        <li>Digital Media Communication</li>
                        <li> Hotel Management (D4)
                        </li>
                        <li> Event & Travel Business</li>
                </div>

                .
            </div>
        </div>

    </div>

    <div class="h-300 shadow-sm  rounded-xl items-center m-8 shadow-black justify-center flex-1 ">
        <div class="grid grid-cols-2 p-10 place-content-center gap-12">

            <div class="">
                <h1 class="font-bold text-4xl">BINUS @Alam Sutera</h1>
<div class="mb-2 mt-2">
                    <a href="https://maps.app.goo.gl/nG2TpYJpjni9Md1Z7" class="text-black text-md text-decoration-none">Jl. Jalur Sutera Bar. No.Kav. 21, Panunggangan, Kec. Pinang, Kota Tangerang, Banten</a>
                </div>                 <p class="font-thin text-sm">BINUS @Alam Sutera, yang terletak di Tangerang, adalah salah satu pusat
                    pendidikan terkemuka yang dikenal dengan fasilitas modern dan lingkungan akademik yang canggih.
                    Kampus ini menginspirasi mahasiswa dalam mengejar pengetahuan dan pengembangan diri. Dengan
                    kurikulum internasional berstandar tinggi, didukung oleh dosen yang kompeten serta teknologi
                    mutakhir, BINUS @Alam Sutera menciptakan lingkungan belajar yang inovatif dan dinamis</p>
                <h1 class="font-bold text-2xl mt-5">
                    FAKULTAS
                </h1>
                <ul class="font-thin text-sm">
                    <li>School of Computer Science

                    </li>
                    <li>School of Information Systems</li>
                    <li> School of Design
                    </li>
                    <li> Business School
                    </li>
                    <li> School of Accounting
                    </li>
                    <li> Faculty of Digital Communication and Hotel & Tourism
                    </li>
                    <li> Faculty of Humanities
                    </li>
                    <li> Faculty of Engineering</li>
                </ul>
            </div>
            <div class=" w-400">
                <img src="{{ asset('Alsut.avif') }}" class="rounded-xl " alt="">
            </div>
        </div>
        <div class="bg-white text-center mt-5">
            <h1 class="text-5xl font-bold">PROGRAMS</h1>
            <p class="font-normal text-xl">BINUS @Kemanggisan</p>
        </div>
        <div class="grid grid-cols-3 place-content-center p-5">
            <div class="p-3 h-100 border-r-2 border-gray-300">
                <div class="">
                    <h1 class="font-black text-xl ">SCHOOL OF COMPUTER SCIENCE</h1>
                    <ul>
                        <li>Artificial Intelligence</li>
                        <li>Cyber Security</li>
                        <li>Game Application and Technology</li>
                        <li>Computer Science</li>
                        <li>Data Science</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">SCHOOL OF INFORMATION SYSTEMS</h1>
                    <ul>
                        <li>Information Systems</li>
                        <li>Business Analytics</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">SCHOOL OF DESIGN</h1>
                    <ul>
                        <li>Interior Design</li>
                        <li>Visual Communication Design - <br> Animation</li>
                        <li>Game Application and Technology</li>
                        <li>Visual Communication Design - <br>Creative Advertising</li>
                        <li>Visual Communication Design - <br>New Media</li>
                </div>

                </ul>
            </div>
            <div class="p-3 h-100 border-r-2 border-gray-300 m-5">
                <div class="pt-5">
                    <h1 class="font-black text-xl">SCHOOL OF <br>ACCOUNTING</h1>
                    <ul>
                        <li> Accounting</li>
                        <li> Taxation</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">FACULTY OF DIGITAL <br>COMMUNICATION AND <br>HOTEL & TOURISM</h1>
                    <ul>
                        <li> Communication - Marketing Communication
                        </li>
                        <li>Digital Media Communication</li>
                        <li> Hotel Management (D4)
                        </li>
                        <li> Event & Travel Business</li>
                </div>

                .
            </div>

            <div class="p-3 h-100m-5">
                <div class="pt-5">
                    <h1 class="font-black text-xl">BINUS BUSINESS SCHOOL <br>(UNDERGRADUATE)</h1>
                    <ul>
                        <li> Global Business Marketing
                        </li>
                        <li>Management</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">FACULTY OF DIGITAL <br>COMMUNICATION AND <br>HOTEL & TOURISM</h1>
                    <ul>
                        <li> Communication - Marketing Communication
                        </li>
                        <li>Digital Media Communication</li>
                        <li> Hotel Management (D4)
                        </li>
                        <li> Event & Travel Business</li>
                </div>

                .
            </div>
        </div>

    </div>

    <div class="h-300 shadow-sm  rounded-xl items-center m-8 shadow-black justify-center flex-1 ">
        <div class="grid grid-cols-2 p-10 place-content-center gap-12">
            <div class=" w-400">
                <img src="{{ asset('Binuskemanggisan.avif') }}" class="rounded-xl " alt="">
            </div>
            <div class="">
                <h1 class="font-bold text-4xl">BINUS @Bekasi</h1>
<div class="mb-2 mt-2">
                    <a href="https://maps.app.goo.gl/xL9cmEdVRvX8sEWd6" class="text-black text-md text-decoration-none">Kampus Binus Bekasi, Jalan Lingkar Boulevar Blok WA No.1 Summarecon Bekasi, Kota Bks, Jawa Barat</a>

                </div>                <p class="font-thin text-sm">Kampus ini tersebar di Kampus Anggrek, Kampus Syahdan, Kampus Kijang, dan
                   BINUS @Bekasi hadir untuk menjawab kebutuhan masyarakat Kota Bekasi dan sekitarnya dengan pendidikan bertaraf dunia yang tersebar di seluruh Indonesia. Kampus ini terus didorong dan diimplementasikan sesuai dengan cita-cita para perintis BINA NUSANTARA untuk membangun dan membina nusantara melalui pendidikan dan teknologi.</p>
                <h1 class="font-bold text-2xl mt-5">
                    FAKULTAS
                </h1>
                <ul class="font-thin text-sm">
                    <li>School of Computer Science

                    </li>
                    <li>School of Information Systems</li>
                    <li> School of Design
                    </li>
                    <li> Business School
                    </li>
                    <li> School of Accounting
                    </li>
                    <li> Faculty of Digital Communication and Hotel & Tourism
                    </li>
                    <li> Faculty of Humanities
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-white text-center mt-5">
            <h1 class="text-5xl font-bold">PROGRAMS</h1>
            <p class="font-normal text-xl">BINUS @Bekasi</p>
        </div>
        <div class="grid grid-cols-3 place-content-center p-5">
            <div class="p-3 h-100 border-r-2 border-gray-300">
                <div class="">
                    <h1 class="font-black text-xl ">SCHOOL OF COMPUTER SCIENCE</h1>
                    <ul>

                        <li>Computer Science - Software Engineering</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">SCHOOL OF INFORMATION SYSTEMS</h1>
                    <ul>
                        <li>Business Information Technology
</li>
                </div>

                </ul>
            </div>
            <div class="p-3 h-80 border-r-2 border-gray-300 m-5">
                <div class="">
                    <h1 class="font-black text-xl">BUSINESS SCHOOL <br>(UNDERGRADUATE)</h1>
                    <ul>
                        <li> Management</li>
<li>Business Management</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">SCHOOL OF ACCOUNTING</h1>
                    <ul>
                        <li>Accounting
                        </li>

                </div>
    <div class="pt-5">
                    <h1 class="font-black text-xl ">FACULTY OF HUMANITIES</h1>
                    <ul>
                        <li>Psychology
                        </li>

                </div>


                .
            </div>

            <div class="p-3 h-100m-5">
                <div class="pt-5">
                    <h1 class="font-black text-xl">FACULTY OF DIGITAL <br> COMMUNICATION AND <br> HOTEL TOURISM</h1>
                    <ul>
<li>Creative Communication</li>
<li>Business Hotel Management (D4)</li>
                </div>
                <div class="pt-5">
                    <h1 class="font-black text-xl ">DOUBLE PROGRAMS

</h1>
                    <ul>
                        <li>Digital Business Innovation (S1  <br>Creativepreneurship + S1 Information <br> Systems)</li>
                </div>
            </div>
        </div>

    </div>

    <div class="h-100">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d991.6172958065321!2d106.7822088!3d-6.201668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sUniversitas%20Bina%20Nusantara%20Kampus%20Anggrek!5e0!3m2!1sid!2sid!4v1770777352233!5m2!1sid!2sid"
            class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="bg-[#007aa5] h-80 justify-center flex flex-col items-center">
        <div class="">
            <h1 class="text-center text-white text-5xl w-180 font-normal">SUDAH SIAP MENJADI BAGIAN DARI <b>BINUS
                    UNIVERSITY?</b></h1>
        </div>
        <a href="" class="bg-orange-500 mt-7 p-3 w-60
0 text-center  text-white font-bold rounded-3xl">DAFTAR
            SEKARANG</a>
    </div>

    <footer class="bg-green-950 text-white">

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

</body>

</html>
