<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersLaratrust::class);
        $this->call(MenuSeeder::class);
        $this->call(AccessesSeeder::class);
        // $this->call(LaratrustSeeder::class);
    }
}
