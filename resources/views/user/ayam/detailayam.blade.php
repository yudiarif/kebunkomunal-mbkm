<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Detail Ayam</h6>

                <!-- fancybox -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
                <div class="row g-3 mb-2">
                    @if ($dataperkembangan)
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light d-flex justify-content-center ">
                            <!-- query di sini untuk sati foto tapi img tidak-->
                            <a href="{{ asset('storage/' . $dataperkembangan->foto1) }}" data-fancybox="ayam" data-caption="{{ $dataperkembangan->created_at }}">
                                <img src="{{ asset('storage/' . $dataperkembangan->foto1) }}" style="border-radius: 15px; width: 100%;" alt="" class="zoomable-image">
                            </a>
                            <!-- query di sini -->
                            <a href="{{ asset('storage/' . $dataperkembangan->foto2) }}" data-fancybox="ayam" data-caption="{{ $dataperkembangan->created_at }}"></a>
                            <a href="{{ asset('storage/' . $dataperkembangan->foto3) }}" data-fancybox="ayam" data-caption="{{ $dataperkembangan->created_at }}"></a>
                        </div>
                    </div>
                    @else
                    <h4>
                        Belum Ada Foto
                    </h4>
                    @endif
                    @if ($yt)
                    @php
                    $src = str_replace(['shorts/', 'youtu.be/'], ['embed/', 'www.youtube.com/embed/',], $yt->link_youtube);
                    @endphp
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light d-flex justify-content-center ">
                            <a href="{{ $src }}" data-fancybox="ayam" data-caption="5 maret 2024">
                                <img src="{{ asset('img/ayamvideoth.jpg') }}" style="border-radius: 15px; width: 100%;" alt="Belum Ada Video" class="zoomable-image">
                            </a>
                        </div>
                    </div>
                    @else
                    <h4>
                        Belum Ada Video
                    </h4>
                    @endif
                </div>
            </div>
        </div>
