<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  
    public function create(){
        return view('backend.manage-web.menus.add');
    }
    public function  menu(){
        return view('backend.manage-web.menus.menu');

    }
}
