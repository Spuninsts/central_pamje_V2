<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return view('frontend.index');
        //return view('admin.admin-login');
    } //End function

    public function UserLogin(){
        //resources-view-folder-filename
            return view('registered.default-login');
    }// End Method

    public function UserRegister(){
        //resources-view-folder-filename
            return view('registered.default-form');
    }// End Method

}
