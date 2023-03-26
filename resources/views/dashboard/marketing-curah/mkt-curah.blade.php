@extends('dashboard.layout.main')
@section('mainContent')

<div class="ml-32 mt-10">
    <div class="mb-10">
        <p class="text-[24px] text-black font-[700]">Konsinyasi</p>
    </div>
    <div class="w-fit bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[22px] mb-5">
        <div class="grid grid-flow-col gap-[640px] mb-3 px-5 py-8">
            <div class="flex md:order-2">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div>
                            <button class="absolute inset-y-0 right-0 flex items-center pr-3 type=" submit"
                                class="p-2.5 ml-3 text-sm font-medium text-white bg-blue-700 rounded-[22px] border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                <svg class="w-5 h-5 text-yellow-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search Anything</span>
                            </button>
                        </div>
                        <input type="text" id="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                            placeholder="Search">
                    </div>
            </div>
            <div>
                <button onclick="myFunction()" type="button"
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
        </div>
        <div id="accordion-collapse" data-accordion="open">
            <table class=" w-[1120px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ml-8">
                <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <th>
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                onclick="toggle(this);">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-2 py-3">
                        Customer Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Order
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Customer Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Order
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Omset
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Payment Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Shipping Status
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Action
                    </th>
                    </tr>
                </thead>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    data-accordion-target="#accordion-color-stock">
                    <th>
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #RS001
                    </th>
                    <td class="mt-2 px-4 align-center">
                        #CR007

                    </td>
                    <td class="mt-2 px-4 align-center">
                        Bagong Syarifudin

                    </td>
                    <td class="px-6 py-4">
                        30Kg
                    </td>
                    <td class="mt-2 px-8 align-center">
                        Rp. 5.000.000.00,-
                    </td>
                    <td class="px-6 py-4">
                        <button type="button"
                            class="text-white bg-blue-700 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2"
                            disabled>
                            Paid</button>
                    </td>
                    <td class="px-6 py-4">
                        <button type="button"
                            class="text-white bg-background font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2"
                            disabled>
                            Arrived</button>
                    </td>
                    <td class="px-4 py-4">
                        <a href="{{ url('/marketing-konsinyasi-detail') }}">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </button>
                        </a>
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
                    <div id="accordion-color-stock" class="hidden">
                        <table
                            class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr>
                                    <th>
                                        <p class="ml-10">Date</p>
                                    </th>
                                    <th>Product</th>
                                    <th>Pcs / Kg</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>
                                    <p class="ml-10">10.02.2022/18:38</p>
                                </td>
                                <td>
                                    Kelengkeng
                                </td>
                                <td>
                                    1
                                </td>
                            </tbody>
                            <tbody>
                                <td>
                                    <p class="ml-10">10.02.2022/18:38</p>
                                </td>
                                <td>
                                    Multiflora
                                </td>
                                <td>
                                    1
                                </td>
                            </tbody>
                        </table>
                    </div>
                </td>
        </div>
    </div>
</div>

@endsection