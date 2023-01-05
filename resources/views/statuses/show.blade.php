@extends('layouts.not_logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $title }}</h1>
  @forelse($users as $user)
  {{$user->name}}：<b>{{$user->status}}</b>　<span>({{$user->updated_at}})</span><br>
  @empty
  ユーザーはいません
  @endforelse
@endsection