<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Pry web</title>
</head>

<body>
    <p>
        <a href="{{ route('home')}}">Home</a>
        <a href="{{ route('blog')}}">Blog</a>
    </p>

    <hr>


    @yield ('content')

</body>

</html>