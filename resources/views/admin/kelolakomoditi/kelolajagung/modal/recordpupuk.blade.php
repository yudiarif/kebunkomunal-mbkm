<div class="modal fade" id="modalRecordPupuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pupuk Jagung</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xl-12">
                <div class=" h-100 p-4">

                    <div class="table-responsive pt-5">
                        <table class="table" style="width:100%">
                            <thead>
                                <tr class="text-dark text-center">
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Tanggal Pemupukan</th>
                                    <th scope="col" class="text-center">Jumlah Pupuk</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @php
                                  $no=1
                              @endphp
                              @foreach ($datapanenjagung as $pupukjagung)
                              <tr class="text-center">
                                  <td>{{ $no }}</td>
                                  <td>
                                          @if ($pupukjagung->tanggal_pemupukan)
                                              @php
                                                  \Carbon\Carbon::setLocale('id');
                                                  $formattedDate = \Carbon\Carbon::parse($pupukjagung->tanggal_pemupukan)->isoFormat('D MMMM YYYY');
                                              @endphp
                                              {{ $formattedDate }}
                                          @else
                                              <!-- Tampilkan pesan atau jagung default jika tidak ada informasi slot -->
                                              Tidak Ada Informasi
                                          @endif
                                  </td>
                                  <td class="text-center">
                                    {{ $pupukjagung->jumlah_pupuk }} kg
                                  </td>
                                  <td class="text-center">
                                    <a class="btn btn-sm btn-danger my-1" data-bs-toggle="modal" data-bs-target="#modalDeletePanen{{ $panenjagung->id }}" href="">Hapus</a>
                                    @include('admin.kelolakomoditi.kelolajagung.modal.deletepanen')
                                  </td>
                              </tr>
                              @php
                                  $no++
                              @endphp
                              @endforeach
                          </tbody>
                        </table>
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
