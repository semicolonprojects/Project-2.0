@extends('dashboard.layout.main')

@section('mainContent')

<div class="ml-40 mt-10">
    {{$masuk->user->username}}
    <p class="">{{date('l , d-m-Y , H:i:s', strtotime($masuk->waktu_masuk))}}</p>

    <div id="mapid" style="height: 300px; width: 300px;"></div>
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