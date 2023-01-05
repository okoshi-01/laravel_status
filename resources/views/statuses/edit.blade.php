@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  <form method="POST" action="{{ route('users.update') }}">
      @csrf
      @method('patch')
      <div>
          <label>
            ユーザー名：{{$user->name}}
          </label><br>
          <label>
            ステータス：
            <input type="text" name="status" value="{{ $user->status }}">
          </label>
      </div>
 
      <input type="submit" value="更新">
  </form>

@endsection