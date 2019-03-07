<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;


class HelloController extends Controller
{
    public function index(Request $request)
    {
      $items = DB::table('people')->get();
      return view('hello.index', ['items' => $items]);
    }
  
    public function post(HelloRequest $request)
    {
      return view('hello.index', ['msg'=>'正しく入力されました！' ]);
  }
}