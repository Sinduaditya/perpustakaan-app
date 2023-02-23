<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('admin.style')
    <style>
        * {
            font-family: 'Josefin Sans', sans-serif;
        }
    </style>
</head>

<body>
    @yield('content')
    @include('admin.script')
</body>

</html>
