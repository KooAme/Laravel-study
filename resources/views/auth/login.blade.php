<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Form</title>
</head>
<body>
  @isset($errors)
    <p style="color: red">{{ $errors->first('message') }}</p>
  @endisset
  <form action="/login" name="loginform" method="POST">
    {{ csrf_field() }}
    <dl>
      <dt>메일주소 : </dt><dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
      <dt>비밀번호 : </dt><dd><input type="password" name="password" size="30"></dd>
    </dl>
    <button type="submit" name="action" value="send">로그인</button>
  </form>
</body>
</html>