<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'name' => 'admin',
            'guard_name' => 'admin' 
        ]);

        
        Role::create([
            'name' => 'guru',
            'guard_name' => 'admin' 
        ]);
        
        Role::create([
            'name' => 'santri',
            'guard_name' => 'web' 
        ]);

        Permission::create(['name' => 'santri-baru']);
        Permission::create(['name' => 'santri-aktif']);
        Permission::create(['name' => 'santri-alumni']);
      
    }
}
