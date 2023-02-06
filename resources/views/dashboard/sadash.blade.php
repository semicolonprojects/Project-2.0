@extends('dashboard.layout.main')

@section('mainContent')

{{-- Overview --}}
<div class="ml-48 mt-10 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-9">
    <div
        class="py-2 inline-flex rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-40">
        <h3 class="absolute ml-3 text-xl font-bold text-black">Marketing</h3>
        <p class="absolute mt-16 ml-3 text-2xl font-extrabold text-gray-900/70">500</p>
        <div class="inline-flex absolute stroke-gray-900 w-5 h-5  ml-44 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
        </div>
        <div class="inline-block top-0 rounded bg-green-200 text-green-600 w-16 h-4 mt-28 ml-32">
            <p class="text-center ml-1 text-xs font-medium">+ 67,81 % </p>
        </div>
    </div>

    <div
        class="py-2 inline-flex rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-40">
        <h3 class="absolute ml-3 text-xl font-bold text-black">Finance</h3>
        <p class="absolute mt-16 ml-3 text-2xl font-extrabold text-gray-900/70">IDR 2,100,456</p>
        <div class="inline-flex absolute stroke-gray-900 w-5 h-5  ml-44 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                <polyline points="16 7 22 7 22 13"></polyline>
            </svg>
        </div>
        <div class="inline-block top-0 rounded bg-green-200 text-green-600 w-16 h-4 mt-28 ml-32">
            <p class="text-center ml-1 text-xs font-medium">+ 67,81 % </p>
        </div>
    </div>

    <div
        class="py-2 inline-flex rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-40">
        <h3 class="absolute ml-3 text-xl font-bold text-black">Logistik</h3>
        <p class="absolute mt-16 ml-3 text-2xl font-extrabold text-gray-900/70">2,100</p>
        <div class="inline-flex absolute stroke-gray-900 w-5 h-5  ml-44 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                </path>
                <polyline points="3.29 7 12 12 20.71 7"></polyline>
                <line x1="12" y1="22" x2="12" y2="12"></line>
            </svg>
        </div>
        <div class="inline-block top-0 rounded bg-red-200 text-red-600 w-16 h-4 mt-28 ml-32">
            <p class="text-center ml-1 text-xs font-medium">- 7,81 % </p>
        </div>
    </div>
</div>

{{-- Table Order Stats --}}
<div class="ml-24 px-24 py-12">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Order Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Customer Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    #SRMK14045
                </th>
                <td class="mt-2 px-4 align-center">
                    <button disabled type="button"
                        class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">In
                        Progress</button>

                </td>
                <td class="px-6 py-4">
                    Hengky
                </td>
                <td class="px-6 py-4">
                    user@email.com
                </td>
                <td>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    #SRMK14045
                </th>
                <td class="mt-2 px-4 align-center">
                    <button disabled type="button"
                        class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">In
                        Progress</button>
                </td>
                <td class="px-6 py-4">
                    Hengky
                </td>
                <td class="px-6 py-4">
                    user@email.com
                </td>
                <td>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    #SRMK14045
                </th>
                <td class="mt-2 px-4 align-center">
                    <button disabled type="button"
                        class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">In
                        Progress</button>
                </td>
                <td class="px-6 py-4">
                    Hengky
                </td>
                <td class="px-6 py-4">
                    user@email.com
                </td>
                <td>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
        </tbody>
    </table>
</div>

{{-- Order Stats --}}
<div class="ml-48 mt-10 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-24 ">
    <div
        class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[384px] h-[450px]">
        <div class="grid grid-flow-col gap-40">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Order Stats</h5>
            <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </button>
        </div>
        <div class="inline-flex absolute justify-center py-10 ml-3"><canvas id="myChart"></canvas></div>
    </div>

    {{-- Top Products --}}
    <div
        class="inline-block max-w-sm  p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[384px] h-[450px]">
        <div class="grid grid-flow-col gap-20">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Top Products</h5>
            <div class="grid grid-flow-col">
                <p class="font-normal text-xl text-black/60">Daily</p>
                <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="grid grid-flow-row gap-10 py-10">
            <div class="grid grid-flow-col justify-center gap-3">
                <p class="self-center text-base text-black">1.</p>
                <div class="flex flex-wrap justify-center">
                    <div class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-14 w-14">
                        <img src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                </div>
                <p class="self-center text-base text-black ">Madu Durian</p>
                <p class="self-center text-base text-black ">600ml</p>
                <p class="self-center text-base text-black ">20pcs</p>
            </div>
            <div class="grid grid-flow-col justify-center gap-3">
                <p class="self-center text-base text-black">1.</p>
                <div class="flex flex-wrap justify-center">
                    <div class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-14 w-14">
                        <img src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                </div>
                <p class="self-center text-base text-black ">Madu Durian</p>
                <p class="self-center text-base text-black ">600ml</p>
                <p class="self-center text-base text-black ">20pcs</p>
            </div>
            <div class="grid grid-flow-col justify-center gap-3">
                <p class="self-center text-base text-black">1.</p>
                <div class="flex flex-wrap justify-center">
                    <div class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-14 w-14">
                        <img src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                </div>
                <p class="self-center text-base text-black ">Madu Durian</p>
                <p class="self-center text-base text-black ">600ml</p>
                <p class="self-center text-base text-black ">20pcs</p>
            </div>
        </div>
    </div>
</div>

{{-- Table Stok Produk --}}
<div
    class="max-w-5xl bg-white border border-black rounded-lg shadow-[0px_8px_8px_rgba(0,0,0,0.5)] mt-28 mb-10 content-center ml-40">
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

{{-- Table Low Stok --}}
<div
    class="max-w-5xl bg-white border border-black rounded-lg shadow-[0px_8px_8px_rgba(0,0,0,0.5)] mt-28 mb-10 content-center ml-40">
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

{{-- Top Customers --}}
<div class="ml-28 px-12 mt-10 p-10">
    <div class=" max-w-5xl h-[480px] p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl">
        <h5 class="inline-flex absolute mb-2 text-2xl font-bold tracking-tight  text-gray-900 ">Top Customers</h5>
        <div class="inline-flex ml-[900px]">
            <p class="font-normal text-xl text-black/60">Daily</p>
            <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class=" mt-14 ml-24 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-9">
            <div
                class="py-2 inline-flex rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-56">
                <h3 class="absolute mt-4 ml-24 text-3xl font-bold text-black">1</h3>
                <p class="absolute mt-16 ml-16 text-2xl font-extrabold text-gray-900">Hengki</p>
                <div class="inline-flex absolute stroke-gray-900 w-5 h-5  ml-[165px] mt-0">
                    <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                </div>
                <div class="mt-[120px] py-2 inline-flex absolute">
                    <p class="self-center text-md text-black font-semibold ml-3 ">Total Orders</p>
                    <p class="place-self-center text-md text-black font-normal ml-10 ">246 pcs</p>
                </div>
                <div class="mt-[155px] py-2 inline-flex absolute">
                    <p class="self-center text-md text-black font-semibold ml-3 ">Revenue</p>
                    <p class="place-self-center text-md text-black font-normal ml-9 ">IDR 246.000</p>
                </div>
            </div>
            <div
                class="py-2 inline-flex rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-56">
                <h3 class="absolute mt-4 ml-24 text-3xl font-bold text-black">2</h3>
                <p class="absolute mt-16 ml-16 text-2xl font-extrabold text-gray-900">Hengki</p>
                <div class="inline-flex absolute stroke-gray-900 w-5 h-5  ml-[165px] mt-0">
                    <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                </div>
                <div class="mt-[120px] py-2 inline-flex absolute">
                    <p class="self-center text-md text-black font-semibold ml-3 ">Total Orders</p>
                    <p class="place-self-center text-md text-black font-normal ml-10 ">246 pcs</p>
                </div>
                <div class="mt-[155px] py-2 inline-flex absolute">
                    <p class="self-center text-md text-black font-semibold ml-3 ">Revenue</p>
                    <p class="place-self-center text-md text-black font-normal ml-9 ">IDR 246.000</p>
                </div>
            </div>
            <div
                class="py-2 inline-flex rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-52 h-56">
                <h3 class="absolute mt-4 ml-24 text-3xl font-bold text-black">3</h3>
                <p class="absolute mt-16 ml-16 text-2xl font-extrabold text-gray-900">Hengki</p>
                <div class="inline-flex absolute stroke-gray-900 w-5 h-5  ml-[165px] mt-0">
                    <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                </div>
                <div class="mt-[120px] py-2 inline-flex absolute">
                    <p class="self-center text-md text-black font-semibold ml-3 ">Total Orders</p>
                    <p class="place-self-center text-md text-black font-normal ml-10 ">246 pcs</p>
                </div>
                <div class="mt-[155px] py-2 inline-flex absolute">
                    <p class="self-center text-md text-black font-semibold ml-3 ">Revenue</p>
                    <p class="place-self-center text-md text-black font-normal ml-9 ">IDR 246.000</p>
                </div>
            </div>
        </div>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
        <div
        class="inline-flex absolute py-2 mt-[24px] ml-[70px] rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-64 h-16">
        <div class="bg-bgTopProducs ml-8 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
            <img src="Assets\images\pure-honey-1-removebg-preview.png" />
        </div>
        <div class="bg-bgTopProducs ml-12 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
            <img src="Assets\images\pure-honey-1-removebg-preview.png" />
        </div>
        <div class="bg-bgTopProducs ml-12 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
                <img src="Assets\images\pure-honey-1-removebg-preview.png" />
            </div>
            <div class="mt-8 inline-flex absolute ml-3">
                <p class="text-xs">Madu Durian</p>
            </div>
            <div class="mt-8 inline-flex absolute ml-24">
                <p class="text-xs">Madu Durian</p>
            </div>
            <div class="mt-8 inline-flex absolute ml-44">
                <p class="text-xs">Madu Durian</p>
            </div>
        </div>
        
        <div
        class="inline-flex absolute py-2 mt-[24px] ml-[370px] rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-64 h-16">
        <div class="bg-bgTopProducs ml-8 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
            <img src="Assets\images\pure-honey-1-removebg-preview.png" />
        </div>
        <div class="bg-bgTopProducs ml-12 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
                <img src="Assets\images\pure-honey-1-removebg-preview.png" />
            </div>
            <div class="bg-bgTopProducs ml-12 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
                <img src="Assets\images\pure-honey-1-removebg-preview.png" />
            </div>
            <div class="mt-8 inline-flex absolute ml-3">
                <p class="text-xs">Madu Durian</p>
            </div>
            <div class="mt-8 inline-flex absolute ml-24">
                <p class="text-xs">Madu Durian</p>
            </div>
            <div class="mt-8 inline-flex absolute ml-44">
                <p class="text-xs">Madu Durian</p>
            </div>
        </div>
        
        <div
        class="inline-flex absolute py-2 mt-[24px] ml-[660px] rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-64 h-16">
        <div class="bg-bgTopProducs ml-8 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
            <img src="Assets\images\pure-honey-1-removebg-preview.png" />
            </div>
            <div class="bg-bgTopProducs ml-12 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
                <img src="Assets\images\pure-honey-1-removebg-preview.png" />
            </div>
            <div class="bg-bgTopProducs ml-12 rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-8 w-8">
                <img src="Assets\images\pure-honey-1-removebg-preview.png" />
            </div>
            <div class="mt-8 inline-flex absolute ml-3">
                <p class="text-xs">Madu Durian</p>
            </div>
            <div class="mt-8 inline-flex absolute ml-24">
                <p class="text-xs">Madu Durian</p>
            </div>
            <div class="mt-8 inline-flex absolute ml-44">
                <p class="text-xs">Madu Durian</p>
            </div>
        </div>
</div>
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
@endsection