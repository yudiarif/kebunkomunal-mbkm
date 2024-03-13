<div class="modal fade" id="modalDetail{{ $nila->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <dd class="col-sm-6">{{ $nila->jumlah_slot }} Slot</dd>
                        <dt class="col-sm-6">Tanggal :</dt>
                        <dd class="col-sm-6">   
                            @if ($nila)
                            @php
                            \Carbon\Carbon::setLocale('id');
                            $formattedDate = \Carbon\Carbon::parse($nila->created_at)->isoFormat('D MMMM YYYY');
                            @endphp
                            {{ $formattedDate }}
                            @else
                                <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                Tidak Ada Informasi
                            @endif
                        </dd>
                        <dt class="col-sm-6">Berat :</dt>
                        <dd class="col-sm-6">{{ $nila->berat }} kg</dd>
                        <dt class="col-sm-6">Total Kematian :</dt>
                        <dd class="col-sm-6">{{ $nila->kematian}}</dd>
                        <dt class="col-sm-6">Tanggal Pakan :</dt>
                        <dd class="col-sm-6">
                            @if ($nila)
                            @php
                            \Carbon\Carbon::setLocale('id');
                            $formattedDate = \Carbon\Carbon::parse($nila->tanggal_pakan)->isoFormat('D MMMM YYYY');
                            @endphp
                            {{ $formattedDate }}
                            @else
                                <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                                Tidak Ada Informasi
                            @endif
                        </dd>
                        <dt class="col-sm-6">Jumlah Pakan :</dt>
                        <dd class="col-sm-6">{{ $nila->jumlah_pakan}} Kg</dd>
                        <dt class="col-sm-6">Kadar Oksigen Kolam</dt>
                        <dd class="col-sm-6">{{ $nila->oksigen}}</dd>
                        <dt class="col-sm-6">Kadar PH Kolam</dt>
                        <dd class="col-sm-6">{{ $nila->ph}}</dd>
                        <dt class="col-sm-6">Kadar Amoniac</dt>
                        <dd class="col-sm-6">{{ $nila->amoniac}}</dd>

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