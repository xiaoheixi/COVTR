<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class AdminController extends Controller
{
    public function index(){
        $numberOfLockedDownLocations = DB::table('locations')
        ->count();
        $numberOfUsers = "Number of Users";
        $locations = DB::table('locations')
        ->get();
        return view('admin.adminHomePage', compact('numberOfLockedDownLocations', 'numberOfUsers', 'locations'));
    }
}
