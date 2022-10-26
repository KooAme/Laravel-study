<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRegistPost; //FormRequest class import


class UserController extends Controller
{
    // public function register(UserRegistPost $request)
    // //인수에 UserRegistPost 클래스의 인스턴스를 전달함
    // {
    //     //인스턴스에 대해 값을 문희
    //     $name = $request->get('nema');
    //     $age = $request->get('age');
    // }

    // *** 밸리데이션의 기본적인 사용 방법!!
    // public function register(Request $request)
    // {
    //     //모든 입력값을 얻어 $inputs에 저장
    //     $inputs = $request->all(); //사용자가 입력한 항목

    //     //밸리데이션 규칙정의[배열]
    //     //name 키 값은 필수, age는 정수값
    //     $rules = [
    //         'name' => 'required', //필수
    //         'age' => 'integer', //정수
    //     ];
    //     //밸리데이션 클래스 인스턴스 취득
    //     $validator = Validator::make($inputs, $rules);//파사드
    //     if($validator -> fails()){
    //         // 값에 에러가 있는 경우 처리
    //     }
    //     // 값이 정상인 경우의 처리
    // }

    // *** 컨트롤러에서의 밸리데이션
    public function register(Request $request)
    {
        $rules = [
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
        ]; //규칙을 배열로 지정하고 밸리데이션 설정

        //1. 밸리데이션 실행, 에러발생 시 직전 화면으로 돌아가기(redirect)
        //$this -> validate($request, $rules);
        //밸리데이션 통과 후 실행할 처리
        //$name = $request->get('name');
        //2. 밸리데이터 클래스를 사용한 밸리데이션 처리 방법
        //모든 입력값을 얻어 $inputs에 저장
        $inputs = $request->all();
        //밸리데이터 클래스의 인스턴스 생성
        $validator = Validator::make($inputs, $rules);
        if($validator -> fails()){
            //밸리데이션 에러 발생시 처리 내용
        }
    }
}
