<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Servis extends Model
{
    use HasFactory;

    public function customers(): HasOne
    {
        return $this->hasOne(Customer::class, 'id','customer_id');
    }

    public function petugas(): HasOne
    {
        return $this->hasOne(Petugas::class, 'id','petugas_id');
    }

    public function montir(): HasOne
    {
        return $this->hasOne(Montir::class, 'id','montir_id');
    }

    public function pembayaran(): BelongsTo
    {
        return $this->hasMany(Pembayaran::class);
    }
}
