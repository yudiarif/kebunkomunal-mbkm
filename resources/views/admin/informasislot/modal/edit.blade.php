<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
  <form action="{{ route('informasislot.update',$komoditi->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="modal fade" id="modalEdit{{ $komoditi->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Informasi Slot {{ $komoditi->nama_komoditi }}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-xl-12">
                    <div class=" h-100 p-4">
                 
                        
                            <div class="row mb-3">
                                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required value="@if ($komoditi->informasiSlot){{ $komoditi->informasiSlot->tanggal }}@else Tidak Ada Informasi Slot @endif">
                                </div>
                            </div>       
                            <div class="row mb-3">
                                <label for="slot" class="col-sm-4 col-form-label">Ketersediaan</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="slot" name="slot" required value="@if ($komoditi->informasiSlot){{ $komoditi->informasiSlot->slot }}@endif">
                                </div>
                            </div> 
                            <input type="hidden" class="form-control" id="komoditi_id" name="komoditi_id" value="{{ $komoditi->id }}" required>

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