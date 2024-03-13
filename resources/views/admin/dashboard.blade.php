<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4 h-100">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h5 class="mb-0">Total Komoditi dan Pengguna Kebun Komunal</h5>
    </div>
    <div class="row g-3">
        <div class="col-6 col-xl-3">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-users fa-5x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Pengguna</h6>
                    <h2 class="mb-0" style="color: green;">{{ $totaluser->count() }}</h2>
                    <h7>User Kebun Komunal</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-user-tie fa-5x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Admin</h6>
                    <h2 class="mb-0" style="color: green;">{{ $totaladmin->count() }}</h2>
                    <h7>Admin Kebun Komunal</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-pepper-hot fa-5x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Cabai</h6>
                    <h2 class="mb-0" style="color: green;">
                        @if ($totalcabai == NULL)
                        0
                        @else
                        {{ $totalcabai }}
                        @endif
                    </h2>
                    <h7>User menggambil</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-seedling fa-5x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Jagung</h6>
                    <h2 class="mb-0" style="color: green;">
                        @if ($totaljagung == NULL)
                        0
                        @else
                        {{ $totaljagung }}
                        @endif
                    </h2>
                    <h7>User menggambil</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-drumstick-bite fa-5x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Ayam</h6>
                    <h2 class="mb-0" style="color: green;">
                        @if ($totalayam == NULL)
                        0
                        @else
                        {{ $totalayam }}
                        @endif
                    </h2>
                    <h7>User menggambil</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-fish fa-5x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Nila</h6>
                    <h2 class="mb-0" style="color: green;">
                        @if ($totalnila == NULL)
                        0
                        @else
                        {{ $totalnila }}
                        @endif
                    </h2>
                    <h7>User menggambil</h7>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="bg-light rounded d-flex justify-content-center p-4">
                <i class="fa fa-shopping-basket fa-5x text-primary mt-2"></i>
                <div class="ms-3">
                    <h6 class="mb-2">Produk</h6>
                    <h2 class="mb-0" style="color: green;">
                        @if ($totalkatalog == NULL)
                        0
                        @else
                        {{ $totalkatalog->count() }}
                        @endif
                    </h2>
                    <h7>Katalog Produk</h7>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-1">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0">Total Panen Setiap Komoditi</h5>
        </div>
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No.</th>
                            <th scope="col">Komoditi</th>
                            <th scope="col">Total Panen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1
                        @endphp
                        @foreach ($totals as $total)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $total->Komoditi->nama_komoditi }}</td>
                            <td>{{ $total->total_panen }} Kg</td>

                        </tr>
                        @php
                        $no++
                        @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->