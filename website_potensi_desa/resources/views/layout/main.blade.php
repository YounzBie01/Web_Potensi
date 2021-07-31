<!doctype html>
<html lang="en">
  <head>
    @include('partials.head');
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    @if ($web_name == "bumdes")
    {
      <link rel="stylesheet" href="{{ asset('css/stylebumdes.css') }}">      
    }
    @else
    {
      <link rel="stylesheet" href="{{ asset('css/styletaruna.css') }}">
    }
    @endif
  </head>


  <body>
    @include('partials.navbar');

    <div class = "container mt-4">
        @yield('container')
    </div>

    @include('partials.footer')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/aee467f5c4.js" crossorigin="anonymous"></script>
  </body>
</html>