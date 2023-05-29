@extends('dashboard.layout.main')

@section('mainContent')

{{-- Tabel Gaji --}}
<div class="mt-20 ml-28">
  <table class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
    <tr>
      <th class="px-10 py-5">{{ $outcomeName->outcomeDetail->name}}</th>
    </tr>
    <tr class="bg-white border">
      <th class="px-10 py-5">Keterangan</th>
      <th class="px-10 py-5">Nominal</th>
      <th class="px-10 py-5">Tanggal</th>
      <th class="px-10 py-5">Action</th>
    </tr>
    @foreach ($outcome as $outcome2)
    <tr>
      <td class="px-10 ">{{ $outcome2->keterangan }}</td>
      <td class="px-6 py-5">{{ 'Rp ' . number_format($outcome2->jumlah_outcome, 0, ',',
        '.') }}</td>
      <td class="px-6">{{ date('d M Y', strtotime($outcome2->created_at)) }}</td>
      <td class="px-6">
        <button id="defaultModalButtonEdit{{ $outcome2->id }}" data-modal-toggle="defaultModalEdit{{ $outcome2->id }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 20h9"></path>
            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
          </svg>
        </button>
        <form action="{{ route('outcomes.destroy', ['outcome'=>$outcome2->id ]) }}" method="post" class='inline'>
          <button onclick="return confirm('Are you sure?')">
            @csrf
            @method('delete')
            <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
              <line x1="18" y1="9" x2="12" y2="15"></line>
              <line x1="12" y1="9" x2="18" y2="15"></line>
            </svg>
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</div>

@foreach ($outcome as $modal)
<!-- Edit modal -->
<div id="defaultModalEdit{{ $modal->id }}" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
  <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
    <!-- Modal content -->
    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
      <!-- Modal header -->
      <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
          Edit Jenis Outcome
        </h3>
        <button type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="defaultModalEdit{{ $modal->id }}">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <!-- Modal body -->
      <form action="{{ route('outcomes.update', ['outcome'=>$modal->id]) }}" method="POST">
        @csrf
        @method('put')
        <input value="{{ $modal->nama_outcome }}" name="nama_outcome" type="hidden">
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
          <div class="sm:col-span-2">
            <label for="description"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <textarea id="description" rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Write product description here" name="keterangan"
              required>{{ $modal->keterangan }}</textarea>
          </div>
          <div>
            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
              Outcome</label>
            <input type="number" name="jumlah_outcome" id="brand"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              value="{{ $modal->jumlah_outcome }}" placeholder="Rp. 5000000" required>
          </div>
        </div>
        <button type="submit"
          class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
          <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
              clip-rule="evenodd"></path>
          </svg>
          Edit Jenis Outcome
        </button>
      </form>
    </div>
  </div>
</div>
@endforeach

@endsection