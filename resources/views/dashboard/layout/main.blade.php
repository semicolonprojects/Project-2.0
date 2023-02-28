<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>
    {{-- Navbar --}}
    <section name="navbar">
        <nav class="bg-white border-gray-200 px- sm:px-4 py-1 rounded">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <div class="px-0 py-0">
                    <img src='' class="h-15 w-16  inset-y-0 flex-items-center mr-3 ml-12 py-10" />
                </div>
                <div class="flex md:order-2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div>
                                <button class="absolute inset-y-0 right-0 flex items-center pr-3 type=" submit"
                                    class="p-2.5 ml-3 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                    <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span class="sr-only">Search Anything</span>
                                </button>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                                placeholder="Search" required>
                        </div>
                </div>
                <div class="flex items-center md:order-2">
                    <div>
                        <button class="inset-y-0 flex items-center pr-3" type="button">
                            <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 "
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                            alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                            <span
                                class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Earnings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    </form>
                </div>
            </div>
    </section>
    </nav>

    <div class="ml-10 mt-3 sm:ml-16 md:ml-20 xl:ml-48">
        <div class="inline-flex ml-16 sm:ml-16 md:ml-20 xl:ml-72">
            <button type="button"
                class="text-black  bg-background hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded-full text-sm p-4 text-center inline-flex items-center ml-8  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                    <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"></path>
                    <path d="M16 4h2a2 2 0 0 1 2 2v4"></path>
                    <path d="M21 14H11"></path>
                    <path d="m15 10-4 4 4 4"></path>
                </svg>
            </button>
            <button type="button"
                class="text-black  bg-background hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded-full text-sm p-4 text-center inline-flex items-center ml-8 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-line p="round" stroke-linejoin="round">
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                    <path d="m15 11-6 6"></path>
                    <path d="m9 11 6 6"></path>
                </svg>

            </button>
            <button type="button"
                class="text-black  bg-background hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded-full text-sm p-4 text-center inline-flex items-center ml-8  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                    <path d="M12 11h4"></path>
                    <path d="M12 16h4"></path>
                    <path d="M8 11h.01"></path>
                    <path d="M8 16h.01"></path>
                </svg>
                <span class="sr-only">Icon description</span>
            </button>
            <button type="button"
                class="text-black  bg-background hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded-full text-sm p-4 text-center inline-flex items-center ml-8  ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                    <path d="M12 11h4"></path>
                    <path d="M12 16h4"></path>
                    <path d="M8 11h.01"></path>
                    <path d="M8 16h.01"></path>
                </svg>
                <span class="sr-only">Icon description</span>
            </button>
        </div>
    </div>
    <div class="ml-[150px]  inline-flex sm:ml-3 md:ml-20 xl:ml-[525px]">
        <div class="flex-wrap absolute  ml-0">
            <p class="font-light text-black">Masuk</p>
        </div>
        <div class="flex-wrap absolute  ml-[85px]">
            <p class="font-light text-black">Keluar</p>
        </div>
        <div class="flex-wrap absolute  ml-[182px]">
            <p class="font-light text-black">Ijin</p>
        </div>
        <div class="flex-wrap absolute  ml-[264px]">
            <p class="font-light text-black">Cuti</p>
        </div>
    </div>


    {{-- Sidebar --}}
    <section name="sidebar">
        <aside id="logo-sidebar"
            class="w-20 fixed left-0 top-0 h-screen transition-transform-translate-x-full sm:translate-x-0 z-40"
            aria-label="logo-sidebar">
            <div class="px-3 py-1  bg-background dark:bg-gray-800 h-full">
                <div class="flex h-20 w-20 items-center justify-center mt-3 mb-9">
                    <img src=' Assets/images/Madukuy RGB Logogram.png'
                        class="h-15 w-16  inset-y-0 flex-items-center mr-7">
                </div>
                <ul class="space-y-2">

                    <li>
                        <a href="/superadmin"
                            class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg  ">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-black transition duration-75 group-hover:bg-yellow-200"
                                fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="/marketingdashboard"
                            class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a href="/finance"
                            class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="4" y1="22" x2="20" y2="22"></line>
                                <line x1="7" y1="18" x2="7" y2="11"></line>
                                <line x1="12" y1="18" x2="12" y2="11"></line>
                                <line x1="17" y1="18" x2="17" y2="11"></line>

                                <polygon points="12 2 20 7 4 7" fill="currentColor"> </polygon>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="/logistikdash"
                            class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                <line x1="12" y1="22" x2="12" y2="12"></line>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
    </section>
    </aside>
    @yield('mainContent')

    @vite(['resources/css/app.css','resources/js/app.js'])
</body>

</html>