<div class="modal fade" id="modalDetail{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="cabaibubukLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="pertumbuhanModalLabel"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-12 col-xl-6">
                        <div class="h-100 p-3">
                            <div class="testimonial-item">
                                <img class="img-fluid mx-auto mb-2" src="{{ asset('storage/' . $item->foto ) }}" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-12 col-xl-6">
                        <div class="h-100  p-3">
                            <div class="testimonial-item">
                                <h3 class="mb-3">{{ $item->nama_produk }}</h3>
                                <h6 style="color: #58A818;">{{ 'Rp. ' . number_format($item->harga, 0, ',', '.') }}</h6>
                                <p class="mb-1">Deskripsi:</p>
                                <p>{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ $item->link_wa }}" target="blank" class="btn btn-primary rounded-pill m-4"><i class="fa fa-shopping-basket me-2"></i>Pesan Sekarang</a>
        </div>
    </div>
</div>