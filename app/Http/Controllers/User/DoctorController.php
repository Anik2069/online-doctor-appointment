<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function docdashboard(){
        return view('frontend.layouts.pages.docDashboard');
    }
}
