
  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
      <div class="row w-auto h-100 mx-0">
          <!-- Recent Sales Start -->
          <div class="container-fluid pt-4 px-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="mb-0">Komoditi</h5>
                </div>
                <div class="p-2">
                  
                    <div class="table-responsive">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr class="text-dark text-center">
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Nama</th>
                                    <th scope="col" class="text-center">Komoditi</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1
                                @endphp
                                @foreach ($users as $user)
                                <tr class="text-center">
                                    <td>{{ $no }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>
                                    @if (!$user->KomoditiInfoJagung->isEmpty())
                                        Jagung,
                                    @endif
                                    @if (!$user->KomoditiInfoCabai->isEmpty())
                                        Cabai,
                                    @endif
                                    @if (!$user->KomoditiInfoAyam->isEmpty())
                                        Ayam,
                                    @endif
                                    @if (!$user->KomoditiInfoNila->isEmpty())
                                        Nila
                                    @endif
                                </td>
                                    <td class="text-center">
                                       <!-- Example single danger button -->
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Kelola Komoditi
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('kelola-jagung',$user->id) }}">Kelola Komoditi Jagung</a></li>
                                            <li><a class="dropdown-item" href="{{ route('kelola-cabai',$user->id) }}">Kelola Komoditi Cabai</a></li>
                                            <li><a class="dropdown-item" href="{{ route('kelola-nila',$user->id) }}">Kelola Komoditi Nila</a></li>
                                            <li><a class="dropdown-item" href="{{ route('kelola-ayam',$user->id) }}">Kelola Komoditi Ayam</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                           
                                            </ul>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                                            Lihat
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('show-jagung',$user->id) }}">Lihat Komoditi Jagung</a></li>
                                                <li><a class="dropdown-item" href="{{ route('show-cabai',$user->id) }}">Lihat Komoditi Cabai</a></li>
                                                <li><a class="dropdown-item" href="{{ route('show-nila',$user->id) }}">Lihat Komoditi Nila</a></li>
                                                <li><a class="dropdown-item" href="{{ route('show-ayam',$user->id) }}">Lihat Komoditi Ayam</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            </ul>
                                        </div>
                                    </td>
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
    </div>
</div>
<!-- Blank End -->
