@extends('dashboard.layout.main')
@section('mainContent')

<section class="bg-white shadow-[4px_8px_8px_rgba(0,0,0,0.5)] w-[70%] rounded-[22px] ml-52 mt-10">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-8">
    <h2 class="mb-10 text-4xl font-bold text-gray-900 dark:text-white">Form Customer Baru</h2>
    <form action="{{ route('customer.store') }}" method="post">
      @csrf
      <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
        <div class="sm:col-span-2">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer ID
            (Berdasarkan Tipe Customer)</label>
          <input type="text" name="customer_id" id="customer_id"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
            placeholder="Type The Customer ID" required="">
        </div>
        <div class="w-full">
          <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Customer</label>
          <input type="text" name="nama_lengkap" id="nama_lengkap"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
            placeholder="Ex: Hengky Saranggih" required="">
        </div>
        <div class="w-full">
          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
          <input type="text" name="alamat" id="alamat"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
            placeholder="Ex: Danau Limboto No-14" required="">
        </div>
        <div>
          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telepon</label>
          <input type="text" name="no_telepon" id="no_telepon"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
            placeholder="Ex: 081-2345-6789" required="">
        </div>
        <div>
          <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
          <input type="e-mail" name="email" id="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
            placeholder="email@email.com" required="">
        </div>
        <div>
          <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat</label>
          <input type="text" name="tempat" id="tempat"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full p-2.5 "
            placeholder="Malang" required="">
        </div>
        <div>
          <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
            Lahir</label>
          <div class="relative max-w-sm">
            <div class="absolute inset-y-0 left-0 flex items-center px-2 py-2 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"></path>
              </svg>
            </div>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full pl-10 p-2.5 "
              placeholder="Select date">
          </div>
        </div>
      </div>
      <button type="submit"
        class="inline-flex items-center px-5 py-2.5 mt-9 sm:mt-8 text-sm font-medium text-center text-white bg-[#22DB66] rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
        Tambahkan Customer
      </button>
    </form>
  </div>
</section>

@endsection