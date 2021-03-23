<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function admin(){
        return view('menus.admin');
    }
    public function create(){
        return view('menus.add');
    }
}
