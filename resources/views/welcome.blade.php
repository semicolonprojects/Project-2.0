<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<body class="bg-background">
    <section class="bg-background  font-custom">
        <div
            class="flex flex-col items-center justify-center px-6 py-8 mx-auto sm:h-screen md:h-screen lg:h-screen xl:h-screen 2xl:h-screen lg:py-0">
            <div class=" bg-background rounded-3xl border-2 border-rose-50 md:mt-0 sm:max-w-md xl:p-0 shadow-2xl">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-6xl font-extrabold leading-tight tracking-tight text-gray-900  dark:text-white">
                        Selamat Datang
                    </h1>
                    <div class="max-w-sm mx-auto px-0 py-12 sm:py-12">
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-light text-gray-900 dark:text-white">Username</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-primary-600 focus:border-primary-600 block w-72 p-2.5"
                                    placeholder="Username" required="">
                            </div>
                            <div class="" x-data="{ show: true }">
                                <label for="password"
                                    class="block mb-2 text-sm font-light text-gray-900 dark:text-white">Password</label>
                                <div class="relative">
                                    <input placeholder="Password" :type="show ? 'password' : 'text'"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-md focus:ring-primary-600 focus:border-primary-600 block w-72 p-2.5">
                                    <div
                                        class="absolute inset-y-0 right-0 pr-10 md:pr-24 xl:pr-24 2xl:pr-24 flex items-center text-sm leading-5">
                                        <svg class="h-5 text-gray-500" fill="none" @click="show = !show"
                                            :class="{'hidden': !show, 'block':show }" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2.38" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                            </path>
                                            <path stroke="currentColor" stroke-width="2.38" stroke-linecap="round"
                                                stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>

                                        <svg class="h-5 text-gray-500" fill="none" @click="show = !show"
                                            :class="{'block': !show, 'hidden':show }" stroke="currentColor"
                                            stroke-width="2.38" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88">
                                            </path>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <button
                                class="bg-button hover:bg-buttonhover text-black font-bold py-3 px-12 rounded text-xs shadow-2xl">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @vite('resources/js/app.js')
</body>

</html>