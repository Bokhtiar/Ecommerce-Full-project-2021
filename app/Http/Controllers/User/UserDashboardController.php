<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function create(){
        return "user";
    }

    public function about_us(){
        return view('User.about');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
