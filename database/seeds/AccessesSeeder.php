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
        'menu_id' => 1,
        'user_id' => 1
      ]);

      DB::table('accesses')->insert([
        'menu_id' => 2,
        'user_id' => 1
      ]);

      DB::table('accesses')->insert([
        'menu_id' => 3,
        'user_id' => 1
      ]);
    }
}
