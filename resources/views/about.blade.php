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
    <section class="bg-white dark:bg-gray-900">
  <div class="py-12 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tentang Kami</h2>
    <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400">
      Pasar UMKM adalah platform digital yang mendukung pelaku UMKM untuk naik kelas dan menjangkau pasar yang lebih luas melalui teknologi.
    </p>

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 mt-12">
      <!-- Misi -->
      <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 shadow hover:shadow-lg transition">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Misi" class="mx-auto mb-4 w-16 h-16">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Misi Kami</h3>
        <p class="text-gray-600 dark:text-gray-400">
          Memberdayakan UMKM lokal agar dapat bertahan dan berkembang di era digital dengan akses mudah terhadap teknologi dan pasar.
        </p>
      </div>

      <!-- Teknologi -->
      <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 shadow hover:shadow-lg transition">
        <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" alt="Teknologi" class="mx-auto mb-4 w-16 h-16">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Dukungan Teknologi</h3>
        <p class="text-gray-600 dark:text-gray-400">
          Menggunakan platform berbasis web yang ramah pengguna, cepat, dan aman untuk membantu pelaku usaha mempromosikan produknya secara efisien.
        </p>
      </div>

      <!-- Komunitas -->
      <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 shadow hover:shadow-lg transition">
        <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Komunitas" class="mx-auto mb-4 w-16 h-16">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Komunitas UMKM</h3>
        <p class="text-gray-600 dark:text-gray-400">
          Menghubungkan pelaku UMKM dengan komunitas untuk berkolaborasi, saling belajar, dan mendapatkan dukungan berkelanjutan.
        </p>
      </div>
    </div>

    <p class="mt-12 text-lg font-light text-gray-500 sm:text-xl dark:text-gray-400">
      Bersama kami, UMKM bisa tumbuh, bersaing, dan menjadi fondasi ekonomi digital Indonesia.
    </p>
  </div>
</section>


      <x-footer />
</body>
</html>