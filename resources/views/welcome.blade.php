<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to EARS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- Styles -->
        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="#">EARS System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <!-- Add any additional links here if needed -->
              </ul>
              <form class="form-inline my-2 my-lg-0">
                @if (Route::has('login'))
                  @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-success my-2 my-sm-0 mr-2">
                      Dashboard
                    </a>
                  @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success my-2 my-sm-0 mr-2">
                      Log in
                    </a>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-outline-primary my-2 my-sm-0">
                        Register
                      </a>
                    @endif
                  @endauth
                @endif
              </form>
            </div>
          </nav>
         <div class="container">
    <div class="jumbotron mt-5">
      <h1 class="display-4">Welcome to the Employee Application Review System</h1>
      <p class="lead">Empower your hiring process with our streamlined application review system. Simplify candidate evaluation, collaboration among team members, and make data-driven hiring decisions.</p>
      <hr class="my-4">
      <p>Join us in revolutionizing your recruitment process today!</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div> 

    </body>
</html>
