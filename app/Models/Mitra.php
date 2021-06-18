<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $fillable = ['id','username','password','nama','alamat','nomorhp','category','email'];
    protected $table = 'mitras';

    use HasFactory;
}
