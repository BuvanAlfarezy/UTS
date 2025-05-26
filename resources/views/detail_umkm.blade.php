<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Informasi UMKM</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200">

    <header class="bg-white dark:bg-gray-800 shadow p-4">
        <h1 class="text-3xl font-bold text-center">Informasi UMKM</h1>
    </header>

    <main class="max-w-5xl mx-auto p-6 space-y-8">

        <!-- Data UMKM -->
        <section class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">

            <!-- Gambar Usaha/Toko -->
            <div class="mb-6">
                <img src="{{ asset('img/15.jpg') }}" alt="Foto Usaha Mandiri Craft"
                    class="w-full h-72 object-cover rounded-lg shadow-md" />
            </div>
            <h2 class="text-2xl font-semibold mb-4">Nama Usaha: <span class="text-blue-600">Mandiri Craft</span></h2>
            <p class="mb-2"><strong>Pemilik:</strong> Budi Santoso</p>
            <p class="mb-4 leading-relaxed">
                Mandiri Craft adalah usaha UMKM yang didirikan pada tahun 2010 dengan tujuan memajukan kerajinan lokal
                Bandung.
                Kami fokus membuat produk-produk berkualitas dengan sentuhan seni tradisional.
            </p>
        </section>

       <section class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
    <h3 class="text-xl font-semibold mb-4">Produk Unggulan Kami</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <!-- Produk 1 -->
        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
            <img src="{{ asset('img/16.jpg') }}" alt="Produk Kerajinan Kayu"
                class="w-full h-48 object-cover" />
            <div class="p-4 space-y-1">
                <h4 class="font-semibold text-lg">Kerajinan Kayu</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Produk kerajinan tangan kayu berkualitas tinggi dengan desain modern.
                </p>
                <p class="text-sm text-gray-800 dark:text-gray-200 font-medium">Harga: Rp150.000</p>
                <p class="text-sm text-gray-800 dark:text-gray-200">Bahan: Kayu Jati Belanda</p>
            </div>
        </div>

        <!-- Produk 2 -->
        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
            <img src="{{ asset('img/17.jpg') }}" alt="Tas Anyaman" class="w-full h-48 object-cover" />
            <div class="p-4 space-y-1">
                <h4 class="font-semibold text-lg">Tas Anyaman</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Tas anyaman tradisional dengan bahan ramah lingkungan dan kuat.
                </p>
                <p class="text-sm text-gray-800 dark:text-gray-200 font-medium">Harga: Rp120.000</p>
                <p class="text-sm text-gray-800 dark:text-gray-200">Bahan: Serat Pandan & Kulit Sintetis</p>
            </div>
        </div>

        <!-- Produk 3 -->
        <div class="bg-gray-100 dark:bg-gray-800 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
            <img src="{{ asset('img/18.jpg') }}" alt="Aksesoris Handmade" class="w-full h-48 object-cover" />
            <div class="p-4 space-y-1">
                <h4 class="font-semibold text-lg">Aksesoris Handmade</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Aksesoris unik buatan tangan yang cocok untuk koleksi dan hadiah.
                </p>
                <p class="text-sm text-gray-800 dark:text-gray-200 font-medium">Harga: Rp75.000</p>
                <p class="text-sm text-gray-800 dark:text-gray-200">Bahan: Manik-Manik Kaca & Kawat Tembaga</p>
            </div>
        </div>

    </div>
</section>


        <!-- Kontak & Sosial Media -->
        <section class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
            <h3 class="text-xl font-semibold mb-4">Kontak & Sosial Media</h3>
            <div class="space-y-4 text-gray-700 dark:text-gray-300">

                <!-- Instagram -->
                <a href="https://instagram.com/umkm_ig" target="_blank"
    class="flex items-center gap-3 text-pink-600 hover:text-pink-800 transition">
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2.2c3.2 0 3.584.012 4.849.07 1.366.062 2.633.355 3.608 1.33.975.975 1.268 2.242 1.33 3.608.058 1.265.07 1.649.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.355 2.633-1.33 3.608-.975.975-2.242 1.268-3.608 1.33-1.265.058-1.649.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.355-3.608-1.33-.975-.975-1.268-2.242-1.33-3.608C2.212 15.784 2.2 15.4 2.2 12s.012-3.584.07-4.849c.062-1.366.355-2.633 1.33-3.608C4.575 2.625 5.842 2.332 7.208 2.27 8.473 2.212 8.858 2.2 12 2.2zm0-2.2C8.736 0 8.332.012 7.053.07 5.468.142 4.045.474 2.91 1.609.774 3.745.442 5.168.37 6.753.312 8.032.3 8.436.3 12c0 3.564.012 3.968.07 5.247.072 1.585.404 3.008 1.539 4.143 1.135 1.135 2.558 1.467 4.143 1.539C8.032 23.988 8.436 24 12 24s3.968-.012 5.247-.07c1.585-.072 3.008-.404 4.143-1.539 1.135-1.135 1.467-2.558 1.539-4.143.058-1.279.07-1.683.07-5.247s-.012-3.968-.07-5.247c-.072-1.585-.404-3.008-1.539-4.143C20.255.774 18.832.442 17.247.37 15.968.312 15.564.3 12 .3zM12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 10.162a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
    </svg>
    <span>@umkm_ig</span>
</a>


                <!-- Facebook -->
                <a href="https://facebook.com/umkm_fb" target="_blank"
                    class="flex items-center gap-3 text-blue-600 hover:text-blue-800 transition">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.675 0h-21.35C.598 0 0 .598 0 1.325v21.351C0 23.402.598 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.408c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.59l-.467 3.622h-3.123V24h6.116C23.403 24 24 23.402 24 22.675V1.325C24 .598 23.403 0 22.675 0z" />
                    </svg>
                    <span>UMKM Facebook</span>
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/6281234567890" target="_blank"
                    class="flex items-center gap-3 text-green-600 hover:text-green-800 transition">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.52 17.525c-.3-.15-1.77-.875-2.04-.975-.27-.1-.47-.15-.67.15s-.77.975-.95 1.175c-.17.2-.35.225-.65.075-.3-.15-1.27-.47-2.42-1.5-.89-.795-1.49-1.77-1.67-2.07-.17-.3-.02-.465.13-.615.13-.13.3-.35.45-.525.15-.175.2-.3.3-.5.1-.2.05-.375-.025-.525-.075-.15-.67-1.62-.915-2.225-.25-.6-.5-.5-.675-.5-.175 0-.375-.025-.575-.025s-.525.075-.8.375c-.275.3-1.05 1.025-1.05 2.5 0 1.475 1.075 2.9 1.225 3.1.15.2 2.115 3.25 5.13 4.55.72.31 1.285.495 1.725.63.725.23 1.385.2 1.9.125.575-.085 1.77-.725 2.02-1.43.25-.7.25-1.3.175-1.43-.075-.125-.275-.2-.575-.35z" />
                    </svg>
                    <span>+62 812-3456-7890</span>
                </a>

                <!-- Lokasi -->
                <div class="flex items-center gap-3 text-red-600">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                    </svg>
                    <a href="https://maps.google.com/?q=UMKM+Bandung" target="_blank"
                        class="hover:underline text-red-600 dark:text-red-400 font-medium">
                        Jl. UMKM Mandiri No. 12, Bandung
                    </a>
                </div>
            </div>
        </section>

        <!-- Tombol Kembali -->
        <div class="text-center">
            <a href="javascript:history.back()"
                class="inline-block bg-blue-600 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded-lg transition">
                Kembali
            </a>
        </div>
    </main>

</body>

</html>
