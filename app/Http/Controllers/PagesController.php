<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        // 変数を宣言することで、view関数の第2引数で値をviewに渡せる
        $data = [];
        $data["first_name"] = "Luke";
        $data["last_name"] = "Skywalker";

        // view関数の第２引数に配列を渡す
        return view('pages.about', $data);

        // viewディレクトリの中のサブディレクトリからviewを指定する場合は"."を使う
        // 下記はview/pages/about.bladeを指定している
        // return view('pages.about');
    }

    public function contact()  // 追加
    {
        return view("contact");  // (a) view 関数を使わず、テキストを返してみる
    }
}
