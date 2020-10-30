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

            .top {
                position: absolute;
                top: 90px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
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

            .m-b-md {
                margin-bottom: 30px;
            }

            .search {
                width: 35%;
                height: 30px;
                vertical-align: top;
            }

            span {
                width: 700px;
                height: 40px;
                font-size: 18px;
                background-color: lightgray;
                color: black;
                padding: 10px;
                display: inline-block;
                vertical-align: middle;
            }

            a {
                text-decoration: none;
                color: black;
            }

            table {
                position: absolute;
                top: 160px;
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

            <div class="search top">
                <form class="navbar-form navbar-left" action="{{URL::to('/peminjam')}}" method="post">
                    <div class="input-group src">
                        <input type="text" name="search" class="form-control" placeholder="Search Data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="input-group-btn">
                        <button type="submit" class="btn btn-secondary bt">Go</button>
                        </div>
                    </div>
                </form>
            </div>

            <table >
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                @foreach ($data as $items)
                <tr>
                    <td><span class="a">
                        <a href="#">{{$items->nama_pembeli}}</a>
                    </span></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>