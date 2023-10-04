<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class BimbinganSemhas extends Model
{
    use HasFactory;
    protected $table = 'bimbingan_semhas';
    // false timestamp
    public $timestamps = false;
}
