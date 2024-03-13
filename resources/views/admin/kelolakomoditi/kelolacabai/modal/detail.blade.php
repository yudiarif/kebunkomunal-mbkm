<div class="modal fade" id="modalDetail{{ $cabai->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Komoditi cabai  {{ $namauser->nama }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xl-12">
                <div class=" h-100 p-4 justify-content-between text-start">
                    <dl class="row row-cols-2 mb-0">
                        <dt class="col-sm-6">Jumlah Slot :</dt>
                        <dd class="col-sm-6">{{ $cabai->jumlah_slot }} Slot</dd>
                        <dt class="col-sm-6">Tanggal :</dt>
                        <dd class="col-sm-6">   
                            @if ($cabai)
                            @php
                            \Carbon\Carbon::setLocale('id');
                            $formattedDate = \Carbon\Carbon::parse($cabai->created_at)->isoFormat('D MMMM YYYY');
                            @endphp
                            {{ $formattedDate }}
                            @else
                                <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                Tidak Ada Informasi
                            @endif
                        </dd>
                        <dt class="col-sm-6">Tinggi :</dt>
                        <dd class="col-sm-6">{{ $cabai->tinggi }} cm</dd>
                        <dt class="col-sm-6">Total Kematian :</dt>
                        <dd class="col-sm-6">{{ $cabai->kematian}}</dd>
                        <dt class="col-sm-6">Tanggal Pupuk :</dt>
                        <dd class="col-sm-6">
                            @if (!$cabai->tanggal_pupuk == NULL)
                            @php
                            \Carbon\Carbon::setLocale('id');
                            $formattedDate = \Carbon\Carbon::parse($cabai->tanggal_pupuk)->isoFormat('D MMMM YYYY');
                            @endphp
                            {{ $formattedDate }}
                            @else
                                <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                Belum Waktunya Dipupuk
                            @endif
                        </dd>
                        <dt class="col-sm-6">Jenis Pupuk :</dt>
                        <dd class="col-sm-6">{{ optional($cabai->pupuk)->jenis_pupuk}}</dd>
                        <dt class="col-sm-6">Kehijauan :</dt>
                        <dd class="col-sm-6">{{ $cabai->kehijauan}}</dd>
                        <dt class="col-sm-6">Ph Tanah :</dt>
                        <dd class="col-sm-6">{{ $cabai->ph_tanah}}</dd>

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