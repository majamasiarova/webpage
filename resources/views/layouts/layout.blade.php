<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Bazár</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
<div class="widecontainer">
    <div class="nav-wrapper">
        <div class="left-side">
            <div class="brand">
                <a href="{{route('page.index')}}/">Domov</a>
            </div>

            <div class="brand">
                <a href="{{route('page.about')}}">O stránke</a>
            </div>
            <div class="brand">
                <a href="{{route('page.contact')}}">Kontakt</a>
            </div>

            @auth
                @if(!auth()->user()->isAdmin())
                    <div class="brand">
                        <a href="{{route('ad.add')}}">PRIDAŤ INZERÁT</a>
                    </div>
                    <div class="brand">
                        <a href="{{route('ad.mine')}}">MOJE INZERÁTY</a>
                    </div>
                @endif
            @endauth
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
<script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous">
</script>
</body>
</html>
