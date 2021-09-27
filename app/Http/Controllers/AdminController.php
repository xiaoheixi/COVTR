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
    public function addLockedDownLocation(){
        $lockedDownLocation = DB::table('locations')
        ->insert([
            'location' => 'New Location', 'days' => 'New Days'
        ]);
    }
    public function modifyLockedDownLocation(){
        $lockedDownLocation = DB::table('locations')
        ->where('id', '=', 15)
        ->update([
            'location' => 'Modified Location', 'days' => 'Modified Days'
        ]);
    }
    public function deleteLockedDownLocation(){
        $lockedDownLocation = DB::table('locations')
        ->where('id', '=', 15)
        ->delete();
    }
}
