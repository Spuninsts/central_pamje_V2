<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return view('frontend.index');
        //return view('admin.admin-login');
    } //End function

}
