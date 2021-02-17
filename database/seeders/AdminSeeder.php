<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = Admin::create([
            'name' => 'daniel ariesta',
            'email' => 'arsdaniel63@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $admin -> assignRole('admin');

        
        $admin = Admin::create([
            'name' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $admin -> assignRole('guru');


        
     

    }
}
