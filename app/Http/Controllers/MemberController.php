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

    public function edit(){
        return view('member.edit');
    }
}
