<?php

namespace App\Http\Livewire;

use App\Kota;
use App\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class ProdukKota extends Component
{
    use WithPagination;

    public $search, $kota;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($kotaId){
        $kotaDetail = Kota::find($kotaId);
        
        if($kotaDetail){
            $this->kota = $kotaDetail;
        }
    }
    
    
    public function render()
    {
        if($this->search){
            $produks = Produk::where('kota_id', $this->kota->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(4);
        }
        else{
            $produks = Produk::where('kota_id', $this->kota->id)->paginate(4); 
        }
        
        return view('livewire.produk-index',[
            'produks' => $produks,
            'title' => 'Kota '.$this->kota->nama
        ]);
    }
}