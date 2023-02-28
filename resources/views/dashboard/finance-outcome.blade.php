@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-28 mt-10">
  <div class="py-5 sm:ml-[422px] md: lg:ml-[670px] xl:ml-[928px] 2xl:ml-[928px]">
    <button type="button"
        class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] px-3 py-2.5 inline-flex items-center">
        <div class="px-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </div>
        Add New Outcome
    </button>
  </div>
    <div class="ml-14">
    <h5 class="text-[32px] font-bold text-black">Outcome</h5>
    </div>

{{-- Outcome Internal --}}
  <div class="mt-14 ml-14">
    <h5 class="text-[32px] font-bold text-black mb-8">Internal</h5>
    <div id="accordion-collapse" data-accordion="open">
      <table class=" w-[1070px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
          <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-10 py-3">
                      Gaji
                  </th>
                  <th scope="col" class="px-10 py-3">
                      Sewa Toko
                  </th>
                  <th scope="col" class="px-10 py-3">
                      Kulak
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Logistik
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Marketing
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Pajak
                  </th>
                    <th scope="col" class="px-6 py-3">
                      Ongkir Bisnis
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Wifi
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Kas Toko
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Reward
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                  data-accordion-target="#orderStats">
                  <th scope="row" class="px-6 py-4 ">
                      IDR. xxx.xxx
                  </th>
                  <td class="mt-2 px-4 align-center">
                      IDR. xxx.xxx

                  </td>
                  <td class="mt-2 px-8 align-center">
                      IDR. xxx.xxx
                  </td>
                  <td class="px-6 py-4">
                     IDR. xxx.xxx
                  </td>
                  <td class="px-6 py-4">
                      IDR. xxx.xxx
                  </td>
                  <td class="px-6 py-4">
                     IDR. xxx.xxx
                  </td>
                  <td class="px-6 py-4">
                   IDR. xxx.xxx
                </td>
                <td class="px-6 py-4">
                   IDR. xxx.xxx
                </td>
                <td class="px-6 py-4">
                   IDR. xxx.xxx
                </td>
                <td class="px-6 py-4">
                   IDR. xxx.xxx
                </td>
                  <td>
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
          </tbody>
          <tbody>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                  data-accordion-target="#orderStats2">
                  <th scope="row" class="px-6 py-4 ">
                      IDR. xxx.xxx
                  </th>
                  <td class="mt-2 px-4 align-center">
                      IDR. xxx.xxx

                  </td>
                  <td class="mt-2 px-8 align-center">
                      IDR. xxx.xxx
                  </td>
                  <td class="px-6 py-4">
                     IDR. xxx.xxx
                  </td>
                  <td class="px-6 py-4">
                      IDR. xxx.xxx
                  </td>
                  <td class="px-6 py-4">
                     IDR. xxx.xxx
                  </td>
                  <td class="px-6 py-4">
                   IDR. xxx.xxx
                </td>
                <td class="px-6 py-4">
                   IDR. xxx.xxx
                </td>
                <td class="px-6 py-4">
                   IDR. xxx.xxx
                </td>
                <td class="px-6 py-4">
                   IDR. xxx.xxx
                </td>
                  <td>
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
          </tbody>
      </table>
  </div>
  </div>

  {{-- Outcome External --}}
  <div class="mt-28 ml-14">
    <h5 class="text-[32px] font-bold text-black">External</h5>
    <div class="mt-14">
    <div id="accordion-collapse" data-accordion="open">
        <table class=" w-[1070px] table-fixed text-sm text-left text-gray-500 dark:text-gray-400 ">
            <thead class=" text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-10 py-3">
                        Sedekah
                    </th>
                    <th scope="col" class="px-10 py-3">
                        Sponsorship
                    </th>
                    <th scope="col" class="px-10 py-3">
                        Event
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tak Terduga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kulak Food & Beverage
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    data-accordion-target="#orderStats">
                    <th scope="row" class="px-6 py-4">
                        IDR. xxx.xxx
                    </th>
                    <td class="mt-2 px-4 align-center">
                        IDR. xxx.xxx
  
                    </td>
                    <td class="mt-2 px-8 align-center">
                        IDR. xxx.xxx
  
                    </td>
                    <td class="px-6 py-4">
                        IDR. xxx.xxx
                    </td>
                    <td class="px-6 py-4">
                        IDR. xxx.xxx
                    </td>
                    <td>
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
            </tbody>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    data-accordion-target="#orderStats2">
                    <th scope="row" class="px-6 py-4">
                        IDR. xxx.xxx
                    </th>
                    <td class="mt-2 px-4 align-center">
                        IDR. xxx.xxx
  
                    </td>
                    <td class="mt-2 px-8 align-center">
                        IDR. xxx.xxx
  
                    </td>
                    <td class="px-6 py-4">
                        IDR. xxx.xxx
                    </td>
                    <td class="px-6 py-4">
                        IDR. xxx.xxx
                    </td>
                    <td>
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
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>

@endsection