<?php

namespace Database\Seeders;

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
            'name' => 'Daniel',
            'email' => 'arsdaniel63@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user -> assignRole('santri');
        $user->givePermissionTo('santri-baru');

        $user = User::create([
            'name' => 'Munir',
            'email' => 'misbachulmunir@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $user -> assignRole('santri');
        $user->givePermissionTo('santri-baru');
    }
}
