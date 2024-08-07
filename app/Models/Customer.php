<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    public function servis(): BelongsTo
    {
        return $this->belongsTo(Servis::class);
    }

    public function pembayaran(): BelongsTo
    {
        return $this->hasMany(Pembayaran::class);
    }
}
