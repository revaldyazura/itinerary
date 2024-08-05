<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    public function produks()
    {
        return $this->hasMany(Produk::class, 'kota_id', 'id');
    }
}
