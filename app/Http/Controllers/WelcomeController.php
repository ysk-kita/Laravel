<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()  // 追加
    {
        return view("contact");  // (a) view 関数を使わず、テキストを返してみる
    }

}
