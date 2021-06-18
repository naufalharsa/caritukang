<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-primary fs-2" href="/">CariTukang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav fs-5">
                    <a class="nav-link active" aria-current="page" href="{{route('administrators.index')}}">Administrator</a>
                    <a class="nav-link" href="{{ route('customers.index')}}">Customer</a>
                    <a class="nav-link" href="{{ route('mitras.index')}}">Mitra</a>
                    <a class="nav-link" href="{{ route('reports.index') }}">Laporan</a>
                    <div class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        History
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('orders.index')}}">Order</a></li>
                        <li><a class="dropdown-item" href="{{route('payments.index')}}">Payment</a></li>
                      </ul>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <div class="dropdown">
                  <span style="color:grey;">{{ Auth::user()->name }}</span>
                  <a class="" style="text-decoration: none;color:grey;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                  </a>

                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                          @csrf
                      </form>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
         </div>
      </nav>
    
    @yield('container');
    <!-- @yield('content'); -->

    <!-- @yield('content'); -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        $(document).on('ajaxComplete ready', function () {
            $('.detailsModal').off('click').on('click', function () {
                $('#detailsModalContent').load($(this).attr('value'));
                $('#detailsModalTitle').html($(this).attr('title'));
            });
        });
    </script>

  </body>
</html>