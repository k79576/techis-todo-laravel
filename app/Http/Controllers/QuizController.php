<?php

namespace App\Http\Controllers;

use App\Http\Controllers\QuizController;
use Illuminate\Http\Request;
use App\Models\Quiz;
use Illuminate\support\Facades\Auth;

class QuizController extends Controller
{
    //テスト画面の表示
    public function show(){
        $quizzes = \App\Models\Quiz::get();
        
        return view('question.quiz3',compact('quizzes'));
    }   //compact('quizzes') = ['quizzes' => $quizzes,]と同義

    public function quiz4_show(){
        $fruits = "orange";
        
        return view('question.quiz4',compact('fruits'));
    }

    public function login(Request $request){
        //セッションの削除
        $request->session()->flush();
        //ログインユーザーの設定
        $user_info = array(
            'email' => 'techis@test',
            'password' => null,
        );
        //ログインチェック
        if (Auth::attempt($user_info)) {
            //ログイン成功
            return view('question.quiz5');
        }
        //ログイン失敗
        return view('question.quiz5');
    }

    public function show_2(){
        return view('question.quiz7');
    }

    public function quiz7_show(){
        //first()で抽出対象データのうち初めの１件のみ取得
        $quiz = Quiz::first();
        return view('question.quiz7', compact('quiz'));
    }


}
