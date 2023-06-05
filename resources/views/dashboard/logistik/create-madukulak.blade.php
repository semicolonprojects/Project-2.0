@extends('dashboard.layout.main')

@section('mainContent')


<section class="bg-white shadow-[4px_8px_8px_rgba(0,0,0,0.5)] w-[70%] rounded-[22px] ml-52 mt-10 dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Tambahkan Bahan Madu </h2>
      <form action="{{ route('maduKulak.store') }}" method="post">
        @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Madu</label>
                  <input type="text" name="nama_madu"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                   placeholder="Ex : Multiflora" required>
              </div>
              <div class="sm:col-span-2">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size Madu</label>
                  <select id="size"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  name="size">
                  <option selected>Pilih Size Produk</option>
                  <option value="1kg">1 KG</option>
                  <option value="500ml">500 ML</option>
                  <option value="325ml">325 ML</option>
                  <option value="125ml">125 ML</option>
                  <option value="70gr">70 GR</option>
                  </select>              
              </div>
              <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Per Gram </label>
                <input type="price" name="harga_per_gram" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5">
            </div>
            <div>
              <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Total</label>
              <input type="price" name="harga_total" 
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5">
          </div>
          </div>
            <div>
              <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-5 sm:mt-5 text-sm font-medium text-center text-white bg-[#22DB66] rounded-lg">
                  Tambahkan Bahan Madu
              </button>
            </div>
      </form>
  </div>
</section>

@endsection