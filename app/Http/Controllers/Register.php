<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Member;

class Register extends Controller
{
    public function reg(Request $request){
       
        return view('register');
     }

     public function store(Request $request){
        
        $member = new Member;
    
        $member->first_name = $request->firstname;
        $member->last_name = $request->lastname;
        $member->email = $request->email;
        $member->address_lane = $request->Address_Lane;
        $member->address_city = $request->Address_City;
        $member->username = $request->username;
        $member->password = $request->password;
        $member->biography = $request->Biography;
        $member->website = $request->Website;
        $member->contact_info = '{"number":"'.$request->Contact_Info.'"}';
        $member->recommendations = '{"recommendation":"no"}';
        $member->profile_picture = " ";
        $member->save();
        
        $data = Member::all();
        dd($data);
        
        
     }

}
