<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Detail Tanaman Jagung</h6>

                <!-- fancybox -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
                @if ($fotojagung)
                <a href="{{ asset('storage/' . $fotojagung->foto1) }}" data-fancybox="jagung" data-caption="{{ $fotojagung->created_at }}">
                    <img src="{{ asset('storage/' . $fotojagung->foto1) }}" style="border-radius: 15px; width: 100%;" alt="" class="zoomable-image">
                </a>
                <a href="{{ asset('storage/' . $fotojagung->foto2 ) }}" data-fancybox="jagung" data-caption="{{ $fotojagung->created_at }}"></a>
                <a href="{{ asset('storage/' . $fotojagung->foto3 ) }}" data-fancybox="jagung" data-caption="{{ $fotojagung->created_at }}"></a>
                @else
                <h4>

                    Belum Ada Foto
                </h4>
                @endif
                    <!-- <a href="https://www.youtube.com/watch?v=Jup2IDm6NAs&ab_channel=Suksespedia" data-fancybox="jagung" data-caption="5 maret 2024"></a> -->

                <!-- <div class="slider-container">
                    <div class="slider">
                        <div class="slide">
                            <img src="img/jagung1.png" alt="1">
                        </div>
                        <div class="slide">
                            <img src="img/jagung2.png" alt="2">
                        </div>
                        <div class="slide">
                            <img src="img/jagung3.png" alt="3">
                        </div>
                        <div class="slide">
                            <img src="img/jagung4.png" alt="4">
                        </div>
                    </div>
                    <input class="mt-3 mb-3" type="range" id="slider-progress" min="0" max="3" value="0" step="1">
                </div> -->
            </div>
        </div>