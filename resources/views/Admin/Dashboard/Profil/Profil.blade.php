@extends('Admin.Layout.master')

@section('content')

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

          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6 class="dark:text-white">Profil</h6>

                 <button onclick="my_modal_update{{ $user->id }}.showModal()" type="submit" class="py-2 px-5 bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg text-sm text-white">Edit Profil</button>


            </div>
            <div class="">
                <div class="gambar flex flex-col justify-center items-center">
                    <img src="{{ asset('storage/user/' .$user->image) }}" alt="" class="h-60 w-60 rounded-full">
                    <p class="font-semibold text-slate-700 text-2xl pt-4">{{ Auth()->user()->name }}</p>
                </div>
                <div class="grid grid-cols-2 mx-20 py-5">
                    <div class="kiri">
                        <div>
                            <h6 class="text-xl text-black text-bold">Email</h6>
                            <p class="text-base text-slate-600">{{ Auth()->user()->email }}</p>
                        </div>
                        <div>
                            <h5>No Telpon</h5>
                            <p class="text-based text-slate-600">{{ Auth()->user()->no_hp }}</p>
                        </div>
                    </div>
                    <div class="kanan">
                        <div>
                            <h5>Alamat</h5>
                            <p class="text-based text-slate-600">{{ Auth()->user()->Alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      @include('Admin.Dashboard.Profil.update')
@endsection
