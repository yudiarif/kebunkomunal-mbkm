<div class="modal fade" id="modalDetail{{ $jagung->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Komoditi Jagung  {{ $namauser->nama }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12 col-xl-12">
                <div class=" h-100 p-4 justify-content-between text-start">
                    <dl class="row row-cols-2 mb-0">
                        <dt class="col-sm-6">Jumlah Slot :</dt>
                        <dd class="col-sm-6">{{ $jagung->jumlah_slot }} Slot</dd>
                        <dt class="col-sm-6">Tanggal :</dt>
                        <dd class="col-sm-6">   
                            @if ($jagung)
                            @php
                            \Carbon\Carbon::setLocale('id');
                            $formattedDate = \Carbon\Carbon::parse($jagung->created_at)->isoFormat('D MMMM YYYY');
                            @endphp
                            {{ $formattedDate }}
                            @else
                                <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                Tidak Ada Informasi
                            @endif
                        </dd>
                        <dt class="col-sm-6">Tinggi :</dt>
                        <dd class="col-sm-6">{{ $jagung->tinggi }} cm</dd>
                        <dt class="col-sm-6">Total Kematian :</dt>
                        <dd class="col-sm-6">{{ $jagung->kematian}}</dd>
                        <dt class="col-sm-6">Tanggal Pupuk :</dt>
                        <dd class="col-sm-6">
                            @if (!$jagung->tanggal_pupuk == NULL)
                            @php
                            \Carbon\Carbon::setLocale('id');
                            $formattedDate = \Carbon\Carbon::parse($jagung->tanggal_pupuk)->isoFormat('D MMMM YYYY');
                            @endphp
                            {{ $formattedDate }}
                            @else
                                <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                Belum Waktunya Dipupuk
                            @endif
                        </dd>
                        <dt class="col-sm-6">Jenis Pupuk :</dt>
                        <dd class="col-sm-6">{{ optional($jagung->pupuk)->jenis_pupuk}}</dd>
                        <dt class="col-sm-6">Kehijauan :</dt>
                        <dd class="col-sm-6">{{ $jagung->kehijauan}}</dd>
                        <dt class="col-sm-6">Ph Tanah :</dt>
                        <dd class="col-sm-6">{{ $jagung->ph_tanah}}</dd>

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