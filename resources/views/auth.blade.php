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
<div>
    @if($errors->any())
        <div>
            @foreach($errors->all() as $errors)
                <li>
                    {{$errors}}
                </li>
            @endforeach
        </div>
    @endif

    <form method="post" action="/auth">
        @csrf
        <input type="text" id="email" name="email" placeholder="email">
        <input type="text" id="password" name="password" placeholder="password">
        <input type="submit" value="Sign in">
    </form>
</div>



</body>
</html>
