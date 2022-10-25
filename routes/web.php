<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function(){
//     return view('home');
// });

// Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])
// ->middleware('guest')->name('register');

// Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])
// ->middleware('guest');

Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])
->middleware('guest')->name('login');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate'])
->middleware('guest');

Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])
->middleware(('auth'))
->name('logout');

Route::get('/std/{name?}', function($name="TEST") { // ?는 한번은 나타타야됨. 존재하면 하고 없으면 디폴트값
    return '안녕하세요 ' .$name . ' 입니다.'; 
})->where('name', '[0-9a-zA-Z]{4}'); //{4}무조건4글자

//Route::pattern('name', '[0-9a-zA-Z]{4}');

Route::get('home/{name}', [ 'as' => 'testhome',
    function($name = "TEST"){
        return '안녕하세요 ? 저는 ' . $name . '입니다.';
    }]);

Route::get('mytesthome/{param?}', function($param='JIT'){
    return redirect(route('testhome',['name'=>$param]));
});

Route::get('task/alert', function(){
    $taskNew = [
        'task_name' => '라라벨 중간고사 연습',
        'due_date' => '2022-10-20',
        'comment' => '굳굳'
    ];
    return view('task.elart')->with('task', $taskNew);
});

Route::get('/user', [\App\Http\Controllers\UserControllers::class, 'index']);
Route::post('user', [\App\Http\Controllers\UserControllers::class, 'store']);