@extends('dashboard.layout.main')

@section('mainContent')

{{-- Overview --}}
<div
    class="w-[1024px] rounded-[13px] overflow-hidden ml-40 mt-10 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="px-6 py-4">
        <div class="grid grid-flow-col gap-[580px]">
            <div class="font-bold text-2xl">Marketing Division Overview</div>
            <div class="inline-flex">
                <p class="font-normal text-xl text-black/60">Daily</p>
                <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="px-10 py-8">
        <p class="text-black/75 text-xl">This Month</p>
        <div class="grid grid-flow-col gap-0">
            <p class="text-[#4E504F] text-[32px]">IDR 2.000.000</p>
            <div class="absolute rounded bg-[#22DB6636] text-[#25D466F7] w-24 h-6 mt-4 ml-56">
                <p class="text-center ml-1 text-[17px] font-medium">+ 4,20 % </p>
            </div>
        </div>
    </div>
    <div class="px-10 py-8">
        <div class="grid grid-flow-col divide-x divide-black ">
            <div class="grid grid-flow-row divide-y divide-black">
                <div class="px-7 py-7">
                    <p class="text-[#000000B8] text-xl font-custom">Orders</p>
                    <p class="text-black text-xl">5000</p>
                </div>
                <div class="px-7 py-10">
                    <p class="text-[#000000B8] text-xl font-custom">Average sales success rate</p>
                    <p class="text-black text-xl">12%</p>
                </div>
            </div>
            <div class="grid grid-flow-row divide-y divide-black">
                <div class="px-7 py-7">
                    <p class="text-[#000000B8] text-xl font-custom">Sales</p>
                    <p class="text-black text-xl">20.000</p>
                </div>
                <div class="px-7 py-10">
                    <p class="text-[#000000B8] text-xl font-custom">Customers</p>
                    <p class="text-black text-xl">1.000</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Order Stats --}}
<div class=" ml-32 mt-14 grid grid-flow-col gap-[602px]">
    <h5 class="mb-2 ml-5 text-2xl font-bold tracking-tight text-gray-900 ">Order Stats</h5>
    <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
    </button>
</div>
<div
    class="inline-block p-6 bg-white border border-gray-200 rounded-xl ml-36 hover:bg-gray-100 shadow-2xl w-[1070px] h-[600px]">
    <div class="grid grid-flow-col justify-end mb-8 mr-1 gap-2">

        <button class="grid grid-flow-col gap-2 " id="sortBy" data-dropdown-toggle="sortBytrigger">Sort by
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                stroke="currentColor" class="w-5 h-5 mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
    </div>
    <div class='' id="{!! $saleThisMonth->container()  !!}"></div>
</div>

{{-- Top Product --}}
<div class="mt-14 ml-40">
    <div
        class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[1024px] h-[700px]">
        <div class="grid grid-flow-col gap-[690px]">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Top Products</h5>
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
        <div class="grid grid-flow-col gap-x-40 py-10 ">
            <div class="grid grid-flow-row  ml-14 gap-3">
                <p class="ml-9 text-[32px] text-black">1</p>
                <div class="flex flex-wrap ">
                    <div
                        class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[94px] w-[93px]">
                        <img class="mt-3 w-52 h-20" src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                </div>
                <p class="text-base text-black ">Madu Durian</p>
                <p class="px-5 text-base text-black ">600ml</p>
                <p class="px-5 text-base text-black ">20pcs</p>
            </div>

            <div class="grid grid-flow-row gap-3">
                <p class="ml-9 text-[32px] text-black">2</p>
                <div class="flex flex-wrap ">
                    <div
                        class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[94px] w-[93px]">
                        <img class="mt-3 w-52 h-20" src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                </div>
                <p class="text-base text-black ">Madu Durian</p>
                <p class="px-5 text-base text-black ">600ml</p>
                <p class="px-5 text-base text-black ">20pcs</p>
            </div>

            <div class="grid grid-flow-row gap-3">
                <p class="ml-9 text-[32px] text-black">3</p>
                <div class="flex flex-wrap ">
                    <div
                        class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[94px] w-[93px]">
                        <img class="mt-3 w-52 h-20" src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                </div>
                <p class="text-base text-black ">Madu Durian</p>
                <p class="px-5 text-base text-black ">600ml</p>
                <p class="px-5 text-base text-black ">20pcs</p>
            </div>
        </div>
        <div class="inline-flex absolute gap-10 mt-3 ">
            <div class="inline-flex absolute mt-5 gap-10">
                <p class=" text-[20px] text-black">4.</p>
                <div class="flex flex-wrap pb-3">
                    <div
                        class=" bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[83px] w-[83px]">
                        <img class=" w-52 h-20 mt-3" src="Assets\images\pure-honey-1-removebg-preview.png" />
                    </div>
                </div>
                <p class=" text-base text-black ">Madu Durian</p>
                <p class=" text-base text-black ">600ml</p>
                <p class=" text-base text-black ">20pcs</p>
            </div>
            <div>
                <div class="inline-flex absolute gap-10 mt-36 ">
                    <p class=" text-[20px] text-black">5.</p>
                    <div class="flex flex-wrap">
                        <div
                            class="bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[83px] w-[83px]">
                            <img class="w-52 h-20 mt-3" src="Assets\images\pure-honey-1-removebg-preview.png" />
                        </div>
                    </div>
                    <p class=" text-base text-black ">Madu Durian</p>
                    <p class=" text-base text-black ">600ml</p>
                    <p class=" text-base text-black ">20pcs</p>
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

<!-- Marketing Overview Dropdown Menu -->
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

{{-- Sales Analytics --}}
<div class="mt-14 ml-40">
    <div
        class="h-fit w-[845px] sm:w-[845px] md:w-[845px] lg:w-[845px] xl:w-[1026px]  bg-white border-[1px] shadow-[0px_4px_4px_rgba(0,0,0,0.25)] border-[#686868cf] rounded-[13px]">
        <div class="grid grid-flow-col gap-[693px]">
            <div class="p-5">
                <p class="text-[24px] text-black font-bold">Sales Analytics</p>
            </div>
            <div class="inline-flex self-center">
                <p class="font-normal text-xl text-black/60">Daily</p>
                <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div>
            <div id="{!! $salesAnalytics->container() !!}" width="1028px" height="283px"></div>
        </div>
    </div>
</div>

{{-- Summary Orders & Targets --}}
<div class="mt-14 ml-40">
    <div
        class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[1024px] h-[980px]">
        <div class="inline-flex absolute">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Summary Order & Target </h5>
        </div>
        <div class="inline-flex absolute ml-[920px]">
            <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </button>
        </div>
        <div class="grid grid-flow-col gap-7 ">
            <div class="grid grid-flow-row gap-7 ">
                <div
                    class="inline-flex mt-20 ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[390px] h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Total Order</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        <h5 class="text-4xl font-bold tracking-tight text-gray-900 ml-5 mt-3">IDR 27 M</h5>
                        <p class="ml-14 mt-7 text-gray-700/75">Today : 27 May 2023</p>
                    </div>
                    <div
                        class="inline-flex absolute ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
                        <div class="py-2 px-2">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <circle cx="8" cy="21" r="1" />
                                    <circle cx="19" cy="21" r="1" />
                                    <path
                                        d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-flex ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[390px] h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Total Closing</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        <h5 class="text-4xl font-bold tracking-tight text-gray-900 ml-5 mt-3">IDR 27 M</h5>
                        <p class="ml-14 mt-7 text-gray-700/75">Today : 27 May 2023</p>
                    </div>
                    <div
                        class="inline-flex absolute ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
                        <div class="py-2 px-2">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="m9 11l3 3L22 4" />
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-flow-row gap-7">
                <div
                    class="inline-flex mt-20 ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[390px] h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Daily Target</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        <h5 class="text-4xl font-bold tracking-tight text-gray-900 ml-5 mt-3">IDR 27 M</h5>
                        <p class="ml-14 mt-7 text-gray-700/75">Today : 27 May 2023</p>
                    </div>
                    <div
                        class="inline-flex absolute ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
                        <div class="py-2 px-2">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M3 3v18h18" />
                                    <path d="m19 9l-5 5l-4-4l-3 3" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class="inline-flex ml-10 bg-white border-2 border-gray-200 rounded-2xl shadow-xl w-[390px] h-[200px]">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ml-5 mt-3">Actual Sales</h5>
                    <div class="inline-flex absolute mt-32 mr-16">
                        <h5 class="text-4xl font-bold tracking-tight text-gray-900 ml-5 mt-3">IDR 27 M</h5>
                        <p class="ml-14 mt-7 text-gray-700/75">Today : 27 May 2023</p>
                    </div>
                    <div
                        class="inline-flex absolute ml-80 mt-3 bg-[#22DB6636] text-[#25D466F7] rounded-xl  w-[50px] h-[50px]">
                        <div class="py-2 px-2">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                <g fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-7 border-b-[1px] border-black "></div>
        <div class="grid grid-flow-col gap-7">
            <div class="inline-flex absolute mt-3">
                <h5 class="text-2xl font-bold tracking-tight text-gray-900">Daily Order Stats</h5>
                <div class="mt-20 mr-16 absolute">
                    <div>
                        <div id="{!! $dailyOrderStats->container() !!}" width=" 350px" height="200px"></div>
                    </div>
                </div>
            </div>

            <div class="inline-flex absolute mt-3 ml-[507px]">
                <h5 class="absolute text-2xl font-bold tracking-tight text-gray-900">Daily Target Stats</h5>
                <div class="mb-7 w-96">
                    <div class='py-10' id="{!! $dailyTargetStats->container() !!}" width="280px">
                    </div>
                </div>
            </div>
            <div class="py-48 mr-[503px] border-r-[1px] border-black"></div>
        </div>
    </div>

    {{-- Top Customer --}}
    <div class="px-0 mt-10 p-10">
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
            <div
                class=" mt-14 ml-24 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-9">
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
                    class="inline-flex absolute py-2 mt-[24px] ml-[680px] rounded-xl border border-gray-400/70 bg-gray-200/0 shadow-md shadow-gray-400 w-64 h-16">
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


    <script src="{{ $orderStats->cdn() }}"></script>

    {{ $orderStats->script() }}
    {{ $userActivity->script() }}
    {{ $salesAnalytics->script() }}
    {{ $dailyOrderStats->script() }}
    {{ $dailyTargetStats->script() }}
    {{ $saleThisMonth->script() }}

    @vite(['resources/css/app.css','resources/js/app.js'])


    @endsection