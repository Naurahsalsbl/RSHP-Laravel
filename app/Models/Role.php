<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Role extends Model
{
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'idrole';
    protected $fillable = ['idrole', 'nama_role'];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

}