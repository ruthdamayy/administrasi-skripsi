<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class JadwalSemhas extends Model
{
    use HasFactory;

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_semhas'])
                ->translatedFormat('l, d F Y');
    }
}
