<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class NilaiUjiProgram extends Model
{
    use HasFactory;

    public function getTanggalAttribute()
    {
        return Carbon::parse($this->attributes['tanggal'])->translated('l, d F Y');
    }

}
