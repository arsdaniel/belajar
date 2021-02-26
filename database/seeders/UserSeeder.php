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
            'name' => 'Daniel',
            'email' => 'arsdaniel63@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            
        ]);

        StatusUser::create([
            'user_id' => $user['id'],
            'status' => '1',
        ]);

        $user -> assignRole('santri');
        $user->givePermissionTo('santri-baru');

        $user = User::create([
            'name' => 'Munir',
            'email' => 'misbachulmunir@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        StatusUser::create([
            'user_id' => $user['id'],
            'status' => '1',
        ]);

        $user -> assignRole('santri');
        $user->givePermissionTo('santri-baru');
    }
}
