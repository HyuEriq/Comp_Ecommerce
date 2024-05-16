@foreach ($Produk as $key => $item)
    <dialog id="my_modal_delete{{ $key }}" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box bg-white">
            <h3 class="font-bold text-lg">Delete Kategori</h3>
            <hr>
            <div class="modal-action">

                <form action="{{ route('Produk.Destroy', $item->id) }}" method="post" class="w-full">
                    @method('DELETE')
                    @csrf
                    <div>
                        <p>Apakah Anda yakin Menghapus <span class="text-red-700">{{ $item->nama_produk }}</span> ini.......?</p>
                    </div>

                    <div class="flex float-right gap-4">
                    <label for="closeModalKategoridelete{{ $key }}" class="btn">Close</label>
                    <button type="submit"
                            class="text-white inline-flex items-center bg-red-700 gap-3 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512" class="w-5 fill-white"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                            Delete Produk
                        </button>
                    </div>
                </form>
                <form method="dialog" class="hidden">
                    <button class="btn" id="closeModalKategoridelete{{ $key }}">Close</button>
                </form>
            </div>
        </div>
    </dialog>
@endforeach
