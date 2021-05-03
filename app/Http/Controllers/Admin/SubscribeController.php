<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index(){
        $Subscribes = Subscribe::all();
        return view('Admin.Subsribe',compact('Subscribes'));
    }
}
