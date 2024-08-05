<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>



    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pesan</td>
                            <td>Kode Pemesanan</td>
                            <td>Pesanan</td>
                            <td>Status</td>
                            <td><strong>Total Bayar</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->created_at }}</td>
                                <td>{{ $pesanan->kode_pemesanan }}</td>
                                <td>
                                    <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                    @foreach ($pesanan_details as $pesanan_detail)
                                        <img src="{{ url('assets/produk') }}/{{ $pesanan_detail->produk->gambar }}"
                                            class="img-fluid" width="50">
                                        {{ $pesanan_detail->produk->nama }}
                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    @if ($pesanan->status == 1)
                                        Belum Lunas
                                    @else
                                        Lunas
                                    @endif
                                </td>
                                <td><strong>Rp. {{ number_format($pesanan->total_harga+$pesanan->kode_unik) }}</strong></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">Data Kosong</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <p>Untuk silahkan transfer ke rekening bank ini :
                    <div class="media">
                        <div class="media-body">
                            <img src="{{ url('assets/bsi.png') }}" class="mr-3" alt="BSI" width="50">
                            <h5 class="mt-0">BANK BSI</h5>
                            No. Rekening > 0878437196 atas nama <strong>Itinerary</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
