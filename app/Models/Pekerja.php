<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'pekerja_id';
    protected $table = 'pekerja';

    protected $fillable = [
        'pekerja_nama',
        'pekerja_nowa',
        'pekerja_alamat',
        'pekerja_foto',
        'pekerja_idkategori'
    ];
}
