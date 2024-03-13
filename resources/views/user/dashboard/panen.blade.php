<!-- Sales Chart Start -->
<div class="container-fluid pt-4 px-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h5 class="mb-0">Jumlah Hasil Panen</h5>
    </div>
    <div class="row g-3">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0"><i class="fa fa-leaf me-2" style="color: green;"></i>Tanaman</h6>
                </div>

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-cabai-tab" data-bs-toggle="tab" data-bs-target="#nav-cabai" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-pepper-hot text-primary me-2"></i>Cabai</button>
                        <button class="nav-link" id="nav-jagung-tab" data-bs-toggle="tab" data-bs-target="#nav-jagung" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-seedling text-primary me-2"></i>Jagung</button>
                    </div>
                </nav>
                <div class="tab-content pt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-cabai" role="tabpanel" aria-labelledby="nav-cabai-tab">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Siklus</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                             @foreach ($panencabai as $item)
                             <tr>
                                 <th scope="row">{{ $no }}</th>
                                 <td>
                                     @php
                                    \Carbon\Carbon::setLocale('id');
                                    $formattedDate = \Carbon\Carbon::parse($item->tanggal_panen)->isoFormat('D MMMM YYYY');
                                    @endphp
                                    {{ $formattedDate }}    
                                </td>
                                 <td>{{ $item->jumlah_panen }}Kg</td>
                             </tr>
                             @php
                                 $no++
                             @endphp
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-jagung" role="tabpanel" aria-labelledby="nav-jagung-tab">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Priode</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;
                                @endphp
                         @foreach ($panenjagung as $item)
                         <tr>
                             <th scope="row">{{ $no }}</th>
                             <td>
                                 @php
                                \Carbon\Carbon::setLocale('id');
                                $formattedDate = \Carbon\Carbon::parse($item->tanggal_panen)->isoFormat('D MMMM YYYY');
                                @endphp
                                {{ $formattedDate }}    
                            </td>
                             <td>{{ $item->jumlah_panen }}Kg</td>
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
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0"><i class="fas fa-feather-alt me-2" style="color: orange;"></i>Hewan</h6>
                </div>

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-ayam-tab" data-bs-toggle="tab" data-bs-target="#nav-ayam" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-drumstick-bite text-primary me-2"></i>Ayam</button>
                        <button class="nav-link" id="nav-nila-tab" data-bs-toggle="tab" data-bs-target="#nav-nila" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-fish text-primary me-2"></i>Nila</button>
                    </div>
                </nav>
                <div class="tab-content pt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-ayam" role="tabpanel" aria-labelledby="nav-ayam-tab">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Priode</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;
                                @endphp
                         @foreach ($panenayam as $item)
                         <tr>
                             <th scope="row">{{ $no }}</th>
                             <td>
                                 @php
                                \Carbon\Carbon::setLocale('id');
                                $formattedDate = \Carbon\Carbon::parse($item->tanggal_panen)->isoFormat('D MMMM YYYY');
                                @endphp
                                {{ $formattedDate }}    
                            </td>
                             <td>{{ $item->jumlah_panen }}Kg</td>
                         </tr>
                         @php
                             $no++
                         @endphp
                         @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-nila" role="tabpanel" aria-labelledby="nav-nila-tab">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Priode</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;
                                @endphp
                         @foreach ($panennila as $item)
                         <tr>
                             <th scope="row">{{ $no }}</th>
                             <td>
                                 @php
                                \Carbon\Carbon::setLocale('id');
                                $formattedDate = \Carbon\Carbon::parse($item->tanggal_panen)->isoFormat('D MMMM YYYY');
                                @endphp
                                {{ $formattedDate }}    
                            </td>
                             <td>{{ $item->jumlah_panen }}Kg</td>
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
        </div>
    </div>


    <!-- <div class="row g-3">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light text-center rounded p-4">
                <div class="row">
                    <div class="col-sm-12 col-12 col-xl-6">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0"><i class="fa fa-pepper-hot me-2" style="color: green;"></i>Cabai</h6>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Siklus</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>19 januari 2024</td>
                                    <td>10 kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>26 januari 2014</td>
                                    <td>11 kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12 col-12 col-xl-6 ">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0"><i class="fa fa-seedling me-2" style="color: green;"></i>Jagung</h6>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Priode</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>19 januari 2024</td>
                                    <td>100 kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>26 januari 2014</td>
                                    <td>110 kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light text-center rounded p-4">
            <div class="row">
                    <div class="col-sm-12 col-12 col-xl-6 ">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0"><i class="fa fa-drumstick-bite me-2" style="color: green;"></i>Ayam</h6>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Priode</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>19 januari 2024</td>
                                    <td>10 kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>26 januari 2014</td>
                                    <td>11 kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-12 col-12 col-xl-6">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0"><i class="fa fa-fish me-2" style="color: green;"></i>Nila</h6>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Priode</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>19 januari 2024</td>
                                    <td>100 kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>26 januari 2014</td>
                                    <td>110 kg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- Sales Chart End -->