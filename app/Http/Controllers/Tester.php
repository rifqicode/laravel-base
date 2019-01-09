<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Menu;
use App\Access;

class Tester extends Controller
{
  public function index()
  {

    return json_encode(
      // Access::with('user')->get()
      // User::with('access')->get()
      // Menu::with('children')->get()
    );

  }
}
