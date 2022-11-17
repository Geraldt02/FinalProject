<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style/Header.css') }}" rel="stylesheet">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class = "navbar">
        <div class = "left">
                <div class = "title">
                     <h4>MAI BOUTIQUE</h4>
                </div>
                <div class="home">
                    <a href = "" >Home</a>
                </div>
                <div class="search">
                    <a href = "" >Search</a>
                </div>
                <div class="profile">
                    <a href = "" >Profile</a>
                </div>
        </div>

        <div class = "right">
                <div class="buttonAdd">
                   <a href="/AddItem" class="text-decoration-none text-dark">Add Item </a>
                </div>
                <form action="/SignOut" method = "POST">
                @csrf
                <div class="buttonSignout">
                    <button type = "submit" class="butSign">Sign Out</button>
                </div>
            </form>
        </div>
    </div>
    @yield('navbar-admin')

</body>
</html>
