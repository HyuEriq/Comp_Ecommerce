@extends('Admin.Layout.master')

@section('content')
    <div class="flex flex-wrap p-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
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
                            @foreach ($tagihan as $key => $items)
                                <tbody>
                                    <tr>
                                        <td
                                            class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                1</p>
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
                                            {{ date('Y-m-d', strtotime($items->created_at)) }}</p>
                                    </td>


                                        <td
                                            class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            @if ($items->status == 'proses')
                                                <button type="submit"
                                                    class="py-3 px-7 bg-blue-600 rounded-lg hover:bg-blue-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80">Bayar
                                                    Sekarang</button>
                                            @elseif($items->status == 'dikirim')
                                                <button type="submit"
                                                    class="py-3 px-7 bg-blue-600 rounded-lg hover:bg-blue-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80">Pesanan
                                                    Selesai</button>
                                            @endif
                                    </tr>
                                </tbody>
                            @endforeach

                        </table>

                        <nav aria-label="Page navigation example" class="">
                            <ul class="flex -space-x-px text-sm my-5 items-center justify-center ">
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page"
                                        class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
