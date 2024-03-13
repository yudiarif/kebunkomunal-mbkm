    <div class="modal fade" id="modalRecordPanen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Panen ayam</h5>
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
                                        <th scope="col" class="text-center">Tanggal Panen</th>
                                        <th scope="col" class="text-center">Jumlah Panen</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php
                                      $no=1
                                  @endphp
                                  @foreach ($datapanenayam as $panenayam)
                                  <tr class="text-center">
                                      <td>{{ $no }}</td>
                                      <td>
                                              @if ($panenayam->tanggal_panen)
                                                  @php
                                                      \Carbon\Carbon::setLocale('id');
                                                      $formattedDate = \Carbon\Carbon::parse($panenayam->tanggal_panen)->isoFormat('D MMMM YYYY');
                                                  @endphp
                                                  {{ $formattedDate }}
                                              @else
                                                  <!-- Tampilkan pesan atau ayami default jika tidak ada informasi slot -->
                                                  Tidak Ada Informasi
                                              @endif
                                      </td>
                                      <td class="text-center">
                                        {{ $panenayam->jumlah_panen }} kg
                                      </td>
                                      <td class="text-center">
                                        <a class="btn btn-sm btn-danger my-1" data-bs-toggle="modal" data-bs-target="#modalDeletePanen{{ $panenayam->id }}" href="">Hapus</a>
                                        @include('admin.kelolakomoditi.kelolaayam.modal.deletepanen')
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
 