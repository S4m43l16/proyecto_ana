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
<form>
<div class = "form-group">
<label for="exampleInputEmail1">Nombres</label>
<input type="text" class="form-control" name="Nombres" placeholder="Escribe los nombres">
</div>


<label for="exampleInputPassword1">Apellidos</label>
<input type="text" class="form-control" name="apellidos" placeholder="Escribe tus apellidos">
</div>

<label for="exampleInputPassword1">Cedula</label>
<input type="text" class="form-control" name="cedula" placeholder="Escribe la cedula V12344565">
</div>

<label for="exampleInputPassword1">Sexo</label>
<input type="text" class="form-control" name="sexo" placeholder="Femenino o masculino">
</div>

<label for="exampleInputPassword1">Fecha de nacimiento</label>
<input type="text" class="form-control" name="fechanacimiento" placeholder="21/04/1997">
</div>
<form>


                Datos del representante
<form>
<div class = "form-group">
<label for="exampleInputEmail1">Nombres</label>
<input type="text" class="form-control" name="Nombres" placeholder="Escribe los nombres">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Apellidos</label>
<input type="text" class="form-control" name="apellidos" placeholder="Escribe tus apellidos">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Cedula</label>
<input type="text" class="form-control" name="cedula" placeholder="Escribe la cedula V12344565">
</div>

<button type="submit" class="btn btn-primary">Inscribir</button>
</form>

<?php include("template/pie.php"); ?>