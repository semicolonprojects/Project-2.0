<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    @vite('resources/css/app.css')
</head>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="icon" type="image/x-icon" href="\Assets\images\Madukuy RGB Logogram.ico">

<body class="bg-background">
    <section class="bg-background  font-custom">
        @if (session()->has('loginError'))
        <div id="alert-border-2" class="flex p-4 mb-4 text-red-800 border-t-4 bg-red-50" role="alert">
            <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3 text-sm font-medium">
                {{ session('loginError') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-border-2" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        @endif

        @if (session()->has('usernameError'))
        <div id="alert-border-2" class="flex p-4 mb-4 text-red-800 border-t-4 bg-red-50" role="alert">
            <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3 text-sm font-medium">
                {{ session('usernameError') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-border-2" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        @endif
        @if (session()->has('loginFirst'))
        <div id="alert-border-2"
            class="flex p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800"
            role="alert">
            <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <div class="ml-3 text-sm font-medium">
                {{ session('loginFirst') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-border-2" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        @endif
        <div class="p-6 flex flex-col justify-center overflow-y-auto">
            <div
                class="w-[534px] h-[670px] p-6 m-auto bg-yellow/0 rounded-3xl shadow-md shadow-gray-800 ring-2 ring-white ">
                <div class="px-40">
                    <img class="w-[233px]" src="Assets\images\Madukuy CMYK Logo.png" alt="">
                </div>
                <h1 class="text-6xl font-extrabold text-center text-black">Selamat Datang</h1>
                <form action="/" class="mt-10" method="POST">
                    @csrf
                    <div class="px-5">
                        <label for="username" class="block font-semibold text-sm text-gray-800 ">Username</label>
                        <input type="username" name="username" id="username"
                            class="block w-full px-4 py-2 mt-2 text-sm text-gray-700 bg-white rounded-md  focus:ring-black-600/70 focus:outline-none focus:ring focus:ring-opacity-40"
                            placeholder="Username" required value="{{ old('username') }}">
                    </div>
                    <div class="mt-4 px-5">
                        <div>
                            <label for="password" class="block font-semibold text-sm text-gray-800">Password</label>
                            <input type="password" placeholder="Password" :type="show ? 'password' : 'text'"
                                class="block w-full px-4 py-2 mt-2 text-sm text-gray-700 bg-white rounded-md  focus:ring-black-600/70 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="password" id="password" required>

                        </div>
                        <div class="mt-8 px-28">
                            <button
                                class="w-[218px] px-4 py-2 tracking-wide font-bold text-black transition-colors duration-200 transform bg-[#22DB66] shadow-md shadow-gray-800 rounded-md hover:bg-[#22DB66]/75 focus:outline-none"
                                type="submit">
                                {{ __('Login') }}
                            </button>
                        </div>
                </form>
            </div>
        </div>

    </section>

    @vite('resources/js/app.js')
</body>

</html>