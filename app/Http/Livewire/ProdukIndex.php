<?php

namespace App\Http\Livewire;

use App\Produk;
use Livewire\Component;
use Livewire\WithPagination;

class ProdukIndex extends Component
{
    use WithPagination;

    public $search;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    
    public function render()
    {
        if($this->search){
            $produks = Produk::where('nama', 'like', '%'.$this->search.'%')->paginate(4);
        }
        else{
            $produks = Produk::paginate(4); 
        }
        
        return view('livewire.produk-index',[
            'produks' => $produks,
            'title' => 'List Produk'
        ]);
    }
}