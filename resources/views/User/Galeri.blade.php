@extends('User.layout.masterr')

@section('isi')
    <div class="container mx-auto pt-16">
        <div class="mt-10 ">
            <div class="title flex gap-2 mb-3 mx-4">
                <p class="text-sm text-slate-400">Home /</p>
                <p class="text-sm text-slate-400">Galeri</p>
            </div>
        </div>

        <div class=" bg-blue-400 rounded-lg px-3 h-72 flex flex-col justify-center items-center mx-4">
            <div class=" bg-blue-400 rounded-lg px-3 h-72 flex flex-col justify-center items-center">
                <p class="text-center px-full text-4xl font-bold">Galeri Me</p>
                <p class="text-center px-full text-base font-normal">Lihat lah Galeri Kami Dengan Baik</p>
            </div>
        </div>

        <div class="galeri flex justify-center items-center my-10 gap-5 w-full">
            @foreach ($kategori as $itemss)
                <a href="{{ route('Galeri.index', ['galeri' => $itemss->id]) }}"
                    class="text-base border rounded-lg py-3 px-2 bg-blue-400 hover text-white hover:border-red-600">{{ $itemss->nama_kategori }}</a>
            @endforeach
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mx-4">
            @foreach ($galeri as $items)
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/galeri/' . $items->gambar_galeri) }}"
                        alt="">
                </div>
            @endforeach
        </div>
        <div class="my-7 mx-3">
            {{ $galeri->links('pagination::simple-tailwind') }}
        </div>
    </div>
@endsection
