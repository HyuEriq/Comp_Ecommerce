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
                <ul class="my-3">
                    <li>
                        <a href="#" class="text-base text-slate-700 font-medium ">{{ $kategories->nama_kategori }}</a>
                    </li>
                </ul>
                <hr>
                @endforeach

            </div>
        </div>
        <div class="flex-1">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @for ($i = 1 ; $i <= 12 ; $i++)
                <div class="relative  overflow-hidden rounded-lg bg-white shadow-md">
                    <a href="">
                        <img class="h-43 rounded-t-lg object-cover"
                            src="{{ asset('img/Kategorione.jpg') }}"
                            alt="product image" class=""/>
                    </a>
                    <div class="mt-4 px-3">
                        <a href="#">
                            <h5 class="text-base pb-3 md:text-base font-bold tracking-tight text-slate-900 ">Laptop Leovo</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <p>
                                <span class="text-base md:text-base font-bold text-slate-800">Rp.1.000.000</span>
                            </p>
                            <form action="{{ route('Add.Shoping') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="">
                                <input type="hidden" name="qty" value="1" min="1">
                                <button type="submit" class="flex items-center rounded-md bg-slate-900 px-3 py-1.5 md:px-3 md:py-1.5 text-center text-xs md:text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Cart
                            </button>
                            </form>
                        </div>
                        <div>
                            <p class="text-sm pt-2 md:text-base text-slate-500 pb-3">12 Terjual</p>
                        </div>

                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

@endsection
