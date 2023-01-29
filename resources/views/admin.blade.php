<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section name="navbar">
        <nav class="bg-white border-gray-200 px- sm:px-4 py-1 rounded">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <div class="px-0 py-0">
                    <img src=' Assets/images/Madukuy RGB Logogram.png'
                        class="h-15 w-16  inset-y-0 flex-items-center mr-3 ml-12" />
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

    <div class=" relative ml-32 inline-flex">
        <button type="button"
            class="text-black  bg-background hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded-full text-sm p-4 text-center inline-flex items-center ml-96  ">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
            </svg>

        </button>

        <div class=" absolute top-14 left-1/2  ml-8 px-2 ">
            <p class=" font-light text-black">Masuk</p>
        </div>

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
            <span class="sr-only">Icon description</span>
        </button>

        <div class=" absolute top-14 left-1/2  ml-32 ">
            <p class=" font-light text-black">Keluar</p>
        </div>

        <button type="button"
            class="text-black  bg-background hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded-full text-sm p-4 text-center inline-flex items-center ml-8 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                <path d="m15 11-6 6"></path>
                <path d="m9 11 6 6"></path>
            </svg>
            <span class="sr-only">Icon description</span>
        </button>

        <div class=" absolute top-14 left-1/2  ml-56 ">
            <p class=" font-light text-black">Izin</p>
        </div>

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

        <div class=" absolute top-14 left-1/2  ml-72 px-6   ">
            <p class=" font-light text-black">Cuti</p>
        </div>



    </div>

    <section name="sidebar">
        <aside id="logo-sidebar"
            class="w-20 fixed left-0 top-0 h-screen transition-transform-translate-x-full sm:translate-x-0 z-40"
            aria-label="logo-sidebar">
            <div class="px-3 py-1  bg-background dark:bg-gray-800 h-full">
                <div class="flex h-20 w-20 items-center justify-center mt-3 mb-9">
                    <img src=' Assets/images/Madukuy RGB Logogram.png'
                        class="h-15 w-16  inset-y-0 flex-items-center mr-7">
                </div>
                <ul class=" space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300">
                            <svg aria-hidden="true" class="w-6 h-6 text-black transition duration-75 "
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg  ">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-black transition duration-75 group-hover:bg-yellow-200"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg ">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                </path>
                                <path
                                    d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg ">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-black transition duration-75  group-hover:text-gray-900 "
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-4 text-base font-normal text-gray-900 rounded-lg ">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-black transition duration-75  group-hover:text-gray-900 "
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
    </section>
    </aside>
    {{-- <aside id="logo-sidebar"
        class="w-64 fixed left-0 top-0 h-screen transition-transform -translate-x-full sm:translate-x-0 z-40"
        aria-label="Sidebar">
        <div class="px-3 py-1  bg-background dark:bg-gray-800 h-full">
            <div class="px-3 py-1">
                <img src=' Assets/images/Madukuy RGB Logogram.png'
                    class="h-22 w-24  inset-y-0 flex-items-center mr-3 ml-12" />
            </div>
            <ul class=" space-y-2">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 ">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-black transition duration-75 dark:text-gray-400 group-hover:bg-yellow-200"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                        <span
                            class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                            </path>
                            <path
                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-black transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside> --}}
    <br><br>
    <div class="ml-32">
        <div class="grid grid-flow-col">
            <div class="block max-w-md p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl">
                <div class="grid grid-flow-col gap-60">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Order Stats</h5>
                    <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                </div>
                <div class="py-20"><canvas id="myChart"></canvas></div>
            </div>
            <div class="block max-w-md p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl">
                <div class="grid grid-flow-col gap-44">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Top Products</h5>
                    <div class="grid grid-flow-col gap-3">
                        <p class="font-normal text-xl text-black/60">Daily</p>
                        <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="grid grid-flow-row gap-32 py-10">
                    <div class="grid grid-flow-col justify-center gap-3">
                        <p class="self-center text-xl text-black">1.</p>
                        <div class="flex flex-wrap justify-center">
                            <div
                                class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-28 w-28">
                                <img src="Assets\images\pure-honey-1-removebg-preview.png" />
                            </div>
                        </div>
                        <p class="self-center text-xl text-black ">Madu Durian</p>
                        <p class="self-center text-xl text-black ">600ml</p>
                        <p class="self-center text-xl text-black ">20pcs</p>
                    </div>
                    <div class="grid grid-flow-col justify-center gap-3">
                        <p class="self-center text-xl text-black">2.</p>
                        <div class="flex flex-wrap justify-center">
                            <div
                                class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-28 w-28">
                                <img src="Assets\images\pure-honey-1-removebg-preview.png" />
                            </div>
                        </div>
                        <p class="self-center text-xl text-black ">Madu Durian</p>
                        <p class="self-center text-xl text-black ">600ml</p>
                        <p class="self-center text-xl text-black ">20pcs</p>
                    </div>
                    <div class="grid grid-flow-col justify-center gap-3">
                        <p class="self-center text-xl text-black">3.</p>
                        <div class="flex flex-wrap justify-center">
                            <div
                                class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-28 w-28">
                                <img src="Assets\images\pure-honey-1-removebg-preview.png" />
                            </div>
                        </div>
                        <p class="self-center text-xl text-black ">Madu Durian</p>
                        <p class="self-center text-xl text-black ">600ml</p>
                        <p class="self-center text-xl text-black ">20pcs</p>
                    </div>

                </div>
            </div>
        </div>

        <div
            class="max-w-5xl bg-white border border-black rounded-lg shadow-[0px_8px_8px_rgba(0,0,0,0.5)] mt-28 mb-10 content-center">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="content-center mx-10 my-5">
                <h5 class="flex text-2xl font-black tracking-tight text-stockProductText justify-center">Stok Produk
                </h5>

                <div class="relative overflow-x-auto py-10">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-sm text-[#464D51] uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ammount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Min. Ammount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stok Akhir
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Entry Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                            </tr>
                        </thead>
                        <tbody class="self-center">
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center py-5">
                <nav aria-label="Page navigation example">
                    <ul class="flex list-style-none">
                        <li class="page-item disabled"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300  text-gray-500 pointer-events-none focus:shadow-none"
                                href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                        <li class="page-item"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300  text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                href="#">1</a></li>
                        <li class="page-item active"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-blue-600 outline-none transition-all duration-300  text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                                href="#">2 <span class="visually-hidden">(current)</span></a></li>
                        <li class="page-item"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300  text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                href="#">3</a></li>
                        <li class="page-item"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300  text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div
            class="max-w-5xl bg-white border border-black rounded-lg shadow-[0px_8px_8px_rgba(0,0,0,0.5)] mt-28 mb-10 content-center">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="content-center mx-10 my-5">
                <h5 class="flex text-2xl font-black tracking-tight text-stockProductText justify-center">Low Stock
                </h5>

                <div class="relative overflow-x-auto py-10">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-sm text-[#464D51] uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ammount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Min. Ammount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stok Akhir
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Entry Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                            </tr>
                        </thead>
                        <tbody class="self-center">
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-light text-[#464D51]">
                                    Madu Durian
                                </th>
                                <td class="px-6 py-4">
                                    92
                                </td>
                                <td class="px-6 py-4">
                                    11
                                </td>
                                <td class="px-6 py-4">
                                    72
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                                <td class="px-6 py-4">
                                    IDR 5,000
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center py-5">
                <nav aria-label="Page navigation example">
                    <ul class="flex list-style-none">
                        <li class="page-item disabled"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300  text-gray-500 pointer-events-none focus:shadow-none"
                                href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                        <li class="page-item"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300  text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                href="#">1</a></li>
                        <li class="page-item active"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-blue-600 outline-none transition-all duration-300  text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                                href="#">2 <span class="visually-hidden">(current)</span></a></li>
                        <li class="page-item"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300  text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                href="#">3</a></li>
                        <li class="page-item"><a
                                class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300  text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                                href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Back to top button -->
        <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
            class="p-3 bg-background text-black font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gradient-to-bl from-yellow-200 to-bg-yellow-300 focus:ring-yellow-400 focus:shadow-lg focus:outline-none transition duration-150 ease-in-out hidden bottom-5 right-5 fixed"
            id="btn-back-to-top">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor"
                    d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
                </path>
            </svg>
        </button>

    </div>


    <!-- Dropdown menu -->
    <div id="orderStatsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="orderStats">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Daily</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Monthly</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Yearly</a>
            </li>
            <li>
        </ul>
    </div>

    <!-- Order Stats Dropdown Menu -->
    <div id="topProductsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topProducts">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Daily</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Monthly</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Yearly</a>
            </li>
            <li>
        </ul>
    </div>
    @vite(['resources/css/app.css','resources/js/app.js'])
</body>

</html>