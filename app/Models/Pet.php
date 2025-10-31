<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet';
    protected $primaryKey = 'idpet';
    protected $fillable = ['idpet', 'nama', 'tanggal_lahir', 'warna_tanda', 'jenis_kelamin', 'idpemilik', 'idrashewan'];

     public function pemilik()
    {
        return $this->belongsTo(pemilik::class, 'idpemilik');
    }

    public function rasHewan()
    {
        return $this->belongsTo(rasHewan::class, 'idras_hewan');
    }

}