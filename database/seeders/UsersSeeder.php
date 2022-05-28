<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //passando os valores dos campos para a criação de um usuário
        //para criar um seed => php artisan make:seeder UsersSeeder
        User::create([
            'name'      => 'Renildo Paes',
            'email'     => 'renildopaeslandim@gmail.com',
            'password'  => bcrypt('12345678'),
        ]);
    }
}
