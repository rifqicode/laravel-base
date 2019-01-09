<?php

use Illuminate\Database\Seeder;
use App\Access;

class AccessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('accesses')->insert([
        'menus_id' => 1,
        'users_id' => 1
      ]);

      DB::table('accesses')->insert([
        'menus_id' => 2,
        'users_id' => 1
      ]);

      DB::table('accesses')->insert([
        'menus_id' => 3,
        'users_id' => 1
      ]);
    }
}
