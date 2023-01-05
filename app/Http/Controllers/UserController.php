<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //ステータス変更
    public function edit()
    {
        $user = \Auth::user();
        return view('statuses.edit', [
          'title' => 'ステータス変更',
          'user'=>$user,
        ]);
    }
    public function update(UserRequest $request)
    {
        $user = \Auth::user();
        $user->update($request->only(['status']));
        session()->flash('success', 'ステータスを変更しました');
        return redirect()->route('statuses.show');
    }
    
    //ログイン制限
    public function __construct()
    {
        $this->middleware('auth');
    }
}
