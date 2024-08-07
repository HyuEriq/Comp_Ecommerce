@extends('User.layout.masterr')

@section('isi')
    <!--awal carausel -->
    <div class="container mx-auto ">
        <div id="controls-carousel" class="relative w-full " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[250px] w-full overflow-hidden md:h-[600px] ">
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
        <div class="flex justify-between items-center mt-5">
            <p class="font-bold text-xl mb-8">Kategori Produk</p>
            <div class="flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M9.293 7.707 13.586 12l-4.293 4.293 1.414 1.414L16.414 12l-5.707-5.707z"></path></svg>
            </div>
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


@endsection

