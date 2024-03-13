<form action="{{ route('store-komoditi-jagung') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Record Jagung</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-xl-12">
                    <div class=" h-100 p-4">
                        <div class="row mb-3">
                            <label for="jumlah_slot" class="col-sm-4 col-form-label">Jumlah Slot</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="jumlah_slot" name="jumlah_slot" value="{{ optional($datajagung->last())->jumlah_slot }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tinggi" class="col-sm-4 col-form-label">Tinggi (cm)</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="tinggi" name="tinggi" step="any">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kematian" class="col-sm-4 col-form-label">Kematian</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="kematian" name="kematian">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jenis_pupuk" class="col-sm-4 col-form-label">Jenis Pupuk</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="pupuk_id" name="pupuk_id" aria-label="Default select example">
                                    <option selected value="">Pilih Jenis Pupuk</option>
                                    @foreach ($datapupuk as $pupuk)      
                                    <option value="{{ $pupuk->id }}">
                                        {{ $pupuk->jenis_pupuk }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tanggal_pupuk" class="col-sm-4 col-form-label">Tanggal Pemupukan</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tanggal_pupuk" name="tanggal_pupuk" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kehijauan" class="col-sm-4 col-form-label">Tingkat Kehijauan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="kehijauan" name="kehijauan" step="any" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ph_tanah" class="col-sm-4 col-form-label">Ph Tanah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ph_tanah" name="ph_tanah" step="any">
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $id }}">
                        <input type="hidden" class="form-control" id="komoditi_id" name="komoditi_id" value="2">               
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