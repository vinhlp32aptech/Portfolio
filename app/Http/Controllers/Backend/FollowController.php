<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function index(){
        return view('backend.manage-user.user.follow');
    }
}
