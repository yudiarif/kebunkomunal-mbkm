<div class="container-fluid pt-4 px-4">
    <div class="row g-3">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-2">Lahan Cabai 360</h6>
                <!-- Masukkan hasil Panolens di sini -->
                @if ($datapanorama)
                <div style="width: 100%; height: 400px; overflow: hidden; margin-bottom: 8px; border-radius:6px;" id="container"></div>
                @else
                <h4 class="text-center">Belum ada foto panorama 360</h4>
                @endif
                <div class="row g-2">
                    @if (!$datapanorama==NUll)
                    <!-- Area 1 -->
                    <div class="col-4 position-relative">
                        <a href="#" onclick="changePanorama('{{ asset('storage/' . $datapanorama->panorama1) }}')">
                            <img src="{{ asset('storage/' . $datapanorama->panorama1 ) }}" style="width: 100%; border-radius:7px;" alt="Area 1">
                            <div class="overlay-text">Area 1</div>
                        </a>
                    </div>
                    <!-- Area 2 -->
                    <div class="col-4 position-relative">
                        <a href="#" onclick="changePanorama('{{ asset('storage/' . $datapanorama->panorama2) }}')">
                            <img src="{{ asset('storage/' . $datapanorama->panorama2 ) }}" style="width: 100%; border-radius:7px;" alt="Area 2">
                            <div class="overlay-text">Area 2</div>
                        </a>
                    </div>
                    <!-- Area 3 -->
                    <div class="col-4 position-relative">
                        <a href="#" onclick="changePanorama('{{ asset('storage/' . $datapanorama->panorama3 ) }}')">
                            <img src="{{ asset('storage/' . $datapanorama->panorama3 ) }}" style="width: 100%; border-radius:7px;" alt="Area 3">
                            <div class="overlay-text">Area 3</div>
                        </a>
                    </div>
                    @endif
                </div>
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
    @if($datapanorama)
        var panorama = new PANOLENS.ImagePanorama("{{ asset('storage/' . $datapanorama->panorama1) }}");
    @endif
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