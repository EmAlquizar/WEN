<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new App\User();
	   $user->password = Hash::make('pass');
	   $user->email = 'test.com';
	   $user->name = 'My Name';
	   $user->save();
    }
}