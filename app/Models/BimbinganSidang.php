<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BimbinganSidang extends Model
{
    use HasFactory;
    protected $table = 'bimbingan_sidang';
    // false timestamp
    public $timestamps = false;
}
