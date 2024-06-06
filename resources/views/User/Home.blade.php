@extends('User.layout.masterr')

@section('isi')
    <!--awal carausel -->
    {{-- <div class="container mx-auto pt-16">
        <div id="controls-carousel" class="relative w-full " data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[250px] w-full overflow-hidden md:h-[600px] ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/caraousel1.jpg"
                        class="absolute  block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/img/caraousel2.jpg"
                        class="absolute  block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/caraousel3.jpg"
                        class="absolute  block h-full object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 4 -->
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div> --}}
    <!--akhir carausel -->
    {{-- @dd($slider) --}}
    <div id="default-carousel" class="relative w-full h-screen" data-carousel="slide">

        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden h-screen">
            <!-- Item -->
            @foreach ($slider as $item)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('storage/slider/' . $item->gambar_slider) }}" class="h-screen w-full object-cover"
                        alt="...">
                </div>
            @endforeach


        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            @foreach ($slider as $key => $item)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                    data-carousel-slide-to="{{ $key }}"></button>
            @endforeach

        </div>
    </div>

    <!--awal detail pengiriman -->
    <div class="container px-3 my-7 md:mx-auto  md:my-24">
        <div class="pelayanan grid grid-cols-2  md:flex md:flex-row justify-center md:gap-5 gap-1">
            <div class="pengiriman flex gap-3 items-center">
                <div class="icon p-2 rounded-full outline outline-red-800">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 0 0-2 2v9c0 .6.4 1 1 1h.5v.5a3.5 3.5 0 1 0 7-.5h3v.5a3.5 3.5 0 1 0 7-.5h.5c.6 0 1-.4 1-1v-4l-.1-.4-2-4A1 1 0 0 0 19 6h-5a2 2 0 0 0-2-2H4Zm14.2 11.6.3.9a1.5 1.5 0 1 1-.3-1Zm-10 0 .3.9a1.5 1.5 0 1 1-.3-1ZM14 10V8h4.4l1 2H14Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="text text-wrap">
                    <p class="text-lg text-bold">Gratis Ongkir</p>
                    <p class="text-base text-slate-500">Pada Pembelian Berakhir Rp. 500.000</p>
                </div>
            </div>
            <div class="pengiriman flex gap-3 items-center">
                <div class="icon p-2 rounded-full outline outline-red-800">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                    </svg>
                </div>
                <div class="text">
                    <p class="text-lg text-bold">Uang Kembali</p>
                    <p class="text-base text-slate-500">Pengembalian Terakhir 30 hari</p>
                </div>
            </div>
            <div class="pengiriman flex gap-3 items-center">
                <div class="icon p-2 rounded-full outline outline-red-800">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 5a7 7 0 0 0-7 7v1.2a3 3 0 0 1 1-.2h2c.6 0 1 .4 1 1v6c0 .6-.4 1-1 1H6a3 3 0 0 1-3-3v-6a9 9 0 0 1 18 0v6a3 3 0 0 1-3 3h-2a1 1 0 0 1-1-1v-6c0-.6.4-1 1-1h2c.4 0 .7 0 1 .2V12a7 7 0 0 0-7-7Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="text">
                    <p class="text-lg text-bold">Dukungan Online</p>
                    <p class="text-base text-slate-500">24/7 Dukungan Teknis</p>
                </div>
            </div>
            <div class="pengiriman flex gap-3 items-center">
                <div class="icon p-2 rounded-full outline outline-red-800">
                    <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M6 14h2m3 0h5M3 7v10c0 .6.4 1 1 1h16c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H4a1 1 0 0 0-1 1Z" />
                    </svg>
                </div>
                <div class="text">
                    <p class="text-lg text-bold">Pembayaran Aman</p>
                    <p class="text-base text-slate-500">semua Kartu Di Terima</p>
                </div>
            </div>
        </div>
    </div>
    <!--awal detail pengiriman -->

    <!--awal kategory -->
    {{-- width : 244px --}}
    {{-- height : 160px --}}
    <div class="container mx-auto px-3 mt-7  mb-16 md:my-24">
        <div class="flex justify-between items-center mt-5 mx-3">
            <p class="font-bold text-xl mb-8">Kategori Produk</p>
            <div class="flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path
                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                    </path>
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path
                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                    </path>
                    <path d="M9.293 7.707 13.586 12l-4.293 4.293 1.414 1.414L16.414 12l-5.707-5.707z"></path>
                </svg>
            </div>
        </div>
        <div class="splide" id="promo">
            <div class="splide__track h-[400px]">
                <ul class="splide__list gap-x-2">
                    @foreach ($kategori->chunk(2) as $chunkedCategories)
                        <li class="kategorione relative splide__slide">
                            @foreach ($chunkedCategories as $kategories)
                                <div class="relative mb-4">
                                    <img src="{{ asset('storage/kategori/' . $kategories->image) }}" alt="" class="object-cover h-40 w-full rounded-lg">
                                    <div class="absolute top-0 z-10 p-4">
                                        <h1 class="font-bold text-white mb-3">{{ $kategories->nama_kategori }}</h1>
                                        <a href="{{ route('produk.user', ['kategori_id' => $kategories->id]) }}" class="py-[1px] px-[2px] text-sm md:py-1 md:px-2 outline outline-green-100 rounded-full mt-2 text-white">
                                            View By Category
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Other sections of the page --}}

        @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var promo = new Splide('#promo', {
                        type: 'loop',
                        perPage: 4,  // adjust per page as needed
                        perMove: 1,
                        gap: '1rem',
                        breakpoints: {
                            768: {
                                perPage: 2,
                            },
                            1024: {
                                perPage: 2,
                            },
                            1440: {
                                perPage: 3,
                            },
                        },
                    }).mount();
                });
            </script>
        @endpush
        <!--awal kategory -->

        <!--Produk Terlaris -->
        <div class="container mx-auto md:my-20">
            <div class="flex justify-between items-center ">
                <div class="kiri">
                    <p class="text-xl font-bold ">Produk Terlaris</p>
                    <p class="text-base">Produk Yang berkualitas dan terbaik</p>
                </div>
                <div class="kanan">
                    <a href="{{ route('produk.user', ['kategori' => 'terlaris']) }}">View All</a>
                </div>
            </div>
            <!--Card 1 -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-3">

                @foreach ($terlaris as $items)
                    <div class="relative  overflow-hidden rounded-lg bg-white shadow-md">
                        <a href="{{ route('Show.Produk', $items->id) }}">
                            <img class="h-43 rounded-t-lg object-cover"
                                src="{{ asset('storage/produk/' . $items->foto_produk) }}" alt="product image"
                                class="" />
                        </a>
                        <div class="mt-4 px-5">
                            <a href="#">
                                <h5 class="text-base pb-3 md:text-xl font-bold tracking-tight text-slate-900 ">
                                    {{ $items->nama_Produk }}</h5>
                            </a>
                            <div class="flex items-center justify-between">
                                <p>
                                    <span class="text-base md:text-lg font-bold text-slate-800">Rp.
                                        {{ number_format($items->harga, 0, ',', '.') }}</span>
                                </p>
                                <form action="{{ route('Add.Shoping') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $items->id }}">
                                    <input type="hidden" name="qty" value="1" min="1">
                                    <button type="submit"
                                        class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        Add Cart
                                    </button>
                                </form>
                            </div>
                            <div class="flex justify-between gap-3">
                                <p class="text-sm pt-2 md:text-base text-slate-500 mb-3">{{ $items->jumlah_beli }} Terjual
                                </p>
                                <p class="text-sm pt-2 md:text-base text-slate-500 mb-3">{{ $items->jumlah_lihat }}x View
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach

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
                <a href="{{ route('produk.user') }}">View All</a>
            </div>
        </div>
        <!--Card 1 -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4 py-3">
            @foreach ($produk as $produks)
                <div class="relative  overflow-hidden rounded-lg bg-white shadow-md">
                    <a href="#">
                        <img class="h-43 rounded-t-lg object-cover"
                            src="{{ asset('storage/produk/' . $produks->foto_produk) }}" alt="product image" />
                    </a>
                    <div class="mt-4 px-5">
                        <a href="#">
                            <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">
                                {{ $produks->nama_Produk }}</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <p>
                                <span class="text-base md:text-lg font-bold text-slate-900">Rp.
                                    {{ number_format($produks->harga, 0, ',', '.') }}</span>
                            </p>
                            <a href="#"
                                class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add cart</a>
                        </div>
                        <div>
                            <p class="text-sm pt-2 md:text-base text-slate-500 mb-3">{{ $produks->jumlah_beli }} Terjual
                            </p>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="container mx-auto md:my-20">
        <div class="flex justify-between items-center px-4 ">
            <div class="kiri">
                <p class="text-xl font-bold ">Produk Terpopuler</p>
                <p class="text-base">Produk Yang terbaru di posting</p>
            </div>
            <div class="kanan">
                <a href="{{ route('produk.user', ['produk' => 'populer']) }}">View All</a>
            </div>
        </div>
        <!--Card 1 -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4 py-3">
            @foreach ($populer as $produks)
                <div class="relative  overflow-hidden rounded-lg bg-white shadow-md">
                    <a href="#">
                        <img class="h-43 rounded-t-lg object-cover"
                            src="{{ asset('storage/produk/' . $produks->foto_produk) }}" alt="product image" />
                    </a>
                    <div class="mt-4 px-5">
                        <a href="#">
                            <h5 class="text-base pb-3 md:text-xl font-semibold tracking-tight text-slate-900 ">
                                {{ $produks->nama_Produk }}</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <p>
                                <span class="text-base md:text-lg font-bold text-slate-900">Rp.
                                    {{ number_format($produks->harga, 0, ',', '.') }}</span>
                            </p>
                            <a href="#"
                                class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add cart</a>
                        </div>
                        <div class="flex justify-between gap-3">
                            <p class="text-sm pt-2 md:text-base text-slate-500 mb-3">{{ $produks->jumlah_beli }} Terjual
                            </p>
                            <p class="text-sm pt-2 md:text-base text-slate-500 mb-3">{{ $produks->jumlah_lihat }}x View
                            </p>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
