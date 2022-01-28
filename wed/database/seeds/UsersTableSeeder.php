<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //olumid
        //Olumide1234@  --- uppercase O
       User::create([
            'role_id'=>1,
            'active'=>1,
            'name'=>'zang',
            'username'=>'CIzang',
            'email'=>'zang@gmail.com',
            'password'=>bcrypt('zang4321'),
            'remember_token'=>str_random(10),

        ]);
    }
}
