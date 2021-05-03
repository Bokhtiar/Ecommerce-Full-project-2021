<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function about(){
        return view('about');
    }


    public function quote(){
        return view('instant_quote');
    }

    public function client_say(){
        return view('client_say');
    }


    public function service(){
        return view('our_service');
    }


    public function why_chose_us(){
        return view('why_choice_us');
    }
}


