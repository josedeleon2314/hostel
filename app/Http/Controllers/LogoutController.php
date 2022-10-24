<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class LogoutController extends Controller
{
    //
    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->to('/login');
    }
}
