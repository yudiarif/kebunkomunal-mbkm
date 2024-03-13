<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Perkembangan dan Kematian</h6>
        <!-- <canvas id="pertumbuhan"></canvas> -->
        <div class="align-items-center">
            <div class="row g-3 mb-2">

                <div class="col-sm-12 col-xl-6">
                    <a href="#" data-toggle="modal" data-target="#pertumbuhanModal">
                        <div class="bg-light rounded d-flex justify-content-center p-4">
                            <i class="fa fa-weight fa-5x text-primary mt-2"></i>
                            <div class="ms-3" style="text-align: center;">
                                <h4 class="mb-2">Berat</h4>
                                <h2 class="mb-0" style="color: green;">
                                    @if (!optional($users->KomoditiInfoAyam->last())->berat == NULL)
                                    {{ optional($users->KomoditiInfoAyam->last())->berat }}
                                    @else
                                        -
                                    @endif
                                </h2>
                                <h7>Kilogram</h7>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-xl-6">
                    <a href="#" data-toggle="modal" data-target="#kematianModal">
                        <div class="bg-light rounded d-flex justify-content-center p-4">
                            <i class="fa fa-heartbeat fa-5x text-danger mt-2"></i>
                            <div class="ms-3" style="text-align: center;">
                                <h4 class="mb-2">Mati</h4>
                                <h2 class="mb-0" style="color: red;">
                                    @if (!($users->KomoditiInfoAyam)->sum('kematian') == NULL)
                                        
                                    {{ ($users->KomoditiInfoAyam)->sum('kematian') }}
                                    @else
                                        -
                                    @endif
                                </h2>
                                <h7 style="color: red;">Ekor</h7>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('lib/chart/chart.min.js') }}"></script>

<!-- Pertumbuhan Modal -->
<div class="modal fade" id="pertumbuhanModal" tabindex="-1" role="dialog" aria-labelledby="pertumbuhanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="pertumbuhanModalLabel">Pertumbuhan ayam</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <canvas id="beratnila"></canvas>
            </div>
            <!-- Tambahan jika diperlukan: Tombol Simpan, Tombol Tutup, dll. -->
        </div>
    </div>
</div>

<!-- Kematian Modal -->
<div class="modal fade" id="kematianModal" tabindex="-1" role="dialog" aria-labelledby="pertumbuhanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="pertumbuhanModalLabel">Kematian ayam</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <canvas id="kematiannila"></canvas>
            </div>
            <!-- Tambahan jika diperlukan: Tombol Simpan, Tombol Tutup, dll. -->
        </div>
    </div>
</div>


<script>
     // beratnila
     var ctxBeratnila = $("#beratnila").get(0).getContext("2d");
     var gradientBeratnila = ctxBeratnila.createLinearGradient(0, 0, 0, 400);
     gradientBeratnila.addColorStop(0, 'rgba(137,188,86, 0.3)'); // Warna awal
     gradientBeratnila.addColorStop(1, 'rgba(137,188,86, 0)'); // Warna akhir

     
     var mingguAyam = @json($users->KomoditiInfoAyam->pluck('berat')->toArray());
     var beratAyam = @json($users->KomoditiInfoAyam->pluck('berat'));
     var kematianAyam = @json($users->KomoditiInfoAyam->pluck('kematian'));

     var labels = [];
    for (var i = 1; i <= mingguAyam.length; i++) {
        labels.push("Minggu " + i);
    }

     var myChartBeratnila = new Chart(ctxBeratnila, {
         type: "line",
         data: {
             labels: labels,
             datasets: [{
                 label: "Berat (kg)",
                 fill: true,
                 backgroundColor: gradientBeratnila,
                 borderColor: "rgba(137,188,86, 1)",
                 pointBorderColor: "rgba(137,188,86, 1)",
                 pointBackgroundColor: "rgba(255,255,255, 1)",
                 pointRadius: 6,
                 data: beratAyam
             }]
         },
         options: {
             responsive: true
         }
     });

     // kematian
     var ctxKematiannila = $("#kematiannila").get(0).getContext("2d");
     var gradientKematiannila = ctxKematiannila.createLinearGradient(0, 0, 0, 400);
     gradientKematiannila.addColorStop(0, 'rgba(154,75,0, 0.3)'); // Warna awal
     gradientKematiannila.addColorStop(1, 'rgba(154,75,0, 0)'); // Warna akhir

     var myChartKematiannila = new Chart(ctxKematiannila, {
         type: "line",
         data: {
             labels: labels,
             datasets: [{
                 label: "Kematian (ekor)",
                 fill: true,
                 backgroundColor: gradientKematiannila,
                 borderColor: "rgba(154,75,0, 1)",
                 pointBorderColor: "rgba(154,75,0, 1)",
                 pointBackgroundColor: "rgba(255,255,255, 1)",
                 pointRadius: 6,
                 data: kematianAyam
             }]
         },
         options: {
             responsive: true
         }
     });
 </script>