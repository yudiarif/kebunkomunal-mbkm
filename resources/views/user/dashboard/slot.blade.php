<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h5 class="mb-0">Jumlah Slot Tersedia</h5>
    </div>
    <div class="bg-light text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
    </div>
        <div class="row g-3">
            <div class="col-6 col-xl-3">
                <div class="bg-light rounded-circle1 d-flex justify-content-center p-4">

                    <div class="">
                        <i class="fa fa-pepper-hot fa-3x text-primary mb-2"></i>
                        <h4 class="mb-2">Cabai</h4>
                        <h1 class="mb-0" style="color: green;">
                            @if (optional($slotcabai->last())->slot )
                                
                            {{ optional($slotcabai->last())->slot }}
                            @else
                                <h4 class="pb-1" style="color: green;">Slot Belum Tersedia</h4>
                            @endif
                        </h1>
                            @if (optional($slotcabai->last())->slot )
                            <h6>Polybag</h6>
                            
                            <p>Per Tanggal
                                @php
                                \Carbon\Carbon::setLocale('id');
                                $formattedDate = \Carbon\Carbon::parse(optional($slotcabai->last())->tanggal)->isoFormat('D MMMM YYYY');
                                @endphp
                                {{ $formattedDate }}   
                            </p>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="bg-light rounded-circle1 d-flex justify-content-center p-4">

                    <div class="">
                        <i class="fa fa-seedling fa-3x text-primary mb-2"></i>
                        <h4 class="mb-2">Jagung</h4>
                        <h1 class="mb-0" style="color: green;">
                            @if (optional($slotjagung->last())->slot )
                                
                            {{ optional($slotjagung->last())->slot }}
                            @else
                                <h4 class="pb-1" style="color: green;">Slot Belum Tersedia</h4>
                            @endif
                        </h1>
                            @if (optional($slotjagung->last())->slot )
                            <h6>Slot</h6>
                            <p>Per Tanggal
                                @php
                                \Carbon\Carbon::setLocale('id');
                                $formattedDate = \Carbon\Carbon::parse(optional($slotjagung->last())->tanggal)->isoFormat('D MMMM YYYY');
                                @endphp
                                {{ $formattedDate }}   
                            </p>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="bg-light rounded-circle1 d-flex justify-content-center p-4">

                    <div class="">
                        <i class="fa fa-drumstick-bite fa-3x text-primary mb-2"></i>
                        <h4 class="mb-2">Ayam</h4>
                        <h1 class="mb-0" style="color: green;">
                            @if (optional($slotayam->last())->slot )
                                
                            {{ optional($slotayam->last())->slot }}
                            @else
                                <h4 class="pb-1" style="color: green;">Slot Belum Tersedia</h4>
                            @endif
                        </h1>
                            @if (optional($slotayam->last())->slot )
                            <h6>Ekor</h6>
                            <p>Per Tanggal
                                @php
                                \Carbon\Carbon::setLocale('id');
                                $formattedDate = \Carbon\Carbon::parse(optional($slotayam->last())->tanggal)->isoFormat('D MMMM YYYY');
                                @endphp
                                {{ $formattedDate }}   
                            </p>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="bg-light rounded-circle1 d-flex justify-content-center p-4">

                    <div class="">
                        <i class="fa fa-fish fa-3x text-primary mb-2"></i>
                        <h4 class="mb-2">Nila</h4>
                        <h1 class="mb-0" style="color: green;">
                            @if (optional($slotnila->last())->slot )
                                
                            {{ optional($slotnila->last())->slot }}
                            @else
                                <h4 class="pb-1" style="color: green;">Slot Belum Tersedia</h4>
                            @endif
                        </h1>
                            @if (optional($slotnila->last())->slot )
                            <p>Ekor</p>
                            <p>Per Tanggal
                                @php
                                \Carbon\Carbon::setLocale('id');
                                $formattedDate = \Carbon\Carbon::parse(optional($slotnila->last())->tanggal)->isoFormat('D MMMM YYYY');
                                @endphp
                                {{ $formattedDate }}   
                            </p>
                            @endif
                    </div>
                </div>
            </div>
            <a href="https://wa.me/6289630836115?text=I'm%20interested%20in%20your%20offer" target="blank" class="btn btn-primary w-100 mt-3"><i class="fa fa-cart-plus me-2"></i>Pesan Sekarang</a>
        </div>


        <!-- <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Date</th>
                        <th scope="col">Komoditi</th>
                        <th scope="col">Tersedia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01 Jan 2045</td>
                        <td>Cabai</td>
                        <td>10000 polybag</td>
                    </tr>
                    <tr>
                        <td>01 Jan 2045</td>
                        <td>Jagung</td>
                        <td>10000 polybag</td>
                    </tr>
                    <tr>
                        <td>01 Jan 2045</td>
                        <td>Ayam Kampung</td>
                        <td>100 ekor</td>
                    </tr>
                    <tr>
                        <td>01 Jan 2045</td>
                        <td>Nila</td>
                        <td>1000 ekor</td>
                    </tr>
                </tbody>
            </table>
        </div> -->
    </div>

</div>
<!-- Recent Sales End -->