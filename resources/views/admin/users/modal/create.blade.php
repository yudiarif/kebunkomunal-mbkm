<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}
<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <!-- Modal -->
  <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-sm-12 col-xl-12">
            <div class=" h-100 p-4">


              <div class="row mb-3">
                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="username" class="col-sm-4 col-form-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="no_hp" class="col-sm-4 col-form-label">No. HP</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="foto" class="col-sm-4 col-form-label">Foto User</label>
                <div class="col-sm-8">
                  <input type="file" class="form-control" id="foto" name="foto">
                </div>
              </div>
              <div class="row mb-3">
                <label for="role" class="col-sm-4 col-form-label">Level User</label>
                <div class="col-sm-8">
                  <select class="form-select" id="role_id" name="role_id" aria-label="Default select example">
                    <option selected>Pilih Level User</option>
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">
                      {{ $role->nama }}
                    </option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="password" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                <div class="col-sm-8">
                  <input autocomplete="off" type="password" name="password_confirmation" id="password_confirmation" required class="form-control" />
                </div>
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
</form>