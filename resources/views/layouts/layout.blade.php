<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <title>Portfolio Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
<div class="container">
    <div class="nav-wrapper">
        <div class="left-side">
            <div class="nav-link-wrapper">
                <a href="{{route('page.index')}}/">Home</a>
            </div>

            <div class="nav-link-wrapper">
                <a href="{{route('page.about')}}">About</a>
            </div>
            <div class="nav-link-wrapper">
                <a href="{{route('page.contact')}}">Contact</a>
            </div>

            <div class="nav-link-wrapper">
                <a href="{{route('page.ads')}}">Inzeraty</a>

            </div>


        </div>

        <div class="right-side">
            <div class="brand">
                MÁRIA MÄSIAROVÁ
            </div>
        </div>
    </div>
    @yield('content')
</div>

</body>
</html>
