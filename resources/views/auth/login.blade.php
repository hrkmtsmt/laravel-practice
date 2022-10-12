<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  @isset($errors)
  <p>{{ $errors->first('message') }}</p>
  @endisset
  <form name="login-form" action="/login" method="post">
    {{ csrf_field() }}
    <div>
        <label for="email">
          <div>Email</div>
          <input type="email" id="email" name="email" value="{{ old('email') }}" />
        </label>
    </div>
    <div>
        <label for="password">
          <div>password</div>
          <input type="password" id="password" name="password" value="{{ old('password') }}" />
        </label>
    </div>
    <button type="submit" name="action" value="submit">Login</button>
  </form>
</body>
</html>