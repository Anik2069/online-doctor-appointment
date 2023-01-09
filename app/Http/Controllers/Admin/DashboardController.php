<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __invoke()
    {

        $print_data = DB::table('PATN_APPOINTMENT')->limit(100)->get();
        dd($print_data);
        return view("admin.layouts.pages.dashboard");
    }
}
