@extends('Admin.Layout.master')

@section('content')

       <!-- table 1 -->

       <div class="flex flex-wrap p-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6 class="dark:text-white">Details Produk</h6>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-5 px-7">
                <div class="gambar">

                    <img src="{{ asset('storage/produk/' . $Produk->foto_produk) }}" alt="" class="h-80 w-full bg-slate-400 rounded-lg">

                    <p class="font-semibold text-slate-700 text-2xl pt-4">{{ $Produk->nama_produk }}</p>
                </div>
                <div class="list-diskripsi">
                    <div>
                        <h5>Category Produk</h5>
                        <p class="text-base text-slate-700 ">{{ $Produk->Kategori->nama_kategori }}</p>
                    </div>
                    <div>
                        <h5>Diskripsi Produk</h5>
                        <p class="text-base text-slate-700 ">
                            {{ $Produk->diskripsi }}
                        </p>
                    </div>
                    <div>
                        <h5>Qty</h5>
                        <p class="text-base text-slate-700 ">{{ $Produk->qty }}</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

@endsection
