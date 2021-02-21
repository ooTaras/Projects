
<!doctype html>
<html lang="ru">

@include('layout.head')
  <body>

  <div>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Kanarskyi</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                      <li class="nav-item active">
                          <a class="nav-link" aria-current="page" href="{{route('start')}}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('add_article')}}">Add Article</a>
                      </li>
                  </ul>
                  <a class="btn btn-outline-primary" href="#">Sign up</a>
              </div>
          </div>
      </nav>
  </div>

<main>
    @yield('main_content')
</main>

@include('layout.footer')


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
