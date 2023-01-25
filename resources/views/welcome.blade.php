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
                                        class="absolute inset-y-0 right-0 sm:pr-24 md:pr-24 xl:pr-24 2xl:pr-24 flex items-center text-sm leading-5">
                                        <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                            :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                            </path>
                                        </svg>

                                        <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                            :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                            viewbox="0 0 640 512">
                                            <path fill="currentColor"
                                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
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