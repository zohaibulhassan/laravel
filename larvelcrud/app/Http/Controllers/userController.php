<?php

namespace App\Http\Controllers;
use App\Models\adduser;
use Illuminate\Http\Request;
use function Sodium\add;

class userController extends Controller
{
    public function addcontact(request $request){
        $obj = new adduser();
        $obj->full_name = $request->full_name;
        $obj->occupation = $request->occupation;
        $obj->phone_number = $request->phone_number;
        $obj->address = $request->address;
        $obj->save();
     return redirect(route('/'))->with('msg','contact added sucessfully');
    }

    public function allrecords(){
        $data = adduser::all();
        return view('contact',compact('data'));
    }

    public function deleterecords($id){
        adduser::find($id)->delete();
        return redirect(route('contact'))->with('msg','contact delete sucessfully');
    }

    public function edit($id){
       $data = adduser::find($id);
       return view('edit',compact('data'));
    }

    public function updaterecord(request $request,$id){
        $obj = adduser::find($id);
        $obj->full_name = $request->full_name;
        $obj->occupation = $request->occupation;
        $obj->phone_number = $request->phone_number;
        $obj->address = $request->address;
        $obj->save();
        return redirect(route('contact'))->with('msg','record updated sucessfully');
    }

}

