@extends('Admin.Layout.master')

@section('content')

       <!-- table 1 -->

       <div class="flex flex-wrap p-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6 class="dark:text-white">Details User</h6>
            </div>
            <div class="">
                <div class="gambar flex flex-col justify-center items-center">
                    <img src="{{ asset('storage/user/' .$user->image) }}" alt="" class="h-60 w-60 rounded-full">
                    <p class="font-semibold text-slate-700 text-2xl pt-4">{{ $user->name }}</p>
                </div>
                <div class="grid grid-cols-2 mx-20 py-5">
                    <div class="kiri">
                        <div>
                            <h6 class="text-xl text-black text-bold">Email</h6>
                            <p class="text-base text-slate-600">{{ $user->email }}</p>
                        </div>
                        <div>
                            <h5>No Telpon</h5>
                            <p class="text-based text-slate-600">{{ $user->no_hp }}</p>
                        </div>
                    </div>
                    <div class="kanan">
                        <div>
                            <h5>Alamat</h5>
                            <p class="text-based text-slate-600">{{ $user->Alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

      @include('Admin.Dashboard.Profil.update')
@endsection

