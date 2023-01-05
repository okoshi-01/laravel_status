<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StatusController extends Controller
{
    // 一覧
    public function show()
    {
        $users = User::all();
        return view('statuses.show', [
          'title' => '一覧',
          'users' => $users,
        ]);
    }
}
