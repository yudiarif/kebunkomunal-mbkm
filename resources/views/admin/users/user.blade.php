  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-0">
      <div class="row w-auto h-auto mx-0">
          <!-- Recent Sales Start -->
          <div class="container-fluid pt-4 px-1">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="px-4">Kelola User</h5>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <button type="button" class="btn btn-outline-primary m-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Tambah User<i class="fa fa-plus ms-2"></i></button>
                        @include('admin.users.modal.create')

                    </div>
                    
                    <div class="table-responsive">
                        {{-- <table class="table text-start align-middle table-bordered table-hover mb-3" > --}}
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr class="text-dark text-center">
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Nama</th>
                                    <th scope="col" class="text-center">Role</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1
                                @endphp
                                @foreach ($users as $user)
                                <tr class="text-center">
                                    <td>{{ $no }}</td>
                                    <td><a href="http://" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $user->id }}">{{ $user->nama }}</a></td>
                                    <td>{{ $user->role->nama }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary my-1" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $user->id }}" href="">Edit</a>
                                        @if ($user->role_id == 2 || auth()->user()->username == 'superadmin')
                                            <a class="btn btn-sm btn-danger my-1" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $user->id }}" href="">Hapus</a>
                                        @endif
                                        @include('admin.users.modal.detail')
                                        @include('admin.users.modal.edit')
                                        @include('admin.users.modal.delete')

                                    </td>
                                </tr>
                                @php
                                    $no++
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $users->links('pagination::bootstrap-5') }} --}}
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
    </div>
</div>
<!-- Blank End -->

