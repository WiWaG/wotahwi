<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // create permissions from config file
        foreach (config('rolesandpermissions.permissions') as $permission) {
            Permission::create(['name' => $permission]);
        }

        // create roles and assign permissions from config file
        foreach (config('rolesandpermissions.roles') as $role => $permissions) {
            Role::create(['name' => $role])->givePermissionTo($permissions);
        }
    }
}
