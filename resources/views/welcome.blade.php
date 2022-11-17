<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('style/stylesheet.css') }}" rel="stylesheet">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    </head>
    <body>
        <div class = "navbar">
            <div class = "Title">
                <h1> MAIBOUTIQUE </h1>
            </div>
            <div class = "SignIn">
                <a href="/SignIn" class="text-decoration-none">Sign in </a>
            </div>
        </div>
        <div class = "main">
            <div class = "background">
                <img src="{{ asset('Images/BackgroundStore.jpg') }}" id="img1">
            </div>
            <div class = "welcome">
                <h1>Welcome to MaiBoutique </h1>
                <br>
                <h3>Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</h3>
                <br>
                <button type="button" class = "HomeButton"onclick="window.location = 'SignUp'">Sign Up Now</button>
                <button type="button" class = "HomeButton"onclick="window.location = 'AdminHome'">AdminHome</button>
            </div>


    </body>
</html>
