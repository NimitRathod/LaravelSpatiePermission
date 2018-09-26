<?php

use Illuminate\Database\Seeder;
// use App\Http\Controllers\Custom\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $permissions = [
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'role-list',
           'role-create',
           'role-edit',
           'role-delete'
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }

        // All Permission
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        // Admin
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('user-list role-list');

        // Student
        $role = Role::create(['name' => 'student']);
        // $role->givePermissionTo(Permission::all());
        
        // Guardian
        $role = Role::create(['name' => 'guardian']);

        // Coach
        $role = Role::create(['name' => 'coach']);
    }
}
