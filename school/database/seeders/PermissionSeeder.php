<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permission::create(['name' => 'view students']);
        Permission::create(['name' => 'view subjects']);
        Permission::create(['name' => 'view staff']);
        Permission::create(['name' => 'view class names']);

        $role = Role::findByName('admin');

        $role->givePermissionTo([
            'view students',
            'view subjects',
            'view staff',
            'view class names',
        ]);
    }
}
