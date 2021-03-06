<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['id','username','password','nama','alamat','nomorhp','email'];
    protected $table = 'customers';

    use HasFactory;
}
