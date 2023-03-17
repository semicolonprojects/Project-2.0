@extends('dashboard.layout.main')

@section('mainContent')

{{-- TANGGAL PRODUKSI BARANG --}}
<div class="absolute ml-36 mt-20">
    <div class="grid grid-flow-col gap-[560px] mb-3 px-5">
        <div class="flex md:order-2">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
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
                Add Tanggal Produksi Barang
            </button>
        </div>
    </div>
</div>


<div
    class="w-[1024px] h-[590px] rounded-[13px] overflow-hidden ml-40 mt-36 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="absolute ml-3 mt-5">
        <div class="grid grid-flow-col gap-[620px]">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Tanggal Produksi Barang</h5>

        </div>
    </div>

    <div class=" py-20">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRODUCT ID
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        PRODUCT
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        SIZE
                    </th>
                    <th scope="col" class="px-6 py-3 font-thin">
                        TANGGAL PRODUKSI
                    </th>

                    <th scope="col" class="px-6 py-3 font-thin">
                        ACTION
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-3" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-3" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #SRMK4505
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Madu Kaliandra
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        500 ML
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        09.8.2022 07:24
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-3" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-3" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #SRMK4505
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Madu Kaliandra
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        500 ML
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        09.8.2022 07:24
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-3" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-3" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #SRMK4505
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Madu Kaliandra
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        500 ML
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        09.8.2022 07:24
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-3" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-3" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #SRMK4505
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Madu Kaliandra
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        500 ML
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        09.8.2022 07:24
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-3" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-3" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #SRMK4505
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Madu Kaliandra
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        500 ML
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        09.8.2022 07:24
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-3" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-3" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        #SRMK4505
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Madu Kaliandra
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        500 ML
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        09.8.2022 07:24
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


            </tbody>
        </table>
    </div>

    <div class="flex justify-center py-1 mr-6">
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

@vite(['resources/css/app.css','resources/js/app.js'])
@endsection