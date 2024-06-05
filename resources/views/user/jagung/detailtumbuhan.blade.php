<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Detail Tanaman Jagung</h6>

                <!-- fancybox -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
                @if ($dataperkembangan)
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="9000">
                <div class="position-absolute p-2" style="z-index: 3;"><i class="fa fa-info-circle text-white" style="opacity: 90%;"></i></div>
                    <div class="carousel-inner" >
                        <div class="carousel-item active">
                            <a href="{{ asset('storage/' . $dataperkembangan->foto1) }}" data-fancybox="jagung" data-caption="{{ $dataperkembangan->created_at }}">
                                <img src="{{ asset('storage/' . $dataperkembangan->foto1) }}" style="border-radius: 15px; width: 100%; height: 230px;" alt="" class="zoomable-image">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ asset('storage/' . $dataperkembangan->foto2 ) }}" data-fancybox="jagung" data-caption="{{ $dataperkembangan->created_at }}">
                                <img src="{{ asset('storage/' . $dataperkembangan->foto2) }}" style="border-radius: 15px; width: 100%; height: 230px;" alt="" class="zoomable-image">
                            </a>

                        </div>
                        <div class="carousel-item">
                            <a href="{{ asset('storage/' . $dataperkembangan->foto3 ) }}" data-fancybox="jagung" data-caption="{{ $dataperkembangan->created_at }}">
                                <img src="{{ asset('storage/' . $dataperkembangan->foto3) }}" style="border-radius: 15px; width: 100%; height: 230px;" alt="" class="zoomable-image">
                            </a>

                        </div>
                    </div>
                </div>

                <ol class="carousel-indicators  py-2 gap-2">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" data- class="active">
                        <img src="{{ asset('storage/' . $dataperkembangan->foto1 ) }}" class="d-block w-100" style="border-radius: 7px; height: 70px; width: 100%;">
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                        <img src="{{ asset('storage/' . $dataperkembangan->foto2 ) }}" class="d-block w-100" style="border-radius: 7px; height: 70px; width: 100%;">
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">
                        <img src="{{ asset('storage/' . $dataperkembangan->foto3 ) }}" class="d-block w-100" style="border-radius: 7px; height: 70px; width: 100%;">
                    </li>
                </ol>

                @else
                <h4>
                    Belum Ada Foto
                </h4>
                @endif

            </div>
        </div>