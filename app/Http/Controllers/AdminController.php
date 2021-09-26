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
    public function addLockedDownLocation(){
        $lockedDownLocation = DB::table('locked_down_locations')
        ->insert([
            'location' => 'New Location', 'days' => 'New Days'
        ]);
    }
    public function modifyLockedDownLocation(){
        $lockedDownLocation = DB::table('locked_down_locations')
        ->where('id', '=', 15)
        ->update([
            'location' => 'Modified Location', 'days' => 'Modified Days'
        ]);
    }
    public function deleteLockedDownLocation(){
        $lockedDownLocation = DB::table('locked_down_locations')
        ->where('id', '=', 15)
        ->delete();
    }
}
