<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applogin;
use Illuminate\Support\Facades\Auth;

class ApploginController extends Controller
{
    public function form(){
        return view('form');
    }
    public function dashboard(){
        // $user = Auth::user()->with('applogin')->first();
        // $user = \App\Models\User::with('applogin')->find( Auth::id() );

        $user = Auth::user();
        $applogin = $user->applogin;

        // dd($user);

        //  $applogin = $user;


        return view('dashboard')->with([
            'user' => $user,
            'applogin' => $applogin,
        ]);
    }

    public function Createprofile(Request $request){
        $request->validate([
        "image" =>"required|mimes:jpg,png,jpeg|max:1999",
        "fullname" => "required",
        "age" => "required",
        "location" => "required",
        "experience" => "required",
        "degree" => "required",
        ]);

        //image upload
        // $newImageName = time(). '-'. $request->name.'.'.
        // $request->image->extension();

        // $request->image->move(public_path('images'), $newImageName);
         $user = Auth::user();

        $applogin = $user->applogin()->create($request->all());

        $user_id=auth()->user()->id;

        if ($request->hasFile('image')){
            $logoname = 'logo_'. $user_id . time() .'.'.$request->image->extension();
            $request->image->move(public_path('images'),  $logoname);

        }
        $applogin->update([
            'image'=> $logoname
        ]);


        $user = Auth::user();

        $merged_array = array_merge( $request->all(), [  "user_id" => $user->id] );

        Applogin::create($merged_array );

         return redirect()->route('dashboard')->with('message' , 'Profile Created successfully');

    }

}
