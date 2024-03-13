<!-- Button trigger modal -->
<form action="{{ route('katalog.destroy', $katalog->id) }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('DELETE')
  <!-- Modal -->
  <div class="modal fade" id="modalDelete{{ $katalog->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Produk</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Anda yakin ingin menghapus  {{ $katalog->nama_produk }}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</form>