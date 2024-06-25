@extends('Admin.Layout.master')

@section('content')

<div class="flex flex-wrap p-6 -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6 class="dark:text-white">Table History Pembelian </h6>
          <div class="flex gap-3">

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
                    <form action="{{ route('History.Order') }}" method="get">
                    <input type="search" id="default-search"
                        class="block w-96 py-2  ps-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" name="search" value="{{ $request->search }}" required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </form>
                </div>
            </form>

        </div>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                <thead class="align-bottom">
                    <tr>
                        <th
                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            No</th>
                        <th
                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Gambar Produk</th>
                        <th
                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Nama Produk</th>
                        <th
                            class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Qty</th>
                        <th
                            class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Total</th>
                         <th
                            class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Tanggal</th>
                        <th
                            class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Action</th>
                    </tr>
                </thead>
                @php
                   $counter = ($historyuser->currentPage() - 1) * $historyuser->perPage() + 1;
                 @endphp
              @foreach ($historyuser as $key => $items)
              <tbody>
                <tr>
                    <td
                        class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                            {{ $counter++ }}</p>
                    </td>
                    <td
                        class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <img src="{{ asset('storage/produk/' . $items->Produk->foto_produk) }}"
                            alt="" class="w-[100px]">
                    </td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                            {{ $items->Produk->nama_Produk }}
                        </p>
                    </td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                            {{ $items->jumlah }}</p>
                    </td>
                    <td
                        class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                            {{ $items->total }}</p>
                    </td>
                    <td
                    class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                    <p
                        class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                        {{ date('Y-m-d' , strtotime($items->total)) }}</p>
                     </td>

                    <td
                        class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <button type="submit"
                        class="py-3 px-7 bg-blue-600 rounded-lg hover:bg-blue-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80">Beli Lagi</button>
                    </td>
                </tr>
            </tbody>
              @endforeach
            </table>
          </div>
          <div class="mx-5 my-5">
            {{ $historyuser->links('pagination::simple-tailwind') }}
        </div>
        </div>
      </div>
    </div>
  </div>

@endsection
