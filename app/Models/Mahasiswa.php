<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    protected $fillable = [
        'nama',
        'nim',
        'angkatan',
        'foto',
        'status',
    ];

    protected $primaryKey = 'nim';


}
