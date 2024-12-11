<form action="{{ route('crud.update', ['id' => $persona->id]) }}" method="post">
    @csrf
    @method('PUT') <!-- Método PUT para actualizar -->
    
    <h1>Información</h1>

    <label for="txtNombre">Nombre:</label>
    <input type="text" class="form-control" name="txtNombre" value="{{ old('txtNombre', $persona->nombre) }}" placeholder="Nombre">
    
    <label for="txtApellido">Apellidos:</label>
    <input type="text" class="form-control" name="txtApellido" value="{{ old('txtApellido', $persona->apellido) }}" placeholder="Apellidos">
    
    <label for="txtEdad">Edad:</label>
    <input type="text" class="form-control" name="txtEdad" value="{{ old('txtEdad', $persona->edad) }}" placeholder="Edad">
    
    <hr>

    <button type="submit" class="btn btn-success">Actualizar</button>
   
</form>
