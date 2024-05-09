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
    <div class="container px-3 my-7 md:mx-auto  md:my-24">
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
    <div class="container mx-auto px-3 mt-7  mb-16 md:my-24">
        <div>
            <p class="text-center font-bold text-xl mb-8">Kategori Produk</p>
        </div>
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

    <!--Produk Terlaris -->
    <div class="container mx-auto md:my-20">
        <div class="flex justify-between items-center px-4 ">
            <div class="kiri">
                <p class="text-xl font-bold ">Produk Terlaris</p>
                <p class="text-base">Produk Yang berkualitas dan terbaik</p>
            </div>
            <div class="kanan">
                <a href="#">View All</a>
            </div>
        </div>
        <!--Card 1 -->
        <div class="grid grid-cols-2 md:grid-cols-4 ">
            <div class="relative m-6 md:m-10 w-[210px]  md:w-[270px] max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                <a href="#">
                  <img class="h-43 rounded-t-lg object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                </a>
                <div class="mt-4 px-5">
                    <a href="#">
                      <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">Nike Air MX Super 5000</h5>
                    </a>
                    <div class="flex items-center justify-between">
                      <p>
                        <span class="text-base md:text-2xl font-bold text-slate-900">$249</span>
                      </p>
                      <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add cart</a
                      >
                    </div>
                    <div>
                      <p class="text-sm pt-2 md:text-base text-slate-500">12 Terjual</p>
                    </div>
                  </div>
              </div>


              <div class="relative m-6 md:m-10 w-[210px] md:w-[270px] max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                <a href="#">
                  <img class="h-43 rounded-t-lg object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                </a>
                <div class="mt-4 px-5">
                    <a href="#">
                      <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">Nike Air MX Super 5000</h5>
                    </a>
                    <div class="flex items-center justify-between">
                      <p>
                        <span class="text-base md:text-2xl font-bold text-slate-900">$249</span>
                      </p>
                      <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add cart</a
                      >
                    </div>
                    <div>
                      <p class="text-sm pt-2 md:text-base text-slate-500">12 Terjual</p>
                    </div>
                  </div>
              </div>

              <div class="relative m-6 md:m-10 w-[210px] md:w-[270px] max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                <a href="#">
                  <img class="h-43 rounded-t-lg object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                </a>
                <div class="mt-4 px-5">
                    <a href="#">
                      <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">Nike Air MX Super 5000</h5>
                    </a>
                    <div class="flex items-center justify-between">
                      <p>
                        <span class="text-base md:text-2xl font-bold text-slate-900">$249</span>
                      </p>
                      <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add cart</a
                      >
                    </div>
                    <div>
                      <p class="text-sm pt-2 md:text-base text-slate-500">12 Terjual</p>
                    </div>
                  </div>
              </div>

              <div class="relative m-6 md:m-10 w-[210px] md:w-[270px] max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                <a href="#">
                  <img class="h-43 rounded-t-lg object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                </a>
                <div class="mt-4 px-5">
                  <a href="#">
                    <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">Nike Air MX Super 5000</h5>
                  </a>
                  <div class="flex items-center justify-between">
                    <p>
                      <span class="text-base md:text-2xl font-bold text-slate-900">$249</span>
                    </p>
                    <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                      <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                      Add cart</a
                    >
                  </div>
                  <div>
                    <p class="text-sm pt-2 md:text-base text-slate-500">12 Terjual</p>
                  </div>
                </div>
              </div>

        </div>
    </div>
    <!--end terlaris-->

    <!--Produk Terbaru -->
    <div class="container mx-auto md:my-20">
        <div class="flex justify-between items-center px-4 ">
            <div class="kiri">
                <p class="text-xl font-bold ">Produk Terbaru</p>
                <p class="text-base">Produk Yang terbaru di posting</p>
            </div>
            <div class="kanan">
                <a href="#">View All</a>
            </div>
        </div>
        <!--Card 1 -->
        <div class="grid grid-cols-2 md:grid-cols-4 ">
            <div class="relative m-6 md:m-10 w-[210px]  md:w-[270px] max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                <a href="#">
                  <img class="h-43 rounded-t-lg object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                </a>
                <div class="mt-4 px-5">
                    <a href="#">
                      <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">Nike Air MX Super 5000</h5>
                    </a>
                    <div class="flex items-center justify-between">
                      <p>
                        <span class="text-base md:text-2xl font-bold text-slate-900">$249</span>
                      </p>
                      <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add cart</a
                      >
                    </div>
                    <div>
                      <p class="text-sm pt-2 md:text-base text-slate-500">12 Terjual</p>
                    </div>
                  </div>
              </div>


              <div class="relative m-6 md:m-10 w-[210px] md:w-[270px] max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                <a href="#">
                  <img class="h-43 rounded-t-lg object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                </a>
                <div class="mt-4 px-5">
                    <a href="#">
                      <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">Nike Air MX Super 5000</h5>
                    </a>
                    <div class="flex items-center justify-between">
                      <p>
                        <span class="text-base md:text-2xl font-bold text-slate-900">$249</span>
                      </p>
                      <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add cart</a
                      >
                    </div>
                    <div>
                      <p class="text-sm pt-2 md:text-base text-slate-500">12 Terjual</p>
                    </div>
                  </div>
              </div>

              <div class="relative m-6 md:m-10 w-[210px] md:w-[270px] max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                <a href="#">
                  <img class="h-43 rounded-t-lg object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                </a>
                <div class="mt-4 px-5">
                    <a href="#">
                      <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">Nike Air MX Super 5000</h5>
                    </a>
                    <div class="flex items-center justify-between">
                      <p>
                        <span class="text-base md:text-2xl font-bold text-slate-900">$249</span>
                      </p>
                      <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add cart</a
                      >
                    </div>
                    <div>
                      <p class="text-sm pt-2 md:text-base text-slate-500">12 Terjual</p>
                    </div>
                  </div>
              </div>

              <div class="relative m-6 md:m-10 w-[210px] md:w-[270px] max-w-xs overflow-hidden rounded-lg bg-white shadow-md">
                <a href="#">
                  <img class="h-43 rounded-t-lg object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                </a>
                <div class="mt-4 px-5">
                  <a href="#">
                    <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">Nike Air MX Super 5000</h5>
                  </a>
                  <div class="flex items-center justify-between">
                    <p>
                      <span class="text-base md:text-2xl font-bold text-slate-900">$249</span>
                    </p>
                    <a href="#" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                      <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                      Add cart</a
                    >
                  </div>
                  <div>
                    <p class="text-sm pt-2 md:text-base text-slate-500">12 Terjual</p>
                  </div>
                </div>
              </div>
            <!--end Terbaru -->
        </div>



<footer class="bg-stone-900 dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                  <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline text-white">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline text-white">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>

    </div>
</body>
    <script>
        const buttonToogle = document.querySelector('.buttonToogle')
        const menumobile = document.querySelector('.menumobile')

        buttonToogle.addEventListener('click', function(){
            menumobile.classList.toggle('hidden');
        })
    </script>
</html>
