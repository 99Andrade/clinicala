<html>
<title>Mi app</title>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi app</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/')}}">Mi 1° app</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Carreras
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('/pacientes/')}}">Ver Carreras</a></li>
            <li><a class="dropdown-item" href="{{ url('/pacientes/create')}}">Agregar Carreras</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<body>
<table class="table">
<thead>
    <tr>
        <th>N°</th>
         <th scope="col">Numero de seguro</th>
          <th scope="col">Nombre Completo</th>
          <th scope="col">Direccion</th>
          <th scope="col">Dui</th>
          <th scope="col">Nit</th>
          <th scope="col">Numero de telefono</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Genero</th>
          <th scope="col">Estado</th>
    </tr>
</thead>
    <tbody>
    @foreach ($pacientes as $paciente)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$pacientes->paciente}}</td>
            <td>{{$pacientes->numero_de_seguro}}</td>
            <td>{{$pacientes->nombre_completo}}</td>
            <td>{{$pacientes->direccion}}</td>
            <td>{{$pacientes->dui}}</td>
            <td>{{$pacientes->nit}}</td>
            <td>{{$pacientes->numero_de_telefono}}</td>
            <td>{{$pacientes->fecha_de_nacimiento}}</td>
            <td>{{$pacientes->genero}}</td>
            <td>{{$pacientes->estado}}</td>
            <td>
            <a href="{{ url('/pacientes/'.$pacientes->id_paciente.'/edit')}}">Editar</a> </td>
            <td> 
            <form method="POST" action="{{url('/pacientes/'.$pacientes->id_paciente)}}">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button type="submit" class="btn btn-primary" onclick="return confirm('Desea borrar el registro?');">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
      
    </tbody>
</table>
{{ $pacientes->links()}}
</body>
</html>