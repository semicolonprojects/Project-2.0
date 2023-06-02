@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-28 mt-10">
    <div class="mb-10">
        <p class="text-[24px] text-black font-[700]">Data Barang Belanjaan</p>
    </div>
    <div class="w-[1250px]  bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[22px]">

        <div class="justify-end flex mr-6 md:order-2">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative mt-6 grid grid-flow-col w-fit">
                    <div>
                        <button class="absolute inset-y-0 right-0 flex items-center pr-3 type=" submit"
                            class="p-2.5 ml-3 text-sm font-medium text-white bg-blue-700 rounded-[22px] border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search Anything</span>
                        </button>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                        placeholder="Search" required>
                    </input>
                </div>
        </div>


        <div id="accordion-collapse" data-accordion="collapse" ">
    <table class=" w-[1250px] mt-8 table-fixed text-sm text-center text-gray-500 dark:text-gray-400 ">
        <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 font-thin">
                    KODE BARANG
                </th>
                <th scope="col" class="px-6 py-3 font-thin">
                    NAMA BARANG
                </th>
                <th scope="col" class="px-6 py-3 font-thin">
                    JUMLAH
                </th>
                <th scope="col" class="px-6 py-3 font-thin">
                    ACTION
                </th>
            </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    data-accordion-target="#accordion-color-body-1">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1000
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Jerigen 1KG
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        125
                    </th>
                    <td>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </button>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M12 20h9"></path>
                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                            </svg>
                        </button>
                        <button>

                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                    <line x1="18" y1="9" x2="12" y2="15"></line>
                                    <line x1="12" y1="9" x2="18" y2="15"></line>
                                </svg>
                            </button>
                    </td>
                </tr>
                <td class="inline-table">
                    <div id="accordion-color-body-1" class="hidden">
                        <table
                            class="w-[1100px] table-fixed text-sm text-center border border-t-0 text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr>
                                    <th>
                                        <p class="ml-10 font-thin">TANGGAL</p>
                                    </th>
                                    <th>
                                        <p class="ml-10 font-thin">STATUS</p>
                                    </th>
                                    <th>
                                        <p class="ml-10 font-thin">JUMLAH</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <th>
                                    <p class="ml-10 font-bold">10.02.2022/18:38</p>
                                </th>
                                <td>
                                    <p class="ml-10 font-bold">MASUK</p>
                                </td>
                                <td>
                                    <p class="ml-10 font-bold">72</p>
                                </td>

                            </tbody>
                            <tbody>

                                <th>
                                    <p class="ml-10 font-bold">10.02.2022/18:38</p>
                                </th>
                                <td>
                                    <p class="ml-10 font-bold">KELUAR</p>
                                </td>
                                <td>
                                    <p class="ml-10 font-bold">13</p>
                                </td>

                            </tbody>
                        </table>
                    </div>
                </td>
            </tbody>



        </div>

        <script>
            function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
} 
        </script>

        @vite(['resources/css/app.css','resources/js/app.js'])
        @endsection