@extends('User.layout.masterr')

@section('isi')

<div class="container mx-auto my-8">
    <div>
        <div class="title flex gap-2 mb-3">
            <p class="text-sm text-slate-400">Home /</p>
            <p class="text-sm text-slate-400">About As</p>
        </div>
    </div>
    <div class=" bg-blue-400 rounded-lg px-3 h-72 flex flex-col justify-center items-center">
        <p class="text-center px-full text-4xl font-bold">About As</p>
        <p class="text-center px-full text-base font-normal">belakang perusahaan atau bisnis</p>
    </div>

    <div class="grid grid-cols-1 px-3 md:grid-cols-2 mt-10 gap-10">
        <div class="img">
            <img src="" alt="" class="bg-black h-72 w-full rounded-lg">
        </div>
        <div class="text">
            <h4 class="text-bold text-4xl">About As</h4>
            <p class="text-base mt-4 mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos numquam quam fugiat. Dolor possimus adipisci
                excepturi, dicta laboriosam quae rem. Impedit quis quas similique molestias repellendus sapiente iusto maxime illo
                 illum aut, quae est vitae voluptatum veniam suscipit blanditiis debitis vel nostrum nihil pariatur laudantium ut
                 beatae? Iusto quae doloremque nam asperiores voluptates nisi quisquam ipsum sed dicta qui sint ea nulla, sapiente,
                  quidem adipisci necessitatibus dignissimos molestiae. Voluptas aliquid sed sint cumque facere quod animi voluptatum
                   blanditiis magnam unde at pariatur, accusantium eveniet consequatur rerum voluptatibus deserunt ea ex numquam
                   architecto explicabo temporibus. Veritatis, perferendis. Voluptatum repellendus rerum aspernatur.
            </p>

            <a href="" class="py-3 px-6 bg-red-600 hover hover:bg-red-700 rounded-lg text-white ">Selengkapnya</a>
        </div>
    </div>

</div>


@endsection
