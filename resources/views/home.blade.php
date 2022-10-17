<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  <p>안녕하세요!
  @if (Auth::check()) <!-- 로그인 상태 확인 -->
    {{ \Auth::user()->name }} 님</p>
    <p><a href="/logout">로그아웃</a></p>
  @else <!-- 그렇지 않다면 -->
    게스트님</p>
    <p><a href="/login">로그인</a><br><a href="/register">회원가입</a></p>
  @endif
</body>
</html>