  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-0">
      <div class="row w-auto h-auto mx-0">
          <!-- Recent Sales Start -->
          <div class="container-fluid pt-4 px-1">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="px-4">Kelola Map</h5>
                </div>
                <div class=" p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <button type="button" class="btn btn-outline-primary m-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah Map<i class="fa fa-plus ms-2"></i></button>
                        @include('admin.kelolamap.modal.create')
                    
                    </div>
                    
                    <div class="table-responsive">
                        {{-- <table class="table text-start align-middle table-bordered table-hover mb-3" > --}}
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr class="text-dark text-center">
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Alamat</th>
                                    <th scope="col" class="text-center">Komoditi</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1
                                @endphp
                                @foreach ($datamap as $map)
                                <tr class="text-center">
                                    <td>{{ $no }}</td>
                                    <td><a href="" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $map->id }}">
                                        {{ $map->alamat }}
                                        </a>
                                    </td>
                                    <td>{{ $map->komoditi->nama_komoditi}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary my-1" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $map->id }}" href="">Edit</a>
                                        <a class="btn btn-sm btn-info my-1" href="{{ route('map.show',$map->id) }}">Detail Map</a> 
                                        <a class="btn btn-sm btn-danger my-1" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $map->id }}" href="">Hapus</a> 
                                        @include('admin.kelolamap.modal.delete')
                                        @include('admin.kelolamap.modal.edit')
                                    </td>
                                </tr>
                                @php
                                    $no++
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    
                    </div>
                    <div id="map" style="height: 350px; width: 100%; border-radius: 10px; z-index: 2;"></div>
                </div>
            </div>
            <!-- Recent Sales End -->
    </div>
</div>
<!-- Blank End -->
