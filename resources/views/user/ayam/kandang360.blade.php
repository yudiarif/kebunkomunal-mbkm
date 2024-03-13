<div class="container-fluid pt-4 px-4">
    <div class="row g-3">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-2">Kandang Ayam 360</h6>
                <!-- Masukkan hasil Panolens di sini -->
                @if ($datapanorama)
                <div style="width: 100%; height: 400px; overflow: hidden; margin-bottom: 8px; border-radius:6px;" id="container"></div>
                @else
                <h4>Belum Ada Foto Panorama</h4>
                @endif
            </div>
        </div>
    </div>
</div>


@if ($datapanorama)
<script>
    var panorama, viewer, container;
    
    container = document.querySelector("#container");
    
    // Fungsi untuk mengubah panorama
    function changePanorama(imagePath) {
        // Hapus panorama sebelumnya
        viewer.remove(panorama);
        
        // Buat panorama baru
        panorama = new PANOLENS.ImagePanorama(imagePath);
        
        // Tambahkan panorama baru ke viewer
        viewer.add(panorama);
        
        // Fokus pada panorama baru
        viewer.setPanorama(panorama);
    }
    
    // Inisialisasi panorama dan viewer awal
    panorama = new PANOLENS.ImagePanorama("{{ asset('storage/' . $datapanorama->panorama1) }}");
    viewer = new PANOLENS.Viewer({
        container: container,
        controlBar: true,
        autoRotate: true,
        autoRotateSpeed: 0.5,
        autoRotateActivationDuration: 5000,
    });
    viewer.add(panorama);
</script>
    @endif