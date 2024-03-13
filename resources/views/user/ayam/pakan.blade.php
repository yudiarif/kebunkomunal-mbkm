<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Detail Pakan</h6>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Minggu</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no=1
                 @endphp
                @foreach ($dataayam as $item)
                <tr>
                    <th scope="row">{{ $no }}</th>
                    <td>  @if ($item->tanggal_pakan)
                        @php
                            \Carbon\Carbon::setLocale('id');
                            $formattedDate = \Carbon\Carbon::parse($item->tanggal_pakan)->isoFormat('D MMMM YYYY');
                        @endphp
                        {{ $formattedDate }}
                    @else
                        <!-- Tampilkan pesan atau nilai default jika tidak ada informasi slot -->
                        Tidak Ada Informasi
                    @endif</td>
                    <td>{{ $item->jumlah_pakan }} Kg</td>
                </tr>
                @php
                $no++
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>