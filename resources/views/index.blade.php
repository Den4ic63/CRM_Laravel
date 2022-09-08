<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<span>Hello you authorize like {{Auth::user()->name}}</span>
<form action="/store" method="post">
@csrf
    <input type="text" id="name" name="name" placeholder="name">
    <input type="text" id="second_name" name="second_name" placeholder="second_name">
    <input type="text" id="email" name="email" placeholder="email">
    <input type="text" id="password" name="password" placeholder="password">
    <input type="submit" value="Создать пользователя">
</form>
<a href="/logout">Выйти</a>
</body>
</html>
