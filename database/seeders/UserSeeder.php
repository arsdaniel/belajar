<?php

namespace Database\Seeders;

use App\Models\StatusUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'no_pendaftaran' => 'WS2021020001',
            'name' => 'Daniel',
            'nama_belakang' => 'Ariesta',
            'email' => 'arsdaniel63@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            
        ]);

        

        $user -> assignRole('santri');
        $user->givePermissionTo('santri-baru');

        $user = User::create([
            'no_pendaftaran' => 'WS2021020002',
            'name' => 'Misbachoel',
            'nama_belakang' => 'Munir',
            'email' => 'misbachulmunir@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        

        $user -> assignRole('santri');
        $user->givePermissionTo('santri-baru');
    }
}
