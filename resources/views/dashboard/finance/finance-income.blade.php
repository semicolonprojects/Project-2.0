@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-16 mt-10">
    <div class="grid grid-flow-col gap-7 py-10">
        <div class="ml-10 grid grid-flow-row">
            <h1 class="font-bold text-4xl text-black">Income</h1>
        </div>
        <div class="grid-flow-row sm:ml-[322px] lg:ml-[670px] xl:ml-[750px] 2xl:ml-[928px]">
            <button type="button" id="incomeModalButton" data-modal-toggle="incomeModal"
                class="text-white bg-[#22DB66] font-medium rounded-[22px] text-[13px] px-5 py-2.5 inline-flex items-center">
                <div class="px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                Add New Income
            </button>
        </div>
    </div>
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10">
        <!--Card 1-->
        <div
            class="bg-white w-[1100px] border-[1px] border-[#686868cf] shadow-[0px_8px_8px_rgba(0,0,0,0.5)] rounded-[13px] px-5 py-5">


            <div class="mt-2 ml-2 relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sumber Income
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Income
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah Income
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incomePaginate as $incomePaginates)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $incomePaginates->channel->nama_channel }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $incomePaginates->tipe_income }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $incomePaginates->total_income }}
                            </td>
                            <td class="px-5">
                                <button id="incomeModalButton-{{ $incomePaginates->id }}"
                                    data-modal-toggle="incomeModal-{{ $incomePaginates->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                </button>
                                <form action="{{ route('income.destroy', ['income' => $incomePaginates->id]) }}"
                                    method="post" class="inline">
                                    <button onclick="return confirm('Are you sure?')">
                                        @csrf
                                        @method('delete')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5H9l-7 7 7 7h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Z"></path>
                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $incomePaginate->links() }}
            </div>

        </div>
    </div>

    {{-- Create Income Modal --}}
    <div id="incomeModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full mt-16">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5 ">
                <!-- Modal header -->
                <div
                    class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Add Income
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="incomeModal">
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
                <form action="{{ route('income.store') }}" method="POST" class="max-w-md mx-auto">
                    @csrf
                    <div class="relative gap-12">
                        <div class="mb-5">
                            <label for="nama_channel"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sumber
                                Income</label>
                            <select id="nama_channel" name="nama_channel" size="5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 grid w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                @foreach($channel as $channels)
                                <option value="{{ $channels->id }}">{{ $channels->nama_channel }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="total_income"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                Income</label>
                            <input type="number" name="total_income" id="total_income"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="$2999">
                        </div>
                        <div class="mb-5">
                            <label for="tipe_income"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Income</label>
                            <select id="tipe_income" name="tipe_income"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected>Select category</option>
                                <option value="offline">Offline</option>
                                <option value="online">Online</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-[#22DB66] hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new income
                    </button>
                </form>
            </div>
        </div>
    </div>

    @foreach ($incomePaginate as $incomeModals)
    <div id="incomeModal-{{ $incomeModals->id }}" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full mt-16">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5 ">
                <!-- Modal header -->
                <div
                    class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Income
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="incomeModal-{{ $incomeModals->id }}">
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
                <form action="{{ route('income.update', ['income'=> $incomeModals->id]) }}" method="POST"
                    class="max-w-md mx-auto">
                    @csrf
                    @method('PUT')
                    <div class="relative gap-12">
                        <div class="mb-5">
                            <label for="nama_channel"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sumber
                                Income</label>
                            <select id="nama_channel" name="nama_channel" size="5"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 grid w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                @foreach($channel as $channels)
                                <option value="{{ $channels->id }}">{{ $channels->nama_channel }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="total_income"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                Income</label>
                            <input type="number" name="total_income" id="total_income"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="$2999">
                        </div>
                        <div class="mb-5">
                            <label for="tipe_income"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Income</label>
                            <select id="tipe_income" name="tipe_income"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected value="{{ $incomeModals->tipe_income }}">{{ $incomeModals->tipe_income
                                    }}
                                </option>
                                <option value="offline">Offline</option>
                                <option value="online">Online</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-[#22DB66] hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add new income
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>


@endsection