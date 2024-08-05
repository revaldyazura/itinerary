<div class="container">
    <div class="banner">
        <img src="{{url('assets/slider/slider1.png')}}" alt="">
    </div>

    {{-- pilih kota --}}
    <section class="pilih-kota mt-4">
        <h3><strong>Pilih Kota</strong></h3>
        <div class="row mt-4">
            @foreach ($kotas as $kota)
            <div class="col">
              <a href="{{ route('produk.kota', $kota->id) }}" class="pilihkota">
                <div class="card shadow">
                  <div class="card-body text-center">
                    <img src="{{ url('assets/kota')}}/{{$kota->gambar}}" class="img-fluid">
                    <h2>{{ $kota->nama }}</h2>
                  </div>
                </div>
              </a>
                
            </div>
            @endforeach
        </div>

    </section>

    {{-- best produk --}}
    <section class="produk mt-5 mb-5" >
        <h3><strong>Produk Terlaris</strong>
        <a href="{{ route('produk') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua</a>
        </h3>
        <div class="row mt-4">
            @foreach ($produks as $produk)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                      <img src="{{ url('assets/produk')}}/{{$produk->gambar}}" class="img-fluid">
                      <div class="row mt-2">
                        <div class="col-md-12">
                            <h5><strong>{{ $produk->nama }}</strong></h5>
                            <h5>Rp. {{ number_format($produk->harga) }}</h5>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12">
                            <a href="{{ route('produk.detail', $produk->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>

    </section>
</div>