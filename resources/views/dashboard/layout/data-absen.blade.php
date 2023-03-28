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
          <td class="px-10 py-5">{{ $izin->keterangan }}</td>
          <td class="px-6">{{ $izin->tanggal }}</td>
          <td class="px-6">{{ $izin->status }}</td>
          <td class="px-6">
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
          <td class="px-10 py-5">{{ $cuti->keterangan_cuti }}</td>
          <td class="px-6">{{ $cuti->mulai_cuti }}</td>
          <td class="px-6">{{ $cuti->akhir_cuti }}</td>
          <td class="px-6">{{ date('d/m/Y', strtotime($cuti->tanggal_pengajuan)) }}</td>
          <td class="px-6">{{ $cuti->tanggal_diterima ? date('d/m/Y', strtotime($cuti->tanggal_diterima)) : NULL }}</td>
          <td class="px-6">
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
      </table>
    </div>
  </div>
</div>

@endsection