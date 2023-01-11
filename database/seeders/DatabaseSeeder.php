<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
     {
         User::factory(2)->create()->each(function($user){
            $user->articles()->saveMany(Article::factory(2)->make());
         });
       $this->call([
      Admin::class,
      ArticlesTableSeeder::class
       ]);
     }
}
