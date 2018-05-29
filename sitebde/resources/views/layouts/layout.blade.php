<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <title>Site Bde</title>
</head>
<body>
    <div class="container">
        @include('partials.header')
        <div class="content row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>