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
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="flex items-center justify-start p-4">
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                type="button">
                Filter by category
                <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                    Category
                </h6>
                <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                    <li class="flex items-center">
                        <input id="apple" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Apple (56)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="fitbit" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Fitbit (56)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="dell" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="dell" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Dell (56)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="asus" type="checkbox" value="" checked
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="asus" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Asus (97)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="logitech" type="checkbox" value="" checked
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="logitech" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Logitech (97)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="msi" type="checkbox" value="" checked
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="msi" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            MSI (97)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="bosch" type="checkbox" value="" checked
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="bosch" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Bosch (176)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="sony" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="sony" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Sony (234)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="samsung" type="checkbox" value="" checked
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="samsung" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Samsung (76)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="canon" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="canon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Canon (49)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="microsoft" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="microsoft" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Microsoft (45)
                        </label>
                    </li>
                    <li class="flex items-center">
                        <input id="razor" type="checkbox" value=""
                            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                        <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                            Razor (49)
                        </label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">

            </div>
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                <div
                    class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <!-- Gambar Random Pasar -->
                    <div class="mb-2 h-56 w-full">
                        <a href="#">
                            <img class="mx-auto h-full w-full object-cover"
                                src="https://images.pexels.com/photos/6311392/pexels-photo-6311392.jpeg?auto=compress&cs=tinysrgb&w=800"
                                alt="Pasar Tradisional" />
                        </a>
                    </div>
                    <div class="pt-2">
                        <div class="mb-4 flex items-center justify-between gap-4">
                            <div class="flex items-center justify-end gap-1">
                                <div id="tooltip-quick-look" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
                                    data-popper-placement="top">
                                    Quick look
                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                </div>
                            </div>
                        </div>
                        <a href="#"
                            class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">Apple
                            iMac 27", 1TB HDD, Retina 5K Display, M3 Max</a>
                        <ul class="mt-2 flex items-center gap-4">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fast Delivery</p>
                            </li>

                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best Price</p>
                            </li>
                        </ul>
                        <!-- Penjelasan Produk -->
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                            Ditenagai oleh chip Apple M3 Max terbaru, iMac ini hadir dengan layar Retina 5K dan
                            kapasitas penyimpanan besar. Cocok untuk desainer, editor video, dan pengguna profesional
                            lainnya.
                        </p>
                        <!-- Modal toggle -->
                        <div class="flex justify-center m-5">
                            <button id="readProductButton" data-modal-target="readProductModal"
                                data-modal-toggle="readProductModal"
                                class="block text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Lihat Detail
                            </button>
                        </div>


                        <!-- Main modal -->
                        <div id="readProductModal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                        <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                            <h3 class="font-semibold ">
                                                Apple iMac 27”
                                            </h3>
                                            <p class="font-bold">
                                                $2999
                                            </p>
                                        </div>
                                        <div>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="readProductModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                    </div>
                                    <dl>
                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                            Details</dt>
                                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Standard
                                            glass ,3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up
                                            to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6
                                            memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard -
                                            US.</dd>
                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                            Category</dt>
                                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                            Electronics/PC</dd>
                                    </dl>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center space-x-3 sm:space-x-4">
                                            <button type="button"
                                                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                    </path>
                                                    <path fill-rule="evenodd"
                                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Edit
                                            </button>
                                            <button type="button"
                                                class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                Preview
                                            </button>
                                        </div>
                                        <button type="button"
                                            class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                            <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</body>

</html>
