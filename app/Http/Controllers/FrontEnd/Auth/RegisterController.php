<?php

namespace App\Http\Controllers\FrontEnd\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('frontend.auth.register');
    }
}
