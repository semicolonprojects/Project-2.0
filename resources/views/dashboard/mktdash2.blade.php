@extends('dashboard.layout.main')

@section('mainContent')

<div class="mt-14 ml-52">
  <div class="inline-block p-6 bg-white border border-gray-200 rounded-xl  hover:bg-gray-100 drop-shadow-2xl w-[1024px] h-[500px]">
    <div class="inline-flex absolute mt-10 ml-[424px] w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
    <svg class="absolute w-[85px] h-[96px] text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
  </div>
    <div class="inline-flex absolute mt-36 ml-[380px]">
      <h5 class="text-2xl font-semibold tracking-tight text-gray-900 ">Hengki Saranggih</h5>
    </div>
    <div class="text-white  bg-[#B21E1E] focus:outline-none focus:ring-4 focus:ring-blue-300 text-xs font-medium rounded-full px-1 py-0.5 text-center ml-[420px] mt-[195px] dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-24 h-8">
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

@vite(['resources/css/app.css','resources/js/app.js'])
@endsection