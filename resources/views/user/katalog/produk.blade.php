<div class="container-fluid pt-4 px-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h5 class="mb-0">Katalog Kebun Komunal</h5>
        <form class="d-md-flex ms-4">
            {{-- <input class="form-control border-1" type="search" placeholder="Cari Produk..."> --}}
        </form>
    </div>
    <div class="row g-3">

        @foreach ($datakatalog as $item)
        <div class="col-sm-12 col-6 col-xl-3">
            <div class="h-100 bg-light rounded p-3">
                <a href="#" data-toggle="modal" data-target="#modalDetail{{ $item->id }}">
                    <div class="testimonial-item">
                        <img class="img-fluid mx-auto mb-2" src="{{ asset('storage/' . $item->foto ) }}" style="width: 100%; height: 100%;">
                        <h6 class="mb-3">{{ $item->nama_produk }}</h6>
                        <h6 style="color: #58A818;">{{ 'Rp. ' . number_format($item->harga, 0, ',', '.') }}</h6>
                    </div>
                </a>
            </div>
        </div>
        @include('user.katalog.modal.detail')
        @endforeach
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

