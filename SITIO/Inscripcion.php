<?php include("template/cabecera.php"); ?>

<div class="jumbotron">
    <h1 class="display-3">Inscripción</h1>
    <p class="lead">Realiza la inscripcion del estudiante</p>
    <hr class="my-2">
    
    <p class="lead">
      
    </p>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                Datos del estudiante
<form method="POST" enctype="multipart/form-data" >
<div class = "form-group">
<label for="Foto">Foto</label>
<input type="file" class="form-control" name="Foto" placeholder="Sube el archivo">
</div>

<div class = "form-group">
<label for="Nombres">Nombres</label>
<input type="text" class="form-control" name="Nombres" placeholder="Escribe los nombres">
</div>

<div class = "form-group">
<label for="apellidos">Apellidos</label>
<input type="text" class="form-control" name="apellidos" placeholder="Escribe tus apellidos">
</div>

<div class = "form-group">
<label for="cedula">Cedula</label>
<input type="text" class="form-control" name="cedula" placeholder="Escribe la cedula V12344565">
</div>

<div class = "form-group">
<label for="sexo">Sexo</label>
<input type="text" class="form-control" name="sexo" placeholder="Femenino o masculino">
</div>

<div class = "form-group">
<label for="fechanacimiento">Fecha de nacimiento</label>
<input type="text" class="form-control" name="fechanacimiento" placeholder="21/04/1997">
</div>

<div class = "form-group">
<label for="Direccion">Direccion</label>
<input type="text" class="form-control" name="Direccion" placeholder="# calle, sector">
</div>

<div class = "form-group">
<label for="añobachillerato">Año de Bachillerato</label>
<input type="text" class="form-control" name="añobachillerato" placeholder="Ejemplo: 1er año">
</div>

<div class = "form-group">
<label for="gradoprimaria">Grado de primaria</label>
<input type="text" class="form-control" name="gradoprimaria" placeholder="Ejemplo: 1er grado">
</div>

<form>
<br/><br/>

                Datos del representante
<form>
<div class = "form-group">
<label for="Foto">Foto</label>
<input type="file" class="form-control" name="Fotorepresentante" placeholder="Sube el archivo">
</div>

<div class = "form-group">
<label for="Nombresrepresentante">Nombres</label>
<input type="text" class="form-control" name="Nombresrepresentante" placeholder="Escribe los nombres">
</div>

<div class = "form-group">
<label for="exampleInputPassword1">Apellidos</label>
<input type="text" class="form-control" name="apellidosrepresentante" placeholder="Escribe tus apellidos">
</div>

<div class = "form-group">
<label for="exampleInputPassword1">Cedula</label>
<input type="text" class="form-control" name="cedularepresentante" placeholder="Escribe la cedula V12344565">
</div>
<div class = "form-group">
<label for="exampleInputPassword1">Sexo</label>
<input type="text" class="form-control" name="sexorepresentante" placeholder="Femenino o masculino">
</div>
<div class = "form-group">
<label for="exampleInputPassword1">Fecha de nacimiento</label>
<input type="text" class="form-control" name="fechanacimiento" placeholder="21/04/1997">
</div>
<div class = "form-group">
<label for="exampleInputPassword1">Parentesco</label>
<input type="text" class="form-control" name="Parentescorepresentante" placeholder="(mama, papa, tio paterno, etc)">
</div>

<div class = "form-group">
<label for="exampleInputPassword1">Telefono</label>
<input type="text" class="form-control" name="Telefono" placeholder="04xx-xxxxxxx">
</div>
<div class = "form-group">
<label for="exampleInputPassword1">Direccion</label>
<input type="text" class="form-control" name="direccionrepresentante" placeholder="# calle, sector">
</div>
<br/>
<div class="btn-group" role="group" aria-label="">
    <button type="button" class="btn btn-primary">Inscribir</button>
    <button type="button" class="btn btn-primary">Modificar</button>
    <button type="button" class="btn btn-primary">Cancelar</button>
</div>

<div class="col-md-7">
<table class="table">
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td 2></td>
            <td>Aprendiendo</td>
            <td>imagen.jpg</td>
            <td>Seleccionar | Borrar </td>
        </tr>
       
    </tbody>
</table>
</form>

<?php include("template/pie.php"); ?>