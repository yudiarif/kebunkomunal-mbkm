<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}
  <form action="{{ route('informasislot.store') }}" method="post" enctype="multipart/form-data">
    @csrf
  <!-- Modal -->
  <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pupuk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xl-12">
                <div class=" h-100 p-4">
             
                    
                        <div class="row mb-3">
                            <label for="jenis_pupuk" class="col-sm-4 col-form-label">Jenis Pupuk</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="jenis_pupuk" name="jenis_pupuk" required>
                            </div>
                        </div>       
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
