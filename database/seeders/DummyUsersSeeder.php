<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'kepala',
                'email'=>'kepala@gmail.com',
                'role'=>'Kepala',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'kel_bidang',
                'email'=>'kel_bidang@gmail.com',
                'role'=>'kel_bidang',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'seketaris',
                'email'=>'seketaris@gmail.com',
                'role'=>'seketaris',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'seksi',
                'email'=>'seksi@gmail.com',
                'role'=>'seksi',
                'password'=>bcrypt('123456')
            ],

        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
