<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('keranjang') }}" class="text-dark">Keranjang</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Check Out</li>
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
            <a href="{{ route('keranjang') }}" class="btn btn-sm btn-dark"><i class="fas fa-arrow-circle-left"></i>
                Kembali</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h4>Info Pembayaran</h4>
            <hr>
            <p>Untuk silahkan transfer ke rekening bank ini sebesar : <strong>Rp.
                    {{ number_format($total_harga) }}</strong></p>
            <div class="media">
                <div class="media-body">
                    <img src="{{ url('assets/bsi.png') }}" class="mr-3" alt="BSI" width="50">
                    <h5 class="mt-0">BANK BSI</h5>
                    No. Rekening > 0878437196 atas nama <strong>Itinerary</strong>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>Info Pengiriman</h4>
            <hr>
            <form wire:submit.prevent="checkout">

                <div class="form-group">
                    <label for="">No. HP</label>
                    <input id="nohp" type="number" class="form-control @error('nohp') is-invalid @enderror"
                        wire:model="nohp" value="{{ old('nohp') }}" required autocomplete="name" autofocus>
                    @error('nohp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea wire:model="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>

                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-arrow-circle-right"></i>
                    Checkout</button>
            </form>
        </div>
    </div>
</div>
