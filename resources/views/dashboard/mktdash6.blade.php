@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-32 mt-16">
    <div class="mb-10">
        <p class="text-[24px] text-black font-[700]">Detail Termin</p>
    </div>
    <div class="w-fit bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[22px]">
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
                            placeholder="Search" required>
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
            <table class=" w-[1070px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
                <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Order Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Customer Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Payment Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Approved By
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    data-accordion-target="#accordion-color-1">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #SRMK14045
                    </th>
                    <td class="mt-2 px-4 align-center">
                        10.02.2022 18:38

                    </td>
                    <td class="mt-2 px-4 align-center">
                        <button disabled type="button"
                            class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">In
                            Progress</button>

                    </td>
                    <td class="mt-2 px-4 align-center">
                        <button disabled type="button"
                            class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                    </td>
                    <td class="px-6 py-4">
                        Hengky
                        user@email.com
                    </td>
                    <td class="mt-2 px-4 align-center">
                        <button disabled type="button"
                            class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Transfer</button>

                    </td>
                    <td class="px-6 py-4">
                        IDR 100.000
                    </td>
                    <td class="px-6 py-4">
                        Willy Wonka
                    </td>
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
                    <div id="accordion-color-1" class="hidden">
                        <table
                            class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr>
                                    <th>
                                        <p class="ml-10">Date Received</p>
                                    </th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>

                                <th>
                                    <p class="ml-10">10.02.2022/18:38</p>
                                </th>
                                <td>
                                    lorem ipsum DP lorem ipsum tanggal pelunasan
                                </td>

                            </tbody>
                        </table>
                    </div>
                </td>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    data-accordion-target="#accordion-color-2">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #SRMK14045
                    </th>
                    <td class="mt-2 px-4 align-center">
                        10.02.2022 18:38

                    </td>
                    <td class="mt-2 px-4 align-center">
                        <button disabled type="button"
                            class="text-white bg-[#AF5705] focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Termin</button>

                    </td>
                    <td class="mt-2 px-4 align-center">
                        <button disabled type="button"
                            class="text-white bg-[#FFC525] focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Distributor</button>

                    </td>
                    <td class="px-6 py-4">
                        Hengky
                        user@email.com
                    </td>
                    <td class="mt-2 px-4 align-center">
                        <button disabled type="button"
                            class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Transfer</button>
                    </td>
                    <td class="px-6 py-4">
                        IDR 100.000
                    </td>
                    <td class="px-6 py-4">
                        Willy Wonka
                    </td>
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
                    <div id="accordion-color-2" class="hidden">
                        <table
                            class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr>
                                    <th>
                                        <p class="ml-10">Date Received</p>
                                    </th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>

                                <th>
                                    <p class="ml-10">10.02.2022/18:38</p>
                                </th>
                                <td>
                                    lorem ipsum DP lorem ipsum tanggal pelunasan
                                </td>

                            </tbody>
                        </table>
                    </div>
                </td>
            </table>
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

@endsection