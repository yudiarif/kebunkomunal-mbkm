
  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
    <div class="row w-auto h- mx-0">
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-1">
          <div class=" align-items-center justify-content-between mb-4">
                  <h5 class="mb-0">Komoditi Ayam {{ $namauser->nama }}
              </div>
              <div class=" p-2">
                <div class="d-flex row align-items-center justify-content-between mb-4">
                    <div class="col-lg-12 align-items-center justify-content-between text-center">
                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                            Kelola Data Komoditi<i class="fa fa-plus ms-2"></i>
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalCreate" href="#">Tambah Record</a></li>
                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalFoto" href="#">Tambah Foto Perkembagan</a></li>
                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalPanorama" href="#">Tambah Foto Panorama</a></li>
                            {{-- <li><hr class="dropdown-divider"></li> --}}
                            </ul>
                        </div>
                        <button type="button" class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#modalDeleteAll">Hapus Semua Record<i class="fa fa-trash ms-2"></i></button>
                        <div class="btn-group m-2">
                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                            Panen<i class="fa fa-leaf ms-2"></i>
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalPanen" href="#">Tambah Data Panen</a></li>
                            <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#modalRecordPanen" href="#">Lihat Record Panen</a></li>
                            {{-- <li><hr class="dropdown-divider"></li> --}}
                            </ul>
                        </div>
                        <button type="button" class="btn btn-secondary m-2" data-bs-toggle="modal" data-bs-target="#modalYT">Tambah Video Youtube<i class="fa fa-video ms-2"></i></button>
                        {{-- <button type="button" class="btn btn-info m-2" data-bs-toggle="modal" data-bs-target="#modalPanen">Panen<i class="fa fa-leaf ms-2"></i></button> --}}
                        @include('admin.kelolakomoditi.kelolaayam.modal.create')
                        @include('admin.kelolakomoditi.kelolaayam.modal.panen')
                        @include('admin.kelolakomoditi.kelolaayam.modal.recordpanen')
                        @include('admin.kelolakomoditi.kelolaayam.modal.foto')
                        @include('admin.kelolakomoditi.kelolaayam.modal.panorama')
                        @include('admin.kelolakomoditi.kelolaayam.modal.deleteall')
                        @include('admin.kelolakomoditi.kelolaayam.modal.yt')

                    </div>

                </div>
                  <div class="table-responsive">
                      <table id="example" class="table table-striped" style="width:100%">
                          <thead>
                              <tr class="text-dark text-center">
                                  <th scope="col" class="text-center">No</th>
                                  <th scope="col" class="text-center">Tanggal Record Perkembangan</th>
                                  <th scope="col" class="text-center">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                            @php
                                $no=1
                            @endphp
                            @foreach ($dataayam as $ayam)
                            <tr class="text-center">
                                <td>{{ $no }}</td>
                                <td>
                                    <a href="http://" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $ayam->id }}">
                                        @if ($ayam->created_at)
                                            @php
                                                \Carbon\Carbon::setLocale('id');
                                                $formattedDate = \Carbon\Carbon::parse($ayam->created_at)->isoFormat('D MMMM YYYY');
                                            @endphp
                                            {{ $formattedDate }}
                                        @else
                                            <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                            Tidak Ada Informasi
                                        @endif
                                    </a>
                                    
                                    
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-primary my-1" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $ayam->id }}" href="">Edit</a>
                                    <a class="btn btn-sm btn-danger my-1" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $ayam->id }}" href="">Hapus</a>
                        
                                    @include('admin.kelolakomoditi.kelolaayam.modal.edit')
                                    @include('admin.kelolakomoditi.kelolaayam.modal.detail')
                                    @include('admin.kelolakomoditi.kelolaayam.modal.delete')

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
