<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
        <a class="navbar-brand" href="{{ url('/') }}"><h4>IPT Midterm Project</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item">
                </li>
              </ul>
            <span class="navbar-text">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ request()->is('/')? 'active':'' }}">
                        <a class="nav-link" href="{{ url('/') }}"><h5>Home</h5></a>
                    </li>
                    <li class="nav-item {{ request()->is('users')? 'active':'' }}">
                        <a class="nav-link" href="{{ url('/users') }}"><h5>Users</h5></a>
                    </li>
                    <li class="nav-item {{ request()->is('accounts')? 'active':'' }}">
                        <a class="nav-link" href="{{ url('/accounts') }}"><h5>Account</h5></a>
                    </li>
                 </ul>
            </span>
        </div>
    </nav>
    <main class="container">

        @yield('content')
    </main>
</body>

</html>
