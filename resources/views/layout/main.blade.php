<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js','resources/sass/app.scss'])
    <title>CRUD</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home')}}">CRUD</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                        <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>

    </div>
</div>
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
</html>
