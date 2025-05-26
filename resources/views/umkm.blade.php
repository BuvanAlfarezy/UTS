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

<body class="bg-gray-50 dark:bg-gray-900">

    <!-- Navbar -->
    <x-navbar />

    <!-- Container utama -->
    <section class="space-y-16 py-10 bg-white dark:bg-gray-900">

        <!-- Search Section -->
        <section class="max-w-2xl mx-auto px-4">
            <form>
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Cari produk UMKM..." required />
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Cari
                    </button>
                </div>
            </form>
        </section>

        <!-- Filter Section -->
        <section class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end mb-2">
                <form method="GET" action="" class="flex items-center space-x-3">
                    <label for="kategori" class="text-sm font-medium text-gray-700 dark:text-gray-300">Filter
                        Kategori:</label>
                    <select id="kategori" name="kategori"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option value="">Semua</option>
                        <option value="makanan" {{ request('kategori') == 'makanan' ? 'selected' : '' }}>Makanan
                        </option>
                        <option value="kerajinan" {{ request('kategori') == 'kerajinan' ? 'selected' : '' }}>Kerajinan
                        </option>
                        <option value="pakaian" {{ request('kategori') == 'pakaian' ? 'selected' : '' }}>Pakaian
                        </option>
                    </select>
                    <button type="submit"
                        class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-700 dark:hover:bg-blue-900 dark:focus:ring-blue-800">
                        Terapkan
                    </button>
                </form>
            </div>
        </section>


        <!-- Produk Grid Section -->
        <section class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                <!-- Produk 1: Keripik Pisang -->
                <div data-kategori="makanan"
                    class="rounded-lg border border-gray-200 bg-white shadow-sm p-6 dark:border-gray-700 dark:bg-gray-800">
                    <div class="mb-4 h-56 w-full overflow-hidden rounded-lg">
                        <a href="#"><img src="{{ asset('img/7.jpg') }}" alt="Keripik Pisang"
                                class="w-full h-full object-cover" /></a>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white hover:underline">Keripik Pisang Manis
                        Pedas</h3>

                    <!-- Tipe Kategori -->
                    <span
                        class="inline-block mt-2 mb-3 text-xs font-medium bg-yellow-100 text-yellow-800 px-3 py-1 rounded dark:bg-yellow-200 dark:text-yellow-900">
                        Makanan
                    </span>

                    <ul class="mt-1 flex flex-wrap gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <li class="flex items-center gap-2">🌶️ Rasa Pedas Manis</li>
                        <li class="flex items-center gap-2">🍌 100% Pisang Lokal</li>
                    </ul>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Keripik pisang khas Lampung dengan perpaduan rasa manis dan pedas yang bikin nagih. yang dapat dinikmati kapan saja
                    </p>
                    <div class="flex justify-center mt-5">
                        <button data-modal-target="readProductModal" data-modal-toggle="readProductModal"
                            class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-700 dark:hover:bg-blue-900 dark:focus:ring-blue-800">
                            Lihat Detail
                        </button>
                    </div>
                </div>


                <!-- Produk 2: Tas Anyaman Eceng Gondok -->
                <div data-kategori="kerajinan"
                    class="rounded-lg border border-gray-200 bg-white shadow-sm p-6 dark:border-gray-700 dark:bg-gray-800">
                    <div class="mb-4 h-56 w-full overflow-hidden rounded-lg">
                        <a href="#">
                            <img src="{{ asset('img/8.png') }}" alt="Tas Anyaman" class="w-full h-full object-cover" />
                        </a>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        <a href="#" class="hover:underline">Tas Anyaman Eceng Gondok</a>
                    </h3>
                    <span
                        class="inline-block mt-2 mb-3 text-xs font-medium bg-green-100 text-green-800 px-3 py-1 rounded dark:bg-green-200 dark:text-green-900">
                        Kerajinan
                    </span>
                    <ul class="mt-3 flex flex-wrap gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <li class="flex items-center gap-2">🧵 Handmade</li>
                        <li class="flex items-center gap-2">🌱 Bahan Alami</li>
                    </ul>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Produk kerajinan tangan ramah lingkungan dari pengrajin lokal Jepara. Elegan untuk dibawa saat
                        santai atau formal.
                    </p>
                    <div class="flex justify-center mt-5">
                        <button data-modal-target="readProductModal2" data-modal-toggle="readProductModal2"
                            class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-700 dark:hover:bg-blue-900 dark:focus:ring-blue-800">
                            Lihat Detail
                        </button>
                    </div>
                </div>

                <!-- Produk 3: Batik Tulis Pekalongan -->
                <div data-kategori="pakaian"
                    class="rounded-lg border border-gray-200 bg-white shadow-sm p-6 dark:border-gray-700 dark:bg-gray-800">
                    <div class="mb-4 h-56 w-full overflow-hidden rounded-lg">
                        <a href="#">
                            <img src="{{ asset('img/9.jpeg') }}" alt="Batik Tulis" class="w-full h-full object-cover" />
                        </a>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        <a href="#" class="hover:underline">Batik Tulis Motif Parang</a>
                    </h3>
                    
                    <span
                        class="inline-block mt-2 mb-3 text-xs font-medium bg-blue-100 text-blue-800 px-3 py-1 rounded dark:bg-blue-200 dark:text-blue-900">
                        Pakaian
                    </span>
                    <ul class="mt-3 flex flex-wrap gap-4 text-sm text-gray-500 dark:text-gray-400">
                        <li class="flex items-center gap-2">🎨 Motif Tradisional</li>
                        <li class="flex items-center gap-2">🧵 Bahan Katun Premium</li>
                    </ul>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Batik tulis khas Pekalongan dengan motif klasik yang cocok untuk acara formal dan non-formal.
                        Warna tahan lama.
                    </p>
                    <div class="flex justify-center mt-5">
                        <button data-modal-target="readProductModal3" data-modal-toggle="readProductModal3"
                            class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-700 dark:hover:bg-blue-900 dark:focus:ring-blue-800">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <x-modal />
    <x-footer />
   <script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector('form[action=""]'); // ambil form filter kategori
        const select = document.getElementById("kategori");
        const cards = document.querySelectorAll("[data-kategori]");

        form.addEventListener("submit", function (e) {
            e.preventDefault(); // mencegah reload halaman

            const selected = select.value;

            cards.forEach(card => {
                const kategori = card.getAttribute("data-kategori");

                if (selected === "" || kategori === selected) {
                    card.classList.remove("hidden");
                } else {
                    card.classList.add("hidden");
                }
            });
        });
    });
</script>



</body>

</html>
