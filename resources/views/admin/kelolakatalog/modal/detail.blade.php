<div class="modal fade" id="modalDetail{{ $katalog->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document"">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-12 col-12 col-xl-6">
                    <div class="h-100 p-3">
                        <div class="testimonial-item">
                            <img class="img-fluid mx-auto mb-2" src="{{ asset('storage/' . $katalog->foto ) }}" style="width: 100%; height: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-12 col-xl-6">
                    <div class="h-100  p-3">
                        <div class="testimonial-item">
                            <h3 class="mb-3">{{ $katalog->nama_produk }}</h3>
                            <h6 style="color: #58A818;">{{ 'Rp. ' . number_format($katalog->harga, 0, ',', '.') }}</h6>
                            <p class="mb-1">Deskripsi:</p>
                            <p>{{ $katalog->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ $katalog->link_wa }}" target="blank" class="btn btn-primary rounded-pill m-4"><i class="fa fa-shopping-basket me-2"></i>Pesan Sekarang</a>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
        </div>
      </div>
    </div>
  </div>