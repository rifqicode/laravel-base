<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersLaratrust extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     DB::table('roles')->insert([
       'name' => 'admin',
       'display_name' => 'admin',
       'description' => 'admin',
     ]);

     DB::table('roles')->insert([
        'name' => 'users',
        'display_name' => 'users',
        'description' => 'users',
      ]);


    $admin = User::create([
        'name' => 'admin',
        'email' => 'admin@developer.com',
        'password' => bcrypt('admindeveloper'),
        'is_active' => 1,
    ]);

    $role = Role::where('name', 'admin')->first();
    $admin->attachRole($role);

    $users = User::create([
        'name' => 'users',
        'email' => 'users@developer.com',
        'password' => bcrypt('usersdeveloper'),
        'is_active' => 1,
    ]);

    $role = Role::where('name', 'users')->first();
    $users->attachRole($role);

    }
}
