<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    //
    public function project(){
        return view("component.project");
    }
    public function blog(){
        return view("component.blog");
    }
    public function ourteam(){
        return view("component.ourteam");
    }
    public function ourstudentlist(){
        return view("component.internstudentlist");
    }
}
