@extends('dashboard.layout.main')

@section('mainContent')


<section class="bg-white shadow-[4px_8px_8px_rgba(0,0,0,0.5)] w-[70%] rounded-[22px] ml-52 mt-10 dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
    <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Tambahkan Harga Pokok Penjualan </h2>
    <form action="{{ route('hpp.store') }}" method="post">
      @csrf
      <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
        <div class="sm:col-span-2">
          <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
          <input type="text" name="nama_produk"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="Ex : Multiflora" required>
        </div>
        <div class="sm:col-span-2">
          <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size Produk</label>
          <select id="size"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            name="size">
            <option selected>Pilih Size Produk</option>
            <option value="1kg">1 KG</option>
            <option value="500ml">500 ML</option>
            <option value="325ml">325 ML</option>
            <option value="125ml">125 ML</option>
          </select>
        </div>
        <div>
          <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Bahan
            Madu</label>
          <input type="price" name="bahan_madu"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5">
        </div>
        <div>
          <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Bahan
            Pendukung</label>
          <input type="price" name="bahan_pendukung"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5">
        </div>
        <div class="mb-6">
          <input type="hidden" name="total_hpp"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barang
            Pendukung</label>
          <select id="countries"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            name="barang_pendukung[]">
            <option selected>Pilih Produk</option>
            @foreach ($pendukung as $pendukungs)
            <option value="{{ $pendukungs->price }}">{{ $pendukungs->nama_barang }}</option>
            @endforeach
          </select>
        </div>
        <div id="order-container"></div>
        <div>
          <button type="button" id="add-order-button"
            class="text-blue inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"></path>
            </svg>
            Add New Order
          </button>
        </div>
      </div>
      <div>
        <button type="submit"
          class="inline-flex items-center px-5 py-2.5 mt-5 sm:mt-5 text-sm font-medium text-center text-white bg-[#22DB66] rounded-lg">
          Tambahkan Target
        </button>
      </div>
    </form>
  </div>
</section>

<script>
  $(document).ready(function() {
    // Handler untuk button "Add New Order"
    $('#add-order-button').click(function() {
      // Tambahkan input pilih produk
      $('#order-container').append('<div class="mb-6"><label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Produk</label><select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="barang_pendukung[]"><option selected>Pilih Produk</option>@foreach($pendukung as $pendukung2)<option value="{{ $pendukung2->price }}">{{ $pendukung2->nama_barang }}</option>@endforeach</select></div>');
    });
  });
  
</script>

@endsection