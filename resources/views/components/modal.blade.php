<div id="readProductModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail Produk UMKM
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="readProductModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1l6 6m0 0l6-6M7 7l6 6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <!-- Gambar Produk -->
                <img src="{{ asset('img/15.jpg') }}" alt="Gambar Produk UMKM"
                    class="w-full h-48 object-cover rounded-lg">

                <!-- Deskripsi Produk -->
                <p class="text-base leading-relaxed text-gray-700 dark:text-gray-300">
                    Ini adalah contoh produk UMKM yang ditampilkan dalam detail modal. Anda bisa menampilkan deskripsi,
                    harga, gambar, dan lainnya di sini.
                </p>

                <!-- Kontak & Sosial Media -->
                <div class="space-y-3 pt-4">
                    <!-- Instagram -->
                    <a href="https://instagram.com/umkm_ig" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-pink-600 transition">
                        <svg class="w-5 h-5 text-pink-600" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M7.75 2h8.5C17.22 2 18 2.78 18 3.75v16.5c0 .97-.78 1.75-1.75 1.75h-8.5C6.78 22 6 21.22 6 20.25V3.75C6 2.78 6.78 2 7.75 2zM12 7.25A4.75 4.75 0 1 0 12 16.75 4.75 4.75 0 1 0 12 7.25zM17.25 6.25a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        <span>@umkm_ig</span>
                    </a>

                    <!-- Facebook -->
                    <a href="https://facebook.com/umkm_fb" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 transition">
                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35C.598 0 0 .598 0 1.325v21.351C0 23.402.598 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.408c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.59l-.467 3.622h-3.123V24h6.116C23.403 24 24 23.402 24 22.675V1.325C24 .598 23.403 0 22.675 0z" />
                        </svg>
                        <span>UMKM Facebook</span>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-green-600 transition">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.52 17.525c-.3-.15-1.77-.875-2.04-.975-.27-.1-.47-.15-.67.15s-.77.975-.95 1.175c-.17.2-.35.225-.65.075-.3-.15-1.27-.47-2.42-1.5-.89-.795-1.49-1.77-1.67-2.07-.17-.3-.02-.465.13-.615.13-.13.3-.35.45-.525.15-.175.2-.3.3-.5.1-.2.05-.375-.025-.525-.075-.15-.67-1.62-.915-2.225-.25-.6-.5-.5-.675-.5-.175 0-.375-.025-.575-.025s-.525.075-.8.375c-.275.3-1.05 1.025-1.05 2.5 0 1.475 1.075 2.9 1.225 3.1.15.2 2.115 3.25 5.13 4.55.72.31 1.285.495 1.725.63.725.23 1.385.2 1.9.125.575-.085 1.77-.725 2.02-1.43.25-.7.25-1.3.175-1.43-.075-.125-.275-.2-.575-.35z" />
                        </svg>
                        <span>+62 812-3456-7890</span>
                    </a>


                    <!-- Lokasi -->
                    <div class="flex items-center gap-2 text-gray-600 dark:text-gray-300">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                        </svg>
                        <a href="https://maps.google.com/?q=UMKM+Bandung" target="_blank"
                            class="hover:underline text-blue-600 dark:text-blue-400">
                            Jl. UMKM Mandiri No. 12, Bandung
                        </a>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="readProductModal" type="button"
                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-700 dark:hover:bg-blue-900 dark:focus:ring-blue-800">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<div id="readProductModal2" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail Produk UMKM
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="readProductModal2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1l6 6m0 0l6-6M7 7l6 6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <!-- Gambar Produk -->
                <img src="{{ asset('img/17.png') }}" alt="Gambar Produk UMKM"
                    class="w-full h-48 object-cover rounded-lg">

                <!-- Deskripsi Produk -->
                <p class="text-base leading-relaxed text-gray-700 dark:text-gray-300">
                    Ini adalah contoh produk UMKM yang ditampilkan dalam detail modal. Anda bisa menampilkan deskripsi,
                    harga, gambar, dan lainnya di sini.
                </p>

                <!-- Kontak & Sosial Media -->
                <div class="space-y-3 pt-4">
                    <!-- Instagram -->
                    <a href="https://instagram.com/umkm_ig" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-pink-600 transition">
                        <svg class="w-5 h-5 text-pink-600" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M7.75 2h8.5C17.22 2 18 2.78 18 3.75v16.5c0 .97-.78 1.75-1.75 1.75h-8.5C6.78 22 6 21.22 6 20.25V3.75C6 2.78 6.78 2 7.75 2zM12 7.25A4.75 4.75 0 1 0 12 16.75 4.75 4.75 0 1 0 12 7.25zM17.25 6.25a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        <span>@umkm_ig</span>
                    </a>

                    <!-- Facebook -->
                    <a href="https://facebook.com/umkm_fb" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 transition">
                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35C.598 0 0 .598 0 1.325v21.351C0 23.402.598 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.408c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.59l-.467 3.622h-3.123V24h6.116C23.403 24 24 23.402 24 22.675V1.325C24 .598 23.403 0 22.675 0z" />
                        </svg>
                        <span>UMKM Facebook</span>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-green-600 transition">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.52 17.525c-.3-.15-1.77-.875-2.04-.975-.27-.1-.47-.15-.67.15s-.77.975-.95 1.175c-.17.2-.35.225-.65.075-.3-.15-1.27-.47-2.42-1.5-.89-.795-1.49-1.77-1.67-2.07-.17-.3-.02-.465.13-.615.13-.13.3-.35.45-.525.15-.175.2-.3.3-.5.1-.2.05-.375-.025-.525-.075-.15-.67-1.62-.915-2.225-.25-.6-.5-.5-.675-.5-.175 0-.375-.025-.575-.025s-.525.075-.8.375c-.275.3-1.05 1.025-1.05 2.5 0 1.475 1.075 2.9 1.225 3.1.15.2 2.115 3.25 5.13 4.55.72.31 1.285.495 1.725.63.725.23 1.385.2 1.9.125.575-.085 1.77-.725 2.02-1.43.25-.7.25-1.3.175-1.43-.075-.125-.275-.2-.575-.35z" />
                        </svg>
                        <span>+62 812-3456-7890</span>
                    </a>


                    <!-- Lokasi -->
                    <div class="flex items-center gap-2 text-gray-600 dark:text-gray-300">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                        </svg>
                        <a href="https://maps.google.com/?q=UMKM+Bandung" target="_blank"
                            class="hover:underline text-blue-600 dark:text-blue-400">
                            Jl. UMKM Mandiri No. 12, Bandung
                        </a>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="readProductModal2" type="button"
                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-700 dark:hover:bg-blue-900 dark:focus:ring-blue-800">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<div id="readProductModal3" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Detail Produk UMKM
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="readProductModal3">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1l6 6m0 0l6-6M7 7l6 6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <!-- Gambar Produk -->
                <img src="{{ asset('img/18.jpeg') }}" alt="Gambar Produk UMKM"
                    class="w-full h-48 object-cover rounded-lg">

                <!-- Deskripsi Produk -->
                <p class="text-base leading-relaxed text-gray-700 dark:text-gray-300">
                    Ini adalah contoh produk UMKM yang ditampilkan dalam detail modal. Anda bisa menampilkan deskripsi,
                    harga, gambar, dan lainnya di sini.
                </p>

                <!-- Kontak & Sosial Media -->
                <div class="space-y-3 pt-4">
                    <!-- Instagram -->
                    <a href="https://instagram.com/umkm_ig" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-pink-600 transition">
                        <svg class="w-5 h-5 text-pink-600" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M7.75 2h8.5C17.22 2 18 2.78 18 3.75v16.5c0 .97-.78 1.75-1.75 1.75h-8.5C6.78 22 6 21.22 6 20.25V3.75C6 2.78 6.78 2 7.75 2zM12 7.25A4.75 4.75 0 1 0 12 16.75 4.75 4.75 0 1 0 12 7.25zM17.25 6.25a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        <span>@umkm_ig</span>
                    </a>

                    <!-- Facebook -->
                    <a href="https://facebook.com/umkm_fb" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-blue-600 transition">
                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35C.598 0 0 .598 0 1.325v21.351C0 23.402.598 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.408c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.59l-.467 3.622h-3.123V24h6.116C23.403 24 24 23.402 24 22.675V1.325C24 .598 23.403 0 22.675 0z" />
                        </svg>
                        <span>UMKM Facebook</span>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="flex items-center gap-2 text-gray-600 dark:text-gray-300 hover:text-green-600 transition">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.52 17.525c-.3-.15-1.77-.875-2.04-.975-.27-.1-.47-.15-.67.15s-.77.975-.95 1.175c-.17.2-.35.225-.65.075-.3-.15-1.27-.47-2.42-1.5-.89-.795-1.49-1.77-1.67-2.07-.17-.3-.02-.465.13-.615.13-.13.3-.35.45-.525.15-.175.2-.3.3-.5.1-.2.05-.375-.025-.525-.075-.15-.67-1.62-.915-2.225-.25-.6-.5-.5-.675-.5-.175 0-.375-.025-.575-.025s-.525.075-.8.375c-.275.3-1.05 1.025-1.05 2.5 0 1.475 1.075 2.9 1.225 3.1.15.2 2.115 3.25 5.13 4.55.72.31 1.285.495 1.725.63.725.23 1.385.2 1.9.125.575-.085 1.77-.725 2.02-1.43.25-.7.25-1.3.175-1.43-.075-.125-.275-.2-.575-.35z" />
                        </svg>
                        <span>+62 812-3456-7890</span>
                    </a>


                    <!-- Lokasi -->
                    <div class="flex items-center gap-2 text-gray-600 dark:text-gray-300">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                        </svg>
                        <a href="https://maps.google.com/?q=UMKM+Bandung" target="_blank"
                            class="hover:underline text-blue-600 dark:text-blue-400">
                            Jl. UMKM Mandiri No. 12, Bandung
                        </a>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="readProductModal3" type="button"
                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-700 dark:hover:bg-blue-900 dark:focus:ring-blue-800">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>



