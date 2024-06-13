<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Export Hisory Penjualan</title>
</head>
<body>

        <h1 class="text-2xl font-bold mb-4">History Order Admin</h1>


        <table
        class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
        <thead class="align-bottom">
            <tr>
                <th
                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    No</th>
                <th
                    class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Created at</th>
                <th
                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Nama Produk</th>
                <th
                    class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    qty</th>
                <th
                    class="px-6 py-3 font-bold  text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Total</th>
            </tr>
        </thead>
        @foreach ($data as $items)
            <tbody>
                <tr>
                    <td
                        class="py-4 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                           1</p>
                    </td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                            {{ date('Y-m-d', strtotime($items->created_at)) }}</p>
                    </td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                            {{ $items->Produk->nama_Produk }}</p>
                    </td>
                    <td
                        class="pt-2 px-6 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                          {{ $items->jumlah }} </p>
                    </td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                          {{ $items->total }}  </p>
                    </td>
                    <td
                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                        <p
                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                            </p>
                    </td>

                </tr>
            </tbody>
        @endforeach

    </table>

</body>
</html>
