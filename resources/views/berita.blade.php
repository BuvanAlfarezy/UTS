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
    <x-navbar></x-navbar>
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16 min-h-screen">
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
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Berita Seputar UMKM</h2>
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full px-2 sm:px-4 flex-none max-w-screen-2xl">
                  <div class="space-y-6 max-w-screen-2xl mx-auto px-2">
                      <!-- Card berita clickable -->
                      <a href="#" class="block rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 p-4 md:p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex flex-col md:flex-row gap-4 md:gap-6 items-start">
                          <div class="shrink-0 w-full md:w-60 h-36 overflow-hidden rounded-md">
                            <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Berita 1" class="h-full w-full object-cover dark:hidden" />
                            <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Berita 1" class="h-full w-full object-cover hidden dark:block" />
                          </div>
                          <div class="flex flex-col justify-between flex-1 space-y-4">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white leading-snug">
                              UMKM Indonesia Kembangkan Bisnis Lewat Digitalisasi
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                              Digitalisasi menjadi peluang besar bagi pelaku UMKM untuk meningkatkan jangkauan pasar serta efisiensi operasional bisnis di era modern saat ini.
                            </p>
                          </div>
                        </div>
                      </a>
                    
                      <!-- Card berita kedua -->
                      <a href="#" class="block rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 p-4 md:p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex flex-col md:flex-row gap-4 md:gap-6 items-start">
                          <div class="shrink-0 w-full md:w-60 h-36 overflow-hidden rounded-md">
                            <img src="https://images.pexels.com/photos/3184630/pexels-photo-3184630.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Berita 2" class="h-full w-full object-cover dark:hidden" />
                            <img src="https://images.pexels.com/photos/3184630/pexels-photo-3184630.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Berita 2" class="h-full w-full object-cover hidden dark:block" />
                          </div>
                          <div class="flex flex-col justify-between flex-1 space-y-4">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white leading-snug">
                              Pemerintah Dukung UMKM Lewat Pelatihan Digital
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                              Pelatihan digital untuk UMKM digelar guna mempercepat transformasi bisnis dan memperluas pasar di era digital.
                            </p>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="block rounded-lg border border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 p-4 md:p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex flex-col md:flex-row gap-4 md:gap-6 items-start">
                          <div class="shrink-0 w-full md:w-60 h-36 overflow-hidden rounded-md">
                            <img src="https://images.pexels.com/photos/3184630/pexels-photo-3184630.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Berita 2" class="h-full w-full object-cover dark:hidden" />
                            <img src="https://images.pexels.com/photos/3184630/pexels-photo-3184630.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Berita 2" class="h-full w-full object-cover hidden dark:block" />
                          </div>
                          <div class="flex flex-col justify-between flex-1 space-y-4">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white leading-snug">
                              Pemerintah Dukung UMKM Lewat Pelatihan Digital
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                              Pelatihan digital untuk UMKM digelar guna mempercepat transformasi bisnis dan memperluas pasar di era digital.
                            </p>
                          </div>
                        </div>
                      </a>
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
