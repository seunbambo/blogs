<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Visitor';
        $user->email = 'visitor@log.com';
        $user->password =bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@log.com';
        $admin->password =bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
