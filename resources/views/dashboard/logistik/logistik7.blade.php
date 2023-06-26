@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-5 mt-16 px-20 mb-10 2xl:ml-[370px] ">
    <p class="text-5xl text-black font-[700]">Data Barang Keluar Masuk</p>
</div>

<div class="ml-24 2xl:ml-[450px] mb-10 inline-block p-6 bg-white border border-gray-200 rounded-xl shadow-2xl w-[1070px] h-[700px]">
    <div class="border-b border-gray-200 pb-4 mb-4">
        <p class="text-4xl text-black font-[700]">Produk Curah </p>
    </div>
    <div class="grid grid-flow-col gap-[640px] mt-8 mb-3 ">
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
                    <input type="text" id='simple-search' name="query"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full pl-10 p-2.5  "
                        placeholder="Search">
                </div>
            </form>
        </div>
        <div>
            <button data-modal-target="authentication-modal-inout" data-modal-toggle="authentication-modal-inout"
                type="button"
                class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] px-3 py-2.5 inline-flex items-center">
                <div class="px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                Add New In Out
            </button>
        </div>
    </div>
    <table class=" w-[1020px]  table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ml-2 mt-10"
        id="search-results">
        <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <th>
                <div class="flex items-center">
                    <input id="checkbox-all" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        onclick="toggle(this);">
                    <label for="checkbox-all" class="sr-only">checkbox</label>
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                Produk
            </th>
            <th scope="col" class="px-6 py-3">
                Size
            </th>
            <th scope="col" class="px-6 py-3">
                In
            </th>
            <th scope="col" class="px-6 py-3">
                Date In
            </th>
            <th scope="col" class="px-6 py-3">
                Out
            </th>
            <th scope="col" class="px-6 py-3">
                Date Out
            </th>
            <th scope="col" class="px-8 py-3">
                Detail
            </th>
            </tr>
        </thead>
        @foreach ($stockPaginate as $stockPaginates)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th>
                <div class="flex items-center">
                    <input id="checkbox-all" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-all" class="sr-only">checkbox</label>
                </div>
            </th>
            <td class="mt-2 px-4 align-center">
                {{$stockPaginate->produkCurah->nama_barang}}

            </td>
            <td class="mt-2 px-4 align-center">
                {{$stockPaginate->produkCurah->size}}
            </td>
            <td class="px-6 py-4">
                {{$stockPaginate->total_barang_masuk}}
            </td>
            <td class="mt-2 px-8 align-center">
                {{$stockPaginate->total_barang_keluar}}
            </td>
            <td class="px-6 py-4">
                {{ $stockPaginate->latest_date_in ? date('l d/m/Y', strtotime($stockPaginate->latest_date_in )) : NULL
                }}
            </td>
            <td class="px-6 py-4">
                {{ $stockPaginate->latest_date_in ? date('l d/m/Y', strtotime($stockPaginate->latest_date_in )) : NULL
                }}
            </td>
            <td class="px-9 py-4">
                <a href="{{ route('in_out_curah.show', ['in_out_curah' => $stockPaginate->kode_barang]) }}">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $stockPaginate->links() }}
</div>




<!-- Modal Add In Out -->
<div id="authentication-modal-inout" tabindex="1" aria-hidden="true"
    class="fixed z-50 hidden w-full my-10 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 ">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="authentication-modal-inout">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Barang Keluar Masuk</h3>
                <form class="space-y-6" action="{{ route('in_out_curah.store') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produk</label>
                        <select id="produk-select" name="kode_barang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Produk</option>
                            @foreach($barangCurah as $barangCurah)
                            <option value="{{ $barangCurah->id }}">{{ $barangCurah->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                        <select id="produk-select" name="user_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Approved By</option>
                            @foreach($user as $user)
                            <option value="{{ $user->id}}">{{ $user->username}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ready
                            Stock</label>
                        <div id="stock-barang"></div>
                    </div>
                    <div class="grid grid-flow-col gap-4">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masuk</label>
                            <input type="number" name="barang_masuk"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[90%] p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Masuk</label>
                            <input type="date" name="date_in"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                    </div>
                    <div class="grid grid-flow-col gap-4">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluar</label>
                            <input type="number" name="barang_keluar"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[90%] p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Keluar</label>
                            <input type="date" name="date_out"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        </div>
                    </div><br>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#produk-select').change(function() {
            var kode_barang = $(this).val();
            if (kode_barang) {
                $.ajax({
                    url: "{{ route('curah.show', ':id') }}".replace(':id', kode_barang),
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#stock-barang').html('Stock: ' + data.stock + ', Size : ' + data.size);
                    }
                });
            } else {
                $('#stock-barang').empty();
            }
        });
    });
</script>

<script>
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}

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