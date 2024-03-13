<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Pertumbuhan dan kematian</h6>
        <!-- <canvas id="pertumbuhan"></canvas> -->
        <div class="align-items-center">
            <div class="row g-3 mb-4">
                <div class="col-sm-12 col-xl-6">

                    <a href="#" data-toggle="modal" data-target="#pertumbuhanModal">
                        <div class="bg-light rounded d-flex justify-content-center p-4">
                            <i class="fa fa-ruler-vertical fa-5x text-primary mt-2"></i>
                            <div class="ms-3" style="text-align: center;">
                                <h4 class="mb-2">Tinggi</h4>
                                <h2 class="mb-0" style="color: green;">
                                    @if (!optional($users->komoditiInfoJagung->last())->tinggi == NULL)
                                        
                                    {{ optional($users->komoditiInfoJagung->last())->tinggi }}
                                    @else
                                        -
                                    @endif
                                </h2>
                                <h7>Centimeter</h7>
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
                                    @if (!($users->KomoditiInfoJagung)->sum('kematian') == NULL)
                                        
                                    {{ ($users->KomoditiInfoJagung)->sum('kematian') }}
                                    @else
                                        -
                                    @endif
                                </h2>
                                <h7 style="color: red;">Polybag</h7>
                            </div>
                        </div>
                    </a>
                    </div>
            </div>
        </div>

        <h6 class="mt-3">Tingkat Kehijauan</h6>
        <div class="custom-progress mt-3">
            <div class="progress-bar progress-bar-0-25" style="width: 20%;" aria-valuenow="{{ optional($users->komoditiInfoJagung->last())->kehijauan }}" aria-valuemin="0" aria-valuemax="100">
                <div style="font-size: large;">{{ optional($users->komoditiInfoJagung->last())->kehijauan }}</div>
            </div>
        </div>

        <div class="kehijauan infokehijauan mt-1">
            <ul>
                <li class="mati">0 Mati</li>
                <li class="sakit">0-33 Sakit</li>
                <li class="sehat">33-66 Sehat</li>
                <li class="sangatsehat">66-100 Subur</li>
            </ul>
        </div>

    </div>
</div>

<!-- 0 mati, 0-30 tidak sehat, 30-60 sehat, 60-100, sangat sehat -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="{{ asset('lib/chart/chart.min.js') }}"></script>
<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('.custom-progress').waypoint(function() {
        $('.custom-progress .progress-bar').each(function() {
            var progressValue = parseFloat($(this).attr("aria-valuenow"));
            if (progressValue >= 0 && progressValue <= 25) {
                $(this).removeClass().addClass('progress-bar progress-bar-0-25').css("width", progressValue + '%');
            } else if (progressValue > 25 && progressValue <= 50) {
                $(this).removeClass().addClass('progress-bar progress-bar-25-50').css("width", progressValue + '%');
            } else if (progressValue > 50 && progressValue <= 75) {
                $(this).removeClass().addClass('progress-bar progress-bar-50-75').css("width", progressValue + '%');
            } else if (progressValue > 75 && progressValue <= 100) {
                $(this).removeClass().addClass('progress-bar progress-bar-75-100').css("width", progressValue + '%');
            }
        });
    }, {
        offset: '100%'
    });
</script>

<!-- Pertumbuhan Modal -->
<div class="modal fade" id="pertumbuhanModal" tabindex="-1" role="dialog" aria-labelledby="pertumbuhanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="pertumbuhanModalLabel">Pertumbuhan Tinggi Tanaman</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <canvas id="pertumbuhanjagung"></canvas>
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
                <h6 class="modal-title" id="pertumbuhanModalLabel">Kematian Tanaman</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <canvas id="kematianjagung"></canvas>
            </div>
            <!-- Tambahan jika diperlukan: Tombol Simpan, Tombol Tutup, dll. -->
        </div>
    </div>
</div>

<script>
     // pertumbuhan
     var ctxPertumbuhan = $("#pertumbuhanjagung").get(0).getContext("2d");
     var gradientPertumbuhan = ctxPertumbuhan.createLinearGradient(0, 0, 0, 400);
     gradientPertumbuhan.addColorStop(0, 'rgba(137,188,86, 0.3)'); // Warna awal
     gradientPertumbuhan.addColorStop(1, 'rgba(137,188,86, 0)'); // Warna akhir

     var mingguJagung = @json($users->KomoditiInfoJagung->pluck('tinggi')->toArray());
     var tinggiJagung = @json($users->KomoditiInfoJagung->pluck('tinggi'));
     var kematianJagung = @json($users->KomoditiInfoJagung->pluck('kematian'));
    //  console.log(tinggiJagung);

    var labels = [];
    for (var i = 1; i <= mingguJagung.length; i++) {
        labels.push("Minggu " + i);
    }
     var myChartPertumbuhan = new Chart(ctxPertumbuhan, {
         type: "line",
         data: {
             labels: labels,
             datasets: [{
                 label: "Pertumbuhan (cm)",
                 fill: true,
                 backgroundColor: gradientPertumbuhan,
                 borderColor: "rgba(137,188,86, 1)",
                 pointBorderColor: "rgba(137,188,86, 1)",
                 pointBackgroundColor: "rgba(255,255,255, 1)",
                 pointRadius: 6,
                 data: tinggiJagung
             }]
         },
         options: {
             responsive: true
         }
     });

     // kematian
     var ctxKematian = $("#kematianjagung").get(0).getContext("2d");
     var gradientKematian = ctxKematian.createLinearGradient(0, 0, 0, 400);
     gradientKematian.addColorStop(0, 'rgba(154,75,0, 0.3)'); // Warna awal
     gradientKematian.addColorStop(1, 'rgba(154,75,0, 0)'); // Warna akhir

     var myChartKematian = new Chart(ctxKematian, {
         type: "line",
         data: {
             labels: labels,
             datasets: [{
                 label: "Kematian (Batang)",
                 fill: true,
                 backgroundColor: gradientKematian,
                 borderColor: "rgba(154,75,0, 1)",
                 pointBorderColor: "rgba(154,75,0, 1)",
                 pointBackgroundColor: "rgba(255,255,255, 1)",
                 pointRadius: 6,
                 data: kematianJagung
             }]
         },
         options: {
             responsive: true
         }
     });
 </script>