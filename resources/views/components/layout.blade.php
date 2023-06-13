<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite("/resources/css/app.css")
</head>
<body>

<header>
    <ul>
        <li><a href="{{route('request.index')}}">Home</a></li>
        <div class="logo">logo</div>
        <li><a href="{{route('request.create')}}">Request</a></li>
    </ul>
</header>






{{$slot}}
<footer>
    &copy;2023
</footer>
</body>
</html>
