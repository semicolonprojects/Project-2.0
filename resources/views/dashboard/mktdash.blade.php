@extends('dashboard.layout.main')

@section('mainContent')

<div
    class="w-[1024px] rounded-[13px] overflow-hidden ml-48 mt-10 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
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
        <div class="grid grid-flow-col">
            <div class="">
                <p class="text-[#000000B8] text-xl font-custom">Orders</p>
                <p class="text-black text-xl">5000</p>
            </div>
            <div class="px-7">
                <p class="text-[#000000B8] text-xl font-custom">Sales</p>
                <p class="text-black text-xl">20.000</p>
            </div>
        </div><br><br>
        <div class="grid grid-flow-col">
            <div class="">
                <p class="text-[#000000B8] text-xl font-custom">Average sales success rate</p>
                <p class="text-black text-xl">12%</p>
            </div>
            <div class="mr-36">
                <p class="text-[#000000B8] text-xl font-custom">Customers</p>
                <p class="text-black text-xl">1.000</p>
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

<div class="ml-48 mt-10">
    <div class="inline-flex absolute justify-center py-10 ml-3"><canvas id="lineChart"></canvas></div>
</div>
@vite(['resources/css/app.css','resources/js/app.js'])
@endsection