
@extends('plantillas.layout')
@section('title','Editar Servicios')
@section('contenido')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="planta.css" type="text/css">
    <link rel="stylesheet" href="icons/css/fontello.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>

      <form method="post" class="formulario" action="{{route('editaServicio.update', $articulo->_id)}}">
            @csrf
            @method('put')
            <h2>Editar Servicio</h2>
            <div class="contenedor">
              <div class="input-contenedor">
                  <i class="fas fa-key icon"></i>
                  <label for="nombre">ID</label>
                  <input type="text" class="form-control" name="_id" value="{{$articulo->_id}}">
              </div>
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$articulo->nombre}}">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <label for="Clasificacion">Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value="{{$articulo->descripcion}}">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <label for="Ubicacion">Costo</label>
                    <input type="text" class="form-control" name="costo" value="{{$articulo->costo}}">
                </div>

                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <label for="Descripcion">Nota</label>
                    <input type="text" class="form-control" name="nota" value="{{$articulo->nota}}">
                    <div>
                      <br>
                      <br>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </form>


        <br>
        <br>
        <br>
        <br>
        <br>

</body>
</html>
 @endsection
