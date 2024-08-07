<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pembayaran extends Model
{
    use HasFactory;

    public function servis(): HasOne
    {
        return $this->hasOne(Servis::class, 'id','servis_id');
    }

    public function customers(): HasOne
    {
        return $this->hasOne(Customer::class, 'id','customer_id');
    }
}
