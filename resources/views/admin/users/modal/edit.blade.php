<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
  <form action="{{ route('users.update',$user->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
  <div class="modal fade" id="modalEdit{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xl-12">
                <div class=" h-100 p-4">
                    <h6 class="mb-4">Data {{ $user->nama }}</h6>
                    <form>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama" value="{{ $user->nama }}" name="nama"required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="username" class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="username" value="{{ $user->username }}" name="username"required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="hp" class="col-sm-4 col-form-label">No. HP</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" id="hp" value="{{ $user->no_hp }}" name="no_hp"required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="foto" class="col-sm-4 col-form-label">Foto User</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="foto" name="foto">
                                @if(($user))
                                    <img src="{{ asset('storage/' . $user->foto ) }}" alt="Belum Ada Foto" style="max-width: 200px;" class="my-3">
                                    @else
                                    <p>Belum Ada Foto</p>
                                    @endif
                            </div>
                        </div> 
                        <div class="row mb-3">
                            <label for="role" class="col-sm-4 col-form-label">Level User</label>
                            <div class="col-sm-8">
                                <select class="form-select" id="role_id" name="role_id" aria-label="Default select example">
                                    <option selected>Pilih Level User</option>
                                    @foreach ($roles as $role)      
                                    <option value="{{ $role->id }}" {{ $role->id ==  $user->role_id ? 'selected' : '' }}>
                                        {{ $role->nama }}
                                    </option>
                                    @endforeach
                                </select>
                             </div>
                          </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password"required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-8">
                                <input autocomplete="off" type="password" name="password_confirmation" id="password_confirmation" required class="form-control"required/>
                            </div>
                        </div>
                  
                       
                    </form>
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
  </form>