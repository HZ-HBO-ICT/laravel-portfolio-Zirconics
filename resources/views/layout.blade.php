<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="@yield('wildcard-addition')css/style.css" />

    <title>Kevin - Portfolio</title>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
    <div class="container-xxl">
        <!-- Page title / brand -->
        <a href="/" class="navbar-brand">
            <img src="@yield('wildcard-addition')img/logoHZ.png" alt="logo hz" />
        </a>

        <!-- collapsed navbar button (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'dashboard' ? 'active' : '' }}" href="@yield('wildcard-addition')dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'profile' ? 'active' : '' }}" href="@yield('wildcard-addition')profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'faq' ? 'active' : '' }}" href="@yield('wildcard-addition')faq">FaQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blogs*') ? 'active' : '' }}" href="@yield('wildcard-addition')blogs/overview">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- All the content displayed on the site-->
    @yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
