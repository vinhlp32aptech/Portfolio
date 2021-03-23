<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialwebController extends Controller
{
    public function admin(){
       return view('socialweb.admin');
    }
    public function create(){
        return view('socialweb.add');
    }
}
