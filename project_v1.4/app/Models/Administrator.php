<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Administrator extends Model
{

    use SoftDeletes;
    
    protected $fillable = ['nama','alamat','nomorhp','email','role'];
    protected $table = 'administrators';
    
    use HasFactory;
}
