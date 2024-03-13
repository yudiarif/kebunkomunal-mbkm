<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Detail Tanaman Cabai</h6>

                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
                @if ($fotocabai)
                <a href="{{ asset('storage/' . $fotocabai->foto1) }}" data-fancybox="cabai" data-caption="{{ $fotocabai->created_at }}">
                    <img src="{{ asset('storage/' . $fotocabai->foto1) }}" style="border-radius: 15px; width: 100%;" alt="" class="zoomable-image">
                </a>
                <a href="{{ asset('storage/' . $fotocabai->foto2 ) }}" data-fancybox="cabai" data-caption="{{ $fotocabai->created_at }}"></a>
                <a href="{{ asset('storage/' . $fotocabai->foto3 ) }}" data-fancybox="cabai" data-caption="{{ $fotocabai->created_at }}"></a>
                @else
                <h4>
                    Belum Ada Foto
                </h4>
                @endif

                <!-- <div class="slider-container">
                    <div class="slider">
                        <div class="slide">
                            <img src="img/cabai1.png" alt="1">
                        </div>
                        <div class="slide">
                            <img src="img/cabai2.png" alt="2">
                        </div>
                        <div class="slide">
                            <img src="img/cabai3.png" alt="3">
                        </div>
                        <div class="slide">
                            <img src="img/cabai4.png" alt="4">
                        </div>
                    </div>
                    <input class="mt-3 mb-3" type="range" id="slider-progress" min="0" max="3" value="0" step="1">
                </div> -->
            </div>
        </div>

