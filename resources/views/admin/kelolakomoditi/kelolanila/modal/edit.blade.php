<form action="{{ route('update-komoditi-nila', $nila->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="modalEdit{{ $nila->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Record Komoditi Nila</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-xl-12">
                    <div class=" h-100 p-4">
                        <div class="row mb-3">
                            <label for="jumlah_slot" class="col-sm-4 col-form-label">Jumlah Slot</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_slot" name="jumlah_slot" value="{{ $nila->jumlah_slot }}"  required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="berat" class="col-sm-4 col-form-label">Berat (Kg)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="berat" name="berat"  value="{{ $nila->berat }}" step="any" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kematian" class="col-sm-4 col-form-label">Kematian</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="kematian" name="kematian" value="{{ $nila->kematian}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_pakan" class="col-sm-4 col-form-label">Tanggal Pakan</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tanggal_pakan" name="tanggal_pakan"  value="{{ $nila->tanggal_pakan }}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jumlah_pakan" class="col-sm-4 col-form-label">Jumlah Pakan (Kg)</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="jumlah_pakan" name="jumlah_pakan"  value="{{ $nila->jumlah_pakan }}" step="any" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="oksigen" class="col-sm-4 col-form-label">Kadar Oksigen Kolam</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="oksigen" name="oksigen"  value="{{ $nila->oksigen }}" step="any" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ph" class="col-sm-4 col-form-label">Kadar PH</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ph" name="ph"  value="{{ $nila->ph }}" step="any" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="amoniac" class="col-sm-4 col-form-label">Kadar Amoniac</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="amoniac" name="amoniac"  value="{{ $nila->amoniac }}" step="any" required>
                            </div>
                        </div>

                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $nila->user->id }}">
                        <input type="hidden" class="form-control" id="komoditi_id" name="komoditi_id" value="{{ $nila->komoditi_id }}">               
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