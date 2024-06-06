@extends('Admin.Layout.master')

@section('content')

@include('Admin.Dashboard.Kategori.update')

@include('Admin.Dashboard.Kategori.delete')

            <!-- table 1 -->

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

                    @if ($errors->any())
                    <div class="alert alert-danger bg-red-500 mb-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-white">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div
                            class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Kategory table</h6>



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
                                        <form action="{{ route('kategory.index') }}" method="get">
                                            <input type="search" id="default-search"
                                                class="block w-96 py-2 ps-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="" name="search" value="{{ $request->search }}" />
                                            <button type="submit"
                                                class="text-white absolute end-2.5 bottom-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                                        </form>
                                    </div>
                                </form>

                                <button data-modal-target="crud-Tambah" data-modal-toggle="crud-Tambah" class="py-2 px-5 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg text-sm text-white" type="button">
                                    Tambah Category
                                  </button>

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
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Image</th>
                                            <th

                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Nama Category</th>
                                            <th
                                                class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Slug</th>
                                                <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                created_at</th>
                                            <th
                                                class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $counter = ($Kategori->currentPage() - 1) * $Kategori->perPage() + 1;
                                    @endphp
                                    @foreach ($Kategori as $key =>  $item )

                                    <tbody>
                                        <tr>
                                            <td
                                                class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    {{ $counter++ }}</p>
                                            </td>
                                            <td
                                            class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                           <img src="{{ asset('storage/kategori/' . $item->image) }}" alt="" class="w-32 h-24">
                                        </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    {{ $item->nama_kategori }}</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    {{ $item->slug }}</p>
                                            </td>
                                            <td
                                            class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                {{ $item->created_at }}</p>
                                        </td>
                                            <td
                                                class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button type="button" onclick="my_modal_update{{ $key }}.showModal()" class="py-2 px-6 bg-blue-600 rounded-lg hover:bg-blue-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80">
                                                    Edit
                                                </button>
                                                <button onclick="my_modal_delete{{ $key }}.showModal()" class=" py-2 px-6 bg-red-600 rounded-lg  hover:bg-red-700 text-xs text-white font-semibold leading-tight dark:text-white dark:opacity-80" type="button">
                                                    Delete
                                                    </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach

                                </table>
                                <div class="mt-5 mx-4">
                                    {{ $Kategori->links('vendor.pagination.simple-tailwind') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


         @include('Admin.Dashboard.Kategori.Insert')





        @endsection
