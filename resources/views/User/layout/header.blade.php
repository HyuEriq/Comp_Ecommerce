<html>
<head>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container mx-auto my-4">
        <nav class="flex justify-between items-center">
            <div>
                <img src="img/logo.png" alt="" class=" w-[50px] mx-3 md:w-[80px]">
            </div>
            <ul class="lg:flex gap-8 text-xs font-semibold hidden">
                <a href="/index"><li>Home</li></a>
                <a href="{{ route('About.index') }}"><li>About As</li></a>
                <a href="#"><li>Produk</li></a>
                <a href="{{ route('Galeri.index') }}"><li>Galeri</li></a>
                <a href="{{ route('Contact.index') }}"><li>Contact</li></a>
            </ul>
            <div class="lg:flex hidden gap-10">
                <button>
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                      </svg>
                </button>
                <a href="{{ route('login') }}" class="px-11 py-4 rounded-full text-xs bg-red-800 font-semibold text-slate-200 hover:bg-red-700">Login</a>
            </div>
                <button class="lg:hidden block buttonToogle">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                      </svg>
                </button>
        </nav>

        <div class="menumobile hidden">
            <ul class="gap-8 text-xs font-semibold py-4">
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">Home</li>
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">About As</li>
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">Produk</li>
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">Galeri</li>
                <li class="py-4 px-3 cursor-pointer  hover:bg-red-800 hover:text-white ease-in duration-300">Contact</li>
            </ul>

            <div class="flex gap-5 mt-4">
                <button class="w-full">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3"/>
                      </svg>
                </button>
                <a href="{{ route('login') }}" class="w-full px-11 py-4 rounded-full text-xs bg-red-800 font-semibold text-slate-200">Login</a>
            </div>
        </div>
    </div>
