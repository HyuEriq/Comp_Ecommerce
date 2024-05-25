@extends('User.layout.masterr')

@section('isi')
    <div class="container mx-auto pt-16">
        <div class="mt-10 ">
            <div class="title flex gap-2 mb-3 mx-4">
                <p class="text-sm text-slate-400">Home /</p>
                <p class="text-sm text-slate-400">Cekout Card</p>
            </div>
        </div>

        <div class="flex gap-4 flex-col-reverse md:flex-row px-4 ">
            <div class=" bg-gray-100 rounded-lg md:flex-1 my-10">
                <div class="w-full max-w-4xl  p-8">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border dark:border-gray-700">
                            <!-- Shipping Address -->
                        <div class="mb-6">
                            <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-7">Shipping Address</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="helper-text"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Depan</label>
                                    <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nama Depan">
                                </div>
                                <div>
                                    <label for="helper-text"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Depan</label>
                                    <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nama Belakang">
                                </div>
                            </div>

                            <div class="mt-4">
                                <label for="helper-text"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Alamat">
                            </div>

                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label for="helper-text"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telp</label>
                                    <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nomer Telepon">
                                </div>
                                <div>
                                    <label for="helper-text"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zipcode</label>
                                    <input type="email" id="helper-text" aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Zipcode">
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end">
                            <button
                                class="bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-700 dark:bg-teal-600 dark:text-white dark:hover:bg-teal-900">Bayar Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" bg-gray-100 rounded-lg md:flex-none md:w-[450] my-10">
                <div class="w-full max-w-4xl  p-8">
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md border dark:border-gray-700">


                        <div class="relative  shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            Product
                                        </th>
                                        <th scope="col" class="px-6 py-3  bg-gray-50 dark:bg-gray-800">
                                            Pricing
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i=1 ; $i < 5 ; $i++)
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  dark:text-white dark:bg-gray-800">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  dark:text-white dark:bg-gray-800">
                                            Silver
                                        </td>
                                    </tr>
                                    @endfor

                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  dark:text-white dark:bg-gray-800 float-end">
                                            Total
                                        </th>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap  dark:text-white dark:bg-gray-800">
                                            Rp. 647567
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
