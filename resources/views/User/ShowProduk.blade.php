@extends('User.layout.masterr')

@section('isi')
    <!-- component -->
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="{{ asset('storage/produk/' . $produk->foto_produk) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <p class="text-lg font-medium leading-8 text-indigo-600 mb-1">{{ $produk->Kategori->nama_kategori }}</p>
                    <h2 class="font-manrope font-bold text-3xl leading-10 text-gray-900 mb-2 capitalize">
                        {{ $produk->nama_Produk }}</h2>

                    <p class="text-sm title-font text-gray-500 tracking-widest">{{ $produk->jumlah_beli }} Terjual </p>
                    <form action="{{ route('Show.Insert') }}" method="post" id="addToCartForm">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $produk->id }}">
                        <input type="text" name="qty" id="qtyInput" value="1">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 py-8">
                            <div class="flex sm:items-center sm:justify-center w-full">
                                <button id="qtyMin" type="button"
                                    class="group py-2 px-4 border border-gray-400 rounded-l-full bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-300">
                                    <svg class="stroke-gray-900 group-hover:stroke-black" width="15" height="22"
                                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                                        <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                                <input type="text" name="qtyDisplay" id="qtyDisplay"
                                    class="font-semibold text-gray-900 cursor-pointer text-lg py-1 px-4 w-full sm:max-w-[118px] outline-0 border-y border-gray-400 bg-transparent placeholder:text-gray-900 text-center hover:bg-gray-50"
                                    placeholder="1" value="1" readonly>
                                <button id="qtyPlus" type="button"
                                    class="group py-2 px-4 border border-gray-400 rounded-r-full bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-300">
                                    <svg class="stroke-gray-900 group-hover:stroke-black" width="15" height="22"
                                        viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 5.5V16.5M16.5 11H5.5" stroke="#9CA3AF" stroke-width="1.6"
                                            stroke-linecap="round" />
                                        <path d="M11 5.5V16.5M16.5 11H5.5" stroke="black" stroke-opacity="0.2"
                                            stroke-width="1.6" stroke-linecap="round" />
                                        <path d="M11 5.5V16.5M16.5 11H5.5" stroke="black" stroke-opacity="0.2"
                                            stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        @push('scripts')
                            <script>
                                $(document).ready(function() {
                                    function updateQuantity(change) {
                                        var qtyInput = $('#qtyInput');
                                        var qtyDisplay = $('#qtyDisplay');
                                        var currentValue = parseInt(qtyInput.val());
                                        var newValue = currentValue + change;
                                        if (!isNaN(newValue) && newValue >= 1) {
                                            qtyInput.val(newValue);
                                            qtyDisplay.val(newValue);
                                        }
                                    }

                                    $('#qtyPlus').on('click', function() {
                                        updateQuantity(1);
                                    });

                                    $('#qtyMin').on('click', function() {
                                        updateQuantity(-1);
                                    });
                                });
                            </script>
                        @endpush


                        <div class="flex items-center gap-3">
                            <button type="submit"
                                class="group py-3 px-4 rounded-full bg-indigo-50 text-indigo-600 font-medium text-lg w-full flex items-center justify-center gap-2 transition-all duration-500 hover:bg-indigo-100">
                                <svg class="stroke-indigo-600 " width="22" height="22" viewBox="0 0 22 22"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.7394 17.875C10.7394 18.6344 10.1062 19.25 9.32511 19.25C8.54402 19.25 7.91083 18.6344 7.91083 17.875M16.3965 17.875C16.3965 18.6344 15.7633 19.25 14.9823 19.25C14.2012 19.25 13.568 18.6344 13.568 17.875M4.1394 5.5L5.46568 12.5908C5.73339 14.0221 5.86724 14.7377 6.37649 15.1605C6.88573 15.5833 7.61377 15.5833 9.06984 15.5833H15.2379C16.6941 15.5833 17.4222 15.5833 17.9314 15.1605C18.4407 14.7376 18.5745 14.0219 18.8421 12.5906L19.3564 9.84059C19.7324 7.82973 19.9203 6.8243 19.3705 6.16215C18.8207 5.5 17.7979 5.5 15.7522 5.5H4.1394ZM4.1394 5.5L3.66797 2.75"
                                        stroke="" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                                Add to cart</button>
                    </form>
                    <button
                        class="text-center w-full px-4 py-3 rounded-[100px] bg-indigo-600 flex items-center justify-center font-medium text-lg text-white shadow-sm transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-400">
                        Buy Now
                    </button>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
