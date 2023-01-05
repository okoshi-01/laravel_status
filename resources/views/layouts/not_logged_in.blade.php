@extends('layouts.default')
 
@section('header')
<header>
    <ul class="header_nav">
        <li>
          <a href="{{ route('statuses.show') }}">
            一覧
          </a>
        </li>
        @guest
        <li>
          <a href="{{ route('register') }}">
            サインアップ
          </a>
        </li>
        <li>
          <a href="{{ route('login') }}">
            ログイン
          </a>
        </li>
        @endguest
        @auth
        <li>
          <a href="{{ route('users.edit') }}">
            ステータス変更
          </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="ログアウト">
            </form>
        </li>
        @endauth
    </ul>
</header>
@endsection