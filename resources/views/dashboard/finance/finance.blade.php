@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-28 mt-10">
    <div
        class="bg-[#d9d9d91f] shadow-[0px_4px_4px_rgba(0,0,0,0.25)] rounded-[10px] sm:w-[556px] md:w-[556px] lg:w-[847px] xl:w-[1088px] 2xl:w-[1088px] p-5">
        <div
            class="grid grid-flow-col sm:gap-[410px] md:gap-[410px] lg:gap-[679px] xl:gap-[928px] 2xl:gap-[928px] px-5">
            <p class="text-black text-base font-bold">Revenue</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>
        </div>
        <div
            class="grid grid-flow-col gap-[12px] sm:gap-[93px] md:gap-[93px] lg:gap-[93px] xl:gap-[360px] 2xl:gap-[360px] py-5">
            <div class="grid grid-flow-row gap-3 sm:px-[31px] md:px-[31px] lg:px-[120px] xl:px-[120px] 2xl:px-[120px]">
                <p
                    class="text-black text-sm sm:text-base md:text-base lg:text-base xl:text-base 2xl:text-base  font-normal">
                    Current Week</p>
                <p class="text-black text-lg sm:text-xl md:text-xl lg:text-xl xl:text-xl 2xl:text-xl font-normal">IDR
                    5,000,000</p>
            </div>
            <div class="grid grid-flow-row gap-3 px-10">
                <p
                    class="text-black text-sm sm:text-base md:text-base lg:text-base xl:text-base 2xl:text-base font-normal">
                    Previous Week</p>
                <p class="text-black text-lg sm:text-xl md:text-xl lg:text-xl xl:text-xl 2xl:text-xl font-normal">IDR
                    4,000,000</p>
            </div>
        </div>
        <div class="px-5 py-5">
            <div class='justify-center flex' id="{!! $dailyRevenue->container() !!}" width="739px" height="262px"></div>
        </div>
    </div>
</div>

{{-- Daily Sales Stats --}}
<div class="ml-5 mt-10 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-20 ">
    <div
        class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[550px] h-[634px]">
        <div class="grid grid-flow-col gap-70">
            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 ">Daily Sales Stats</h5>
            <h5 class="mb-2 ml-10 text-xl font-semibold tracking-tight text-[#22DB66] ">Rp.500.000</h5>
            <button id="orderStats" data-dropdown-toggle="orderStatsTrigger" class="ml-48">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </button>
        </div>
        <div class="border-gray-400 border-b-[1px] py-2"></div>
        <div class="py-[50px]">
            <div id="{!! $dailyStats->container() !!}"></div>
        </div>
        <div class="p-5 bg-white border-[1px] border-gray-400  rounded-[13px]">

            <div class="grid grid-flow-col mb-4 ml-2 border-b  gap-[201px]">
                <p class="text-black font-custom font-bold">Conversion Rate</p>
                <div>

                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                        fill="none" stroke="#FFC525" stroke-width="2" stroke-linecap="round" stroke-linejoin="round ">

                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>

            </div>
            <div class="font-custom font-normal ml-4 grid grid-flow-col ">
                <div>
                    <p>Mukti</p>
                    <p>Supri</p>
                    <p>Windah</p>
                </div>
                <div class="mr-72">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div>
                    <p>30%</p>
                    <p>30%</p>
                    <p>30%</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Daily Financial Stats --}}
    <div
        class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[550px] h-[634px]">
        <div class="grid grid-flow-col gap-90">
            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 ">Daily Financial Stats</h5>
            <button id="orderStats" data-dropdown-toggle="orderStatsTrigger" class="ml-72">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </button>
        </div>
        <div class="border-gray-400 border-b-[1px] py-2"></div>
        <div class="mt-12">
            <div class="grid grid-flow-row gap-3">
                <div class="grid grid-flow-col gap-[269px]">
                    <p class="font-semibold text-xl text-black">Revenue</p>
                    <p class="font-semibold text-xl text-black">IDR, in millions</p>
                </div>
                <div id="{!! $dailyRevenue2->container() !!}"></div>
                <div class="grid grid-flow-col gap-[269px]">
                    <p class="font-semibold text-xl text-black">Profit</p>
                    <p class="font-semibold text-xl text-black">in percents</p>
                </div>
                <div id="{!! $profit->container() !!}"></div>
                <div class="grid grid-flow-col gap-[269px]">
                    <p class="font-semibold text-xl text-black">Order Size</p>
                    <p class="font-semibold text-xl text-black">Average value</p>
                </div>
                <div id="{!! $orderSize->container() !!}"></div>
            </div>
        </div>
    </div>
</div>

{{-- Tabel Invoice --}}
<div id="accordion-collapse" class="ml-12" data-accordion="open">
    <table class=" w-[1200px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">

        <div
            class="text-sm w-[1070px] font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="#"
                        class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500"
                        aria-current="page">All</a>
                </li>
                <li class="mr-2">
                    <a href="#"
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
                        Paid</a>
                </li>
                <li class="mr-2">
                    <a href="#"
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Unpaid</a>
                </li>
                <li class="mr-2">
                    <a href="#"
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Overdue</a>
                </li>

            </ul>
        </div>
        <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    <div class="inline-block items-center p-1">
                        <input id="checkbox-all" type="checkbox" onclick="toggle(this);"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all" class="sr-only">checkbox</label>
                    </div>
                    INVOICE NUMBER
                </th>
                <th scope="col" class="px-6 py-3">
                    ORDER ID
                </th>
                <th scope="col" class="px-6 py-3">
                    NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    ADDRESS
                </th>
                <th scope="col" class="px-6 py-3">
                    PAYMENT STATUS
                </th>
                <th scope="col" class="px-6 py-3">
                    AMOUNT
                </th>
            </tr>
        </thead>
        @foreach ($order as $order)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" data-accordion-target="#accordion-color-1">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <div class="inline-block items-center p-1">
                    <input id="checkbox-all" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-all" class="sr-only">checkbox</label>
                </div>
                INV/{{ date ('d') }}/{{ $order->id }}/{{ $order->channel->kode_channel }}/{{ date('m') }}/{{ date('Y')}}
            </th>
            <td class="mt-2 px-10 align-center">
                #{{ $order->order_id }}
            </td>
            <td class="mt-2 px-4 align-center">
                {{ $order->customer->nama_lengkap }}
                <p>{{ $order->customer->email }}</p>
            </td>
            <td class="px-6 py-4">
                {{ $order->customer->alamat }}
            </td>
            <td class="mt-2 px-4 align-center">
                <button type="button"
                    class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs px-1 py-0.5 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-2 mb-2">
                    @switch($order->status_pembayaran)
                    @case('Dibayar')
                    <div class="ml-1 ">
                        <svg class=width="7" height="7" viewBox="0 0 7 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="3.54641" cy="3.65386" rx="3.27297" ry="3.27297" fill="#007F00" />
                        </svg>
                    </div>
                    @break
                    @case('Menunggu Pembayaran')
                    <div class="ml-1 ">
                        <svg class=width="7" height="7" viewBox="0 0 7 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="3.54641" cy="3.65386" rx="3.27297" ry="3.27297" fill="#FFC107" />
                        </svg>
                    </div>
                    @break
                    @case('Tidak Dibayar')
                    <div class="ml-1 ">
                        <svg class=width="7" height="7" viewBox="0 0 7 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="3.54641" cy="3.65386" rx="3.27297" ry="3.27297" fill="#E91E63" />
                        </svg>
                    </div>
                    @case('Termin')
                    <div class="ml-1 ">
                        <svg class=width="7" height="7" viewBox="0 0 7 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="3.54641" cy="3.65386" rx="3.27297" ry="3.27297" fill="#2196F3" />
                        </svg>
                    </div>
                    @default
                    <div class="ml-1 ">
                        <svg class=width="7" height="7" viewBox="0 0 7 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="3.54641" cy="3.65386" rx="3.27297" ry="3.27297" fill="" />
                        </svg>
                    </div>
                    @endswitch
                    <div class="px-1">
                        <p>{{ $order->status_pembayaran }}</p>
                    </div>
                </button>
                <p>{{ $order->status_pembayaran }} on {{ date('d-m-Y', strtotime($order->updated_at)) }}</p>
            </td>
            <td class="mt-2 px-1 align-center grid grid-flow-col">
                <p>{{ 'Rp ' . number_format($order->total_pembelian, 0, ',', '.') }}</p>
                <div class="mt-1 px-2">
                    <button class="ml-12" id="invoice" data-dropdown-toggle="invoiceTrigger{{ $order->order_id }}">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.082 8.98694C12.3808 8.98694 13.4198 10.0513 13.4198 11.3818C13.4198 12.7123 12.3808 13.7767 11.082 13.7767C9.78318 13.7767 8.74414 12.7123 8.74414 11.3818C8.74414 10.0513 9.78318 8.98694 11.082 8.98694ZM8.74414 2.86675C8.74414 4.19723 9.78318 5.26161 11.082 5.26161C12.3808 5.26161 13.4198 4.19723 13.4198 2.86675C13.4198 1.53627 12.3808 0.471893 11.082 0.471893C9.78318 0.471893 8.74414 1.53627 8.74414 2.86675ZM8.74414 19.8968C8.74414 21.2273 9.78318 22.2917 11.082 22.2917C12.3808 22.2917 13.4198 21.2273 13.4198 19.8968C13.4198 18.5664 12.3808 17.502 11.082 17.502C9.78318 17.502 8.74414 18.5664 8.74414 19.8968Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </td>
        </tr>
        <div id="invoiceTrigger{{ $order->order_id }}"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="{{ route('invoice.show', ['invoice'=> $order->order_id]) }}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Detail</a>
                </li>
                <li>
                    <a href="{{ route('invoice.download', ['id'=> $order->order_id]) }}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Download</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                        out</a>
                </li>
            </ul>
        </div>
        @endforeach
    </table>
    <div class="flex justify-center mr-32 py-5">
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

{{-- Summary Per Day --}}
<div class="ml-24 mt-16">
    <p class="text-black text-[32px] font-bold text-center mr-28">Summary Per Day</p>
    <div class="py-5 sm:ml-[422px] md: lg:ml-[670px] xl:ml-[928px] 2xl:ml-[928px]">
        <button type="button"
            class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] px-3 py-2.5 inline-flex items-center">
            <div class="px-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </div>
            Add New Order
        </button>
    </div>
    <div
        class="grid py-3 gap-9 sm:-ml-24 md:-ml-24 lg:-ml-24 xl:-ml-80 2xl:-ml-24 sm:grid-flow-col md:grid-flow-row md:gap-[48px] md:px-48 lg:grid-flow-row lg:gap-[48px] lg:px-[400px] xl:grid-flow-col 2xl:grid-flow-col">
        <div
            class="bg-white border-[#686868cf] border-[1px] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] w-[203px] py-10 h-[201px]">
            <div class="py-1"></div>
            <div class="bg-[#FFC0C0] rounded-[6px] max-w-fit flex justify-items-center m-auto">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="58" height="58" rx="6" fill="#DFFFDE" />
                    <path
                        d="M25.041 31.7708C25.041 33.3067 26.2285 34.5417 27.6852 34.5417H30.6618C31.9285 34.5417 32.9577 33.465 32.9577 32.1192C32.9577 30.6783 32.3244 30.1558 31.3902 29.8233L26.6243 28.1608C25.6902 27.8283 25.0569 27.3217 25.0569 25.865C25.0569 24.535 26.086 23.4425 27.3527 23.4425H30.3293C31.786 23.4425 32.9735 24.6775 32.9735 26.2133"
                        stroke="#22DB66" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M29 21.875V36.125" stroke="#22DB66" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M44.8327 29C44.8327 37.74 37.7393 44.8333 28.9993 44.8333C20.2593 44.8333 13.166 37.74 13.166 29C13.166 20.26 20.2593 13.1666 28.9993 13.1666"
                        stroke="#22DB66" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M36.916 14.75V21.0833H43.2493" stroke="#22DB66" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M44.8327 13.1666L36.916 21.0833" stroke="#22DB66" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>


            </div>
            <div class="">
                <p class="text-[#8F8F8F] text-xl font-semibold justify-center m-auto flex">Income</p>
                <p class="text-black text-[24px] font-semibold justify-center m-auto flex">IDR. 5000.000</p>
                <p class="text-[#8F8F8F] text-xs font-semibold justify-end m-auto flex py-2 px-3">Today : 27 May 2023
                </p>
            </div>
        </div>
        <div
            class="bg-white border-[#686868cf] border-[1px] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] w-[203px] py-10 h-[201px]">
            <div class="py-1"></div>
            <div class="bg-[#FFC0C0] rounded-[6px] max-w-fit flex justify-items-center m-auto">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.0469 31.7652C25.0469 33.2979 26.232 34.5304 27.6857 34.5304H30.6563C31.9204 34.5304 32.9475 33.4559 32.9475 32.1128C32.9475 30.6749 32.3155 30.1535 31.3832 29.8217L26.627 28.1625C25.6947 27.8307 25.0627 27.325 25.0627 25.8713C25.0627 24.544 26.0897 23.4537 27.3538 23.4537H30.3245C31.7782 23.4537 32.9633 24.6862 32.9633 26.219"
                        stroke="#FD3131" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M28.9961 21.8894V36.1106" stroke="#FD3131" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M44.7998 29C44.7998 37.7223 37.7209 44.8013 28.9985 44.8013C20.2762 44.8013 13.1973 37.7223 13.1973 29C13.1973 20.2777 20.2762 13.1987 28.9985 13.1987"
                        stroke="#FD3131" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M44.799 19.5192V13.1987H38.4785" stroke="#FD3131" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M36.9004 21.0994L44.801 13.1987" stroke="#FD3131" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="">
                <p class="text-[#8F8F8F] text-xl font-semibold justify-center m-auto flex">Outcome</p>
                <p class="text-black text-[24px] font-semibold justify-center m-auto flex">IDR. 3000.000</p>
                <p class="text-[#8F8F8F] text-xs font-semibold justify-end m-auto flex py-2 px-3">Today : 27 May 2023
                </p>
            </div>
        </div>
        <div
            class="bg-white border-[#686868cf] border-[1px] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] w-[203px] py-10 h-[201px]">
            <div class="py-1"></div>
            <div class="bg-[#DFFFDE] rounded-[6px] max-w-fit flex justify-items-center m-auto">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="58" y="58" width="58" height="58" rx="6" transform="rotate(-180 58 58)" fill="#FDFF9D" />
                    <path d="M15.498 35.4902L35.4913 15.4969" stroke="#A1A40B" stroke-width="1.5" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M27.498 39.5053L29.5057 37.4976" stroke="#A1A40B" stroke-width="1.5" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M32 35.0043L35.9987 31.0056" stroke="#A1A40B" stroke-width="1.5" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M14.9486 26.0538L26.0578 14.9445C29.6047 11.3976 31.3782 11.3809 34.8917 14.8943L43.1065 23.1091C46.6199 26.6226 46.6032 28.3961 43.0563 31.943L31.947 43.0522C28.4001 46.5991 26.6267 46.6159 23.1132 43.1024L14.8984 34.8876C11.3849 31.3741 11.3849 29.6174 14.9486 26.0538Z"
                        stroke="#A1A40B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.2695 45.7284H45.7311" stroke="#A1A40B" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="">
                <p class="text-[#8F8F8F] text-xl font-semibold justify-center m-auto flex">Debt</p>
                <p class="text-black text-[24px] font-semibold justify-center m-auto flex">IDR. 1000.000</p>
                <p class="text-[#8F8F8F] text-xs font-semibold justify-end m-auto flex py-2 px-3">Today : 27 May 2023
                </p>
            </div>
        </div>

        <div
            class="bg-white border-[#686868cf] border-[1px] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] w-[203px] py-10 h-[201px]">
            <div class="py-1"></div>
            <div class="bg-[#CED3FF] rounded-[6px] max-w-[58px] flex justify-items-center m-auto p-2">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3 10H21M7 15H8M12 15H13M6 19H18C19.6569 19 21 17.6569 21 16V8C21 6.34315 19.6569 5 18 5H6C4.34315 5 3 6.34315 3 8V16C3 17.6569 4.34315 19 6 19Z"
                        stroke="#4B54A3" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="">
                <p class="text-[#8F8F8F] text-xl font-semibold justify-center m-auto flex">Credit</p>
                <p class="text-black text-[24px] font-semibold justify-center m-auto flex">IDR. 1000.000</p>
                <p class="text-[#8F8F8F] text-xs font-semibold justify-end m-auto flex py-2 px-3">Today : 27 May 2023
                </p>
            </div>
        </div>
    </div>
</div>

<div class="ml-28 mt-10">
    <div
        class="bg-white border-[1px] border-[#686868d1] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] sm:w-[556px] md:w-[556px] lg:w-[847px] xl:w-[1088px] 2xl:w-[1088px]">
        <p class="font-bold text-[32px] text-black text-end px-7 py-5">Summary Per Month</p>
        <div class="grid grid-flow-col ">
            <div class="px-[25px] p-4">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="58" height="58" rx="6" fill="#DFFFDE" />
                    <path
                        d="M25.041 31.7708C25.041 33.3067 26.2285 34.5417 27.6852 34.5417H30.6618C31.9285 34.5417 32.9577 33.465 32.9577 32.1192C32.9577 30.6783 32.3244 30.1558 31.3902 29.8233L26.6243 28.1608C25.6902 27.8283 25.0569 27.3217 25.0569 25.865C25.0569 24.535 26.086 23.4425 27.3527 23.4425H30.3293C31.786 23.4425 32.9735 24.6775 32.9735 26.2133"
                        stroke="#22DB66" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M29 21.875V36.125" stroke="#22DB66" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M44.8327 29C44.8327 37.74 37.7393 44.8333 28.9993 44.8333C20.2593 44.8333 13.166 37.74 13.166 29C13.166 20.26 20.2593 13.1666 28.9993 13.1666"
                        stroke="#22DB66" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M36.916 14.75V21.0833H43.2493" stroke="#22DB66" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M44.8327 13.1666L36.916 21.0833" stroke="#22DB66" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div
                class="-mt-[7px] -ml-[29px] sm:-ml-[232px] md:-ml-[232px] lg:-ml-[374px] xl:-ml-[484px] 2xl:-ml-[484px]">
                <p class="font-semibold text-xl text-[#8F8F8F]">Income</p>
                <p class="font-semibold text-[32px] text-black">IDR. 5000.000</p>
            </div>
        </div>

        <div class="grid grid-flow-col py-4">
            <div class="px-[25px]">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="58" y="58" width="58" height="58" rx="6" transform="rotate(-180 58 58)" fill="#FFC0C0" />
                    <path
                        d="M25.0469 31.7652C25.0469 33.2979 26.232 34.5304 27.6857 34.5304H30.6563C31.9204 34.5304 32.9475 33.4559 32.9475 32.1128C32.9475 30.6749 32.3155 30.1535 31.3832 29.8217L26.627 28.1625C25.6947 27.8307 25.0627 27.325 25.0627 25.8713C25.0627 24.544 26.0897 23.4537 27.3538 23.4537H30.3245C31.7782 23.4537 32.9633 24.6862 32.9633 26.219"
                        stroke="#FD3131" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M28.9961 21.8894V36.1106" stroke="#FD3131" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M44.7998 29C44.7998 37.7223 37.7209 44.8013 28.9985 44.8013C20.2762 44.8013 13.1973 37.7223 13.1973 29C13.1973 20.2777 20.2762 13.1987 28.9985 13.1987"
                        stroke="#FD3131" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M44.799 19.5192V13.1987H38.4785" stroke="#FD3131" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M36.9004 21.0994L44.801 13.1987" stroke="#FD3131" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div
                class="-mt-[7px] -ml-[29px] sm:-ml-[232px] md:-ml-[232px] lg:-ml-[374px] xl:-ml-[484px] 2xl:-ml-[484px]">
                <p class="font-semibold text-xl text-[#8F8F8F]">Outcome</p>
                <p class="font-semibold text-[32px] text-black">IDR. 5000.000</p>
            </div>
        </div>

        <div class="grid grid-flow-col py-4">
            <div class="px-[25px]">
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="58" y="58" width="58" height="58" rx="6" transform="rotate(-180 58 58)" fill="#FDFF9D" />
                    <path d="M15.498 35.4902L35.4913 15.4969" stroke="#A1A40B" stroke-width="1.5" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M27.498 39.5053L29.5057 37.4976" stroke="#A1A40B" stroke-width="1.5" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M32 35.0043L35.9987 31.0056" stroke="#A1A40B" stroke-width="1.5" stroke-miterlimit="10"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M14.9486 26.0538L26.0578 14.9445C29.6047 11.3976 31.3782 11.3809 34.8917 14.8943L43.1065 23.1091C46.6199 26.6226 46.6032 28.3961 43.0563 31.943L31.947 43.0522C28.4001 46.5991 26.6267 46.6159 23.1132 43.1024L14.8984 34.8876C11.3849 31.3741 11.3849 29.6174 14.9486 26.0538Z"
                        stroke="#A1A40B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12.2695 45.7284H45.7311" stroke="#A1A40B" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div
                class="-mt-[7px] -ml-[29px] sm:-ml-[232px] md:-ml-[232px] lg:-ml-[374px] xl:-ml-[484px] 2xl:-ml-[484px]">
                <p class="font-semibold text-xl text-[#8F8F8F]">Debt</p>
                <p class="font-semibold text-[32px] text-black">IDR. 5000.000</p>
            </div>
        </div>

        <div class="grid grid-flow-col py-4">
            <div class="px-[25px]">
                <div class="bg-[#CED3FF] rounded-[6px] max-w-[58px] p-2">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3 10H21M7 15H8M12 15H13M6 19H18C19.6569 19 21 17.6569 21 16V8C21 6.34315 19.6569 5 18 5H6C4.34315 5 3 6.34315 3 8V16C3 17.6569 4.34315 19 6 19Z"
                            stroke="#4B54A3" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div
                class="-mt-[7px] -ml-[29px] sm:-ml-[232px] md:-ml-[232px] lg:-ml-[374px] xl:-ml-[484px] 2xl:-ml-[484px]">
                <p class="font-semibold text-xl text-[#8F8F8F]">Credit</p>
                <p class="font-semibold text-[32px] text-black">IDR. 1000.000</p>
            </div>
        </div>

        <p class="font-semibold text-base text-[#8F8F8F] text-end px-5 py-3">May 2023</p>
    </div>
</div>

<script src="{{ $dailyRevenue->cdn() }}"></script>

{{ $dailyRevenue->script() }}
{{ $dailyStats->script() }}
{{ $dailyRevenue2->script() }}
{{ $profit->script() }}
{{ $orderSize->script() }}
@endsection