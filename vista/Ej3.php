<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
    <link rel="stylesheet" href="../utils/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../utils/css/estilos.css">
    <script src="../utils/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</head>
<body>
<? include_once("../structures/header.php") ?>

<div class="container mt-2 pb-1">

<!-- Utilizamos metodo post para poder cargar archivos al servidor -->
<form id="cinema" name="cinema" method="post" action="../vista/view-Ej3.php" class="row gx-3 align-items-center needs-validation" enctype="multipart/form-data" novalidate>

<h3 class="gradient-casero rounded px-2">Cinem@</h3>

<div class="col-md-6">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" value="" name="titulo" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<div class="col-md-6">
            <label for="actores" class="form-label">Actores</label>
            <input type="text" class="form-control" id="actores" value="" name="actores" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<div class="col-md-6">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" id="director" value="" name="director" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<div class="col-md-6">
            <label for="guion" class="form-label">Guion</label>
            <input type="text" class="form-control" id="guion" value="" name="guion" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>
	
<div class="col-md-6">
            <label for="produccion" class="form-label">Produccion</label>
            <input type="text" class="form-control" id="produccion" value="" name="produccion" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<div class="col-md-6">
            <label for="anio" class="form-label">Año</label>
            <input type="number" class="form-control" id="anio" value="" max=9999 name="anio" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<div class="col-md-6">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad" value="" name="nacionalidad" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<div class="col-md-6">
<label for="genero" class="form-label">Genero</label>
<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="genero" id="genero" required>
  <option value="comedia">Comedia</option>
  <option value="drama">Drama</option>
  <option value="terror">Terror</option>
  <option value="suspenso">Suspenso</option>
  <option value="romance">Romance</option>
  <option value="otras">Otras</option>
</select>
<div class="invalid-feedback">Debe ingresar genero</div>
</div>

<div class="col-md-3">
            <label for="duracion" class="form-label">Duración</label>
            <input type="number" class="form-control" id="duracion" max=999 value="" name="duracion" placeholder="minutos" required>
    <div class="valid-feedback">
        Correcto!
    </div>
</div>

<div class="col-md-9 mt-1">
    <label for="radio" class="form-label">Restricciones de edad</label>
    <br>
    <input type="radio" class="form-check-input" id="todop" name="restric" value="todo publico" required>
    <label class="form-check-label" for="todop">Todo publico</label>
    <input type="radio" class="form-check-input" id="mayor7" name="restric" value="mayor 7">
    <label class="form-check-label" for="mayor7">Mayor 7 años</label>
    <input type="radio" class="form-check-input" id="mayor18" name="restric" value="mayor18">
    <label class="form-check-label" for="mayor18">Mayor de 18 años</label>
    <div class="invalid-feedback">debe ingresar una opcion</div>
</div>

<div class="col-md-12 mb-2">
    <label for="sinopsis" class="form-label">Sinopsis</label>
    <textarea class="form-control " id="sinopsis" name="sinopsis" required></textarea>
</div>

<div class="col-6">
    <label for="formFile" class="form-label">Cargar imagen</label>
    <input class="form-control" type="file" name="miFile" id="miFile">
</div>
<div class="row m-2">
</div>
<div class="col-3 align-content-md-end">
     <button class="btn btn-primary" type="submit">Enviar</button>
     <button class="btn btn-primary" type="reset">Borrar</button>
</div>


</form>

</div>


<? include_once("../structures/footer.php") ?>

</body>

<script src="../vista/js/fnt-pag.js"></script>


</html>