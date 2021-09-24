<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $numberOfLockedDownLocations = DB::table('locked_down_locations')
        ->count();
        $numberOfUsers = "Number of Users";
        $LockedDownLocations = DB::table('locked_down_locations')
            ->get();
        dd($numberOfLockedDownLocations);
        dd($LockedDownLocations);
        //return view('admin.adminHomePage', compact('numberOfLockedDownLocations', 'numberOfUsers'));
    }
}
