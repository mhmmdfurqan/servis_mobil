<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jabatan extends Model
{
    use HasFactory;

    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Petugas::class);
    }
}
