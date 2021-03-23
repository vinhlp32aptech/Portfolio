<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function admin(){
     return view('footer.admin');
    }

    public function create(){
        return view('footer.add');
    }
}
