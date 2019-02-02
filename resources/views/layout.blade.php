<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css?v=1') }}" />

  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <a href="/">
      <img class="masthead-brand" href="/" src="{{ url('/img/elevation.jpg') }}" height="30%" width="32%">
      </a>
<!--       <h3 class="masthead-brand" >Elevation</h3> -->
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link @if($title == 'Elevation Project') active @endif" href="/">Home</a>
        <a class="nav-link @if($title == 'Success') active @endif" href="/getxml">Import Xml</a>
        <a class="nav-link" href="/api/sermons/list">JSON</a>
        <a class="nav-link @if($title == 'Sermons') active @endif" href="/list">Sermons</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
      @yield('content')
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>© 2019 Elevation Church. All Rights Reserved.</p>
    </div>
  </footer>
</div>
</body>
</html>