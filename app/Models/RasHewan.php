<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RasHewan extends Model
{
    use HasFactory;

    protected $table = 'ras_hewan';
    protected $primaryKey = 'idras_hewan';
    protected $fillable = ['idras_hewan', 'nama_ras', 'idjenis_hewan'];

    public function jenis()
    {
        return $this->belongsTo(JenisHewan::class, 'idjenis_hewan');
    }

}
