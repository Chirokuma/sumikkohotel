<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sumikko Hotel</title>
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 480px)">
        <header id="top">
        <h1><a href="index.html"><img src="images/sumitop2" alt="すみっコホテル"></a></h1>
    </header>
    <style>
        body {
            color: #333333;
            background-color: #FFFFFF;
            font-size: 100%;
            line-height: 1.7;
            margin: 10px auto;
            width: 90%;
            -webkit-text-size-adjust: 100%;
        }

        a {
            text-decoration: none;
        }

        .main-nav {
            display: flex;
            font-size: 1.25rem;
            text-transform: uppercase;
            list-style: none;
        }

        .main-nav li {
            margin-left: 36px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sumikko Hotel</h1>
        <nav>
            <ul class="main-nav">
                <li id="nav_guest"><a href="/guest">Guests</a></li>
                <li id="nav_reserves"><a href="/reserve">Reserves</a></li>
                 <li id="nav_rooms"><a href="/rooms">Rooms</a></li>
            </ul>
        </nav>
    </header>

    <footer>
        <p id="pagetop"><a href="#top">ページの先頭へ戻る</a></p>
        <p id="copyright"><small>Copyright 2024 Sumikko Co., Ltd.</small></p>
    </footer>
</body>
</html>
