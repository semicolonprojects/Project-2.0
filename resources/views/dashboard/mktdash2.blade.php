@extends('dashboard.layout.main')

@section('mainContent')

<div class="mt-14 ml-28">
  <div class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 drop-shadow-2xl w-[1150px] h-[500px]">
    <div class="inline-flex absolute mt-10 ml-[510px] w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
    <svg class="absolute w-[85px] h-[96px] text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
  </div>
    <div class="inline-flex absolute mt-36 ml-[460px]">
      <h5 class="text-2xl font-semibold tracking-tight text-gray-900 ">Hengki Saranggih</h5>
    </div>
    <div class="text-white  bg-[#B21E1E] focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center ml-[500px] mt-[195px] dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-24 h-8">
      <h2 class="py-1.5 font-bold">HOT LEAD</h2>
    </div>
    <div class="border-b-2 border-gray-400 py-4"></div>
    <div class="py-7 ml-5">
      <h5 class="text-2xl font-bold tracking-tight text-gray-900">Customer Details</h5>
      <div class="py-2">
        <p>Full Name : Hengki Saranggih</p>
        <p>Birth Date : 29 Agustus 1995</p>
        <p>Address : Jl. Ijen Nirwana 41 Blok U-17</p>
        <p>E-mail : hengkiss@gmail.com</p>
        <p>Phone Number : 0879-69420-69</p>
      </div>
    </div>
  </div>
</div>

<div class="ml-[70px] mt-10 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-24 ">
  <div class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[550px] h-[650px]">
  <div class="grid grid-flow-col gap-[150px]">
      <h5 class="text-2xl font-bold tracking-tight text-gray-900 "> Hengki's Top Products</h5>
      <div class="grid grid-flow-col">
      <p class="font-normal text-xl text-black/60">Daily</p>
      <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
              stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
      </button>
    </div>
    </div>
        <div class="inline-flex absolute gap-3 mt-4">
          <div class="inline-flex absolute mt-5 gap-10">
              <p class=" text-[20px] text-black">1.</p>
              <div class="flex flex-wrap pb-3">
                  <div class=" bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[83px] w-[83px]">
                  </div>     
              </div>
              <div >
                <p class=" text-base font-semibold text-black grid-flow-row gap-[100px] ">Madu Durian</p>
                <div class="grid grid-flow-col">
                <p class=" text-base font-semibold text-black mt-2 ">600ml</p>
                <p class=" text-base font-semibold text-black mt-2 ml-36 inline-flex absolute">278ml</p>
                <p class=" text-base font-semibold text-black mt-2 ml-56 inline-flex absolute">IDR.2000.000</p>
                <p class=" text-base  text-gray-400 mt-8 ml-32 px-2 inline-flex absolute">quantity</p>
                <p class=" text-base text-gray-400 mt-8 ml-60 px-4 inline-flex absolute">price</p>
              </div>
                <div class="grid grid-flow-col">
               
                <p class=" text-base font-semibold text-black mt-8">40pcs</p>
                <p class=" text-base font-semibold text-black mt-8 ml-36 inline-flex absolute">278ml</p>
                <p class=" text-base font-semibold text-black mt-8 ml-56 inline-flex absolute">IDR.2000.000</p>
                <p class=" text-base  text-gray-400 mt-14 py ml-32 px-2 inline-flex absolute">quantity</p>
                <p class=" text-base  text-gray-400 mt-14 ml-60 px-4 inline-flex absolute">price</p>
              </div>
              </div>
          </div>
        <div class="inline-flex absolute gap-10 mt-44">
          <div class="inline-flex absolute mt-5 gap-10">
            <p class=" text-[20px] text-black">2.</p>
            <div class="flex flex-wrap pb-3">
                <div class=" bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[83px] w-[83px]">
                </div>
                    
            </div>
            <div >
              <p class=" text-base font-semibold text-black grid-flow-row gap-[100px] ">Madu Durian</p>
              <div class="grid grid-flow-col">
              <p class=" text-base font-semibold   text-black mt-2 ">600ml</p>
              <p class=" text-base font-semibold text-black mt-2 ml-36 inline-flex absolute">278ml</p>
              <p class=" text-base font-semibold text-black mt-2 ml-56 inline-flex absolute">IDR.2000.000</p>
              <p class=" text-base  text-gray-400 mt-8 ml-32 px-2 inline-flex absolute">quantity</p>
              <p class=" text-base text-gray-400 mt-8 ml-60 px-4 inline-flex absolute">price</p>
            </div>
              <div class="grid grid-flow-col">
             
              <p class=" text-base font-semibold text-black mt-8">40pcs</p>
              <p class=" text-base font-semibold text-black mt-8 ml-36 inline-flex absolute">278ml</p>
              <p class=" text-base font-semibold text-black mt-8 ml-56 inline-flex absolute">IDR.2000.000</p>
              <p class=" text-base  text-gray-400 mt-14 py ml-32 px-2 inline-flex absolute">quantity</p>
              <p class=" text-base  text-gray-400 mt-14 ml-60 px-4 inline-flex absolute">price</p>
            </div>
            </div>
            <div class="inline-flex absolute gap-10 mt-40">
              <div class="inline-flex absolute mt-5 gap-10">
                <p class=" text-[20px] text-black">3.</p>
                <div class="flex flex-wrap pb-3">
                    <div class=" bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[83px] w-[83px]">
                    </div>
                        
                </div>
                <div >
                  <p class=" text-base font-semibold text-black grid-flow-row gap-[100px] ">Madu Durian</p>
                  <div class="grid grid-flow-col">
                  <p class=" text-base font-semibold text-black mt-2 ">600ml</p>
                  <p class=" text-base font-semibold text-black mt-2 ml-36 inline-flex absolute">278ml</p>
                  <p class=" text-base font-semibold text-black mt-2 ml-56 inline-flex absolute">IDR.2000.000</p>
                  <p class=" text-base  text-gray-400 mt-8 ml-32 px-2 inline-flex absolute">quantity</p>
                  <p class=" text-base text-gray-400 mt-8 ml-60 px-4 inline-flex absolute">price</p>
                </div>
                  <div class="grid grid-flow-col">
                 
                  <p class=" text-base font-semibold text-black mt-8">40pcs</p>
                  <p class=" text-base font-semibold text-black mt-8 ml-36 inline-flex absolute">278ml</p>
                  <p class=" text-base font-semibold text-black mt-8 ml-56 inline-flex absolute">IDR.2000.000</p>
                  <p class=" text-base  text-gray-400 mt-14 py ml-32 px-2 inline-flex absolute">quantity</p>
                  <p class=" text-base  text-gray-400 mt-14 ml-60 px-4 inline-flex absolute">price</p>
                </div>
                </div>
  </div>
  
  <div class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 shadow-2xl w-[550px] h-[650px]">
   <div class="grid grid-flow-col gap-[150px]">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Hengki's Order Stats</h5>
            <div class="grid grid-flow-col">
            <p class="font-normal text-xl text-black/60">Daily</p>
            <button id="topProducts" data-dropdown-toggle="topProductsTrigger">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
          </div>
          </div>
              <div class="inline-flex  gap-3 mt-40 ml-14">
                <div class="absolute mt-5 gap-10">
                    <div class="flex flex-wrap pb-3">
                        <div class=" bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[120px] w-[120px]">
                          <div class="px-6 mt-7">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg>   
                          </div>
                          
                        </div>
                    </div>
                    <p class=" text-center text-black font-bold ">Total Order</p>
                    <p class=" text-center text-black font-bold mt-3">700</p>
                </div>
                <div class="inline-flex px-52 ml-14 ">
                  <div class=" absolute mt-5 gap-10">
                    <div class="flex flex-wrap pb-3">  
                    <div class=" bg-bgTopProducs rounded-full shadow-[inset_0px_4px_4px_rgba(0,0,0,0.25)] h-[120px] w-[120px]">
                      <div class="px-6 mt-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 10h12"></path><path d="M4 14h9"></path><path d="M19 6a7.7 7.7 0 0 0-5.2-2A7.9 7.9 0 0 0 6 12c0 4.4 3.5 8 7.8 8 2 0 3.8-.8 5.2-2"></path></svg>   
                      </div>
                    </div>
                      </div>
                      <p class=" text-center text-black font-bold">Total Spent</p>
                      <p class=" text-center text-black font-bold mt-3">IDR.2000.000</p>
                </div>
              </div>
  </div>
  </div>
       
 
        
  
        
        
       


  


@vite(['resources/css/app.css','resources/js/app.js'])
@endsection