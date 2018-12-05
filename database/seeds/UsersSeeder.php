<?php

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
        DB::table('users')->insert([
    		'name'=> 'admin',
    		'email'=> 'admin@test.com',
    		'password'=> bcrypt('123456'),
    	]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@test.com',
            'password' => bcrypt('123456'),

        ]);        
        //
    }
}
