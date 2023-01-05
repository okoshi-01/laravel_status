@extends('layouts.default')
 
@section('header')
<header>
    <ul class="header_nav">
        <li>
          <a href="{{ route('statuses.show') }}">
            一覧
          </a>
        </li>
        <li>
          <a href="{{ route('users.edit') }}">
            ステータス変更
          </a>
        </li>
        <li>
          <a href="{{ route('register') }}">
            ユーザー登録
          </a>
        </li>
        <li>
          <a href="{{ route('statuses.create') }}">
            ステータス追加
          </a>
        </li>
        <li>ログアウト</li>
    </ul>
</header>
@endsection