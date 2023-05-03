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
                <a href="{{ route('order.create') }}">
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
                </a>
            </div>
        </div>
        <div class="hidden " id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                            Produk
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
                        <th></th>
                    </tr>
                </thead>
                @foreach($order as $cust_order)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"">
                            <th scope=" row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $cust_order->order_id}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $cust_order->customer_id }}
                        </th>
                        <td class="mt-2 px-4 align-center">
                            {{ $cust_order->produk->nama_barang }}
                        </td>
                        <td class="mt-2 px-4 align-center">
                            {{ $cust_order->created_at }}
                        </td>
                        <td class="mt-2 px-4 align-center">
                            {{$cust_order->tipe_pesanan}}
                        </td>
                        <td class="px-6 py-4">
                            {{$cust_order->customer->nama_lengkap}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cust_order->total_pembelian }}
                        </td>
                        <td class="px-6 py-4">
                            {{$cust_order->user->username}}
                        </td>
                        <td>
                            <button id="defaultModalButton-All{{ $cust_order->id }}"
                                data-modal-toggle="defaultModal-All{{ $cust_order->id }}">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </button>
                            <a href="{{ route('order.edit', ['order'=> $cust_order->id]) }}">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </button>
                            </a>
                            <form class="inline" action="{{ route('order.destroy', ['order'=>$cust_order->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                        <line x1="18" y1="9" x2="12" y2="15"></line>
                                        <line x1="12" y1="9" x2="18" y2="15"></line>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    {{-- <td class="inline-table">
                        @foreach($detail as $index => $order_id)
                        <div id="orderStats-{{ $order_id->order_id }}" class="hidden">
                            @endforeach
                            <table
                                class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                                <tr>
                                    <th>
                                        <p class="ml-10">Kode Produk</p>
                                    </th>
                                    <th>Size</th>
                                    <th>Total Order</th>
                                    <th>Price</th>
                                    <th>Diskon</th>
                                    <th>Total Price</th>
                                    <th>Shipping Cost</th>
                                </tr>
                                @foreach($detail as $order)
                                <tr>
                                    <td>
                                        @foreach($order->kode_barang as $kode_barang)
                                        <p class="ml-10">{{ $kode_barang }}</p>
                                        @endforeach
                                    </td>
                                    <td></td>
                                    <td>@foreach($order->total_order as $total_order)
                                        <p>{{ $total_order }}</p>
                                        @endforeach
                                    </td>
                                    <td></td>
                                    <td>@foreach($order->diskon as $diskon)
                                        <p>{{ number_format($diskon * 100 , 0 ) . '%' }}</p>
                                        @endforeach
                                    </td>
                                    <td></td>
                                    <td>@foreach($order->ongkir as $ongkir)
                                        <p>{{ 'Rp ' . number_format($ongkir, 2, ',', '.'); }}</p>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr class="border">
                                    <td colspan="6" class="px-16 py-5">Note : {{$order->note}}</td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="px-16 py-5">Complain : Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit.
                                        Delectus, totam.</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </td> --}}
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
                        data-accordion-target="#orderStats2">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #SRMK14045
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                        data-accordion-target="#complete">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #SRMK14045
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                        <div id="complete" class="hidden">
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
                        data-accordion-target="#overdue">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            #SRMK14045
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                        <div id="overdue" class="hidden">
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

@foreach ($orderModal as $om)
<div id="defaultModal-All{{ $om->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Product
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="defaultModal-All{{ $om->id }}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="#">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order
                            ID</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="" value="{{ $om->order_id }}">
                    </div>
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer
                            Namae</label>
                        <input type="text" name="brand" id="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Product brand" required="" value="{{ $om->customer->nama_lengkap }}">
                    </div>
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select id="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select category</option>
                            <option value="TV">TV/Monitors</option>
                            <option value="PC">PC</option>
                            <option value="GA">Gaming/Console</option>
                            <option value="PH">Phones</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Write product description here"></textarea>
                    </div>
                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Add new product
                </button>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection