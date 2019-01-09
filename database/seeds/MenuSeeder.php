<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menus')->insert([
        'menu_url' => '#',
        'menu_name' => 'SETTINGS',
        'menu_icon' => 'fa fa-users',
        'menu_order' => 1,
      ]);

      DB::table('menus')->insert([
        'menu_url' => 'menu',
        'menu_parent_id' => 1,
        'menu_name' => 'MENU',
        'menu_icon' => 'fa fa-users',
        'menu_order' => 2,
      ]);

      DB::table('menus')->insert([
        'menu_parent_id' => 1,
        'menu_url' => 'config_menu',
        'menu_name' => 'CONFIG MENU',
        'menu_icon' => 'fa fa-users',
        'menu_order' => 3,
      ]);

    }
}
