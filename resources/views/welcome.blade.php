<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    @vite('resources/css/app.css')
</head>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<body class="bg-background">
    <section class="bg-background  font-custom">
        <div class="p-6 flex flex-col justify-center overflow-y-auto">
            <div class="w-[534px] h-[670px] p-6 m-auto bg-yellow/0 rounded-3xl shadow-md shadow-gray-800 ring-2 ring-white ">
                <div class="px-40">
                    <img class="w-[233px]" src="Assets\images\Madukuy CMYK Logo.png" alt="">
                </div>
                <h1 class="text-6xl font-extrabold text-center text-black">Selamat Datang</h1>
                <form class="mt-10">
                    <div class="px-5">
                        <label for="email" class="block font-semibold text-sm text-gray-800">Username</label>
                        <input input type="email" name="email" id="email"
                            class="block w-full px-4 py-2 mt-2 text-sm text-gray-700 bg-white border rounded-md focus:border-primary-600/70 focus:ring-primary-600/70 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Username" required="">
                    </div>
                    <div class="mt-4 px-5">
                        <div>
                            <label for="password" class="block font-semibold text-sm text-gray-800">Password</label>
                            <input type="password" placeholder="Password" :type="show ? 'password' : 'text'"
                                class="block w-full px-4 py-2 mt-2 text-sm text-gray-700 bg-white border rounded-md focus:border-primary-600/70 focus:ring-primary-600/70 focus:outline-none focus:ring focus:ring-opacity-40">
                                
                        </div>
                        <div class="mt-8 px-28">
                            <button
                                class="w-[218px] px-4 py-2 tracking-wide font-bold text-black transition-colors duration-200 transform bg-[#22DB66] shadow-md shadow-gray-800 rounded-md hover:bg-[#22DB66]/75 focus:outline-none">
                                Login
                            </button>
                        </div>
                </form>
            </div>
        </div>

    </section>

    @vite('resources/js/app.js')
</body>

</html>