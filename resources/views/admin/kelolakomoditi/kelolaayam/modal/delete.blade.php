<!-- Button trigger modal -->
<form action="{{ route('destroy-ayam', $ayam->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <!-- Modal -->
    <div class="modal fade" id="modalDelete{{ $ayam->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Record Ayam</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Anda yakin ingin menghapus record ayam pada tanggal @if ($ayam->created_at)
            @php
            \Carbon\Carbon::setLocale('id');
            $formattedDate = \Carbon\Carbon::parse($ayam->created_at)->isoFormat('D MMMM YYYY');
            @endphp
            {{ $formattedDate }}
            @else
                <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                Tidak Ada Informasi
            @endif?
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>
  </form>