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
                        <input type="text" id="simple-search" name="query"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                            placeholder="Search">
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
            <table class=" w-[1163px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
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
                @foreach($showPaginate as $showPaginates)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"">
                        <th scope=" row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $showPaginates->order_id}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $showPaginates->customer_id }}
                        </th>
                        <td class="mt-2 px-4 align-center">
                            {{ $showPaginates->nama_barang }}
                        </td>
                        <td class="mt-2 px-4 align-center">
                            {{ $showPaginates->created_at }}
                        </td>
                        <td class="mt-2 px-4 align-center">
                            {{$showPaginates->status_pembayaran}}
                        </td>
                        <td class="px-6 py-4">
                            {{$showPaginates->nama_lengkap}}
                        </td>
                        <td class="px-2 py-6">
                            {{ 'Rp ' . number_format($showPaginates->total_pembelian, 0, ',', '.') }}
                        </td>

                        <td class="px-6 py-4">
                            {{$showPaginates->username}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('order.show', ['order'=>$showPaginates->order_id]) }}">
                                <button>
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex justify-center py-5">
                {{$showPaginate->links()}}
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        @foreach ($showPaginate as $showPendings)
                        @if ($showPendings->status_pembayaran == 'Menunggu Pembayaran')
                        <th scope=" row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $showPendings->order_id}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $showPendings->customer_id }}
                        </th>
                        <td class="mt-2 px-4 align-center">
                            {{ $showPendings->nama_barang }}
                        </td>
                        <td class="mt-2 px-4 align-center">
                            {{ $showPendings->created_at }}
                        </td>
                        <td class="mt-2 px-4 align-center">
                            {{$showPendings->status_pembayaran}}
                        </td>
                        <td class="px-6 py-4">
                            {{$showPendings->nama_lengkap}}
                        </td>
                        <td class="px-2 py-6">
                            {{ 'Rp ' . number_format($showPendings->total_pembelian, 0, ',', '.') }}
                        </td>

                        <td class="px-6 py-4">
                            {{$showPendings->username}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('order.show', ['order'=>$showPendings->order_id]) }}">
                                <button>
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                            </a>
                        </td>
                        @else
                        @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-center py-5">
                {{$showPaginate->links()}}
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        @foreach ($showPaginate as $showCompletes)
                        @if ($showCompletes->status_pembayaran == 'Dibayar')
                        <th scope=" row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $showCompletes->order_id}}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $showCompletes->customer_id }}
                        </th>
                        <td class="mt-2 px-4 align-center">
                            {{ $showCompletes->nama_barang }}
                        </td>
                        <td class="mt-2 px-4 align-center">
                            {{ $showCompletes->created_at }}
                        </td>
                        <td class="mt-2 px-4 align-center">
                            {{$showCompletes->status_pembayaran}}
                        </td>
                        <td class="px-6 py-4">
                            {{$showCompletes->nama_lengkap}}
                        </td>
                        <td class="px-2 py-6">
                            {{ 'Rp ' . number_format($showCompletes->total_pembelian, 0, ',', '.') }}
                        </td>

                        <td class="px-6 py-4">
                            {{$showCompletes->username}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('order.show', ['order'=>$showCompletes->order_id]) }}">
                                <button>
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                            </a>
                        </td>
                        @else
                        @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-center py-5">
                {{$showPaginate->links()}}
            </div>
        </div>
    </div>
    <div class="hidden " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        <div>
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
                    @foreach ($showPaginate as $showOverdues)
                    @if ($showOverdues->status_pembayaran == 'Tidak Dibayar')
                    <th scope=" row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $showOverdues->order_id}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $showOverdues->customer_id }}
                    </th>
                    <td class="mt-2 px-4 align-center">
                        {{ $showOverdues->nama_barang }}
                    </td>
                    <td class="mt-2 px-4 align-center">
                        {{ $showOverdues->created_at }}
                    </td>
                    <td class="mt-2 px-4 align-center">
                        {{$showOverdues->status_pembayaran}}
                    </td>
                    <td class="px-6 py-4">
                        {{$showOverdues->nama_lengkap}}
                    </td>
                    <td class="px-2 py-6">
                        {{ 'Rp ' . number_format($showOverdues->total_pembelian, 0, ',', '.') }}
                    </td>

                    <td class="px-6 py-4">
                        {{$showOverdues->username}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('order.show', ['order'=>$showOverdues->order_id]) }}">
                            <button>
                                <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </button>
                        </a>
                    </td>
                    @else
                    @endif
                    @endforeach
                </tbody>
            </table>
            <div class="flex justify-center py-5">
                {{$showPaginate->links()}}
            </div>
        </div>
    </div>
</div>

<script>
    const searchInput = document.getElementById('simple-search');
    const searchResults = document.getElementById('search-results');
  
    searchInput.addEventListener('input', function() {
      const query = this.value.trim();
  
      if (query.length === 0) {
        searchResults.innerHTML = ''; // Bersihkan hasil pencarian jika query kosong
        return;
      }
  
      fetch(`/marketing/search?query=${query}`)
        .then(response => response.text())
        .then(data => {
          searchResults.innerHTML = data;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });
</script>

@endsection