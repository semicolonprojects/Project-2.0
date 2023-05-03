@extends('dashboard.layout.main')

@section('mainContent')


<section class="bg-white shadow-[4px_8px_8px_rgba(0,0,0,0.5)] w-[70%] rounded-[22px] ml-52 mt-10 dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Tambahkan Target Anda </h2>
      <form action="{{ route('targetKaryawan.update',['targetKaryawan' => $targetKaryawan->id]) }}" method="POST">
        @csrf
        @method('put')
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anda </label>
                  <input name="user_id" value="{{ Auth::user()->id }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" type="hidden">
                  <input type="text"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                  value="{{ Auth::user()->username }}" placeholder="" disabled>
              </div>
              <div class="w-full">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan Target Anda</label>
                  <input type="number" name="target" id="" value="{{ $targetKaryawan->target }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex: 10.000.000" required="">
              </div>
              <div>
                <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan Deadline Target Anda</label>
                <div class="relative max-w-sm">
                  <div class="absolute inset-y-0 left-0 flex items-center px-2 py-2 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input type="date" name="deadline_target" id="" value="{{ $targetKaryawan->deadline_target }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-background focus:border-background block w-full pl-10 p-2.5 " placeholder="Select date">
                </div> 
            </div>
          </div>
            <div>
              <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-5 sm:mt-5 text-sm font-medium text-center text-white bg-[#22DB66] rounded-lg">
                  Tambahkan Target
              </button>
            </div>
      </form>
  </div>
</section>

@endsection