<?php

namespace App\Http\Controllers;

use App\Models\Art_project;
use App\Models\Partner;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){

        $partners=Partner::get();
        $projects=Art_project::all();
        return view('application',compact('partners','projects'));
    }

}
