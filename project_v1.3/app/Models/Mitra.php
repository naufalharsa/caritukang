<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mitra extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['nama','alamat','nomorhp','email'];
    use HasFactory;
}
