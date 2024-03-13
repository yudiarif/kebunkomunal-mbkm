<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
  <form action="{{ route('katalog.update',$katalog->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="modal fade" id="modalEdit{{ $katalog->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-xl-12">
                    <div class=" h-100 p-4">
                      <div class="row mb-3">
                        <label for="nama_produk" class="col-sm-4 col-form-label">Nama Produk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required value="{{ $katalog->nama_produk }}">
                        </div>
                    </div>       
                    <div class="row mb-3">
                        <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="harga" name="harga" required value="{{ $katalog->harga }}">
                        </div>
                    </div>       
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" value="{{ $katalog->deskripsi }}">{{ $katalog->deskripsi }}</textarea>
                        </div>
                    </div>       
                    <div class="row mb-3">
                        <label for="foto" class="col-sm-4 col-form-label">Foto Produk</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="foto" name="foto">
                            @if(($katalog))
                                <img src="{{ asset('storage/' . $katalog->foto ) }}" alt="Belum Ada Foto" style="max-width: 200px;" class="my-3">
                                @else
                                <p>Belum Ada Foto</p>
                                @endif
                        </div>
                    </div>   
                    <div class="row mb-3">
                      <label for="link_wa" class="col-sm-4 col-form-label">Link Whatsapp</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" id="link_wa" name="link_wa" required value="{{ $katalog->link_wa }}">
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