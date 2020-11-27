@extends('adminlte::page')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title> comparar bases de datos</title>
    <meta charset="utf-8">
    <meta description="Comparar base de datos">
    <link rel="stylesheet" type="text/css" href="/estilos/style1.css">
</head>
<body>

<div>

<!-- mensaje de error -->
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <ul>
        <li>{{ $error }}</li>
    </ul>
    @endforeach
@endif

<!-- mensaje de error -->

<!-- mensaje de procesamiento -->
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>
<!-- mensaje de procesamiento -->

</div>
    <br>
    <br>
    <br>
        <div class="contenedor1">
            <h2>Seleccione su base de datos</h2>
            <form action="uploading" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="contenedor2">
                    <label for="archivo">Archivo</label>
                    <br>
                    <input type="file" class="seleccionar" name="archivo" id="archivo" >
                    <br>
                    <p class="frase">Los archivos permitidos son solo sobre base de datos</p>
                </div>
                <br>
                <button class="boton1" type="submit" name="boton">Comparar archivo</button>
                <button class="boton2"type="reset" value="Borrar información">Cancelar</button>
            </form>
        </div>

    
</body>
</html>
@endsection
