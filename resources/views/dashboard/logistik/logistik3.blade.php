@extends('dashboard.layout.main')

@section('mainContent')
<div class="ml-24 mt-10">
    <div class="mb-10">
        <p class="text-[24px] text-black font-[700]">Data Barang Keluar Masuk</p>
    </div>
    <div class="w-fit bg-[#FFFFFF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[22px] mb-5">
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
                            placeholder="Search">
                    </div>
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
        <div id="accordion-collapse" data-accordion="open">
            <table class=" w-[1120px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ml-8">
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
                        Out
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date In
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Out
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Action
                    </th>
                    </tr>
                </thead>
                @foreach ($stock as $stock)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    data-accordion-target="#accordion-color-stock-{{ $stock->kode_barang }}">
                    <th>
                        <div class="flex items-center">
                            <input id="checkbox-all" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <td class="mt-2 px-4 align-center">
                        {{$stock->produkJadi->nama_barang}}

                    </td>
                    <td class="mt-2 px-4 align-center">
                        {{$stock->produkJadi->size}}
                    </td>
                    <td class="px-6 py-4">
                        {{$stock->total_barang_masuk}}
                    </td>
                    <td class="mt-2 px-8 align-center">
                        {{$stock->total_barang_keluar}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $stock->latest_date_in ? date('l d/m/Y', strtotime($stock->latest_date_in )) : NULL }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $stock->latest_date_in ? date('l d/m/Y', strtotime($stock->latest_date_in )) : NULL }}
                    </td>
                    <td class="px-4 py-4">
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
                @endforeach
                @foreach($detail as $index => $inout)
                <td class="inline-table">
                    <div id="accordion-color-stock-{{ $inout->kode_barang }}" class="hidden">
                        @endforeach
                        <table
                            class="w-[1070px] table-fixed text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr>
                                    <th>Tanggal Masuk</th>
                                    <th>Barang Masuk</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Barang Keluar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($detail as $index => $inout)
                                <tr>
                                    <td>
                                        @foreach($inout->date_in as $date_in)
                                        <p>{{ $date_in }}</p>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($inout->barang_masuk as $barang_masuk)
                                        <p>{{ $barang_masuk }} pcs</p>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($inout->date_out as $date_out)
                                        <p>{{ $date_out }}</p>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($inout->barang_keluar as $barang_keluar)
                                        <p>{{ $barang_keluar }} pcs</p>
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </td>
        </div>
    </div>
</div>

<!-- Modal Add In Out -->
<div id="authentication-modal-inout" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                <form class="space-y-6" action="{{ route('in_out.store') }}" method="POST">
                    @csrf</form>
                <form class="space-y-6" action="{{ route('in_out.store') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produk</label>
                        <select id="produk-select" name="kode_barang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Produk</option>
                            @foreach($barangJadi as $barangJadi)
                            <option value="{{ $barangJadi->kode_barang }}">{{ $barangJadi->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ready
                            Stock</label>
                        <div id="stock-barang"></div>
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masuk</label>
                        <input type="number" name="barang_masuk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Masuk</label>
                        <input type="date" name="date_in"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keluar</label>
                        <input type="number" name="barang_keluar"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            Keluar</label>
                        <input type="date" name="date_out"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
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
                    url: "{{ route('stock.show', ':id') }}".replace(':id', kode_barang),
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
</script>

@vite(['resources/css/app.css','resources/js/app.js'])
@endsection