<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ url('assets/produk') }}/{{ $pesanan_detail->produk->gambar }}"
                                        class="img-fluid" width="200">
                                </td>
                                <td>
                                    {{ $pesanan_detail->produk->nama }}
                                </td>
                                <td>
                                    {{ $pesanan_detail->jumlah_pesanan }}
                                </td>
                                <td>
                                    Rp. {{ number_format($pesanan_detail->produk->harga) }}
                                </td>
                                <td><strong>
                                        Rp. {{ number_format($pesanan_detail->total_harga) }}
                                    </strong></td>
                                <td>
                                    <i wire:click="destroy({{ $pesanan_detail->id }})"
                                        class="fas fa-times text-danger"></i>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">Data Kosong</td>
                            </tr>
                        @endforelse
                        @if (!empty($pesanan))
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga : </strong></td>
                                <td align="right"><Strong>
                                        Rp. {{ number_format($pesanan->total_harga) }}
                                    </Strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Kode Unik : </strong></td>
                                <td align="right"><Strong>
                                        Rp. {{ number_format($pesanan->kode_unik) }}
                                    </Strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Total bayar : </strong></td>
                                <td align="right"><Strong>
                                        Rp. {{ number_format($pesanan->total_harga + $pesanan->kode_unik) }}
                                    </Strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td colspan="1">
                                    <a href="{{ route('checkout') }}" class="btn btn-success btn-block">
                                        <i class="fas fa-arrow-circle-right"></i> Check Out
                                    </a>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
