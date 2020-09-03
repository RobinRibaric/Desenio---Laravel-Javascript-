<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Desenio</title>
</head>

<body>
    <div class="main-container">
        <div class="top half"></div>
        <a href="/getCountry"><button type="button" class="button">
                @if(empty($country))
                click here
                @elseif(!empty($error))
                {{$error}}
                @else
                {{$country}}
                @endif
            </button></a>
        <div class="bottom half"></div>
    </div>
</body>

</html>