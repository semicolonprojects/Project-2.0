@extends('dashboard.layout.main')

@section('mainContent')

<div class="mt-3 ml-1 px-20">
  <h5 class="text-5xl font-bold p-5">Data Rekap Absensi</h5>
  <div class="ml-5 mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-row -mb-px text-sm font-medium text-center " id="myTab" data-tabs-toggle="#myTabContent"
      role="tablist">
      <li class="mr-2" role="presentation">
        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile"
          type="button" role="tab" aria-controls="profile" aria-selected="false">Masuk</button>
      </li>
      <li class="mr-2" role="presentation">
        <button
          class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
          id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
          aria-selected="false">Keluar</button>
      </li>
      <li class="mr-2" role="presentation">
        <button
          class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
          id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
          aria-selected="false">Ijin</button>
      </li>
      <li role="presentation">
        <button
          class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
          id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
          aria-selected="false">Cuti</button>
      </li>
    </ul>
  </div>
  <div id="myTabContent">
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
      aria-labelledby="profile-tab">
      <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
          <th class="px-10 py-5">Rekap Absensi Masuk</th>
        </tr>
        <tr class="bg-white border">
          <th class="px-10 py-5">Nama Karyawan</th>
          <th class="px-10 py-5">Longitude</th>
          <th class="px-10 py-5">Latitude</th>
          <th class="px-10 py-5">Waktu Masuk</th>
          <th class="px-10 py-5">Action</th>
        </tr>
        @foreach ($masuk as $masuk)
        <tr>
          <td class="px-10 py-5">{{ $masuk->user->username }}</td>
          <td class="px-10 py-5">{{ $masuk->long }}</td>
          <td class="px-6">{{ $masuk->lat }}</td>
          <td class="px-6">{{ $masuk->waktu_masuk }}</td>
          <td class="px-6">
            <a href="{{ route('absen.show', ['absen' => $masuk->id]) }}">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </button>
            </a>
            <button data-modal-target="defaultModal-{{ $masuk->id }}" data-modal-toggle="defaultModal-{{ $masuk->id }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 20h9"></path>
                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
              </svg>
            </button>
            <form class="inline" action="{{ route('absen.destroy', ['absen' => $masuk->id]) }}" method="POST">
              <button onclick="return confirm('Are you sure?')">
                @csrf
                @method('delete')
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
      aria-labelledby="dashboard-tab">
      <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
          <th class="px-10 py-5">Rekap Absensi Keluar</th>
        </tr>
        <tr class="bg-white border">
          <th class="px-10 py-5">Nama Karyawan</th>
          <th class="px-10 py-5">Longitude</th>
          <th class="px-10 py-5">Latitude</th>
          <th class="px-10 py-5">Waktu Keluar</th>
          <th class="px-10 py-5">Action</th>
        </tr>
        @foreach ($keluar as $keluar)
        <tr>
          <td class="px-10 py-5">{{ $keluar->user->username }}</td>
          <td class="px-10 py-5">{{ $keluar->long }}</td>
          <td class="px-6">{{ $keluar->lat }}</td>
          <td class="px-6">{{ $keluar->waktu_keluar }}</td>
          <td class="px-6">
            <a href="{{ route('keluar.show', ['keluar' => $keluar->id]) }}">
              <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
              </button>
            </a>
            <button data-modal-target="defaultModal-keluar-{{ $keluar->id }}"
              data-modal-toggle="defaultModal-keluar-{{ $keluar->id }}">
              <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 20h9"></path>
                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
              </svg>
            </button>
            <form class="inline" action="{{ route('keluar.destroy', ['keluar' => $keluar->id]) }}" method="POST">
              <button onclick="return confirm('Are you sure?')">
                @csrf
                @method('delete')
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
      aria-labelledby="settings-tab">
      <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
          <th class="px-10 py-5">Rekap Ijin Karyawan</th>
        </tr>
        <tr class="bg-white border">
          <th class="px-10 py-5">Nama Karyawan</th>
          <th class="px-10 py-5">Keterangan</th>
          <th class="px-10 py-5">Tanggal</th>
          <th class="px-10 py-5">Status</th>
          <th class="px-10 py-5">Action</th>
        </tr>
        @foreach($izin as $izin)
        <tr>
          <td class="px-10 py-5">{{ $izin->user->username }}</td>
          <td class="px-10 py-5">{{ \Illuminate\Support\Str::limit($izin->keterangan, 20, ('...')) }}</td>
          <td class="px-6">{{ date('l , d/m/Y', strtotime($izin->tanggal)) }}</td>
          <td class="px-6">{{ $izin->status }}</td>
          <td class="px-6">
            <button data-modal-target="defaultModal-izin-{{ $izin->id }}"
              data-modal-toggle="defaultModal-izin-{{ $izin->id }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </button>
            <button data-modal-target="defaultModal-izin-{{ $izin->id }}"
              data-modal-toggle="defaultModal-izin-{{ $izin->id }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 20h9"></path>
                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
              </svg>
            </button>
            <form class="inline " action="{{ route('izin.destroy', ['izin' => $izin->id]) }}" method="POST">
              <button onclick="return confirm('Are you sure?')">
                @csrf
                @method('delete')
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
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
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
      aria-labelledby="contacts-tab">
      <table
        class="w-[1100px] table-auto text-sm text-left border border-t-0 text-gray-500 dark:text-gray-400 bg-[#EEEE]">
        <tr>
          <th class="px-10 py-5">Rekap Cuti Karyawan</th>
        </tr>
        <tr class="bg-white border">
          <th class="px-10 py-5">Nama Karyawan</th>
          <th class="px-10 py-5">Keterangan</th>
          <th class="px-10 py-5">Mulai Cuti</th>
          <th class="px-10 py-5">Akhir Cuti</th>
          <th class="px-10 py-5">Tanggal Pengajuan</th>
          <th class="px-10 py-5">Tanggal Diterima</th>
          <th class="px-10 py-5">Action</th>
        </tr>

        @foreach ($cuti as $cuti)
        <tr>
          <td class="px-10 py-5">{{ $cuti->user->username }}</td>
          <td class="px-10 py-5">{{ \Illuminate\Support\Str::limit($cuti->keterangan_cuti, 20, ('...')) }}</td>
          <td class="px-6">{{ date('l , d/m/Y', strtotime($cuti->mulai_cuti)) }}</td>
          <td class="px-6">{{ date('l , d/m/Y', strtotime($cuti->akhir_cuti)) }}</td>
          <td class="px-6">{{ date('l , d/m/Y', strtotime($cuti->tanggal_pengajuan)) }}</td>
          <td class="px-6">{{ $cuti->tanggal_diterima ? date('l d/m/Y', strtotime($cuti->tanggal_diterima)) : 'Belum
            Diterima' }}</td>
          <td class="px-6">
            <button data-modal-target="defaultModal-cuti{{ $cuti->id }}"
              data-modal-toggle="defaultModal-cuti{{ $cuti->id }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </button>
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 20h9"></path>
                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
              </svg>
            </button>
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                <line x1="18" y1="9" x2="12" y2="15"></line>
                <line x1="12" y1="9" x2="18" y2="15"></line>
              </svg>
            </button>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

<!-- Modal Edit Masuk -->
@foreach ($masukModal as $masuk)
<div id="defaultModal-{{ $masuk->id }}" tabindex="-1" aria-hidden="true"
  class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-2xl md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Masuk {{ $masuk->user->username }}
        </h3>
        <button type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="defaultModal-{{ $masuk->id }}">
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
      <div class="px-6 py-6 lg:px-8">
        <form class="space-y-6" action="{{ route('absen.update', ['absen' => $masuk->id]) }}" method="POST">
          @csrf
          @method('PUT')
          <div>
            <input name="user_id" value="{{ $masuk->id }}" hidden>
            <input type="text"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              value="{{ $masuk->user->username }}" required>
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
            <input type="text" name="long" value="{{ $masuk->long }}"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required>
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
            <input type="text" name="lat" value="{{ $masuk->lat }}"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required>
          </div>
          <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login
            to your account</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- Modal Edit Keluar -->
@foreach ($keluarModal as $keluar)
<div id="defaultModal-keluar-{{ $keluar->id }}" tabindex="-1" aria-hidden="true"
  class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-2xl md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Keluar {{ $keluar->user->username }}
        </h3>
        <button type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="defaultModal-keluar-{{ $keluar->id }}">
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
      <div class="px-6 py-6 lg:px-8">
        <form class="space-y-6" action="{{ route('keluar.update', ['keluar' => $keluar->id]) }}" method="POST">
          @csrf
          @method('PUT')
          <div>
            <input name="user_id" value="{{ $keluar->id }}" hidden>
            <input type="text"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              value="{{ $keluar->user->username }}" required>
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
            <input type="text" name="long" value="{{ $keluar->long }}"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required>
          </div>
          <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
            <input type="text" name="lat" value="{{ $keluar->lat }}"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required>
          </div>
          <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

<!-- Modal Edit + Detail Izin-->
@foreach ($izinModal as $izinModal)
<div id="defaultModal-izin-{{ $izinModal->id }}" tabindex="-1" aria-hidden="true"
  class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-2xl md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Izin {{ $izinModal->user->username }}
        </h3>
        <button type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="defaultModal-izin-{{ $izinModal->id }}">
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
      <div class="px-6 py-6 lg:px-8">
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          {{ $izinModal->keterangan }}
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          Tanggal Pengajuan : {{ date('l , d/m/Y', strtotime($izinModal->tanggal)) }}
        </p>
      </div>

      <!-- Modal footer -->
      <form action="{{ route('izin.update', ['izin' => $izinModal->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid gap-6 mb-6 md:grid-cols-2 px-8">
          <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
            <input type="text" name="status"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required value="{{ $izinModal->status }}">
            <input name="user_id" value="{{ $izinModal->user_id }}" hidden>
            <input name="keterangan" value="{{ $izinModal->keterangan }}" hidden>
          </div>
        </div>

        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Accept</button>
          <button data-modal-hide="defaultModal-{{ $izinModal->id }}" type="button"
            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
        </div>
      </form>


    </div>
  </div>
</div>
@endforeach

<!-- Modal Edit + Detail Cuti-->
@foreach ($cutiModal as $cutiModal)
<div id="defaultModal-cuti{{ $cutiModal->id }}" tabindex="-1" aria-hidden="true"
  class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
  <div class="relative w-full h-full max-w-2xl md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <!-- Modal header -->
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Cuti {{ $cutiModal->user->username }}
        </h3>
        <button type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="defaultModal-cuti{{ $cutiModal->id }}">
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
      <div class="px-6 py-6 lg:px-8">
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          {{ $cutiModal->keterangan_cuti }}
        </p>
        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
          Tanggal Cuti : {{ date('l , d/m/Y', strtotime($cutiModal->mulai_cuti)) }} - {{ date('l , d/m/Y',
          strtotime($cutiModal->akhir_cuti)) }}
        </p>
      </div>

      <!-- Modal footer -->
      <form action="{{ route('cuti.update', ['cuti' => $cutiModal->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid gap-6 mb-6 md:grid-cols-2 px-8">
          <div>
            <label>Tanggal Diterima</label>
            <input type="date" name="tanggal_diterima">
            <input name="user_id" value="{{ $cutiModal->user_id }}" hidden>
            <input name="keterangan_cuti" value="{{ $cutiModal->keterangan_cuti }}" hidden>
          </div>
        </div>

        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Accept</button>
          <button data-modal-hide="defaultModal-{{ $cutiModal->id }}" type="button"
            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
        </div>
      </form>


    </div>
  </div>
</div>
@endforeach

@endsection