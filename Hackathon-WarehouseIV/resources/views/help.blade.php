<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--  JQ  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="kv"></div>
    <div class="circle-menu circle-unselect display-1">
        <div class="cir-menu-lg-ball bg-warning shadow-lg">
            <div class="d-flex h-100 justify-content-center align-items-center m-0 fw-bold text-white">
                <h1>消除貧窮</h1>
            </div>
        </div>
        <div id="teach" class="cir-menu-item cir-menu-sm-ball bg-success shadow"></div>
        <div id="money" class="cir-menu-item cir-menu-sm-ball bg-success shadow"></div>
        <div id="build" class="cir-menu-item cir-menu-sm-ball bg-success shadow"></div>
        <div id="medical" class="cir-menu-item cir-menu-sm-ball bg-success shadow"></div>
        <div id="food" class="cir-menu-item cir-menu-sm-ball bg-success shadow"></div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
