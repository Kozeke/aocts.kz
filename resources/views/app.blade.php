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
<style>
.vdp-datepicker input{
    width: 100%;
    text-align: left;
    margin-top: 8px;
    background: #FDFDFD;
    border: 1px solid #DFE0EB;
    box-sizing: border-box;
    border-radius: 6px;
    padding: 18px 22px;
    font-weight: 500;
    font-size: 14px;
    line-height: 17px;
}

.filter .vdp-datepicker input{
    margin-right: 10px;
    width: calc(100% - 20px);
    position: relative;
    margin-top: 15px;
    height: 50px;
    font-size: 14px;
    line-height: 18px;
    letter-spacing: 0.15px;
    border: 1px solid #DFDFDF;
    background: #FFFFFF;
    box-sizing: border-box;
    border-radius: 4px;
    padding: 13px;
}
</style>
</html>