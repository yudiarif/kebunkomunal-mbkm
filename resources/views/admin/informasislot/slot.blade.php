  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-0">
      <div class="row w-auto h-auto mx-0">
          <!-- Recent Sales Start -->
          <div class="container-fluid pt-4 px-1">
              <div class="d-flex align-items-center justify-content-between mb-4">
                  <h5 class="px-4">Informasi Slot</h5>
              </div>
              <div class=" p-4">
                  {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                        <button type="button" class="btn btn-outline-primary m-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah<i class="fa fa-plus ms-2"></i></button>
                    </div> --}}

                  <div class="table-responsive">
                      {{-- <table class="table text-start align-middle table-bordered table-hover mb-3" > --}}
                      <table id="example" class="table table-striped" style="width:100%">
                          <thead>
                              <tr class="text-dark text-center">
                                  <th scope="col" class="text-center">No</th>
                                  <th scope="col" class="text-center">Komoditi</th>
                                  <th scope="col" class="text-center">Tanggal</th>
                                  <th scope="col" class="text-center">Ketersediaan</th>
                                  <th scope="col" class="text-center">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              {{-- @foreach ($datakomoditi as $item=>$v)
                                {{ $v }}
                              {{ $v->informasiSlot }}
                              @endforeach --}}
                              @php
                              $no=1
                              @endphp
                              @foreach ($datakomoditi as $komoditi)
                              <tr class="text-center">
                                  <td>{{ $no }}</td>
                                  <td>{{ $komoditi->nama_komoditi }}</>
                                  </td>

                                    <td>
                                        @if ($komoditi->informasiSlot)
                                        @php
                                        \Carbon\Carbon::setLocale('id');
                                        $formattedDate = \Carbon\Carbon::parse($komoditi->informasiSlot->tanggal)->isoFormat('D MMMM YYYY');
                                        @endphp
                                        {{ $formattedDate }}
                                        @else
                                            <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                            Tidak Ada Informasi Slot
                                        @endif
                                    </td>
                                    <td>
                                        @if ($komoditi->informasiSlot)
                                            {{ $komoditi->informasiSlot->slot }}
                                        @else
                                            <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                            Tidak Ada Informasi Slot
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary my-1" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $komoditi->id }}" href="">Edit</a>
                                        @if (!$komoditi->informasiSlot == NULL)
                                            
                                        <a class="btn btn-sm btn-danger my-1" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $komoditi->id }}" href="">Hapus</a> 
                                        @endif
                                        {{-- @include('admin.informasislot.modal.create') --}}
                                        @include('admin.informasislot.modal.edit')
                                        @include('admin.informasislot.modal.delete')

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
            <!-- Recent Sales End -->
    </div>
</div>
<!-- Blank End -->

