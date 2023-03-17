@extends('dashboard.layout.main')
@section('mainContent')

<div class="ml-32 mt-10">
    <div class="mb-10">
        <p class="text-[24px] text-black font-[700]">Konsinyasi Detail</p>
    </div>
    <div class="w-fit bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[22px] mb-5">
        <div class="grid grid-flow-col gap-[640px] mb-3 px-5 py-8">
            <div class="flex md:order-2">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative max-w-md">
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
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                            placeholder="Search">
                    </div>
            </div>
        </div>
        <table class=" w-[1120px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ml-8">
            <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <div class="flex justify-center p-5 bg-[#EAEAEA]">
                    <p class="text-[#2E2E2E] text-base font-normal">#RS001 : Bagong Syarifudin</p>
                </div>
                <div class="flex justify-center pb-5 bg-[#F7F7F7]">
                    <p class="text-[#2E2E2E] text-base font-normal">JANUARI</p>
                </div>
                <th scope="col" class="px-2 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Order ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3">
                    Kg / PCS
                </th>
                <th scope="col" class="px-6 py-3">
                    Payment Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Shipping Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Dasar
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Jual
                </th>
                <th scope="col" class="px-6 py-3">
                    Omset
                </th>
                </tr>
            </thead>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                data-accordion-target="#accordion-color-stock">
                <th scope="row" class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    10.02.2022/18:38
                </th>
                <td class="mt-2 px-4 align-center">
                    #CR007

                </td>
                <td class="mt-2 px-4 align-center">
                    Multiflora 1
                </td>
                <td class="px-6 py-4">
                    50Kg
                </td>
                <td class="px-6 py-4">
                    <button type="button"
                        class="min-w-fit text-[#22DB66] border border-[#22DB66] bg-white font-medium rounded-full text-xs px-1 py-0.5 text-center inline-flex items-center">
                        <div class="ml-1 ">
                            <svg class=width="7" height="7" viewBox="0 0 7 7" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="3.54641" cy="3.65386" rx="3.27297" ry="3.27297" fill="#22DB66" />
                            </svg>
                        </div>
                        <div class="px-1">
                            <p>Paid</p>
                        </div>
                    </button>
                </td>
                <td class="px-6 py-4">
                    <button type="button"
                        class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-xs px-1 py-0.5 text-center inline-flex items-center">
                        <div class="ml-1">
                            <svg class=width="7" height="7" viewBox="0 0 7 7" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="3.54641" cy="3.65386" rx="3.27297" ry="3.27297" fill="#007F00" />
                            </svg>
                        </div>
                        <div class="px-1">
                            <p>Arrived</p>
                        </div>
                    </button>
                </td>
                <td class="px-6 py-4">
                    Rp 35.000
                </td>
                <td class="px-6 py-4">
                    Rp 37.400
                </td>
                <td class="px-6 py-4">
                    Rp 120.000
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection