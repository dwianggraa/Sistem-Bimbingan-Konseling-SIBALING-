<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
             ['username' => 'dwianggraa', 'level' => 'guest', 'email'=> 'dwianggraa@gmail.com', 'password' =>bcrypt('123456789') ],
            ['username' => '205150600111003', 'level' => 'guest', 'email'=> 'ekaanda@gmail.com@gmail.com', 'password' =>bcrypt('123456789') ],

        ];
        foreach( $data as $value)
       
       User::insert([
        'username' => $value['username'],
        'level' => $value['level'],
        'email' => $value['email'],
        'password' => $value['password'],
        'remember_token' => Str::random(60),
        
       ]);       
    }
}
