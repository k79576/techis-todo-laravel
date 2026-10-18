<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    // 一覧画面の表示
    public function top()
    {
        // 全件取得（作成日時の降順にしたい場合は Member::latest()->get() でもOK）
        $membersdata = Member::all();

        return view('members.top', [
            'membersdata' => $membersdata,
        ]);
    }

    // 新規登録画面の表示
    public function entry()
    {
        return view('members.entry');
    }

    // 新規登録処理
    public function memberEntry(Request $request)
    {
        // バリデーション（入力チェック）
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:members,email|max:255',
            'phone' => 'nullable|max:20',
        ]);

        // 新しくレコードを作成する
        $memberdata = new Member();
        $memberdata->name = $request->name;
        $memberdata->phone = $request->phone;
        $memberdata->email = $request->email;
        $memberdata->save();

        return redirect('/top')->with('success', '会員を登録しました。');
    }

    // 編集画面の表示（IDを受け取って対象データを渡す）
    public function edit($id)
    {
        $memberdata = Member::findOrFail($id);

        return view('members.edit', [
            'memberdata' => $memberdata,
        ]);
    }

    // 編集更新処理
    public function memberEdit(Request $request)
    {
        // 対象データの検索
        $memberdata = Member::findOrFail($request->id);

        // バリデーション（自分自身のメールアドレス重複を許容する設定）
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:members,email,' . $memberdata->id,
            'phone' => 'nullable|max:20',
        ]);

        // プロパティの設定と保存
        $memberdata->update([
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);

        return redirect('/top')->with('success', '会員情報を更新しました。');
    }

    // 削除処理
    public function memberDestroy($id)
    {
        // 削除対象のデータを取り出して削除
        $memberdata = Member::findOrFail($id);
        $memberdata->delete();

        return redirect('/top')->with('success', '会員を削除しました。');
    }
}