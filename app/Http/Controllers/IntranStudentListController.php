<?php

namespace App\Http\Controllers;

use App\Models\IntranStudentList;
use Illuminate\Http\Request;

class IntranStudentListController extends Controller
{
    //
 
    public function store(Request $request)
    {
         
        $request->validate([
            // 'image'=> ''
            "name"=> "required",
            "email" => "required|email",
            "phone"=> "required", 
            "bio"=> "requird", 
        ]);

        IntranStudentList::create($request->all());
        return redirect()->route('ourstudentlist')->with("success","");
    }
}
