<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Nana Suryana';
        $user->email = 'nanasuryana@stmik.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_user);
        $admin = new User();
        $admin->name = 'Nana Suryana';
        $admin->email = 'admin@stmik.com';
        $admin->password = bcrypt('password_admin');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
