<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function footer(){
     return view('backend.manage-web.footers.footer');
    }

    public function create(){
        return view('backend.manage-web.footers.add');
    }
}
