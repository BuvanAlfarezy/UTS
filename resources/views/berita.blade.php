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
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Berita Seputar UMKM</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    Temukan informasi, tips, dan kisah inspiratif dari para pelaku UMKM lokal yang berkembang bersama kami.
                </p>
            </div>

            <div class="grid gap-8 lg:grid-cols-2">
                <!-- Artikel -->
                @for ($i = 1; $i <= 4; $i++)
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <img src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&cs=tinysrgb&h=400"
                             alt="Produk UMKM" class="w-full h-48 object-cover rounded-lg mb-4" />

                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">UMKM Lokal</span>
                            <span class="text-sm">14 hari yang lalu</span>
                        </div>

                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Strategi Meningkatkan Penjualan Produk Lokal</a>
                        </h2>

                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                            Pelajari cara pelaku UMKM memaksimalkan pemasaran digital untuk menjangkau konsumen lebih luas.
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
                @endfor
            </div>
        </div>
    </section>

    <!-- Modal Detail -->
    <div id="detailModal" tabindex="-1" aria-hidden="true"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full bg-black/50 backdrop-blur-sm">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Detail Artikel
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="detailModal">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Artikel ini membahas berbagai strategi yang telah diterapkan oleh pelaku UMKM di Indonesia untuk memperluas pasar dan meningkatkan penjualan, mulai dari pemasaran digital, branding produk, hingga kolaborasi dengan platform e-commerce lokal.
                    </p>
                </div>
                <div class="flex items-center justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="detailModal" type="button"
                            class="text-white bg-blue-600 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
