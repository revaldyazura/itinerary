<?php

namespace App\Http\Livewire;

use App\Produk;
use App\Kota;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'produks' => Produk::take(4)->get(),
            'kotas' => Kota::all()
        ]);
    }
}