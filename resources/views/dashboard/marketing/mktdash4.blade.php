@extends('dashboard.layout.main')
@section('mainContent')

<div class=" mt-10 ml-5">
    <div class="mb-3">
        <p class="text-[24px] text-black font-[700]">Customer Info</p>
    </div>
    <div class="w-[1275px] bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[22px]">
        <div class="grid grid-flow-col gap-[640px] mb-3 px-5">
            <div class="flex md:order-2 mt-6 ml-64">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-[190px]">
                        <div>
                            <button class="absolute  inset-y-0 right-0 flex items-center pr-3 type=" submit"
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
            <div class="mt-6">
                <a href="{{ route('customer.create') }}">
                    <button type="button"
                        class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] w-full m-3 py-3 inline-flex items-center">
                        <div class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                        Add New Customer
                    </button>
                </a>
            </div>
        </div>

        <div class="relative overflow-x-auto" id="search-results">
            <table class="w-[1250px] mt-10 text-[14px] text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Full Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Customer Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone / Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            TTL
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customerPaginate as $customerPaginates)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $customerPaginates->nama_lengkap }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $customerPaginates->customer_id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $customerPaginates->no_telepon }} <br>
                            {{ $customerPaginates->email }}
                        </td>
                        @foreach ($wallet as $wallet)
                        <td class="px-6 py-4">
                            {{'Rp.' . number_format($wallet->total, 2, ',', '.') }}
                        </td>
                        @endforeach
                        <td class="px-6 py-4">
                            {{ $customerPaginates->alamat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $customerPaginates->tempat }}, {{ $customerPaginates->tanggal_lahir }}
                        </td>
                        <td>
                            <a href="">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </button>
                            </a>
                            <a href="{{ route('customer.edit', ['customer' => $customerPaginates->id]) }}">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </button>
                            </a>
                            <button>
                                <form class="inline "
                                    action="{{ route('customer.destroy', ['customer' => $customerPaginates->id]) }}"
                                    method="POST">
                                    <button onclick="return confirm('Are you sure?')">
                                        @csrf
                                        @method('delete')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex justify-center py-5 mr-10">
                {{$customerPaginate->links()}}
            </div>
        </div>

    </div>


    <!-- Marketing Overview Dropdown Menu -->
    <div id="topProductsTrigger" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="topProducts">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Daily</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg -gray-100 dark:hover:bg-gray-600 ">Monthly</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Yearly</a>
            </li>
            <li>
        </ul>
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