@extends('dashboard.layout.main')

@section('mainContent')
<div class="ml-5 mt-16 px-20">
    <div class="mb-5 ml-5">
        <p class="text-5xl text-black font-[700]">Tabel Order</p>
    </div>
    <div class="ml-5 mb-4 border-b border-gray-200 dark:border-gray-700 ">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
            role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile"
                    type="button" role="tab" aria-controls="profile" aria-selected="false">All Orders</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                    aria-selected="false">Pending Orders</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                    aria-selected="false">Completed Orders</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                    aria-selected="false">Overdue Orders</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="grid grid-flow-col gap-[740px] mb-3 ml-5 py-1">
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
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                            placeholder="Search" required>
                    </div>
                </form>
            </div>
            <div>
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
        </div>
        <div class="hidden " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div id="accordion-collapse" data-accordion="open">
                <table class=" w-[1130px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Order Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Name
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
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            data-accordion-target="#orderStats">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #SRMK14045
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #RS003
                            </th>
                            <td class="mt-2 px-4 align-center">
                                10.02.2022 18:38

                            </td>
                            <td class="mt-2 px-4 align-center">
                                <button disabled type="button"
                                    class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                            </td>
                            <td class="px-6 py-4">
                                Hengky
                                user@email.com
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                            </td>
                        </tr>
                        <td class="inline-table">
                            <div id="orderStats" class="hidden">
                                <table
                                    class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                    <tr>
                                        <th>
                                            <p class="ml-10">Detail</p>
                                        </th>
                                        <th>Size</th>
                                        <th>Total Order</th>
                                        <th>Price</th>
                                        <th>Diskon</th>
                                        <th>Total Price</th>
                                        <th>Shipping Cost</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                        <td rowspan="3">IDR 700.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr class="border">
                                        <td colspan="6" class="px-16 py-5">Note : Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            data-accordion-target="#orderStats2">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #SRMK14045
                            </th>
                            <td class="mt-2 px-4 align-center">
                                10.02.2022 18:38

                            </td>
                            <td class="mt-2 px-4 align-center">
                                <button disabled type="button"
                                    class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                            </td>
                            <td class="px-6 py-4">
                                Hengky
                                user@email.com
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                            </td>
                        </tr>
                        <td class="inline-table">
                            <div id="orderStats2" class="hidden">
                                <table
                                    class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                    <tr>
                                        <th>
                                            <p class="ml-10">Detail</p>
                                        </th>
                                        <th>Size</th>
                                        <th>Total Order</th>
                                        <th>Price</th>
                                        <th>Diskon</th>
                                        <th>Total Price</th>
                                        <th>Shipping Cost</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                        <td rowspan="3">IDR 700.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr class="border">
                                        <td colspan="6" class="px-16 py-5">Note : Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tbody>
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
        <div class="hidden " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div id="accordion-collapse" data-accordion="open">
                <table class=" w-[1130px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Order Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Name
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
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            data-accordion-target="#orderStats">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #SRMK14045
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #RS003
                            </th>
                            <td class="mt-2 px-4 align-center">
                                10.02.2022 18:38

                            </td>
                            <td class="mt-2 px-4 align-center">
                                <button disabled type="button"
                                    class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                            </td>
                            <td class="px-6 py-4">
                                Hengky
                                user@email.com
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                            </td>
                        </tr>
                        <td class="inline-table">
                            <div id="orderStats" class="hidden">
                                <table
                                    class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                    <tr>
                                        <th>
                                            <p class="ml-10">Detail</p>
                                        </th>
                                        <th>Size</th>
                                        <th>Total Order</th>
                                        <th>Price</th>
                                        <th>Diskon</th>
                                        <th>Total Price</th>
                                        <th>Shipping Cost</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                        <td rowspan="3">IDR 700.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr class="border">
                                        <td colspan="6" class="px-16 py-5">Note : Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            data-accordion-target="#orderStats2">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #SRMK14045
                            </th>
                            <td class="mt-2 px-4 align-center">
                                10.02.2022 18:38

                            </td>
                            <td class="mt-2 px-4 align-center">
                                <button disabled type="button"
                                    class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                            </td>
                            <td class="px-6 py-4">
                                Hengky
                                user@email.com
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                            </td>
                        </tr>
                        <td class="inline-table">
                            <div id="orderStats2" class="hidden">
                                <table
                                    class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                    <tr>
                                        <th>
                                            <p class="ml-10">Detail</p>
                                        </th>
                                        <th>Size</th>
                                        <th>Total Order</th>
                                        <th>Price</th>
                                        <th>Diskon</th>
                                        <th>Total Price</th>
                                        <th>Shipping Cost</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                        <td rowspan="3">IDR 700.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr class="border">
                                        <td colspan="6" class="px-16 py-5">Note : Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tbody>
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
        <div class="hidden " id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div id="accordion-collapse" data-accordion="open">
                <table class=" w-[1130px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Order Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Name
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
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            data-accordion-target="#orderStats">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #SRMK14045
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #RS003
                            </th>
                            <td class="mt-2 px-4 align-center">
                                10.02.2022 18:38

                            </td>
                            <td class="mt-2 px-4 align-center">
                                <button disabled type="button"
                                    class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                            </td>
                            <td class="px-6 py-4">
                                Hengky
                                user@email.com
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                            </td>
                        </tr>
                        <td class="inline-table">
                            <div id="orderStats" class="hidden">
                                <table
                                    class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                    <tr>
                                        <th>
                                            <p class="ml-10">Detail</p>
                                        </th>
                                        <th>Size</th>
                                        <th>Total Order</th>
                                        <th>Price</th>
                                        <th>Diskon</th>
                                        <th>Total Price</th>
                                        <th>Shipping Cost</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                        <td rowspan="3">IDR 700.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr class="border">
                                        <td colspan="6" class="px-16 py-5">Note : Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            data-accordion-target="#orderStats2">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #SRMK14045
                            </th>
                            <td class="mt-2 px-4 align-center">
                                10.02.2022 18:38

                            </td>
                            <td class="mt-2 px-4 align-center">
                                <button disabled type="button"
                                    class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                            </td>
                            <td class="px-6 py-4">
                                Hengky
                                user@email.com
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                            </td>
                        </tr>
                        <td class="inline-table">
                            <div id="orderStats2" class="hidden">
                                <table
                                    class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                    <tr>
                                        <th>
                                            <p class="ml-10">Detail</p>
                                        </th>
                                        <th>Size</th>
                                        <th>Total Order</th>
                                        <th>Price</th>
                                        <th>Diskon</th>
                                        <th>Total Price</th>
                                        <th>Shipping Cost</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                        <td rowspan="3">IDR 700.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr class="border">
                                        <td colspan="6" class="px-16 py-5">Note : Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tbody>
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
        <div class="hidden " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <div id="accordion-collapse" data-accordion="open">
                <table class=" w-[1130px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Order Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer Name
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
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            data-accordion-target="#orderStats">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #SRMK14045
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #RS003
                            </th>
                            <td class="mt-2 px-4 align-center">
                                10.02.2022 18:38

                            </td>
                            <td class="mt-2 px-4 align-center">
                                <button disabled type="button"
                                    class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                            </td>
                            <td class="px-6 py-4">
                                Hengky
                                user@email.com
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                            </td>
                        </tr>
                        <td class="inline-table">
                            <div id="orderStats" class="hidden">
                                <table
                                    class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                    <tr>
                                        <th>
                                            <p class="ml-10">Detail</p>
                                        </th>
                                        <th>Size</th>
                                        <th>Total Order</th>
                                        <th>Price</th>
                                        <th>Diskon</th>
                                        <th>Total Price</th>
                                        <th>Shipping Cost</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                        <td rowspan="3">IDR 700.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr class="border">
                                        <td colspan="6" class="px-16 py-5">Note : Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            data-accordion-target="#orderStats2">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                #SRMK14045
                            </th>
                            <td class="mt-2 px-4 align-center">
                                10.02.2022 18:38

                            </td>
                            <td class="mt-2 px-4 align-center">
                                <button disabled type="button"
                                    class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Reseller</button>

                            </td>
                            <td class="px-6 py-4">
                                Hengky
                                user@email.com
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                            </td>
                        </tr>
                        <td class="inline-table">
                            <div id="orderStats2" class="hidden">
                                <table
                                    class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                    <tr>
                                        <th>
                                            <p class="ml-10">Detail</p>
                                        </th>
                                        <th>Size</th>
                                        <th>Total Order</th>
                                        <th>Price</th>
                                        <th>Diskon</th>
                                        <th>Total Price</th>
                                        <th>Shipping Cost</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                        <td rowspan="3">IDR 700.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="ml-10">Madu Durian</p>
                                        </td>
                                        <td>
                                            1L
                                        </td>
                                        <td>200</td>
                                        <td>IDR 50.000</td>
                                        <td>29%</td>
                                        <td>IDR 1.000.000</td>
                                    </tr>
                                    <tr class="border">
                                        <td colspan="6" class="px-16 py-5">Note : Lorem ipsum dolor sit amet consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing
                                            elit.
                                            Delectus, totam.</td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tbody>
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
</div>
@endsection