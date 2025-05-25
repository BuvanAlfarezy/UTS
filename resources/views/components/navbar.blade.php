<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl mx-auto p-4 flex items-center justify-between">
    <!-- Tombol Hamburger di Kanan -->
    <button data-collapse-toggle="navbar-default" type="button"
      class="ml-auto inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
      aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>
  </div>

  <!-- Menu Utama -->
  <div class="hidden w-full md:block" id="navbar-default">
    <ul
      class="font-medium flex flex-col md:flex-row items-center justify-center text-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

      <!-- Home -->
      <li>
        <a href="{{ url('/') }}" aria-current="{{ request()->is('/') ? 'page' : '' }}"
          class="block py-2 px-3 rounded-sm md:p-0
            {{ request()->is('/')
              ? 'text-blue-700 bg-blue-100 md:bg-transparent md:text-blue-700 dark:text-blue-500 dark:bg-transparent'
              : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
          Home
        </a>
      </li>

      <!-- UMKM -->
      <li>
        <a href="{{ url('/umkm') }}" aria-current="{{ request()->is('umkm') ? 'page' : '' }}"
          class="block py-2 px-3 rounded-sm md:p-0
            {{ request()->is('umkm')
              ? 'text-blue-700 bg-blue-100 md:bg-transparent md:text-blue-700 dark:text-blue-500 dark:bg-transparent'
              : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
          UMKM
        </a>
      </li>

      <!-- Blog UMKM -->
      <li>
        <a href="{{ url('/berita') }}" aria-current="{{ request()->is('berita') ? 'page' : '' }}"
          class="block py-2 px-3 rounded-sm md:p-0
            {{ request()->is('berita')
              ? 'text-blue-700 bg-blue-100 md:bg-transparent md:text-blue-700 dark:text-blue-500 dark:bg-transparent'
              : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
          Blog UMKM
        </a>
      </li>

      <!-- About -->
      <li>
        <a href="{{ url('/about') }}" aria-current="{{ request()->is('about') ? 'page' : '' }}"
          class="block py-2 px-3 rounded-sm md:p-0
            {{ request()->is('about')
              ? 'text-blue-700 bg-blue-100 md:bg-transparent md:text-blue-700 dark:text-blue-500 dark:bg-transparent'
              : 'text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent' }}">
          About
        </a>
      </li>

    </ul>
  </div>
</nav>
