@foreach ($tagihan as $key => $item)
    <dialog id="my_modal_showresi{{ $key }}" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box bg-white">
            <h3 class="font-bold text-lg">Pengiriman {{ $item->pengiriman }}</h3>
            <hr>
            <div class="modal-action">


                    <div class="w-full">
                        <p>No Resi Pengiriman : <span>{{ $item->no_resi }}</span></p>
                    </div>

                    <div class="flex float-right gap-4">
                     <label for="closeModalshowresi{{ $key }}" class="btn">Close</label>
                    </div>
                <form method="dialog" class="hidden">
                    <button class="btn" id="closeModalshowresi{{ $key }}">Close</button>
                </form>
            </div>
        </div>
    </dialog>
@endforeach
