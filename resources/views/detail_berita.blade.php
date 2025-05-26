<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar UMKM - Berita & Artikel</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<body>


<section class="py-10 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-5xl mx-auto px-4">
        <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <img src="{{ asset('img/10.jpg') }}" alt="Gambar Berita"
                 class="w-full h-64 object-cover rounded-lg mb-6">

            <div class="mb-4 flex justify-between text-sm text-gray-500 dark:text-gray-400">
    <!-- Label UMKM dan Kategori berdampingan -->
    <div class="flex space-x-1">
        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded dark:bg-yellow-200 dark:text-yellow-900">
            UMKM Bandung
        </span>
        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded dark:bg-blue-200 dark:text-blue-900">
            Makanan
        </span>
    </div>
    <!-- Tanggal di kanan -->
    <span>2 hari yang lalu</span>
</div>

            <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">
                Menggali Potensi Kuliner Tradisional di Era Digital
            </h1>

            <div class="flex items-center mb-6">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                     alt="Avatar" class="w-10 h-10 rounded-full mr-3">
                <span class="text-gray-700 dark:text-gray-300 font-medium">Admin UMKM</span>
            </div>

            <div class="text-gray-700 dark:text-gray-300 leading-relaxed space-y-4 text-justify">
                <p>
                    UMKM kuliner kini mampu bersaing di era digital dengan memanfaatkan media sosial, marketplace, hingga aplikasi pesan-antar makanan. Artikel ini membahas strategi yang dapat diterapkan oleh pelaku UMKM kuliner agar tetap relevan di tengah persaingan yang semakin ketat.
                </p>

                <p>
                    Penting bagi UMKM untuk memahami algoritma platform digital dan konsistensi branding agar dapat menjangkau audiens yang lebih luas. Pemasaran melalui konten kreatif, kolaborasi dengan food influencer, serta review pelanggan juga memainkan peran penting dalam membangun kepercayaan konsumen.
                </p>

                <p>
                    Selain itu, digitalisasi manajemen seperti pencatatan keuangan digital, pemesanan daring, dan CRM (Customer Relationship Management) turut memperkuat daya saing UMKM di era modern.
                </p>
            </div>

            <div class="mt-10">
                <a href="{{ url('/berita') }}" class="inline-flex items-center text-blue-600 hover:underline dark:text-blue-400">
                    ← Kembali ke Daftar Berita
                </a>
            </div>
        </article>
    </div>
</section>

</body>
</html>
