@include('includes.navbar')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            p {
                font-size: 35px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{URL::to('/homepage')}}">Home</a>
                    @else
                        <a href="{{URL::to('/login')}}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{URL::to('/register')}}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <form class="" action="{{URL::to('/book-plus')}}" method="post">
                    <!-- <label for="username">Username</label> -->
                    <input type="text" name="username" placeholder="Username" value="">
                    <br><br>
                    <!-- <label for="name">Nama</label> -->
                    <input type="text" name="name" placeholder="Name" value="">
                    <br><br>
                    <!-- <label for="email">Email</label> -->
                    <input type="email" name="email" placeholder="Email" id="">
                    <br><br>
                    <!-- <label for="telp">No Telepon</label> -->
                    <input type="text" name="telp" placeholder="Phone Number" value="">
                    <br><br>
                    <!-- <label for="alamat">Alamat</label> -->
                    <input type="text" name="alamat" placeholder="Address" value="">
                    <br><br>
                    <!-- <label for="password">Password</label> -->
                    <input type="password" name="password" placeholder="Password" value="">
                    <br><br>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="">

                    <button type="submit" name="button">Save</button>
                </form>
            </div>
        </div>
    </body>
</html>
