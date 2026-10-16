<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //画面の表示
    public function top(){
        $membersdata = Member::all();
        return view('member.top',[
            'membersdata' => $membersdata,
        ]);
    }

    public function entry(){
        return view('member.entry');
    }

    public function memberEntry(Request $request){
        //新しくレコードを作成する
        $memberdata = new Member();
        $memberdata->name = $request->name;
        $memberdata->phone = $request->phone;
        $memberdata->email = $request->email;
        $memberdata->save();

        return redirect('/top');

    }

    public function edit(){
        return view('member.edit');
    }
}
