<form action="{{ route('panen-komoditi') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="tanggalPemupukan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pilih Tanggal Pemupukan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="col-sm-8">
              <input type="date" class="form-control" id="tanggal_pupuk" name="tanggal_pupuk">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>