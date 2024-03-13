<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Lokasi Kebun Jagung</h6>
        <div id="map" style="height: 350px; width: 100%; border-radius: 10px; z-index: 2;"></div>
    </div>
</div>

</div>
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    var dataMap = @json($datamap);
    // Inisialisasi peta pada elemen dengan ID "map" dan koordinat Pontianak
    var map = L.map('map').setView([-0.0227, 109.3425], 13); // Latitude dan Longitude Pontianak

    var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }).addTo(map);
    var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    var baseMaps = {
        'street view': googleTerrain,
        'satelit': googleHybrid
    }
    L.control.layers(baseMaps).addTo(map);

        if (Array.isArray(dataMap) && dataMap.length > 0) {
        // Menggunakan forEach untuk mengulang array
        dataMap.forEach(function(point) {
            var popupContent = '<h6><a href="' + point.link_google_map + '">' + point.alamat + '</a></h6>';
            L.marker([point.latitude , point.longitude ])
            .addTo(map)
            .bindPopup(popupContent);
            
        });
    }
</script>