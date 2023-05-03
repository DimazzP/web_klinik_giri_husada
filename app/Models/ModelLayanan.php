<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelLayanan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'daftar_id';
    protected $table = 'daftar_layanan';

    protected $fillable = [
        'daftar_tanggal',
        'daftar_antrian',
        'daftar_idpasien',
        'daftar_idjenis',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_idpasien');
    // }
}
