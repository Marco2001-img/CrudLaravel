<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <!-- Bootstrap JavaScript Libraries -->
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                        <form action="{{route('crud.create')}}" method="post">
                            @csrf
                            <h1>Llenar</h1>
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control" name="txtNombre" placeholder="Nombre">
    
                                <label for="">Apellidos:</label>
                                <input type="text" class="form-control" name="txtApellido" placeholder="Apellidos">
    
                                <label for="">Edad:</label>
                                <input type="text" class="form-control" name="txtEdad" placeholder="Edad">
                                <hr>

                                <button type="submit" class="btn btn-success">Agregar</button>
                        </form>   
                        </div>
                    </div>
                </div>
                <div class="col-6">
                <table class="table">
  <thead>
      <tr>
        <th scope="row">#</th>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>edad</td>
        <td></td>
        <td></td>
      </tr>
  </thead>
  <tbody>
    @foreach ($data as $item )
    <tr>
      <th></th>
      <td>{{$item->id}}</td>
      <td>{{$item->nombre}}</td>
      <td>{{$item->apellido}}</td>
      <td>{{$item->edad}}</td>
      <td><a href="/Modificacion" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
      <td><a href="{{route('crud.delete', $item->id)}}" class="btn btn-danger"><i class="bi bi-trash3"></i></a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
                </div>
            </div>
        </div>

    </body>
</html>
