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
    
    <section class="container-fluid bg-light">
       <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">ACEX-CONSULTORES</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="/admin">Trabajadores <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/llegada">Llagadas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/salida">Salidas</a>
                        </li>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </nav>
       </div>
    </section>
    <section class="container pt-5">
        <h4 class="pb-2">Lista de salida</h4>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                  @foreach ($salidas as $salida)
                            <tr>
                                <th scope="row">{{ $salida->id }}</th>
                                <td>{{ $salida->nombre }}</td>
                                <td>{{ $salida->apellido }}</td>
                                <td>{{ $salida->tipo_usuario }}</td>
                                <td>{{ $salida->hora }}</td>
                                <td>{{ $salida->fecha }}</td>
                                <td>
                                  
                                </td>
                            </tr>
                    @endforeach
            </tbody>
        </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de trabajador(ar)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input name="nombre" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Apellidos</label>
                        <input name="apellido" type="lastname" class="form-control" id="exampleInputPassword1" placeholder="Apellidos">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">DNI</label>
                        <input name="nick" type="text" class="form-control" id="exampleInputPassword1" placeholder="DNI">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rol</label>
                        <input name="tipo" type="text" class="form-control" id="exampleInputPassword1" placeholder="rol de trabajo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Correo</label>
                        <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="nombre@acex.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input name="contra" type="text" class="form-control" id="exampleInputPassword1" placeholder="*********">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>