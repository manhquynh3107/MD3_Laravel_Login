<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="/login" method="post">
    @csrf
    <p>
        <input type="text" name="username" placeholder="Ten Dang Nhap">
    </p>
    <p>
        <input type="password" name="password" placeholder="Mat Khau">
    </p>
    <button type="submit"> Login</button>
</form>
</body>
</html>
