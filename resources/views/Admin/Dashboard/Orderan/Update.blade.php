@foreach ($dataorderan as $key => $items)
    <dialog id="my_modal_update{{ $key }}" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box bg-white">
            <form  action="{{ route('Orderan.Update', $items->id) }}"  method="POST" class="w-full">
            <h3 class="font-bold text-lg">Input Resi  Pengiriman</h3>
                    @method('PUT')
                    @csrf
                    <div class="">
                        <div class="">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Resi Pengiriman</label>
                            <input type="text" name="no_resi" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Type product name" required=""
                                value="{{ old('no_resi', $items->no_resi) }}">
                        </div>
                        <div class="col-span-1">
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>
                            <select id="countries" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">---- Pilih ----</option>
                                  <option value="{{ $items->status }}" selected>{{ $items->status }}</option>
                                  <option value="dikemas">Di Kemas</option>
                                  <option value="dikirim">Di Kirim</option>
                            </select>
                        </div>
                        <div class="flex gap-4 float-right mt-4">
                            <label for="closeModalOrderan{{ $key }}" class="btn">Close</label>

                            <button type="submit"
                                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Tambah Resi
                            </button>
                        </div>
                </form>
                <form method="dialog" class="hidden">

                    <button class="btn" id="closeModalOrderan{{ $key }}">Close</button>
                </form>
            </div>
        </div>
    </dialog>
@endforeach
