@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-5 mt-16 px-20">
    <form action="{{ route('orderCurah.store')}}" method="POST">
        @csrf
        <input type="hidden" name="user_id"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ auth()->user()->id }}">
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User ID</label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{ auth()->user()->username }}">
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order ID</label>
            <input type="text" name="order_id" id="order_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="customer_id">
                <option selected>Pilih Customer</option>
                @foreach($customer as $customer)
                <option value="{{ $customer->id }}">{{ $customer->nama_lengkap }}</option>
                @endforeach
            </select>
            <div class="mb-6">
                <a href="{{ route('customer.create') }}">
                    <button type="button"
                        class="text-blue inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add New Customer
                    </button>
                </a>
            </div>
        </div>
        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                Produk</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="kode_barang[]">
                <option selected>Pilih Produk</option>
                @foreach($produk as $produks)
                <option value="{{ $produks->id }}">{{ $produks->nama_barang }}-{{ $produks->kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                Pesanan</label>
            <input type="text" name="total_order[]" id="total_order"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div id="order-container"></div>
        <div>
            <button type="button" id="add-order-button"
                class="text-blue inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                Add New Order
            </button>
        </div><br>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon</label>
            <input type="number" name="diskon" step="0.01" min="0"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="pesanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                Pembayaran</label>
            <select id="pesanan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="status_pembayaran" onchange="showTerminFields(this)">
                <option selected>Pilih Status Pembayaran</option>
                <option value="Paid">Dibayar</option>
                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                <option value="Tidak Dibayar">Tidak Dibayar</option>
                <option value="Termin">Termin</option>
            </select>
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tenggat
                Order</label>
            <input type="date" name="tenggat_order"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div id="terminFields" style="display: none;" class="mb-6">
            <label for="total_termin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                Termin</label>
            <input id="total_termin" type="number" name="total_termin"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="pesanan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                Pembayaran</label>
            <select id="pesanan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="tipe_pembayaran">
                <option selected>Pilih Tipe Pembayaran</option>
                <option value="BRI">BRI</option>
                <option value="BCA">BCA</option>
                <option value="Mandiri">Mandiri</option>
                <option value="Cash">Cash</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe
                Pesanan</label>
            <select id="pesanan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="tipe_pesanan">
                <option selected>Tipe Pesanan</option>
                @foreach ($channel as $channel)
                <option value="{{ $channel->id }}">{{ $channel->nama_channel }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <input type="hidden" name="total_pembelian"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ongkir</label>
            <input type="number" name="ongkir"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Komisi</label>
            <input type="number" name="komisi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status
                Pesanan</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="status_barang">
                <option selected>Status Pesanan</option>
                <option value="Belum Dikirim">Belum Dikirim</option>
                <option value="Sedang Dikirim">Sedang Dikirim</option>
                <option value="Sudah Sampai">Sudah Sampai</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Note</label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Tulis Note Disini ... " name="note"></textarea>
        </div>
        <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
    </form>
</div>

<script>
    $(document).ready(function() {
      // Handler untuk button "Add New Order"
      $('#add-order-button').click(function() {
        // Tambahkan input pilih produk
        $('#order-container').append('<div class="mb-6"><label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Produk</label><select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="kode_barang[]"><option selected>Pilih Produk</option>@foreach($produk as $produks2)<option value="{{ $produks2->id }}">{{ $produks2->nama_barang }}</option>@endforeach</select></div>');
    
        // Tambahkan input jumlah pesanan
        $('#order-container').append('<div class="mb-6"><label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Pesanan</label><input type="text" name="total_order[]" id="total_order" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></div>');
      });
    });

    function showTerminFields(selectElement) {
        var terminFields = document.getElementById("terminFields");
        if (selectElement.value === "Termin") {
            terminFields.style.display = "block";
        } else {
            terminFields.style.display = "none";
        }
    }
    

    
</script>


@endsection