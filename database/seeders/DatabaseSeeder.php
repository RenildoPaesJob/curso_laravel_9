<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //chamando a functio p/ criar um novo usuario
        //cmd = php artisan db:seed
        $this->call([
            UsersSeeder::class,
        ]);
    }
}
