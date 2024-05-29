@extends('User.layout.masterr')

@section('isi')
    <div class="container mx-auto py-16">
        <div class="mt-10 ">
            <div class="title flex gap-2 mb-3 mx-4">
                <p class="text-sm text-slate-400">Home /</p>
                <p class="text-sm text-slate-400">Card Shopping</p>
            </div>
        </div>

        <div class="bg-blue-400 rounded-lg px-3 h-72 flex flex-col justify-center items-center mx-4">
            <div class="bg-blue-400 rounded-lg px-3 h-72 flex flex-col justify-center items-center">
                <p class="text-center px-full text-4xl font-bold">Card Shopping</p>
            </div>
        </div>

        <section class="py-24 relative">
            <div class="w-full px-4 md:px-5 lg-6 mx-auto">
                <div class="hidden lg:grid grid-cols-2 py-4">
                    <div class="font-normal text-xl leading-8 text-gray-500 pl-16">Product</div>
                    <p class="font-normal text-xl leading-8 text-gray-500 flex items-center justify-between">
                        <span class="w-full max-w-[200px] text-center">Harga</span>
                        <span class="w-full max-w-[260px] text-center">Quantity</span>
                        <span class="w-full max-w-[200px] text-center">Total</span>
                    </p>
                </div>

                @foreach ($carts as $key => $items)
                <div class="grid grid-cols-1 lg:grid-cols-2 min-[550px]:gap-6 border-t border-gray-200 py-6 px-4">
                    <div class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-6 w-full max-xl:justify-center max-xl:max-w-xl max-xl:mx-auto">
                        <div>
                            <input id="checkbox-table-search-{{ $key }}" type="checkbox" class="checkbox-item w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('storage/produk/' . $items->produk->foto_produk) }}" alt="product image" class="xl:w-[120px]">
                        </div>
                        <div class="pro-data w-full max-w-sm">
                            <h5 class="font-semibold text-xl leading-8 text-black max-[550px]:text-center">
                                {{ $items->produk->nama_Produk }}
                            </h5>
                            <p class="font-normal text-lg leading-8 text-gray-500 my-2 min-[550px]:my-3 max-[550px]:text-center">
                                {{ $items->produk->Kategori->nama_kategori }}
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center flex-col min-[550px]:flex-row w-full max-xl:max-w-xl max-xl:mx-auto gap-2">
                        <h6 class="font-manrope font-bold text-xl leading-9 text-black w-full max-w-[176px] text-center">
                            Rp. {{ number_format($items->produk->harga, 0, ',', '.') }} <span class="text-sm text-gray-300 ml-3 lg:hidden whitespace-nowrap">Harga</span>
                        </h6>
                        <div class="flex items-center w-full mx-auto justify-center">
                            <button type="button" id="qtyKurang{{ $key }}" class="btn-qty group rounded-l-full px-6 py-[18px] border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                                <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <path d="M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                            </button>
                            <input type="number" name="qty" class="qty-input border-y border-gray-200 outline-none text-gray-900 font-semibold text-lg w-full max-w-[118px] min-w-[80px] placeholder:text-gray-900 py-[15px] text-center bg-transparent" placeholder="" value="{{ $items->qty }}" id="qty{{ $key }}">
                            <button type="button" id="qtyPlus{{ $key }}" class="btn-qty group rounded-r-full px-6 py-[18px] border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                                <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M11 5.5V16.5M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                        <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 w-full max-w-[176px] text-center" id="totalHargaProduk{{ $key }}"></h6>
                    </div>
                </div>
                @endforeach

                <div class="bg-gray-50 rounded-xl p-6 w-full mb-8 max-lg:max-w-xl max-lg:mx-auto">
                    <div class="flex items-center justify-between w-full mb-6">
                        <p class="font-normal text-xl leading-8 text-gray-400">Sub Total</p>
                        <h6 class="font-semibold text-xl leading-8 text-gray-900" id="subTotal">Rp 0</h6>
                    </div>
                    <div class="flex items-center justify-between w-full py-6">
                        <p class="font-manrope font-medium text-2xl leading-9 text-gray-900">Total</p>
                        <h6 class="font-manrope font-medium text-2xl leading-9 text-indigo-500" id="total">Rp 0</h6>
                    </div>
                </div>
                <div class="flex items-center flex-col sm:flex-row justify-center gap-3 mt-8">
                    <a href="{{ route('Cekout.Index') }}"
                        class="rounded-full w-full max-w-[280px] py-4 text-center justify-center items-center bg-indigo-600 font-semibold text-lg text-white flex transition-all duration-500 hover:bg-indigo-700">
                        Checkout Now
                        <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                            <path d="M8.75324 5.49609L14.2535 10.9963L8.75 16.4998" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        function formatNumber(num) {
            return num.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' }).replace('IDR', 'Rp').trim();
        }

        function calculateSubtotal() {
            let subtotal = 0;
            @foreach ($carts as $key => $items)
                if ($('#checkbox-table-search-{{ $key }}').is(':checked')) {
                    let price{{ $key }} = @json($items->produk->harga);
                    let qty{{ $key }} = parseInt($('#qty{{ $key }}').val());
                    subtotal += price{{ $key }} * qty{{ $key }};
                }
            @endforeach
            return subtotal;
        }

        function updateTotal() {
            let subtotal = calculateSubtotal();
            $('#subTotal').html(formatNumber(subtotal));
            // Assume total is same as subtotal for this example. Modify if there are additional charges.
            $('#total').html(formatNumber(subtotal));
        }

        @foreach ($carts as $key => $items)
            (function() {
                var key = @json($key);
                var price = @json($items->produk->harga);
                const qtyPlus = $('#qtyPlus' + key);
                const qtyKurang = $('#qtyKurang' + key);
                const qty = $('#qty' + key);
                const totalPriceP = $('#totalHargaProduk' + key);

                function changePrice(price, qty) {
                    let hasil = price * qty;
                    totalPriceP.html(formatNumber(hasil));
                    updateTotal();
                }

                totalPriceP.html(formatNumber(price * qty.val()));

                qtyPlus.on('click', function() {
                    let qtyVal = parseInt(qty.val()) + 1;
                    qty.val(qtyVal);
                    changePrice(price, qtyVal);
                });

                qtyKurang.on('click', function() {
                    if (parseInt(qty.val()) > 1) {
                        let qtyVal = parseInt(qty.val()) - 1;
                        qty.val(qtyVal);
                        changePrice(price, qtyVal);
                    }
                });

                qty.on('input', function() {
                    let qtyVal = parseInt(qty.val());
                    if (qtyVal > 0) {
                        changePrice(price, qtyVal);
                    }
                });

                $('#checkbox-table-search-' + key).on('change', function() {
                    changePrice(price, parseInt(qty.val()));
                });
            })();
        @endforeach

        $(document).ready(function() {
            updateTotal();
        });

        $('.checkbox-item').on('change', function() {
            updateTotal();
        });
    </script>
@endpush
