<?php

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
        \App\User::create([
            'name' => 'Luis Madrid',
            'email' => 'lmadrid0289@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
