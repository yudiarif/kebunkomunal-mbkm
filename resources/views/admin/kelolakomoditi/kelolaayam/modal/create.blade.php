<form action="{{ route('store-komoditi-ayam') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Record Ayam</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-xl-12">
                    <div class=" h-100 p-4">
                        <div class="row mb-3">
                            <label for="jumlah_slot" class="col-sm-4 col-form-label">Jumlah Slot</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_slot" name="jumlah_slot" value="{{ optional($dataayam->last())->jumlah_slot }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="berat" class="col-sm-4 col-form-label">Berat (Kg)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="berat" name="berat" step="any"  required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kematian" class="col-sm-4 col-form-label">Kematian</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="kematian" name="kematian"  required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_pakan" class="col-sm-4 col-form-label">Tanggal Pakan</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tanggal_pakan" name="tanggal_pakan"  required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jumlah_pakan" class="col-sm-4 col-form-label">Jumlah Pakan (Kg)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_pakan" name="jumlah_pakan" step="any"  required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="suhu" class="col-sm-4 col-form-label">Suhu Kandang</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="suhu" name="suhu" step="any"  required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="amoniac" class="col-sm-4 col-form-label">Kadar Amoniac</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="amoniac" name="amoniac" step="any"  required>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $id }}">
                        <input type="hidden" class="form-control" id="komoditi_id" name="komoditi_id" value="4">               
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