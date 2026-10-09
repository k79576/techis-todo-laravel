<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberListController extends Controller
{
    public function index(){
    //userDBからデータを取得
    $usersdata = User::all();

        return view('members.index',[
            'usersdata' => $usersdata,
        ]);
    }
}
