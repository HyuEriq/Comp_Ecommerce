@extends('User.layout.masterr')

@section('isi')

<div class="container mx-auto py-16">
    <div class="mt-10 ">
        <div class="title flex gap-2 mb-3 mx-4">
            <p class="text-sm text-slate-400">Home /</p>
            <p class="text-sm text-slate-400">Produk</p>
        </div>
    </div>

    <div class=" bg-blue-400 rounded-lg px-3 h-72 flex flex-col justify-center items-center mx-4">
        <div class=" bg-blue-400 rounded-lg px-3 h-72 flex flex-col justify-center items-center">
            <p class="text-center px-full text-4xl font-bold">Produk Me</p>
            <p class="text-center px-full text-base font-normal">Lihat lah semua Produk Kami</p>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-4 mx-4 my-16">
        <div class="flex-none w-full  md:w-80">
            <div class="judul ">
                <p class="text-[23px] text-black font-semibold">Kategori Shop</p>
            </div>
            <div class="kategori ">
                @foreach ($kategori as $kategories)
                <ul class="my-3 flex flex-row items-center gap-3">
                    <li>
                        <a href="{{ route('produk.user', ['filter_produk' => $kategories->id]) }}" class="text-base text-slate-700 font-medium ">{{ $kategories->nama_kategori }}</a>
                    </li>
                </ul>
                <hr>
                @endforeach

            </div>
        </div>
        <div class="flex-1">
            <div class="flex">

                <form class="max-w-md mx-auto">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <form action="" method="get">
                            <input type="search" id="default-search"
                                class="block w-96 py-4 ps-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" name="search" value="{{ $request->search }}" />
                            <button type="submit"
                                class="text-white  absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </form>
                    </div>
                </form>
                <form action="{{ route('produk.user')}}" method="GET">
                    <select name="filter" id="">
                        <option value="" selected>Pilih</option>
                        <option value="terpopuler" {{ Request::get('filter') == 'terpopuler' ? 'selected' : '' }} >Terpopuler</option>
                        <option value="terlaris" {{ Request::get('filter') == 'terlaris' ? 'selected' : '' }} >Terlaris</option>
                    </select>
                    <button type="submit">Filter</button>
                </form>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
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
                            <form action="{{ route('produk.cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $produks->id }}">
                                <input type="hidden" name="qty" value="1" min="1">

                            <button type="submit"
                                class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-5 md:py-2.5 text-center text-xs md:text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add cart</button>
                            </form>
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
            <div class="px-4 pt-4">
                {{ $produk->links('pagination::simple-tailwind') }}
            </div>
        </div>
    </div>
</div>

@endsection
