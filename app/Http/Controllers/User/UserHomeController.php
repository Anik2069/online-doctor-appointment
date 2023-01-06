<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    //
    public function userhome(){
        return view('frontend.layouts.pages.home');
    }
}
