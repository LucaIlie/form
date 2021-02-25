<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')Document</title>
</head>
<body>
    <nav class="nav bg bg-light">
        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Acasa</a>
        <a class="nav-link" href="#">Categorii</a>
        <a class="nav-link" href="#">Produse</a>
    </nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
