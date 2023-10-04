<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BimbinganSempro extends Model
{
    use HasFactory;
    protected $table = 'bimbingan_sempro';
    // false timestamp
    public $timestamps = false;
}
