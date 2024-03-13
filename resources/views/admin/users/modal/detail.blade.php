<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
  <div class="modal fade" id="modalDetail{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User {{ $user->nama }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xl-12">
                <div class=" h-100 p-4 justify-content-between text-start">
                    <dl class="row row-cols-2 mb-0">
                        <dt class="col-sm-6">Nama :</dt>
                        <dd class="col-sm-6">{{ $user->nama }}</dd>

                        <dt class="col-sm-6">Username :</dt>
                        <dd class="col-sm-6">{{ $user->username }}</dd>

                        <dt class="col-sm-6">No. HP :</dt>
                        <dd class="col-sm-6">{{ $user->no_hp }}</dd>
                        <dt class="col-sm-6">Role :</dt>
                        <dd class="col-sm-6">{{ $user->Role->nama }}</dd>

                        <dt class="col-sm-6 text-truncate">Tgl Pendaftaran :</dt>
                        <dd class="col-sm-6">
                         
                          @php
                          \Carbon\Carbon::setLocale('id');
                          $formattedDate = \Carbon\Carbon::parse($user->created_at)->isoFormat('D MMMM YYYY');
                          @endphp
                        {{ $formattedDate}}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
        </div>
      </div>
    </div>
  </div>