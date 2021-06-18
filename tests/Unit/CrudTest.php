<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Administrator;
use App\Models\Customer;
use App\Models\Mitra;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CrudTest extends TestCase
{
   use DatabaseTransactions;
    public function test_example()
    {
        // $this->assertTrue(true);
        $administrator = Administrator::create(["nama"=>"Fitriono Arya Riski", "alamat"=> "Jl.Tentara Pelajar Bojongbata","nomorhp"=>"085341172222","email"=>"aryariski9a@gmail.com","role"=>"Super administrator"]);
            $this -> assertDatabaseHas('administrators', ["nama"=>"Fitriono Arya Riski","alamat"=> "Jl.Tentara Pelajar Bojongbata","nomorhp"=>"085341172222","email"=>"aryariski9a@gmail.com","role"=>"Super administrator"]);
        
        // $customer = Customer::create(["username"=>"Ghirman","password"=>"ghirman12345","nama"=>"Ahmad Ghirman","alamat"=>"Jl.Merpati II Sukapura Bandung","nomorhp"=>"082343324323","email"=>"ahmadghirman@gmail.com"]);

        //     $this -> assertDatabaseHas('administrators', ["username"=>"Ghirman","password"=>"ghirman12345","nama"=>"Ahmad Ghirman","alamat"=>"Jl.Merpati II Sukapura Bandung","nomorhp"=>"082343324323","email"=>"ahmadghirman@gmail.com"]);
    }
}