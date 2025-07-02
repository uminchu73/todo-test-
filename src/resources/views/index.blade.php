{{-- レイアウトファイルの読み込み --}}
@extends('layouts/app')

    @section('css')
        {{-- index.cssの読み込み --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    @endsection

@section('content')
    {{-- フラッシュメッセージ --}}
    <div class="todo-alert">
        {{-- 成功メッセージ --}}
        @if (session('message'))
            <div class="todo-alert__success">
                {{ session('message')}}
            </div>
        @endif
        {{-- エラーメッセージ --}}
        @if ($errors->any())
            <div class="todo-alert__error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- 新規作成 --}}
        <div class="todo-content">
            <form action="/todos" class="form" method="post">
                @csrf
                {{-- 入力欄 --}}
                <input type="text" class="form-box" name="content" value="{{ old('content') }}">
                {{-- 作成ボタン --}}
                <button class="create-btn" type="submit">作成</button>
            </form>

            {{-- Todo一覧表示 --}}
            <div class="todo-table">
                <table class="todo-table__inner">
                    <tr class="todo-table__row">
                        {{-- 見出し --}}
                        <th class="todo-table__header">Todo</th>
                    </tr>
                    {{-- Todo表示 --}}
                    @foreach ($todos as $todo)
                    <tr class="todo-table__row">
                        <td class="todo-table__item">
                            {{-- Todo編集フォーム --}}
                            <form action="/todos/update" method="post" class="update-form">
                                @csrf
                                @method('PATCH')
                                <div class="update-form__item">
                                    {{-- 入力欄 --}}
                                    <input type="text" class="update-form__box" name="content" value="{{ $todo['content'] }}">
                                    {{-- 更新するTodoのIDを送る --}}
                                    <input type="hidden" name="id" value="{{ $todo['id'] }}">
                                </div>
                                {{-- 更新ボタン --}}
                                <button class="update-btn__submit" type="submit">更新</button>
                            </form>
                        </td>
                        <td class="todo-table__item">
                            {{-- Todo削除フォーム --}}
                            <form action="/todos/delete" class="delete-form" method="post">
                                @csrf
                                @method('DELETE')
                                {{-- 削除するTodoのIDを送る --}}
                                <input type="hidden" name="id" value="{{ $todo['id'] }}">
                                {{-- 削除ボタン --}}
                                <button class="delete-btn__submit" type="submit">削除</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection