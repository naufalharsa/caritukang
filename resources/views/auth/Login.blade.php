<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CariTukang | Login</title>

    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="authentication">
    <div class="container ">
        <div class="login-logo mb-3" style="text-align: center;">
            <a href="#" style="text-decoration:none; font-size:35px; "><b>Cari Tukang</b></a>
        </div>

        <div class="login-card card" style="width: 30rem;margin:0 auto;">
            <div class="card-body login-card-body">
                <p class="alert alert-info">Sign in to start your session</p>
                @if (session('status'))
                <div class="alert alert-warning">
                    {{ session('status') }}
                </div>
                @endif
                @if (session('status_register'))
                <div class="alert alert-success">
                    {{ session('status_register') }}
                </div>
                @endif
                <form action="{{route('postlogin')}}" method="post">
                    {{ csrf_field() }}
                    
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-2 form-check">
                        <input type="checkbox" class="form-check-input" id="check" required>
                        <label class="form-check-label" for="check" >Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <div class="d-inline float-end bg-bottom-menu">
                    <a href="{{route('register')}}" class="bottom-menu">Register</a>
                </div>
            </div>
          
        </div>
    </div>
</body>
</html>