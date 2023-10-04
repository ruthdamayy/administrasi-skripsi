<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Exum extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'exums';

    protected $fillable = [
        'nama_exum',
        'nim',
        'file_exum',
        'status'
    ];
}
