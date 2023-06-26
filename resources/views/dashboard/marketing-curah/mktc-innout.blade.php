@extends('dashboard.layout.main')

@section('mainContent')

{{-- In & Out Products --}}
<div class="absolute ml-40 2xl:ml-[450px] mt-28">
  <div class="grid grid-flow-col gap-[720px]">
      <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">In & Out Products</h5>
      <div class="grid grid-flow-col">
          <p class="font-normal text-xl text-black/60">Monthly</p>
          <button id="innout" data-dropdown-toggle="innoutTrigger">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                  stroke="currentColor" class="w-5 h-5 ml-3">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
          </button>
      </div>
  </div>
</div>
<div
  class="w-[1024px] h-[570px] rounded-[13px] overflow-hidden ml-40 mt-40 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
  <div class="grid grid-flow-row">
      <div>
          <button type="button"
              class="min-w-fit text-green-600/80 border border-green-500 bg-white hover:bg-green-300/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
              <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="12" y1="19" x2="12" y2="5"></line>
                  <polyline points="5 12 12 5 19 12">
                  </polyline>
              </svg>
              <p class="mr-3">Import</p>
          </button>
      </div>
      <div class="absolute mt-12">
          <button type="button"
              class="text-blue-700/80 border border-blue-500 bg-white hover:bg-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5 ml-4">
              <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="12" y1="5" x2="12" y2="19"></line>
                  <polyline points="19 12 12 19 5 12">
                  </polyline>
              </svg>
              <p class="mr-3.5">Export</p>
          </button>
      </div>
  </div>

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-16">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="p-4">
                      <div class="flex items-center">
                          <input id="checkbox-all" type="checkbox"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          <label for="checkbox-all" class="sr-only">checkbox</label>
                      </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Kode Barang
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Nama Produk
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
                      Approved By
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Date In
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Date Out
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                      <div class="flex items-center">
                          <input id="checkbox-table-1" type="checkbox"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          <label for="checkbox-table-1" class="sr-only">checkbox</label>
                      </div>
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      #SRMK14045
                  </th>
                  <td class="px-6 py-4">
                      Madu Hitam
                  </td>
                  <td class="px-6 py-4">
                      1 liter
                  </td>
                  <td class="px-6 py-4">
                      20
                  </td>
                  <td class="px-6 py-4">
                      19
                  </td>
                  <td class="px-6 py-4">
                      Willy Wonka
                  </td>
                  <td class="px-6 py-4">
                      10.02.2022/18:38
                  </td>
                  <td class="px-6 py-4">
                      10.04.2022/18:38
                  </td>
              </tr>
              <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                      <div class="flex items-center">
                          <input id="checkbox-table-2" type="checkbox"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          <label for="checkbox-table-2" class="sr-only">checkbox</label>
                      </div>
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      #SRMK14045
                  </th>
                  <td class="px-6 py-4">
                      Madu Hitam
                  </td>
                  <td class="px-6 py-4">
                      1 liter
                  </td>
                  <td class="px-6 py-4">
                      20
                  </td>
                  <td class="px-6 py-4">
                      19
                  </td>
                  <td class="px-6 py-4">
                      Willy Wonka
                  </td>
                  <td class="px-6 py-4">
                      10.02.2022/18:38
                  </td>
                  <td class="px-6 py-4">
                      10.04.2022/18:38
                  </td>
              </tr>
              <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                      <div class="flex items-center">
                          <input id="checkbox-table-3" type="checkbox"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          <label for="checkbox-table-3" class="sr-only">checkbox</label>
                      </div>
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      #SRMK14045
                  </th>
                  <td class="px-6 py-4">
                      Madu Hitam
                  </td>
                  <td class="px-6 py-4">
                      1 liter
                  </td>
                  <td class="px-6 py-4">
                      20
                  </td>
                  <td class="px-6 py-4">
                      19
                  </td>
                  <td class="px-6 py-4">
                      Willy Wonka
                  </td>
                  <td class="px-6 py-4">
                      10.02.2022/18:38
                  </td>
                  <td class="px-6 py-4">
                      10.04.2022/18:38
                  </td>
              </tr>
              <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                      <div class="flex items-center">
                          <input id="checkbox-table-3" type="checkbox"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          <label for="checkbox-table-3" class="sr-only">checkbox</label>
                      </div>
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      #SRMK14045
                  </th>
                  <td class="px-6 py-4">
                      Madu Hitam
                  </td>
                  <td class="px-6 py-4">
                      1 liter
                  </td>
                  <td class="px-6 py-4">
                      20
                  </td>
                  <td class="px-6 py-4">
                      19
                  </td>
                  <td class="px-6 py-4">
                      Willy Wonka
                  </td>
                  <td class="px-6 py-4">
                      10.02.2022/18:38
                  </td>
                  <td class="px-6 py-4">
                      10.04.2022/18:38
                  </td>
              </tr>
              <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                      <div class="flex items-center">
                          <input id="checkbox-table-3" type="checkbox"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          <label for="checkbox-table-3" class="sr-only">checkbox</label>
                      </div>
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      #SRMK14045
                  </th>
                  <td class="px-6 py-4">
                      Madu Hitam
                  </td>
                  <td class="px-6 py-4">
                      1 liter
                  </td>
                  <td class="px-6 py-4">
                      20
                  </td>
                  <td class="px-6 py-4">
                      19
                  </td>
                  <td class="px-6 py-4">
                      Willy Wonka
                  </td>
                  <td class="px-6 py-4">
                      10.02.2022/18:38
                  </td>
                  <td class="px-6 py-4">
                      10.04.2022/18:38
                  </td>
              </tr>
              <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <td class="w-4 p-4">
                      <div class="flex items-center">
                          <input id="checkbox-table-3" type="checkbox"
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          <label for="checkbox-table-3" class="sr-only">checkbox</label>
                      </div>
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      #SRMK14045
                  </th>
                  <td class="px-6 py-4">
                      Madu Hitam
                  </td>
                  <td class="px-6 py-4">
                      1 liter
                  </td>
                  <td class="px-6 py-4">
                      20
                  </td>
                  <td class="px-6 py-4">
                      19
                  </td>
                  <td class="px-6 py-4">
                      Willy Wonka
                  </td>
                  <td class="px-6 py-4">
                      10.02.2022/18:38
                  </td>
                  <td class="px-6 py-4">
                      10.04.2022/18:38
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
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
@endsection