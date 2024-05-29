@foreach ($galeri as $key => $items )
<dialog id="my_modal_Update{{ $key }}" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box bg-white">
        <form  action="{{ route('Galeri.Update' , $items->id) }}"  method="POST" class="w-full" enctype="multipart/form-data">
        <h3 class="font-bold text-lg">Update Data Galeri</h3>
            @method('PUT')
                @csrf
                <input type="hidden" name="gambarlama" value="{{ $items->gambar_galeri }}">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Katagori</label>
                        <select id="countries" name="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">---- Pilih ----</option>

                            @foreach ($kategori as $kategories )
                                @if ($items->kategori_id == $kategories->id)
                                    <option value="{{ $kategories->id }}" selected> {{ $kategories->nama_kategori }}</option>
                                @else
                                    <option value="{{ $kategories->id }}">{{ $kategories->nama_kategori }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                   <div class="col-span-2">
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Gambar Galeri</label>
                      <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" name="gambar_galeri">
                   </div>
                </div>
                    <div class="flex gap-4 float-right mt-4">
                        <label for="closeUpdateGaleri{{ $key }}" class="btn">Close</label>

                        <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Update Galeri
                        </button>
                    </div>
            </form>
            <form method="dialog" class="hidden">

                <button class="btn" id="closeUpdateGaleri{{ $key }}">Close</button>
            </form>
        </div>
    </div>
</dialog>

@endforeach
