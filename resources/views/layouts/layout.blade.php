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
                <a href="{{route('page.index')}}/">Domov</a>
            </div>

            <div class="nav-link-wrapper">
                <a href="{{route('page.about')}}">O stránke</a>
            </div>
            <div class="nav-link-wrapper">
                <a href="{{route('page.contact')}}">Kontakt</a>
            </div>

            <div class="nav-link-wrapper">
                <a href="{{route('page.ads')}}">Inzeráty</a>

            </div>


        </div>

        <div class="right-side">
            <div class="brand">
                @auth
                    <a href="{{route('user.logout')}}">ODHLÁSENIE</a>
                @endauth
                @guest
                    <a href="{{route('user.login')}}">PRIHLÁSENIE</a>
                @endauth
            </div>
        </div>
    </div>
    @yield('content')
</div>

</body>
</html>
