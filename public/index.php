<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request; //사용자의 요청은 얘의 인스턴스로 얻음 handle메서드를 통해

define('LARAVEL_START', microtime(true));// 1.오토로더 로딩

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php'; // 2.프레임워크 실행

$kernel = $app->make(Kernel::class); // 3.애플리케이션 실행 & HTTP응답 송신

$response = $kernel->handle( 
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response); // 4.종료처리
