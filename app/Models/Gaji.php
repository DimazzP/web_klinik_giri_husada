<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $primaryKey = 'gaji_id';

    protected $table = 'gaji';

    public $timestamps = false;

    protected $fillable = [
        'gaji_tanggal',
        'gaji_nominal',
        'gaji_idpekerja',
    ];

    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class, 'gaji_idpekerja', 'pekerja_id');
    }
}
