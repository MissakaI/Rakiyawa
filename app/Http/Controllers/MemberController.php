<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function get($id){
        $mem = Member::find($id);
        return view('user-edit',['user'=>$mem]);
    }

    public function update(Request $request){
        $member = Member::find($request->id);
        $member->first_name = $request->firstname;
        $member->last_name = $request->lastname;
        $member->email = $request->email;
        $member->address_lane = $request->address_lane;
        $member->address_city = $request->address_city;
        $member->username = $request->username;
        $member->password = $request->new-pass;
        $member->biography = $request->Biography;
        $member->website = $request->Website;
        $member->contact_info = '{"number":"'.$request->mbnum.'"}';
        $member->save();
    }

    public function delete($id)
    {
        $mem = Member::find($id);
        $mem->delete();
        return redirect('/');
    }
}
