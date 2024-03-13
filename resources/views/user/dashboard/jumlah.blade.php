<!-- Sale & Revenue Start -->
<div class="svg" style="z-index: 1;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150" id="my-svg" >
        <linearGradient id="my-gradient" x1="0%" y1="100%" x2="0%" y2="0%">
            <stop offset="0%" style="stop-color:rgb(88,168,24);stop-opacity:1" />
            <stop offset="50%" style="stop-color:rgb(137,188,86);stop-opacity:1" />
        </linearGradient>
        <path fill="url(#my-gradient)" fill-opacity="1" d="M0,0 L1440,0 L1440,1080 L0,1080 Z"></path>
    </svg>
</div>


<div class="container-fluid pt-4 px-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h5 class="mb-0 text-white" style="z-index: 3;">Jumlah yang Dimiliki</h5>
    </div>
    <div class="row g-3">
        <div class="col-6 col-xl-3" style="z-index: 3;">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-pepper-hot fa-4x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Cabai</h6>
                    <h4 class="mb-0" style="color: green;">
                        @if (!optional($totalcabai->last())->jumlah_slot == NULL)

                        {{ optional($totalcabai->last())->jumlah_slot }}
                        @else
                        0
                        @endif
                    </h4>
                    <h7>Polybag</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3" style="z-index: 3;">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-seedling fa-4x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Jagung</h6>
                    <h4 class="mb-0" style="color: green;">
                        @if (!optional($totaljagung->last())->jumlah_slot == NULL)
                        {{ optional($totaljagung->last())->jumlah_slot }}
                        @else
                        0
                        @endif
                    </h4>
                    <h7>Slot</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3" style="z-index: 3;">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-drumstick-bite fa-4x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Ayam</h6>
                    <h4 class="mb-0" style="color: green;">
                        @if (!optional($totalayam->last())->jumlah_slot == NULL)
                        {{ optional($totalayam->last())->jumlah_slot }}
                        @else
                        0
                        @endif
                    </h4>
                    <h7>Ekor</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3" style="z-index: 3;">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-fish fa-4x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Nila</h6>
                    <h4 class="mb-0" style="color: green;">
                        @if (!optional($totalnila->last())->jumlah_slot == NULL)
                        {{ optional($totalnila->last())->jumlah_slot }}
                        @else
                        0
                        @endif
                    </h4>
                    <h7>Ekor</h7>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->