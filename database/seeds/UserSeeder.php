<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user=  \App\User::create([
            'name' => 'Luis Madrid',
            'email' => 'lmadrid0289@gmail.com',
            'password' => bcrypt('password')
        ]);
        $user->restaurants()->create([
            'name' => 'Highway Star',
            'location' => 'Bhuvandas Road, NH14 Dadar, Mumbai',
        ]);

        $user->restaurants()->create([
            'name' => 'Mainland China',
            'location' => 'Platinum Tech Park Vashi, Navi Mumbai',
        ]);

        $user->restaurants()->create([
            'name' => 'Mukesh Lunch Home',
            'location' => 'Sai Balaji Tower, Airoli Navi Mumbai',
        ]);

    }
}
