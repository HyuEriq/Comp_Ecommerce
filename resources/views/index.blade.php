<html>
<head>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto my-4">
        <nav class="flex justify-between items-center">
            <div>
                <img src="img/logo.png" alt="" class=" w-[50px] mx-3 md:w-[80px]">
            </div>
            <ul class="lg:flex gap-8 text-xs font-semibold hidden">
                <li>Home</li>
                <li>About As</li>
                <li>Produk</li>
                <li>Galeri</li>
                <li>Contact</li>
            </ul>
            <div class="lg:flex hidden gap-10">
                <button>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                      </svg>
                </button>
                <button class="px-11 py-4 rounded-full text-xs bg-red-800 font-semibold text-slate-200 hover:bg-red-700">Log in</button>
            </div>
                <button class="lg:hidden block buttonToogle">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                      </svg>
                </button>
        </nav>

        <div class="menumobile hidden">
            <ul class="gap-8 text-xs font-semibold py-4">
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">Home</li>
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">About As</li>
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">Produk</li>
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">Galeri</li>
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">Contact</li>
            </ul>

            <div class="flex gap-5 mt-4">
                <button class="w-full">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                      </svg>
                </button>
                <button class="w-full px-11 py-4 rounded-full text-xs bg-red-800 font-semibold text-slate-200">Log in</button>
            </div>
        </div>
    </div>


    <!--awal carausel -->
    <div class="container mx-auto ">
        <div id="controls-carousel" class="relative w-full " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[250px] w-full overflow-hidden md:h-[400px] ">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/caraousel1.jpg" class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/img/caraousel2.jpg" class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/caraousel3.jpg" class="absolute block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <!--akhir carausel -->

    <!--awal detail pengiriman -->
    <div class="container px-3 md:mx-auto mt-7 md:mt-20">
        <div class="pelayanan grid grid-cols-2  md:flex md:flex-row justify-center md:gap-5 gap-1">
            <div class="pengiriman flex gap-3 items-center">
                <div class="icon p-2 rounded-full outline outline-red-800">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v9c0 .6.4 1 1 1h.5v.5a3.5 3.5 0 1 0 7-.5h3v.5a3.5 3.5 0 1 0 7-.5h.5c.6 0 1-.4 1-1v-4l-.1-.4-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.2 11.6.3.9a1.5 1.5 0 1 1-.3-1Zm-10 0 .3.9a1.5 1.5 0 1 1-.3-1ZM14 10V8h4.4l1 2H14Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="text text-wrap">
                    <p>Gratis Ongkir</p>
                    <p>Pada Pembelian Berakhir Rp. 500.000</p>
                </div>
            </div>
            <div class="pengiriman flex gap-3 items-center">
                <div class="icon p-2 rounded-full outline outline-red-800">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                      </svg>
                </div>
                <div class="text">
                    <p>Uang Kembali</p>
                    <p>Pengembalian Terakhir 30 hari</p>
                </div>
            </div>
            <div class="pengiriman flex gap-3 items-center">
                <div class="icon p-2 rounded-full outline outline-red-800">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 5a7 7 0 0 0-7 7v1.2a3 3 0 0 1 1-.2h2c.6 0 1 .4 1 1v6c0 .6-.4 1-1 1H6a3 3 0 0 1-3-3v-6a9 9 0 0 1 18 0v6a3 3 0 0 1-3 3h-2a1 1 0 0 1-1-1v-6c0-.6.4-1 1-1h2c.4 0 .7 0 1 .2V12a7 7 0 0 0-7-7Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="text">
                    <p>Dukungan Online</p>
                    <p>24/7 Dukungan Teknis</p>
                </div>
            </div>
            <div class="pengiriman flex gap-3 items-center">
                <div class="icon p-2 rounded-full outline outline-red-800">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M6 14h2m3 0h5M3 7v10c0 .6.4 1 1 1h16c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H4a1 1 0 0 0-1 1Z"/>
                    </svg>
                </div>
                <div class="text">
                    <p>Pembayaran Aman</p>
                    <p>semua Kartu Di Terima</p>
                </div>
            </div>
        </div>
    </div>
    <!--awal detail pengiriman -->

    <!--awal kategory -->
    {{-- width : 244px --}}
    {{-- height : 160px --}}
    <div class="container mx-auto px-3 mt-7 md:mt-20 mb-8">
        <div class="kategori grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="kategorione relative">
                    <img src="img/kategorione.jpg" alt=""  class=" object-cover h-40 w-full">
                <div class="absolute top-0 z-10 p-4">
                    <h1>Laptop Baru & New Berkualitas</h1>
                    <button class="py-[2px] px-[4px] md:py-1 md:px-2 outline outline-red-800 rounded-full mt-2">View By Category</button>
                </div>
            </div>
            <div class="kategorione relative">
                <img src="img/kategorione.jpg" alt=""  class="object-cover h-40 w-full">
                <div class="absolute top-0 z-10 p-4">
                    <h1>Laptop Baru & New Berkualitas</h1>
                    <button class="py-1 px-2 outline outline-red-800 rounded-full mt-2">View By Category</button>
                </div>
            </div>
            <div class="kategorione relative">
                <img src="img/kategorione.jpg" alt=""  class="object-cover h-40 w-full">
                <div class="absolute top-0 z-10 p-4">
                    <h1>Laptop Baru & New Berkualitas</h1>
                    <button class="py-1 px-2 outline outline-red-800 rounded-full mt-2">View By Category</button>
                </div>
            </div>
            <div class="kategorione relative">
                <img src="img/kategorione.jpg" alt=""  class="object-cover h-40 w-full">
                <div class="absolute top-0 z-10 p-4">
                    <h1>Laptop Baru & New Berkualitas</h1>
                    <button class="py-1 px-2 outline outline-red-800 rounded-full mt-2">View By Category</button>
                </div>
            </div>
        </div>
    </div>
    <!--awal kategory -->
</body>
    <script>
        const buttonToogle = document.querySelector('.buttonToogle')
        const menumobile = document.querySelector('.menumobile')

        buttonToogle.addEventListener('click', function(){
            menumobile.classList.toggle('hidden');
        })
    </script>
</html>
