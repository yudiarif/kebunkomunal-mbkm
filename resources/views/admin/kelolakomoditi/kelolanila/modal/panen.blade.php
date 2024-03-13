<form action="{{ route('panen-komoditi') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalPanen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Panen Nila</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-xl-12">
                    <div class=" h-100 p-4">
                        <div class="row mb-3">
                            <label for="tanggal_panen" class="col-sm-4 col-form-label">Tanggal Panen</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tanggal_panen" name="tanggal_panen" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jumlah_panen" class="col-sm-4 col-form-label">Jumlah Panen (kg)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_panen" name="jumlah_panen" step="0.01" >
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