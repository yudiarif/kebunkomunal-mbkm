  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-0">
    <div class="row w-auto h-auto mx-0">
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-1">
              <div class="d-flex align-items-center justify-content-between mb-4">
                  <h5 class="px-4">Detail Map</h5>
              </div>
              <div class="row p-4">
                <div class="col-sm-5 col-xl-5">
                    <div class=" h-100 p-4 justify-content-between text-start">
                        <dl class=" d-flex row row-cols-2 mb-0">
                            @foreach ($datamap as $map)
                                
                            <dt class="col-sm-6">Latitude :</dt>
                            <dd class="col-sm-6 text-start">{{ $map->latitude }}</dd>
                            <dt class="col-sm-6">Longitude :</dt>
                            <dd class="col-sm-6 text-start">{{ $map->longitude }}</dd>
                            <dt class="col-sm-6">Alamat :</dt>
                            <dd class="col-sm-6 text-start">{{ $map->alamat }}</dd>
                            <dt class="col-sm-6">Link Google Map :</dt>
                            <dd class="col-sm-6 text-start"><a href="{{ $map->link_google_map }}">Klik Disini</a></dd>
                            <dt class="col-sm-6">Komoditi :</dt>
                            <dd class="col-sm-6 text-start">{{ $map->komoditi->nama_komoditi}}</dd>
                            @endforeach
                        </dl>
                    </div>
                    
                </div>
                <div class="col-sm-7 col-xl-7">
                    <div id="map" style="height: 350px; width: 100%; border-radius: 10px; z-index: 2;"></div>
                </div>
              </div>
          </div>
          <!-- Recent Sales End -->
  </div>
</div>
<!-- Blank End -->
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