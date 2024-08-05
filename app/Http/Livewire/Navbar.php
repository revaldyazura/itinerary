<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Kota;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    
    public $jumlah = 0;

    protected $listeners = [
        'masukKeranjang' => 'updateKeranjang'
    ];

    public function updateKeranjang()
    {
        if (Auth::user()) {
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) {
                $this->jumlah = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            } else {
                $this->jumlah = 0;
            }
        }
    }

    public function mount()
    {
        if (Auth::user()) {
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($pesanan) {
                $this->jumlah = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            } else {
                $this->jumlah = 0;
            }
        }
    }

    public function render()
    {
        return view('livewire.navbar', [
            'kotas' => Kota::all(),
            'jumlah_pesanan' => $this->jumlah,
        ]);
    }

    /**
     * @return mixed
     */
    public function getListerners()
    {
        return $this->listerners;
    }

    /**
     * @param mixed $listerners 
     * @return self
     */
    public function setListerners($listerners): self
    {
        $this->listerners = $listerners;
        return $this;
    }
}