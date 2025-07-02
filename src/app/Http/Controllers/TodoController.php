<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    //一覧表示
    public function index()
    {
        $todos = Todo::all(); //DBから全Todoを取ってくる

        return view('index', compact('todos')); //indexビューにtodos変数を渡す
    }

    //新規作成
    public function store(TodoRequest $request)
    {
        Todo::create($request->validated()); //バリデーション済みデータを使って新規作成

        return redirect('/')->with('message', 'Todoを作成しました'); //完了メッセージ付きでリダイレクト
    }

    //更新
    public function update(TodoRequest $request)
    {
        $todo = $request->only(['content']); //更新するcontentだけ取り出す
        Todo::find($request->id)->update($todo); //ID指定で対象Todoを探し内容更新

        return redirect('/')->with('message', 'Todoを更新しました'); //完了メッセージ付きでリダイレクト
    }

    //削除
    public function destroy(Request $request)
    {
        Todo::find($request->id)->delete(); //ID指定でTodoを見つけて削除

        return redirect('/')->with('message', 'Todoを削除しました'); //完了メッセージ付きでリダイレクト
    }
}
