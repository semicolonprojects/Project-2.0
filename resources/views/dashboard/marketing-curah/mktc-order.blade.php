@extends('dashboard.layout.main')

@section('mainContent')
<div class="ml-32 2xl:ml-[450px] mt-16">
    <div class="mb-10">
        <p class="text-[24px] text-black font-[700]">Order Stats</p>
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
                        <input type="text" id="simple-search" name="query"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                            placeholder="Search">
                    </div>
                </form>
            </div>
            <div>
                <a href="{{ route('orderCurah.create') }}">
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
        <table class=" w-[1070px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 " id="search-results">
            <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
            @foreach ($paginateCurah as $orderCurahs)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $orderCurahs->order_id }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $orderCurahs->customer_id }}
                    </th>
                    <td class="mt-2 px-4 align-center">
                        {{ date('d M Y', strtotime($orderCurahs->created_at)) }}
                    </td>
                    <td class="mt-2 px-4 align-center">
                        <button disabled type="button"
                            class="text-white bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center mr-2 mb-2 ">Curah</button>
                    </td>
                    <td class="px-6 py-4">
                        {{$orderCurahs->nama_lengkap}}
                    </td>
                    <td class="px-6 py-4">
                        {{ 'Rp ' . number_format($orderCurahs->total_pembelian, 0, ',', '.') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $orderCurahs->username }}
                    </td>
                    <td class="">
                        <a href="{{ route('orderCurah.show', ['orderCurah'=>$orderCurahs->order_id]) }}">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <div class="flex justify-center py-5">
            {{$paginateCurah->links()}}
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
  
      fetch(`/order/search?query=${query}`)
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