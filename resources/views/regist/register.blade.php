<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  <form id="register-form" name="register-form" action="/register" method="post">
    {{ csrf_field() }}
    <div>
      <label for="name">
        <div>Name</div>
        <input type="text" id="name" name="name" size="30">
        <div>{{ $errors->first('name') }}</div>
      </label>
    </div>
    <div>
      <label for="email">
        <div>Email</div>
        <input type="email" id="email" name="email">
        <div>{{ $errors->first('email') }}</div>
      </label>
    </div>
    <div>
      <label for="password">
        <div>Password</div>
        <input type="password" id="password" name="password">
        <div>{{ $errors->first('password') }}</div>
      </label>
    </div>
    <div>
      <label for="password_confirmation">
        <div>Confirm Password</div>
        <input type="password" id="password_confirmation" name="password_confirmation">
        <div>{{ $errors->first('password_confirmation') }}</div>
      </label>
    </div>
    <button type="submit" name="action" value="submit">Submit</button>
  </form>
</body>
</html>