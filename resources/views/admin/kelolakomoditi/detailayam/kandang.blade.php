<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Detail Keadaan Kandang</h6>
        <div class="owl-carousel testimonial-carousel">

            <div class="testimonial-item text-center mt-3">
                <h2 class="h5 font-weight-bold text-center mb-4"><i class="fa fa-temperature-low me-3"></i>Suhu Udara</h2>
                <div class="progressc mx-auto" data-value='{{ optional($users->KomoditiInfoAyam->last())->suhu }}'>
                    <span class="progressc-left">
                        <span class="progressc-bar" style="color: #3c89d0;"></span>
                    </span>
                    <span class="progressc-right">
                        <span class="progressc-bar " style="color: #3c89d0;"></span>
                    </span>
                    <div class="progressc-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="font-weight-bold mt-3">
                            <h2 style="color: #3c89d0;">{{ optional($users->KomoditiInfoAyam->last())->suhu }}<sup class="small">&deg;C</sup></h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-12">
                        <div class="h3 font-weight-bold mb-0" style="color: #3c89d0;">29-35<sup class="small">&deg;C</sup></div><span class="small text-gray">Ideal untuk ayam</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-item text-center mt-3">
                <h2 class="h5 font-weight-bold text-center mb-4"><i class="fa fa-flask me-3"></i>Amonia</h2>
                <!-- 0,0.005,0.01,0.015,0.02,0.025,0.03,0.035,0.04,0.045,0.05 -->
                <div class="progressa mx-auto" data-value='{{ optional($users->KomoditiInfoAyam->last())->amoniac }}'>
                    <span class="progressa-left">
                        <span class="progressa-bar" style="color: #790FFB;"></span>
                    </span>
                    <span class="progressa-right">
                        <span class="progressa-bar " style="color: #790FFB;"></span>
                    </span>
                    <div class="progressa-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="font-weight-bold mt-3">
                            <h2 style="color: #790FFB;">{{ optional($users->KomoditiInfoAyam->last())->amoniac }}<sup class="small">ppm</sup></h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-12">
                        <div class="h3 font-weight-bold mb-0" style="color: #790FFB;">0-30ppm</div><span class="small text-gray">Ideal untuk ayam</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $(function() {
        $(".progressc").each(function() {

            var value = $(this).attr('data-value');
            var left = $(this).find('.progressc-left .progressc-bar');
            var right = $(this).find('.progressc-right .progressc-bar');

            if (value > 0) {
                if (value <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                }
            }
        })

        function percentageToDegrees(percentage) {
            return percentage / 100 * 360
        }
    });
</script>


<script>
    $(function() {
        $(".progressa").each(function() {
            // Mengambil nilai dari atribut data-value
            var value = parseFloat($(this).attr('data-value'));

            // Menyesuaikan nilai amonia sesuai dengan rentang 0-100
            var adjustedValue = (value / 100) * 100;

            var left = $(this).find('.progressa-left .progressa-bar');
            var right = $(this).find('.progressa-right .progressa-bar');

            if (adjustedValue > 0) {
                if (adjustedValue <= 50) {
                    right.css('transform', 'rotate(' + percentageToDegrees(adjustedValue) + 'deg)')
                } else {
                    right.css('transform', 'rotate(180deg)')
                    left.css('transform', 'rotate(' + percentageToDegrees(adjustedValue - 50) + 'deg)')
                }
            }
        })

        function percentageToDegrees(percentage) {
            return percentage / 100 * 360
        }
    });
</script>