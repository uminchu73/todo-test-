{{-- レイアウトファイルの読み込み --}}
@extends('layouts/app')

    @section('css')
        {{-- index.cssの読み込み --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    @endsection

@section('content')
    {{-- フラッシュメッセージ --}}
    <div class="todo-alert">
        <div class="todo-alert__success">
            Todoを作成しました
        </div>
        <div class="todo-alert__error">

        </div>

        {{-- 新規作成 --}}
        <form action="" class="form">
            @csrf
            {{-- 入力欄 --}}
            <input type="text" class="form-box">
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
                <tr class="todo-table__row">
                    <td class="todo-table__item">
                        {{-- Todo編集フォーム --}}
                        <form action="" class="update-form">
                            <div class="update-form__item">
                                {{-- 入力欄 --}}
                                <input type="text" class="update-form__box" name="content" value="test">
                            </div>
                            {{-- 更新ボタン --}}
                            <button class="update-btn__submit" type="submit">更新</button>
                        </form>
                    </td>
                    <td class="todo-table__item">
                        {{-- Todo削除フォーム --}}
                        <form action="" class="delete-form">
                            {{-- 削除ボタン --}}
                            <button class="delete-btn__submit" type="submit">削除</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection