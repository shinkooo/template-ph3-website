<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.users', ['users' => $users]);
    }

    public function show($id)
    {
        // ここにユーザーの詳細表示に関するロジックを追加
        // たとえば、指定された $id のユーザー情報を取得するなど

        return view('users.home.webtop'); // または適切なビューを指定
    }
}




