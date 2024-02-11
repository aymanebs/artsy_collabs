<?php

namespace App\Http\Controllers;

use App\Models\Art_project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects=Art_project::get();
        return view('home',compact('projects'));
    }
}
