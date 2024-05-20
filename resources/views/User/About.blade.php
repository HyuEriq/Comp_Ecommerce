@extends('User.layout.masterr')

@section('isi')

<div class="container mx-auto my-8 pt-16">
    <div>
        <div class="title flex gap-2 mb-3 mx-4 ">
            <p class="text-sm text-slate-400">Home /</p>
            <p class="text-sm text-slate-400">About As</p>
        </div>
    </div>
    <div class=" bg-blue-400 rounded-lg px-3 h-72 flex flex-col justify-center items-center mx-4">
        <p class="text-center px-full text-4xl font-bold">About As</p>
        <p class="text-center px-full text-base font-normal">belakang perusahaan atau bisnis</p>
    </div>
    @foreach ($AboutAs as $items)
    <div class="grid grid-cols-1 px-3 md:grid-cols-2 my-16 gap-10">
        <div class="img flex justify-center items-center ">
            <img src="{{ asset('storage/about/' . $items->image) }}" alt="" class="w-[350px]">
        </div>
        <div class="text">
            <h4 class="text-bold text-4xl">{{ $items->tittle }}</h4>
            <p class="text-base mt-4 mb-6">{{ $items->diskripsi }}</p>

            <a href="" class="py-3 px-6 bg-red-600 hover hover:bg-red-700 rounded-lg text-white ">Selengkapnya</a>
        </div>
    </div>
    @endforeach
</div>


@endsection
