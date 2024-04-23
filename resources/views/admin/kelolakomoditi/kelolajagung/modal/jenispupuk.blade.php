<form action="{{ route('panen-komoditi') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="jenisPupuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pilih jenis Pupuk</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="col-sm-8">
                                <select class="form-select" id="pupuk_id" name="pupuk_id" aria-label="Default select example">
                                    <option selected value="">Pilih Jenis Pupuk</option>
                                          
                                    <option value="1">
                                        Biogreenfil
                                    </option>
                                          
                                    <option value="2">
                                        Pupuk NPK
                                    </option>
                                          
                                    <option value="3">
                                        Belum Dipupuk
                                    </option>
                                                                    </select>
                            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
  </form>