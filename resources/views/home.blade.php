<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasar UMKM</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<body>
    <x-navbar />
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pasar UMKM</h2>
                <p class="mb-4">Temukan pasar digital yang menghubungkan inovator, pengusaha kecil, dan kreator lokal
                    dalam satu platform.
                    Mudah digunakan, cepat, dan dirancang untuk tumbuh bersama Anda.</p>
                <p>Kami percaya UMKM adalah tulang punggung ekonomi. Karena itu, kami menyediakan tempat terbaik untuk
                    mempromosikan, berkolaborasi, dan berkembang.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('img/3.jpg') }}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg object-cover "src="{{ asset('img/5.jpg') }}"
                    alt="office content 2">
            </div>
        </div>
    </section>
   <section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto gap-8 lg:grid-cols-12 lg:items-center">
        
        <!-- Gambar -->
        <div class="lg:col-span-5 flex justify-center">
            <img src="{{ asset('img/16.png') }}" alt="mockup" class="w-full max-w-md lg:max-w-full">
        </div>

        <!-- Konten Teks -->
        <div class="lg:col-span-7 flex flex-col justify-center">
            <h1 class="text-3xl font-extrabold tracking-tight leading-tight mb-4 md:text-5xl xl:text-6xl dark:text-white">
                Pemasaran Digital Untuk UMKM
            </h1>
            <p class="font-light text-gray-600 md:text-lg lg:text-xl dark:text-gray-400">
                Berbagai produk UMKM Indonesia yang bisa dilihat oleh seluruh masyarakat Indonesia.
            </p>
        </div>

    </div>
</section>


    <section class="bg-white dark:bg-gray-900 min-h-screen flex items-center justify-center">
        <div class="text-center px-4 max-w-2xl">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                Ayo dukung UMKM Lokal!
            </h1>
            <p class="mb-6 font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400">
                Jadi salah satu penggerak ekonomi dan mendukung terus usaha lokal dengan membeli dan memakai produk
                lokal.
            </p>
        </div>
    </section>
    <x-footer />
</body>

</html>
