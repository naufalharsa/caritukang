<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CariTukang | Registration</title>

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
            
                <p class="alert alert-info">Register your account</p>
                @if (session('status'))
                <div class="alert alert-warning">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{route('storeregister')}}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-2">
                        <label for="name" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your fullname">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email address">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" enter="Enter your password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
                <div class="d-inline float-end bg-bottom-menu">
                    <a href="{{route('login')}}" class="d-inline bottom-menu">I already have a account</a>
                </div>
            </div>

        </div>
    </div>
</body>
</html>