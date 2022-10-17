<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function create()
  {
    return view('regist.register'); //regist디렉토리 안의 register.blade.php로 이동
  }
  
  public function store(Request $request)
  {
    $request -> validate([ //값확인
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|confirmed|min:4',
    ]);

    $user = User::create([ //DB등록
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    return view('regist.complete', compact('user')); //complete.blade.php로 이동
  }
}