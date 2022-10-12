<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>
<body>
    <h1>Auth Tutorial</h1>
    <div>
        @if (Auth::check())
            <div>
                <div>
                    Hello, {{ \Auth::user()->name }}!
                </div>
                <a href="/logout">Logout</a>
            </div>
        @else
            <ul>
                <li>
                    <a href="/login">Login</a>
                </li>
                <li>
                    <a href="/register">Sign Up</a>
                </li>
            </ul>
        @endif
    </div>
</body>
</html>
