  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-0">
      <div class="row w-auto h-auto mx-0">
          <!-- Recent Sales Start -->
          <div class="container-fluid pt-4 px-1">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="px-4">Katalog</h5>
                </div>
                <div class=" p-4">
                    <div class="d-flex align-items-center justify-content-start mb-4">
                        <button type="button" class="btn btn-outline-primary m-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah Katalog<i class="fa fa-plus ms-2"></i></button>
                        @include('admin.kelolakatalog.modal.create')

                    </div>
                    <div class="table-responsive">
                        {{-- <table class="table text-start align-middle table-bordered table-hover mb-3" > --}}
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr class="text-dark text-center">
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Nama Produk</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1
                                @endphp
                                @foreach ($datakatalog as $katalog)
                                <tr class="text-center">
                                    <td>{{ $no }}</td>
                                    <td><a href="" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $katalog->id }}">
                                        {{ $katalog->nama_produk }}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary my-1" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $katalog->id }}" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger my-1" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $katalog->id }}" href="">Hapus</a> 
                                        @include('admin.kelolakatalog.modal.delete')
                                        @include('admin.kelolakatalog.modal.detail')
                                        @include('admin.kelolakatalog.modal.edit')

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

