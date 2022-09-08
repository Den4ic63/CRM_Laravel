<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>Welcome</title>
</head>
<body>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-primary-button class="sm:ml-10">
            <a href="/login">Login</a>
        </x-primary-button>

        <x-primary-button class="ml-3">
            <a href="/register" >Register</a>
        </x-primary-button>
    </x-auth-card>
</x-guest-layout>

<script src="/js/app.js"></script>


</body>
</html>
