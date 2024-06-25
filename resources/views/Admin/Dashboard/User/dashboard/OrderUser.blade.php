@extends('Admin.Layout.master')

@section('content')

@include('Admin.Dashboard.User.dashboard.showresi')

    <div class="flex flex-wrap p-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">

            @if (session('success'))
            <div id="alert-border-3" class="flex items-center p-4 mb-4 w-full text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                  <span class="sr-only">Dismiss</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                </button>
            </div>
            @endif

            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="dark:text-white">Order table</h6>
                    <div class="flex gap-3 mb-3">
                        <a href="{{ route('Order.User', ['status' => 'proses']) }}"
                            class="py-2 px-5 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg text-sm text-white">Belum
                            Bayar</a>
                        <a href="{{ route('Order.User', ['status' => 'dikemas']) }}"
                            class="py-2 px-5 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg text-sm text-white">Di
                            Kemas</a>
                        <a href="{{ route('Order.User', ['status' => 'dikirim']) }}"
                            class="py-2 px-5 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg text-sm text-white">Di
                            Kirim</a>
                        <a href="{{ route('Order.User', ['status' => 'selesai']) }}"
                            class="py-2 px-5 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg text-sm text-white">Selesai</a>
                    </div>


                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        No</th>
                                    {{-- <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nomer Resi</th> --}}
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
                                $counter = ($tagihan->currentPage() - 1) * $tagihan->perPage() + 1;
                            @endphp
                            @foreach ($tagihan as $key => $items)
                                <tbody>
                                    <tr>
                                        <td
                                            class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                {{ $counter++ }}</p>
                                        </td>

                                        {{-- @if ($items->status == 'dikirim')
                                        <td
                                            class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                {{ $items->no_resi }}</p>
                                        </td>
                                        @endif --}}
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
                                            {{ date('Y-m-d', strtotime($items->created_at)) }}</p>
                                    </td>


                                        <td
                                            class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            @if ($items->status == 'proses')
                                            <a href="{{ $items->transaksi[0]->payment_link }}" target="_blank">
                                                <button type="submit"
                                                    class="py-3 px-7 bg-blue-600 rounded-lg hover:bg-blue-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80">Bayar
                                                    Sekarang</button>
                                            </a>
                                            @elseif($items->status == 'dikirim')
                                            <div class="flex gap-3">

                                                <button onclick="my_modal_showresi{{ $key }}.showModal()" type="submit" class="py-2 px-5 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg text-sm text-white">Show Resi</button>

                                                <form action="{{ route('OrderUser.Update', $items->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="status" value="selesai">
                                                    <button type="submit"
                                                        class="py-3 px-7 bg-blue-600 rounded-lg hover:bg-blue-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80">Pesanan
                                                        Selesai</button>
                                                    </form>
                                            </div>

                                            @endif
                                    </tr>
                                </tbody>
                            @endforeach

                        </table>
                    </div>
                    <div class="my-5 mx-5">
                        {{ $tagihan->links('pagination::simple-tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
