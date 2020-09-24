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
            'email'=>'speedupcoders@gmail.com',
            'password'=>bcrypt('password')
        ]);
        $user->roles()->create([
            'name'=>'SUPERADMIN'

        ]);
        $user->municipality()->create([
            'municipalityNameInNepali'=>'काठमाडौं नगरपालिका',
            'municipalityDistrictInNepali'=>'काठमाडौं ',
            'provinceInNepali'=>'वाग्मती प्रदेश',
            'municipalityNameInEnglish'=>'Kathmandu Municipality',
            'municipalityDistrictInEnglish'=>'Kathmandu',
            'provinceInEnglish'=>'Bagmati Province'
        ]);
    }
}
