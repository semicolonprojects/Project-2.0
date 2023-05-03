@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-4 mt-10">
    <div
    class="w-[1024px] h-[500px] rounded-[13px] overflow-hidden ml-40 mt-10 bg-white border border-[#686868CF] shadow-[0px_8px_8px_rgba(0,0,0,0.5)]">
    <div class="px-10 py-8 ">
        <div class="grid grid-flow-col ">
            
            <div class="grid grid-flow-row gap-[15px] border-r border-black ">
                <div class="font-bold text-2xl ">Name</div>
                <div class="w-[350px] h-[55px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="font-medium text-xl ml-4 inline-block justify-center">admin</p>
                </div>
                <div class="font-bold text-2xl mt-5">Date</div>
                <div class="w-[350px] h-[55px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="font-medium text-xl ml-4 inline-block justify-center">admin</p>
                </div>
                <div class="font-bold text-2xl mt-5">Location</div>
                <div class="w-[350px] h-[55px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="font-medium text-xl ml-4 inline-block justify-center">admin</p>
                </div>
            </div>
            <div class=" ml-28 mb-4 grid-flow-row gap-[15px]">
                <p class="font-bold text-2xl ">Map</p> 
                <div class="w-[350px] h-[350px] mt-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="font-medium text-xl ml-4 inline-block justify-center"></p>
                    <div class="ml-6 mb-2" id="mapid" style="height: 300px; width: 300px;"></div>
                </div>
            </div>
           
               
            
                
            
            
        </div>
            
            
        
            
            
            
            
       
    </div>
            
            
    

            
    
</div>
   


    {{$masuk->user->username}}
    <p class="">{{date('l , d-m-Y , H:i:s', strtotime($masuk->waktu_masuk))}}</p>

    {{-- <div id="mapid" style="height: 300px; width: 300px;"></div> --}}
</div>


<script>
    var mymap = L.map('mapid').setView([{{$masuk->lat}}, {{$masuk->long}}], 15);


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 18,
}).addTo(mymap);
    L.marker([{{$masuk->lat}}, {{$masuk->long}}]).addTo(mymap);

</script>

@endsection