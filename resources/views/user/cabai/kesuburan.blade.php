<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Kesuburan Tanah</h6>
            <div class="testimonial-item text-center mt-3">
                <h2 class="h5 font-weight-bold text-center mb-4"><i class="fa fa-vial me-3"></i>PH Tanah</h2>
                <div class="ph-progress mx-auto" data-value='{{ optional($datacabai->last())->ph_tanah }}'>
                    <span class="ph-progress-left">
                        <span class="ph-progress-bar"></span>
                    </span>
                    <span class="ph-progress-right">
                        <span class="ph-progress-bar"></span>
                    </span>
                    <div class="ph-progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="font-weight-bold mt-3">
                            <h1 class="ph-value">{{ optional($datacabai->last())->ph_tanah }}</h1>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-12">
                        <div class="h2 font-weight-bold mb-0 ph-range">6–8</div>
                        <span class="small text-gray">Ideal untuk cabai</span>
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
        $(".ph-progress").each(function() {
            var value = parseFloat($(this).attr('data-value'));
            var left = $(this).find('.ph-progress-left .ph-progress-bar');
            var right = $(this).find('.ph-progress-right .ph-progress-bar');
            // Menghitung persentase nilai pH
            var percentage = (value / 14) * 100;
            // Menentukan rentang warna sesuai dengan nilai pH
            var colorClass = '';
            if (value >= 0 && value <= 4) {
                colorClass = 'orange-color';
            } else if (value > 4 && value <= 7) {
                colorClass = 'yellow-color';
            } else if (value > 7 && value <= 10) {
                colorClass = 'green-color';
            } else if (value > 10 && value <= 14) {
                colorClass = 'purple-color';
            }
            // Menambahkan class warna ke ph-progress-bar
            left.add(right).addClass(colorClass);
            // Menyesuaikan rotasi untuk nilai pH antara 0 dan 14
            if (value > 0) {
                if (value <= 7) {
                    right.css('transform', 'rotate(' + percentageToDegrees(percentage) + 'deg)');
                } else {
                    right.css('transform', 'rotate(180deg)');
                    left.css('transform', 'rotate(' + percentageToDegrees(percentage - 50) + 'deg)');
                }
            } else {
                // Jika nilai pH 0, mengatur rotasi menjadi 0
                right.css('transform', 'rotate(0deg)');
            }
        });

        function percentageToDegrees(percentage) {
            return percentage / 100 * 360;
        }
    });
</script>