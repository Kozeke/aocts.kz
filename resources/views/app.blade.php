<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="icon" type="image/png" href="/images/title-logo.svg" />
    <title>Daris</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: #ffffff">
    <div id="app">
        <!-- <app></app> -->
        <router-view></router-view>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>