<form action="{{ route('store-foto-panorama') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalPanorama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Kelola Foto Panorama Nila</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-xl-12">
                    <div class=" h-100 p-4">
                        <div class="row mb-3">
                            <label for="panorama" class="col-sm-4 col-form-label">Foto 360</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control mb-2" id="panorama1" name="panorama1">
                                @if(($panoramanila))
                                <img src="{{ asset('storage/' . $panoramanila->panorama1 ) }}" alt="Belum Ada panorama" style="max-width: 200px;" class="mb-2">
                                @else
                                <p>Belum Ada panorama</p>
                                @endif
                            </div>
                        </div> 
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $id }}">
                        <input type="hidden" class="form-control" id="komoditi_id" name="komoditi_id" value="3">               
                    </div>
                </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
  </form>