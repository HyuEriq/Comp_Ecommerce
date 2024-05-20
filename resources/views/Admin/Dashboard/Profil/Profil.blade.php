@extends('Admin.Layout.master')

@section('content')

       <!-- table 1 -->

       <div class="flex flex-wrap p-6 -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="flex justify-between p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6 class="dark:text-white">Profil</h6>
            </div>
            <div class="">
                <div class="gambar flex flex-col justify-center items-center">
                    <div class="img h-60 w-60 bg-slate-400 rounded-lg">
                    </div>
                    <p class="font-semibold text-slate-700 text-2xl pt-4">Headset Bluethoth</p>
                </div>
                <div class="grid grid-cols-2 mx-20 border">
                    <div class="kiri">
                        <h5>Email</h5>
                    </div>
                    <div class="kanan">
                        <p>hallooooo</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

@endsection
