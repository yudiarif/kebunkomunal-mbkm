<form action="{{ route('yt-komoditi') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalYT" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Video Youtube</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12 col-xl-12">
                    <div class=" h-100 p-4">
                        <div class="row mb-3">
                            <label for="link_youtube" class="col-sm-4 col-form-label">link Video Youtube</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="link_youtube" name="link_youtube">
                            </div>
                        </div>
                    
                        @if ($yt)
                        <div class="embed-responsive embed-responsive-4by3 text-center w-200">
                            @php
                            $src = str_replace(['shorts/', 'youtu.be/'], ['embed/', 'www.youtube.com/embed/',], $yt->link_youtube);
                        @endphp
                        @if($src)
                            <iframe class="embed-responsive-item" src="{{ $src }}" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        @endif
                          </div>
                        @endif
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $id }}">
                        <input type="hidden" class="form-control" id="komoditi_id" name="komoditi_id" value="4"> 
                        <p class="text-start pt-2">*Saat ingin memasukan link youtube harap gunakan fitur share link yang terdapat pada youtube</p>
                            <img src="{{ asset('img/yt.png') }}" class="rounded mx-auto d-block" alt="...">
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