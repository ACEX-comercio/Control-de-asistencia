<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Hello, world!</title>
  </head>
  <body>
    
    <section class="container-fluid d-flex justify-content-center align-items-center bg-light seccion">
        <div>
            <h2 class="text-center text-white pb-5"><span class="font-weight-light">Hola</span><strong> {{ Auth::user()->nombre }}</strong></h2>
            <div class="row">
                <div class="col">
                    <form class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary btn-moca"><i class="material-icons">timer</i><p>LLEGADA</p></button>
                    </form>
                </div>
                <div class="col">
                    <form class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn bg-danger btn-moca"><i class="material-icons">timer_off</i><p>SALIDA</p></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>