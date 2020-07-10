<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://getbootstrap.com/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css">
    @yield('style')
</head>
<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('dashboard.home') }}">{{ config('app.name', 'Laravel') }}</a>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <ul class="navbar-nav px-3">
            @guest
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <!-- <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li> -->
            @else
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="{{ route('logout') }}">
                        {{ __('Logout') }}
                    </a>
                </li>
            @endguest
        </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ empty(Request::segment(3)) ? 'active' : '' }}" href="{{ route('dashboard.home') }}">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ (Request::segment(3) == 'regu') ? 'active' : '' }}" href="{{ route('dashboard.regu.index') }}">
                  <span data-feather="users"></span>
                  Regu
                </a>
              </li>
              @if(Auth::user()->jabatan == 'admin')
              <li class="nav-item">
                <a class="nav-link  {{ (Request::segment(3) == 'livescore') ? 'active' : '' }}" href="{{ route('dashboard.livescore') }}">
                  <span data-feather="upload"></span>
                  Live Score
                </a>
              </li>
              @endif
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @include('layouts._flash')
            @yield('content')
			<br>
        </main>
      </div>
    </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/popper.min.js"></script> -->
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script>
        // confirm delete
        $(document.body).on('submit', '.js-confirm', function () {
        var $el = $(this)
        var text = $el.data('confirm') ? $el.data('confirm') : 'You are sure to perform this action\ ?'
        var c = confirm(text);
        return c; });
    </script>
    @yield('scripts')

</body>
</html>
