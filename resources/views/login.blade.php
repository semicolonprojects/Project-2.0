<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add the following line to make the view responsive -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <!-- ... -->
    @vite('resources/js/app.js')
</head>

<body class="bg-background">
    <section class="bg-background font-custom">
        <!-- ... -->
        <div class="p-2.5 lg:p-1.5  flex flex-col justify-center ">
            <div class="w-[534px] h-[650px] p-4 lg:p-2 m-auto bg-background rounded-3xl shadow-md ring-2 ring-white max-w-full">
                <div class="px-10 md:px-40">
                    <img class="w-[233px] mx-auto" src="Assets\images\Madukuy CMYK Logo.png" alt="">
                </div>
                <h1 class="text-4xl lg:text-6xl font-extrabold text-center text-black">Selamat Datang</h1>
                <form action="{{ route('login') }}" class="mt-10" method="POST">
                    @csrf
                    <div class="px-5">
                        <label for="username" class="block font-semibold text-sm text-gray-800">Username</label>
                        <input type="username" name="username" id="username"
                            class="block w-full px-4 py-2 mt-2 text-sm text-gray-700 bg-white rounded-md focus:ring-black-600/70 focus:outline-none focus:ring focus:ring-opacity-40"
                            placeholder="Username" required value="{{ old('username') }}">
                    </div>
                    <div class="mt-4 px-5">
                        <div>
                            <label for="password" class="block font-semibold text-sm text-gray-800">Password</label>
                            <input type="password" placeholder="Password" :type="show ? 'password' : 'text'"
                                class="block w-full px-4 py-2 mt-2 text-sm text-gray-700 bg-white rounded-md focus:ring-black-600/70 focus:outline-none focus:ring focus:ring-opacity-40"
                                name="password" id="password" required>
                        </div>
                        <div class="mt-8 px-6 lg:px-28">
                            <button
                                class="w-full px-4 py-2 tracking-wide font-bold text-black transition-colors duration-200 transform bg-[#22DB66] shadow-md shadow-gray-800 rounded-md hover:bg-[#22DB66]/75 focus:outline-none md:w-[218px]"
                                type="submit">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>