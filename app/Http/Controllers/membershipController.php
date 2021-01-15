<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Member;

class membershipController extends Controller
{
    public function membershipinfo(Request $request){
    
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'password'=>'required',
        ]);
        $members=new Member();
       $members->name = $request->name;
       $members->email = $request->email;
       $members->phone = $request->phone;
       $members->gender = $request->gender;
       $members->password = bcrypt($request->password);
       $members->save();
    }

    public function managemember(){
        $members=Member::all();
        return view('admin.member.member-manage',['members'=>$members]);
    }
    public function memberdelete($id){
        $member=Member::find($id);
        $member->delete();
        return redirect('/member/manage')->with('message', 'Member info delete successfully');
    }
}
