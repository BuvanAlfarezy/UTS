<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar UMKM - Berita & Artikel</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<body>
    <x-navbar />

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Berita
                    Seputar UMKM</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    Temukan informasi, tips, dan kisah inspiratif dari para pelaku UMKM lokal yang berkembang bersama
                    kami.
                </p>
                <div class="mt-6 flex justify-center items-center gap-4">
                    <select id="kategori"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-48 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        <option value="">Semua Kategori</option>
                        <option value="makanan">Makanan</option>
                        <option value="pakaian">Pakaian</option>
                        <option value="kerajinan">Kerajinan</option>
                    </select>
                    <button type="button" id="terapkanFilter"
                        class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600">
                        Terapkan
                    </button>
                </div>

            </div>

            <div class="grid gap-8 lg:grid-cols-2">
                <!-- Artikel 1 -->
                <article data-kategori="makanan"
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{ asset('img/10.jpg') }}" alt="Produk UMKM"
                        class="w-full h-48 object-cover rounded-lg mb-4" />

                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <!-- Label UMKM + Kategori di kiri -->
                        <div class="flex space-x-1">
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                UMKM Bandung
                            </span>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded dark:bg-blue-200 dark:text-blue-900">
                                Makanan
                            </span>
                        </div>

                        <!-- Tanggal di kanan -->
                        <span class="text-sm">2 hari yang lalu</span>
                    </div>


                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Menggali Potensi Kuliner Tradisional di Era Digital</a>
                    </h2>

                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        UMKM kuliner semakin berkembang lewat media sosial dan platform pemesanan online. Temukan cara
                        memaksimalkan peluang ini.
                    </p>

                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">Admin UMKM</span>
                        </div>
                        <a href="{{ url('/detail') }}"
                            class="inline-flex items-center font-medium text-blue-600 dark:text-blue-400 hover:underline">
                            Lihat Detail
                        </a>
                    </div>
                </article>

                <!-- Artikel 2 -->
                <article data-kategori="kerajinan"
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{ asset('img/11.jpg') }}" alt="Produk UMKM"
                        class="w-full h-48 object-cover rounded-lg mb-4" />

                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <!-- Label UMKM + Kategori di kiri -->
                        <div class="flex space-x-1">
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                UMKM Bandung
                            </span>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded dark:bg-blue-200 dark:text-blue-900">
                                Kerajinan
                            </span>
                        </div>

                        <!-- Tanggal di kanan -->
                        <span class="text-sm">4 hari yang lalu</span>
                    </div>

                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Desain Kemasan yang Menjual: Tips untuk UMKM</a>
                    </h2>

                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        Kemasan bukan hanya pelindung, tapi juga alat pemasaran. Berikut strategi desain kemasan yang
                        menarik perhatian konsumen.
                    </p>

                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">Admin UMKM</span>
                        </div>
                        <button data-modal-target="detailModal" data-modal-toggle="detailModal"
                            class="inline-flex items-center font-medium text-blue-600 dark:text-blue-400 hover:underline">
                            Lihat Detail
                        </button>
                    </div>
                </article>

                <!-- Artikel 3 -->
                <article data-kategori="pakaian"
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{ asset('img/19.jpg') }}" alt="Produk UMKM"
                        class="w-full h-48 object-cover rounded-lg mb-4" />

                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <!-- Label UMKM + Kategori di kiri -->
                        <div class="flex space-x-1">
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                UMKM Fashion
                            </span>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded dark:bg-blue-200 dark:text-blue-900">
                                Pakaian
                            </span>
                        </div>

                        <!-- Tanggal di kanan -->
                        <span class="text-sm">7 hari yang lalu</span>
                    </div>

                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Membangun Brand Fashion Lokal dengan Cerita</a>
                    </h2>

                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        Cerita di balik produk memberikan nilai emosional bagi konsumen. Simak bagaimana brand UMKM
                        fashion membangun narasi yang kuat.
                    </p>

                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">Admin UMKM</span>
                        </div>
                        <button data-modal-target="detailModal" data-modal-toggle="detailModal"
                            class="inline-flex items-center font-medium text-blue-600 dark:text-blue-400 hover:underline">
                            Lihat Detail
                        </button>
                    </div>
                </article>

                <!-- Artikel 4 -->
                <article data-kategori="kerajinan"
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{ asset('img/9.jpg') }}" alt="Produk UMKM"
                        class="w-full h-48 object-cover rounded-lg mb-4" />

                   <div class="flex justify-between items-center mb-5 text-gray-500">
                        <!-- Label UMKM + Kategori di kiri -->
                        <div class="flex space-x-1">
                            <span
                                class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                UMKM Fashion
                            </span>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded dark:bg-blue-200 dark:text-blue-900">
                                Kerajinan
                            </span>
                        </div>

                        <!-- Tanggal di kanan -->
                        <span class="text-sm">2 minggu yang lalu</span>
                    </div>

                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Mengoptimalkan Marketplace untuk UMKM</a>
                    </h2>

                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                        Marketplace seperti Tokopedia dan Shopee menawarkan peluang besar. Ini cara pelaku UMKM bisa
                        menonjol di tengah persaingan.
                    </p>

                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">Admin UMKM</span>
                        </div>
                        <button data-modal-target="detailModal" data-modal-toggle="detailModal"
                            class="inline-flex items-center font-medium text-blue-600 dark:text-blue-400 hover:underline">
                            Lihat Detail
                        </button>
                    </div>
                </article>

            </div>
        </div>
        <x-footer />
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const button = document.getElementById("terapkanFilter");
            const select = document.getElementById("kategori");
            const articles = document.querySelectorAll("article[data-kategori]");

            button.addEventListener("click", function() {
                const selected = select.value;

                articles.forEach(article => {
                    const kategori = article.getAttribute("data-kategori");

                    if (selected === "" || kategori === selected) {
                        article.classList.remove("hidden");
                    } else {
                        article.classList.add("hidden");
                    }
                });
            });
        });
    </script>

</body>

</html>
