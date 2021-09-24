<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $numberOfLockedDownLocations = "Number of Locked Down Locations";
        $numberOfUsers = "Number of Users";
        return view('admin.adminHomePage', compact('numberOfLockedDownLocations', 'numberOfUsers'));
    }
}
