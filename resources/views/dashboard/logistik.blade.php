@extends('dashboard.layout.main')

@section('mainContent')

{{-- Best Seller Chart --}}
<div class="ml-40 mt-10">
    <div
        class="w-[396px] sm:w-[600px] md:w-[600px] lg:w-[824px] xl:w-[1024px] 2xl:w-[1024px] bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[20px] px-16">
        <h5 class="text-5xl text-black font-[700] text-center">Best sellers</h5>
        <div
            class="grid grid-flow-col py-10 gap-[44px] sm:gap-[228px] md:gap-[228px] lg:gap-[434px] xl:gap-[646px] 2xl:gap-[646px] ">
            <div class="grid grid-flow-row gap-0 mt-3">
                <p class="text-black/70 text-[24px]">Sale This Month</p>
                <p class="text-[#4E504F] text-[32px]">2,069</p>
            </div>
            <div class="grid grid-flow-col">
                <p class="font-normal text-xl text-black/60 py-10">Daily</p>
                <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="py-10">
            <canvas id="barChart"></canvas>
        </div>
    </div>
    </div>

    {{-- STOCK & LOW STOCK --}}
    <div class="absolute mt-12 ml-44">
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
</div>
    <div class="w-[1024px] h-[500px] rounded-[13px] overflow-hidden ml-40 mt-28 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
        <div class="absolute ml-6 mt-4">
            <div class="grid grid-flow-col gap-[870px]">
              <h5 class="text-3xl font-bold tracking-tight text-gray-900 ">Stock</h5>
              <div class="grid grid-flow-col">
                
                <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </button>
              </div>
            </div>
          </div>
        
          <div class="grid grid-flow-row mt-12">
              <div>
              <button type="button" class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12">
                  </polyline>
                </svg>      
               <p class="mr-3">Import</p> 
              </button>
            </div>
            <div class="absolute mt-12">
              <button type="button" class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12">
                  </polyline>
                </svg>
               <p class="mr-3.5">Export</p> 
              </button>
            </div>
        </div>
        {{-- table --}}

        <div class=" py-20">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        
                        <th scope="col" class="px-6 py-3 font-thin">
                            PRODUCT NAME
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            PRODUCT NUMBER
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            SATUAN
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            AMOUNT
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            MIN. AMOUNT
                        </th>
                        <th scope="col" class="px-6 py-3 p-7 font-thin">
                            STOCK AKHIR
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            PRICE
                        </th>
                        <th scope="col" class="px-6 py-3 font-thin">
                            ACTION
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4505
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Madu Kaliandra
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            PCS
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           90
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           11
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            79
                         </th>
                         <td class="px-6 py-4">
                             xxxx
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
                            4505
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Madu Kaliandra
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            PCS
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           90
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           11
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            79
                         </th>
                         <td class="px-6 py-4">
                             xxxx
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
                
                {{-- pagination --}}

                <div class="flex justify-center py-24 mr-6">
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

        {{-- data-dropdown-toggle --}}
        <div id="orderStatsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
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

        {{-- low stock --}}
    
        <div class="w-[1024px] h-[500px] rounded-[13px] overflow-hidden ml-40 mt-12 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
            <div class="absolute ml-6 mt-4">
                <div class="grid grid-flow-col gap-[810px]">
                  <h5 class="text-3xl font-bold tracking-tight text-gray-900 ">Low Stock</h5>
                  <div class="grid grid-flow-col">
                    
                    <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                  </div>
                </div>
              </div>
            
              
            <div class="grid grid-flow-row mt-12">
                  <div>
                  <button type="button" class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12">
                      </polyline>
                    </svg>      
                   <p class="mr-3">Import</p> 
                  </button>
                </div>
                <div class="absolute mt-12">
                  <button type="button" class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                    <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12">
                      </polyline>
                    </svg>
                   <p class="mr-3.5">Export</p> 
                  </button>
                </div>
            </div>
            
            {{-- table --}}
    
            <div class=" py-20">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            
                            <th scope="col" class="px-6 py-3 font-thin">
                                PRODUCT NAME
                            </th>
                            <th scope="col" class="px-6 py-3 font-thin">
                                PRODUCT NUMBER
                            </th>
                            <th scope="col" class="px-6 py-3 font-thin">
                                SATUAN
                            </th>
                            <th scope="col" class="px-6 py-3 font-thin">
                                AMOUNT
                            </th>
                            <th scope="col" class="px-6 py-3 font-thin">
                                MIN. AMOUNT
                            </th>
                            <th scope="col" class="px-6 py-3 p-7 font-thin">
                                STOCK AKHIR
                            </th>
                            <th scope="col" class="px-6 py-3 font-thin">
                                PRICE
                            </th>
                            <th scope="col" class="px-6 py-3 font-thin">
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                4505
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Madu Kaliandra
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                PCS
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               90
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               11
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                79
                             </th>
                             <td class="px-6 py-4">
                                 xxxx
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
                                4505
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Madu Kaliandra
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                PCS
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               90
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               11
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                79
                             </th>
                             <td class="px-6 py-4">
                                 xxxx
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
    
                    {{-- pagination --}}
    
                    <div class="flex justify-center py-24 mr-6">
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


{{-- In & Out Products --}}
<div class="absolute ml-40 mt-28">
  <div class="grid grid-flow-col gap-[720px]">
    <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">In & Out Products</h5>
    <div class="grid grid-flow-col">
      <p class="font-normal text-xl text-black/60">Monthly</p>
      <button id="innout" data-dropdown-toggle="innoutTrigger">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
              stroke="currentColor" class="w-5 h-5 ml-3">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
      </button>
    </div>
  </div>
</div>
  <div class="w-[1024px] h-[570px] rounded-[13px] overflow-hidden ml-40 mt-40 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="grid grid-flow-row">
      <div>
        <button type="button" class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
          <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12">
            </polyline>
          </svg>      
         <p class="mr-3">Import</p> 
        </button>
      </div>
      <div class="absolute mt-12">
        <button type="button" class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
          <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12">
            </polyline>
          </svg>
         <p class="mr-3.5">Export</p> 
        </button>
      </div>
  </div>
  
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-16">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="p-4">
                  <div class="flex items-center">
                      <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-all" class="sr-only">checkbox</label>
                  </div>
              </th>
              <th scope="col" class="px-6 py-3">
                  Kode Barang
              </th>
              <th scope="col" class="px-6 py-3">
                  Nama Produk
              </th>
              <th scope="col" class="px-6 py-3">
                  Size
              </th>
              <th scope="col" class="px-6 py-3">
                  In
              </th>
              <th scope="col" class="px-6 py-3">
                  Out
              </th>
              <th scope="col" class="px-6 py-3">
                Approved By
              </th>
              <th scope="col" class="px-6 py-3">
                Date In
              </th>
              <th scope="col" class="px-6 py-3">
                Date Out
              </th>
          </tr>
      </thead>
      <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-1" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  #SRMK14045
              </th>
              <td class="px-6 py-4">
                  Madu Hitam
              </td>
              <td class="px-6 py-4">
                  1 liter
              </td>
              <td class="px-6 py-4">
                  20
              </td>
              <td class="px-6 py-4">
                  19
              </td>
              <td class="px-6 py-4">
                  Willy Wonka
              </td>
             <td class="px-6 py-4">
                  10.02.2022/18:38
              </td>
             <td class="px-6 py-4">
                  10.04.2022/18:38
             </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-2" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                #SRMK14045
            </th>
            <td class="px-6 py-4">
                Madu Hitam
            </td>
            <td class="px-6 py-4">
                1 liter
            </td>
            <td class="px-6 py-4">
                20
            </td>
            <td class="px-6 py-4">
                19
            </td>
            <td class="px-6 py-4">
                Willy Wonka
            </td>
           <td class="px-6 py-4">
                10.02.2022/18:38
            </td>
           <td class="px-6 py-4">
                10.04.2022/18:38
           </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                #SRMK14045
            </th>
            <td class="px-6 py-4">
                Madu Hitam
            </td>
            <td class="px-6 py-4">
                1 liter
            </td>
            <td class="px-6 py-4">
                20
            </td>
            <td class="px-6 py-4">
                19
            </td>
            <td class="px-6 py-4">
                Willy Wonka
            </td>
           <td class="px-6 py-4">
                10.02.2022/18:38
            </td>
           <td class="px-6 py-4">
                10.04.2022/18:38
           </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                #SRMK14045
            </th>
            <td class="px-6 py-4">
                Madu Hitam
            </td>
            <td class="px-6 py-4">
                1 liter
            </td>
            <td class="px-6 py-4">
                20
            </td>
            <td class="px-6 py-4">
                19
            </td>
            <td class="px-6 py-4">
                Willy Wonka
            </td>
           <td class="px-6 py-4">
                10.02.2022/18:38
            </td>
           <td class="px-6 py-4">
                10.04.2022/18:38
           </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                #SRMK14045
            </th>
            <td class="px-6 py-4">
                Madu Hitam
            </td>
            <td class="px-6 py-4">
                1 liter
            </td>
            <td class="px-6 py-4">
                20
            </td>
            <td class="px-6 py-4">
                19
            </td>
            <td class="px-6 py-4">
                Willy Wonka
            </td>
           <td class="px-6 py-4">
                10.02.2022/18:38
            </td>
           <td class="px-6 py-4">
                10.04.2022/18:38
           </td>
          </tr>
          <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="w-4 p-4">
                  <div class="flex items-center">
                      <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                      <label for="checkbox-table-3" class="sr-only">checkbox</label>
                  </div>
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                #SRMK14045
            </th>
            <td class="px-6 py-4">
                Madu Hitam
            </td>
            <td class="px-6 py-4">
                1 liter
            </td>
            <td class="px-6 py-4">
                20
            </td>
            <td class="px-6 py-4">
                19
            </td>
            <td class="px-6 py-4">
                Willy Wonka
            </td>
           <td class="px-6 py-4">
                10.02.2022/18:38
            </td>
           <td class="px-6 py-4">
                10.04.2022/18:38
           </td>
          </tr>
      </tbody>
  </table>
</div>
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

{{-- Table Pembayaran --}}
<div class="ml-32 mt-10">
        <div class="mb-10">
            <p class="text-[24px] text-black font-[700]">Tabel Pembayaran</p>
        </div>
        <div class="w-fit bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[22px]">
            <div class="grid grid-flow-col gap-[640px] mt-10 mb-3 px-5 py-10">
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
            <div id="accordion-collapse" data-accordion="collapse">
                <table class=" w-[1120px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
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
                                    <td>
                                        <p class="ml-10">10.02.2022/18:38</p>
                                    </td>
                                    <td>
                                        lorem ipsum DP lorem ipsum tanggal pelunasan
                                    </td>
                                </tbody>
                                <tbody>
                                    <td>
                                        <p class="ml-10">10.02.2022/18:38</p>
                                    </td>
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

    {{-- STOCK NON MADU --}}
<div class="absolute ml-36 mt-20">
                <div class="grid grid-flow-col gap-[640px] mb-3 px-5">
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
            </div>

            <div class="w-[1024px] h-[500px] rounded-[13px] overflow-hidden ml-40 mt-36 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
                <div class="absolute ml-6 mt-4">
                    <div class="grid grid-flow-col gap-[700px]">
                      <h5 class="text-3xl font-bold tracking-tight text-gray-900 ">Stock Non - Madu</h5>
                      <div class="grid grid-flow-col">
                        
                        <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                
                  <div class="grid grid-flow-row mt-12">
                      <div>
                      <button type="button" class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                        <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12">
                          </polyline>
                        </svg>      
                       <p class="mr-3">Import</p> 
                      </button>
                    </div>
                    <div class="absolute mt-12">
                      <button type="button" class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
                        <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12">
                          </polyline>
                        </svg>
                       <p class="mr-3.5">Export</p> 
                      </button>
                    </div>
                </div>
                
                {{-- table --}}
        
                <div class=" py-20">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 bg-white dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                
                                <th scope="col" class="px-6 py-3 font-thin">
                                    PRODUCT NAME
                                </th>
                                <th scope="col" class="px-6 py-3 font-thin">
                                    PRODUCT NUMBER
                                </th>
                                <th scope="col" class="px-6 py-3 font-thin">
                                    SATUAN
                                </th>
                                <th scope="col" class="px-6 py-3 font-thin">
                                    AMOUNT
                                </th>
                                <th scope="col" class="px-6 py-3 font-thin">
                                    MIN. AMOUNT
                                </th>
                                <th scope="col" class="px-6 py-3 p-7 font-thin">
                                    STOCK AKHIR
                                </th>
                                <th scope="col" class="px-6 py-3 font-thin">
                                    PRICE
                                </th>
                                <th scope="col" class="px-6 py-3 font-thin">
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    4505
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Madu Kaliandra
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    PCS
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   90
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   11
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    79
                                 </th>
                                 <td class="px-6 py-4">
                                     xxxx
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
                                    4505
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Madu Kaliandra
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    PCS
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   90
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   11
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    79
                                 </th>
                                 <td class="px-6 py-4">
                                     xxxx
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
        
                        {{-- pagination --}}
        
                        <div class="flex justify-center py-24 mr-6">
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

                
    
            {{-- data-dropdown-toggle --}}
          
            <div id="orderStatsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
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

 {{-- Stock Barang Pendukung  --}}
<div class="absolute ml-40 mt-28">
    <div class="grid grid-flow-col gap-[650px]">
        <div class="">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div>
                        <button class="absolute inset-y-0 right-0 flex items-center pr-3 type=" submit"
                            class="p-2.5 ml-3 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
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
        </div>
      <div class="grid grid-flow-col">
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
    </div>
  </div>
    <div class="w-[1024px] h-[600px] rounded-[13px] overflow-hidden ml-40 mt-44 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
        <div class="grid grid-flow-col">
        <div class="inline-flex mt-3 ml-5">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Stock Barang Pendukung</h5>
        </div>
        <div class="inline-flex mt-3 ml-[650px]">
                <button id="orderStats" data-dropdown-toggle="orderStatsTrigger">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </button>
            </div>
        </div>
      <div class="grid grid-flow-row">
        <div class="">
          <button type="button" class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
            <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12">
              </polyline>
            </svg>      
           <p class="mr-3">Import</p> 
          </button>
        </div>
        <div class="absolute mt-12">
          <button type="button" class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
            <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12">
              </polyline>
            </svg>
           <p class="mr-3.5">Export</p> 
          </button>
        </div>
    </div>
    
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-16">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Code
                </th>
                <th scope="col" class="px-6 py-3">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Size
                </th>
                <th scope="col" class="px-6 py-3">
                    In
                </th>
                <th scope="col" class="px-6 py-3">
                    Out
                </th>
                <th scope="col" class="px-6 py-3">
                  Approved By
                </th>
                <th scope="col" class="px-6 py-3">
                  Date In
                </th>
                <th scope="col" class="px-6 py-3">
                  Date Out
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    #SRMK14045
                </th>
                <td class="px-6 py-4">
                    Madu Hitam
                </td>
                <td class="px-6 py-4">
                    1 liter
                </td>
                <td class="px-6 py-4">
                    20
                </td>
                <td class="px-6 py-4">
                    19
                </td>
                <td class="px-6 py-4">
                    Willy Wonka
                </td>
               <td class="px-6 py-4">
                    10.02.2022/18:38
                </td>
               <td class="px-6 py-4">
                    10.04.2022/18:38
               </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-2" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  #SRMK14045
              </th>
              <td class="px-6 py-4">
                  Madu Hitam
              </td>
              <td class="px-6 py-4">
                  1 liter
              </td>
              <td class="px-6 py-4">
                  20
              </td>
              <td class="px-6 py-4">
                  19
              </td>
              <td class="px-6 py-4">
                  Willy Wonka
              </td>
             <td class="px-6 py-4">
                  10.02.2022/18:38
              </td>
             <td class="px-6 py-4">
                  10.04.2022/18:38
             </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  #SRMK14045
              </th>
              <td class="px-6 py-4">
                  Madu Hitam
              </td>
              <td class="px-6 py-4">
                  1 liter
              </td>
              <td class="px-6 py-4">
                  20
              </td>
              <td class="px-6 py-4">
                  19
              </td>
              <td class="px-6 py-4">
                  Willy Wonka
              </td>
             <td class="px-6 py-4">
                  10.02.2022/18:38
              </td>
             <td class="px-6 py-4">
                  10.04.2022/18:38
             </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  #SRMK14045
              </th>
              <td class="px-6 py-4">
                  Madu Hitam
              </td>
              <td class="px-6 py-4">
                  1 liter
              </td>
              <td class="px-6 py-4">
                  20
              </td>
              <td class="px-6 py-4">
                  19
              </td>
              <td class="px-6 py-4">
                  Willy Wonka
              </td>
             <td class="px-6 py-4">
                  10.02.2022/18:38
              </td>
             <td class="px-6 py-4">
                  10.04.2022/18:38
             </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  #SRMK14045
              </th>
              <td class="px-6 py-4">
                  Madu Hitam
              </td>
              <td class="px-6 py-4">
                  1 liter
              </td>
              <td class="px-6 py-4">
                  20
              </td>
              <td class="px-6 py-4">
                  19
              </td>
              <td class="px-6 py-4">
                  Willy Wonka
              </td>
             <td class="px-6 py-4">
                  10.02.2022/18:38
              </td>
             <td class="px-6 py-4">
                  10.04.2022/18:38
             </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  #SRMK14045
              </th>
              <td class="px-6 py-4">
                  Madu Hitam
              </td>
              <td class="px-6 py-4">
                  1 liter
              </td>
              <td class="px-6 py-4">
                  20
              </td>
              <td class="px-6 py-4">
                  19
              </td>
              <td class="px-6 py-4">
                  Willy Wonka
              </td>
             <td class="px-6 py-4">
                  10.02.2022/18:38
              </td>
             <td class="px-6 py-4">
                  10.04.2022/18:38
             </td>
            </tr>
        </tbody>
    </table>
  </div>
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
  
<!-- Dropdown menu -->
<div id="innoutTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
  <ul class="py-2 text-sm text-gray-700 " aria-labelledby="innout">
      <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Monthly</a>
      </li>
      <li>
          <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Yearly</a>
      </li>
      <li>
  </ul>
</div>
@vite(['resources/css/app.css','resources/js/app.js'])
@endsection