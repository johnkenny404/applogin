<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applogin;

class ApploginController extends Controller
{
    public function form(){
        return view('form');
    }

    public function Createprofile(request $request){
        $request->validate([
        "image_upload" =>"image|nullable|max:2048",
        "fullname" => "required",
        "age" => "required",
        "location" => "required",
        "experience" => "required",
        "degree" => "required"
        ]);

        Applogin::create($request->All());

        return redirect()->route('dashboard')->with('message' , 'Profile Created successfully');

    }
}
