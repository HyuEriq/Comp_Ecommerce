@extends('Admin.Layout.master')

@section('content')

       <!-- table 1 -->

       <div class="flex flex-wrap p-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6 class="dark:text-white">Orderan table</h6>
              <div class="flex gap-3">

                <form action="{{ route('Orderan.index') }}" method="GET" class="max-w-md mx-auto">
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
                        <input type="search" id="default-search"
                            class="block w-96 py-2  ps-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" name="search" value="{{ $request->search }}" required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

                <form action="{{ route('Orderan.index') }}" method="GET" class="max-w-sm mx-auto flex gap-3">
                    <select id="countries" name="status"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected>Pilih Status</option>
                      <option value="proses" {{ Request::get('status') == 'proses' ? 'selected' : '' }}>Di Proses</option>
                      <option value="dikirim" {{ Request::get('status') == 'dikirim' ? 'selected' : '' }}>Di Kirim</option>
                      <option value="selesai" {{ Request::get('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>

                    <button type="submit" class="py-2 px-5 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg text-sm text-white">filter</button>
                  </form>

            </div>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                      <th class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Invoice</th>
                      <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Gambar Produk</th>
                      <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama Produk</th>
                      <th class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama Pembeli</th>
                      <th class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Alamat</th>
                      <th class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Qty</th>
                      <th class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">total</th>
                      <th class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                      <th class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                    </tr>
                  </thead>

                  @foreach ($datahistory as $key => $items )
                  <tbody>
                      <tr>
                          <td class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">1</p>
                            </td>
                            <td class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">788789787</p>
                              </td>
                            <td class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                               <img src="{{ asset('storage/produk/' . $items->Produk->foto_produk) }}" alt="" class="w-[100px]">
                            </td>
                            <td class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">{{ $items->Produk->nama_Produk }}</p>
                              </td>
                            {{-- <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">{{ Auth()->User()->username }}</p>
                            </td> --}}
                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">{{ $items->nama_lengkap }}</p>
                            </td>
                            <td class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">{{ $items->alamat }}</p>
                            </td>
                            <td class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">{{ $items->jumlah }}</p>
                            </td>
                            <td class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">Rp {{ number_format($items->total, 0,',','.') }}</p>
                            </td>
                            <td class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">{{ $items->status }}</p>
                              </td>
                        <td class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                          <a href="javascript:;" class=" py-2 px-6 bg-blue-600 rounded-lg  hover:bg-blue-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80"> Edit</a>
                          <a href="javascript:;" class=" py-2 px-6 bg-red-600 rounded-lg  hover:bg-red-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80"> Delete</a>
                          <a href="" class=" py-2 px-6 bg-sky-600 rounded-lg  hover:bg-sky-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80"> Details</a>
                        </td>
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
