<?php

use App\User;
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
        // $this->call(UserSeeder::class);
        $user = User::Create([
            'name'=>'Nabin',
            'email'=>'giri.nabin1994@gmail.com',
            'password'=>bcrypt('password')
        ]);
        $user->roles()->create([
            'name'=>'SUPERADMIN'

        ]);
        $user->municipality()->create([
            'municipalityName'=>'Kolhabi',
            'municipalityDistrict'=>'Bara',
            'provinence'=>'Provinence2'
        ]);
    }
}
