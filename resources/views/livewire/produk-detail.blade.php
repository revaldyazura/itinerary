<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('produk') }}" class="text-dark">List Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
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

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-produk">
                <div class="card-body">
                    <img src="{{ url('assets/produk') }}/{{ $produk->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>
                <strong>{{ $produk->nama }}</strong>
                @if ($produk->tersedia == 1)
                    <span class="badge badge-success"><i class="fas fa-check"></i>Ada</span>
                @else
                    <span class="badge badge-danger"><i class="fas fa-times"></i> Habis</span>
                @endif
            </h2>
            <h4>Rp. {{ number_format($produk->harga) }}</h4>
            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="masukkanKeranjang">
                        <table class="table" style="border-top : hidden">
                            <tr>
                                <td>Kota</td>
                                <td>:</td>
                                <td>
                                    <img src="{{ url('assets/kota') }}/{{ $produk->kota->gambar }}" class="img-fluid" width="50">
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td>:</td>
                                <td>
                                    {{ $produk->jenis }}
                                </td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td>:</td>
                                <td>
                                    {{ $produk->berat }}
                                </td>
                            </tr>
                            <tr>
                                <td>jumlah</td>
                                <td>:</td>
                                <td>
                                    <input id="jumlah_pesanan" type="number"
                                        class="form-control @error('jumlah_pesanan') is-invalid @enderror"
                                        wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required
                                        autocomplete="name" autofocus>

                                    @error('jumlah_pesanan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button type="submit" class="btn btn-dark btn-block"
                                        @if ($produk->tersedia !== 1) disabled @endif><i class="fas fa-shopping-cart"></i> Masukkan Keranjang</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
