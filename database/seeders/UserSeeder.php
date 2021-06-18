<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{
    public function run() {
        User::truncate();
        User::create([
            
        ]);
    }
}