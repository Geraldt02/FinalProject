<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="{{ asset('style/viewProfile.css') }}" rel="stylesheet" href="">
</head>
<body>
    @include('CustomerHeader')

    <div class = "profiles">
        <div class="prof">
            <div class="sign">
                <h1>My Profile</h1>
            </div>
            <div class="status">
                <h2>member</h2>
            </div>
            <div class="information">

                    <div class="form-group">
                        <h4>{{ $profile->name }}</h2>
                    </div>

                    <div class="form-group">
                        <h5>{{ $profile->email }}</h3>
                    </div>

                    <div class="form-group">
                        <h5>{{ $profile->address }}</h3>
                    </div>

                    <div class="form-group">
                        <h5>{{ $profile->phone }}</h3>
                        <br>
                    </div>
            </div>

            <div class="edit">
                <div class="edit1">
                    <h6><a href="UpdateProfile" class = "redirect">Edit Profile</a></h6>
                </div>
                <div>
                    <h1>&nbsp&nbsp&nbsp</h1>
                </div>
                <div class="edit2">
                    <h6><a href="" class = "redirect">Edit Password</a></h6>
                </div>
            </div>


        </div>


    </div>


</body>
</html>
