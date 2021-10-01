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
        $numberOfUsers = DB::table('users')
        ->count();
        $locations = DB::table('locations')
        ->get();
        $users = DB::table('users')
        ->get();
        return view('admin.adminHomePage', compact('numberOfLockedDownLocations', 'numberOfUsers', 'locations', 'users'));
    }
}
