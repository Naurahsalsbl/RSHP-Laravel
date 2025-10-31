<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;

    protected $table = 'pemilik';
    protected $primaryKey = 'idpemilik';
    protected $fillable = ['idpemilik', 'no_wa', 'alamat', 'iduser'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
