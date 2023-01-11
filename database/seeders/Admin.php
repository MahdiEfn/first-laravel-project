<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'Admin@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('password'),
            'is_admin'=>1,
            'has_permission'=>1

        ]);
    
        

    }
}
