<!-- Button trigger modal -->
<form action="{{ route('destroy-all-nila', $id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <!-- Modal -->
    <div class="modal fade" id="modalDeleteAll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Semua Record Nila</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Anda yakin ingin menghapus semua record nila milik {{ $namauser->nama }} ?
            <h6 class="text-center" style="color: red">
              Peringatan! Menghapus semua record akan menghapus seluruh data record dari komoditi nila {{ $namauser->nama }}
          </h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>
  </form>