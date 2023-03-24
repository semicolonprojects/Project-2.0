import "./Leaflet.AccuratePosition";

var map = L.map("map").setView([40.44695, -345.23437], 20);

L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
    attribution:
        '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

function onAccuratePositionError(e) {
    addStatus(e.message, "error");
}

function onAccuratePositionProgress(e) {
    var message = "Progressing … (Accuracy: " + e.accuracy + ")";
    addStatus(message, "progressing");
}

function onAccuratePositionFound(e) {
    var message = "Most accurate position found (Accuracy: " + e.accuracy + ")";
    addStatus(message, "done");
    map.setView(e.latlng, 12);
    console.log(e.latlng);
    L.marker(e.latlng).addTo(map);
}

function addStatus(message, className) {
    var ul = document.getElementById("status"),
        li = document.createElement("li");
    li.appendChild(document.createTextNode(message));
    ul.className = className;
    ul.appendChild(li);
}

map.on("accuratepositionprogress", onAccuratePositionProgress);
map.on("accuratepositionfound", onAccuratePositionFound);
map.on("accuratepositionerror", onAccuratePositionError);

map.findAccuratePosition({
    maxWait: 10000,
    desiredAccuracy: 20,
});
