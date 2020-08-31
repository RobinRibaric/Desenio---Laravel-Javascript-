<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>

    <style>
        html {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;

        }

        body {
            height: 100%;
            width: 100%;
        }

        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-image: url("/images/planet2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .content-holder {
            background: rgb(4, 7, 2, 0.7);
            border: 1px solid black;
            border-radius: 10px;
            width: 30%;
            height: 30%;
            margin-bottom: 10%;
        }

        .content {
            margin-bottom: 2%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .bg-image {
            max-width: 50%;
            max-height: 100%;
        }

        .button {
            /*  width: 35%;
            height: 22%;
            border-radius: 10px;
            background-color: transparent;
            font-size: 20px;
            outline: none;
            color: white; */
            width: 35%;
            color: #fff !important;
            text-transform: uppercase;
            text-decoration: none;
            background: rgb(4, 7, 2, 0.7);
            border-radius: 50px;
            font-size: 20px;
            transition: all 0.4s ease 0s;
            outline: none;
        }

        .button:hover {
            text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
            -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            -moz-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
            transition: all 0.4s ease 0s;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="content-holder">
            <div class="content">
                <button class="button" type="button">Your Location</button>
            </div>
        </div>
    </div>
</body>

</html>