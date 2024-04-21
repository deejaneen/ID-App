<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('home');
    }
    public function createid(){
        return view('createid');
    }
    public function adminpanel(){
        return view('adminpanel');
    }
}
