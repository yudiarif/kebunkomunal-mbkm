<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}
  <form action="{{ route('map.store') }}" method="post" enctype="multipart/form-data">
    @csrf
  <!-- Modal -->
  <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Map</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xl-12">
                <div class=" h-100 p-4">
                        <div class="row mb-3">
                            <label for="latitude" class="col-sm-4 col-form-label">Latitude</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="latitude" name="latitude" required step="any">
                            </div>
                        </div>       
                        <div class="row mb-3">
                            <label for="longitude" class="col-sm-4 col-form-label">Longitude</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="longitude" name="longitude" required step="any">
                            </div>
                        </div>       
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                        </div>       
                        <div class="row mb-3">
                            <label for="link_google_map" class="col-sm-4 col-form-label">Link Google Map</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="link_google_map" name="link_google_map" required>
                            </div>
                        </div>  
                        <div class="row mb-3">
                          <label for="komoditi" class="col-sm-4 col-form-label">Komoditi</label>
                          <div class="col-sm-8">
                              <select class="form-select" id="komoditi_id" name="komoditi_id" aria-label="Default select example"  required>
                                  
                                  {{-- @foreach ($datakomoditi as $komoditi)      
                                  <option value="{{ $komoditi->id }}">
                                      {{ $komoditi->nama_komoditi }}
                                  </option>
                                  @endforeach --}}

                                  <option value="2">Jagung</option>
                              </select>
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
