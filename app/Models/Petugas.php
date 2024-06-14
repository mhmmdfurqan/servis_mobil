<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Petugas extends Model
{
    use HasFactory;

    public function jabatans(): HasOne
    {
        return $this->hasOne(Jabatan::class, 'id','jabatan_id');
    }
}
