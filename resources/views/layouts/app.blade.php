<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="icon" href="https://www.iconpacks.net/icons/2/free-store-icon-2017-thumb.png" sizes="16x16 24x24 32x32 48x48 64x64 128x128">
</head>
<body>

   <div class="container">

        @include ('partials.header')

        <main>
            @yield('content')
        </main>

        @include ('partials.footer')

   </div>

    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>