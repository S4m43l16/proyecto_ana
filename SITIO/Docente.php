<?php include("template/cabecera.php"); ?>
<?php

$id_docente=(isset($_POST['id_docente']))?$_POST['id_docente']:"";
$foto_docente=(isset($_FILES['foto_docente']['name']))?$_FILES['foto_docente']['name']:"";
$nombres_docente=(isset($_POST['nombres_docente']))?$_POST['nombres_docente']:"";
$apellidos_docente=(isset($_POST['apellidos_docente']))?$_POST['apellidos_docente']:"";
$cedula_docente=(isset($_POST['cedula_docente']))?$_POST['cedula_docente']:"";
$sexo_docente=(isset($_POST['sexo_docente']))?$_POST['sexo_docente']:"";
$fechanacimiento_docente=(isset($_POST['fechanacimiento_docente']))?$_POST['fechanacimiento_docente']:"";
$tlf_docente=(isset($_POST['tlf_docente']))?$_POST['tlf_docente']:"";
$direccion_docente=(isset($_POST['direccion_docente']))?$_POST['direccion_docente']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("config/bd.php");
//INSERT INTO `docente` (`id_docente`, `foto_docente`, `nombres_docente`, `apellidos_docente`, `cedula_docente`, `sexo_docente`, `fechanacimiento_docente`, `tlf_docente`, `direccion_docente`) VALUES (NULL, 'imagen.jpg', 'maria', 'perez', 'v1234433', 'femenino', '21/04/1997', '0423-23232322', 'maracaibo');

switch($accion){

        case "Agregar":
            $sentenciaSQL=$conexion->prepare("INSERT INTO docente (foto_docente, nombres_docente, apellidos_docente, cedula_docente, sexo_docente, fechanacimiento_docente, tlf_docente, direccion_docente) VALUES ( :foto_docente,:nombres_docente,:apellidos_docente,:cedula_docente, :sexo_docente,:fechanacimiento_docente,:tlf_docente,:direccion_docente );");
            $sentenciaSQL->bindParam(':foto_docente',$foto_docente);
            $sentenciaSQL->bindParam(':nombres_docente',$nombres_docente);
            $sentenciaSQL->bindParam(':apellidos_docente',$apellidos_docente);
            $sentenciaSQL->bindParam(':cedula_docente',$cedula_docente);
            $sentenciaSQL->bindParam(':sexo_docente',$sexo_docente);
            $sentenciaSQL->bindParam(':fechanacimiento_docente',$fechanacimiento_docente);
            $sentenciaSQL->bindParam(':tlf_docente',$tlf_docente);
            $sentenciaSQL->bindParam(':direccion_docente',$direccion_docente);
            $sentenciaSQL->execute();

        break;
        case "Modificar":
        //echo "Presionando boton modificar";
        $sentenciaSQL=$conexion->prepare("UPDATE docente SET nombres_docente=:nombres_docente WHERE id_docente=:id_docente");
        echo $id_docente;
        $sentenciaSQL->bindParam(':nombres_docente',$nombres_docente);
        $sentenciaSQL->bindParam(':id_docente',$id_docente);
        $sentenciaSQL->execute();
        break;

        case "Cancelar":
            echo "Presionando boton cancelar";
            break;

        case "Seleccionar":
        //    echo "Presionando boton Seleccionar";
            $sentenciaSQL=$conexion->prepare("SELECT * FROM docente WHERE id_docente=:id_docente");
            $sentenciaSQL->bindParam(':id_docente',$id_docente);
            $sentenciaSQL->execute();
            $docentes=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        
            $foto_docente=$docentes['foto_docente'];
            $nombres_docente=$docentes['nombres_docente'];
            $apellidos_docente=$docentes['apellidos_docente'];
            $cedula_docente=$docentes['cedula_docente'];
            $sexo_docente=$docentes['sexo_docente'];
            $listadocente=$docentes['fechanacimiento_docente'];
            $tlf_docente=$docentes['tlf_docente'];
            $direccion_docente=$docentes['direccion_docente'];

            break;

        case "Borrar":
            $sentenciaSQL=$conexion->prepare("DELETE FROM docente WHERE id_docente=:id_docente");
            $sentenciaSQL->bindParam(':id_docente',$id_docente);
            $sentenciaSQL->execute();
        //echo "Presionando boton Borrar";
        break;
}

$sentenciaSQL=$conexion->prepare("SELECT * FROM docente");
$sentenciaSQL->execute();
$listaDocente=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="jumbotron">
    <h1 class="display-3"><center>Docentes</center></h1>
    <p class="lead"><center>Datos del docente</center></p>
   
    </p>
</div>


<div class="col-md-12">

    <div class="card">
        <div class="card-header">
            Datos del docente
        </div>

        <div class="card-body">

    <form method="POST" enctype="multipart/form-data" >

    <div class = "form-group">
    <label for="id_docente">ID</label>
    <input type="text" class="form-control" value="<?php echo $id_docente; ?>" name="id_docente" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="foto_docente">Foto</label>
    <?php echo $foto_docente; ?>
    <input type="file" class="form-control" name="foto_docente" id="foto_docente" placeholder="Sube el archivo">
    </div>

    <div class = "form-group">
    <label for="nombres_docente">Nombres</label>
    <input type="text" class="form-control" value="<?php echo $nombres_docente; ?>" name="nombres_docente" id="nombres_docente" placeholder="Escribe los nombres">
    </div>

    <div class = "form-group">
    <label for="apellidos_docente">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $apellidos_docente; ?>" name="apellidos_docente" id="apellidos_docente" placeholder="Escribe tus apellidos">
    </div>

    <div class = "form-group">
    <label for="cedula_docente">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $cedula_docente; ?>" name="cedula_docente" id="cedula_docente" placeholder="Escribe la cedula V12344565">
    </div>

    <div class = "form-group">
    <label for="sexo_docente">Sexo</label>
    <input type="text" class="form-control" value="<?php echo $sexo_docente; ?>" name="sexo_docente" id="sexo_docente" placeholder="Femenino o masculino">
    </div>

    <div class = "form-group">
    <label for="fechanacimiento_docente">Fecha de nacimiento</label>
    <input type="text" class="form-control" value="<?php echo $fechanacimiento_docente; ?>" name="fechanacimiento_docente" id="fechanacimiento_docente" placeholder="21/04/1997">
    </div>

    <div class = "form-group">
    <label for="tlf_docente">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $tlf_docente; ?>" name="tlf_docente" id="tlf_docente" placeholder="04xx-xxxxxxx">
    </div>

    <div class = "form-group">
    <label for="direccion_docente">Direccion</label>
    <input type="text" class="form-control" value="<?php echo $direccion_docente; ?>" name="direccion_docente" id="direccion_docente" placeholder="# calle, sector">
    </div>


  


        <div class="btn-group" role="group" aria-label="" alight= "center">
          <button type="submit" name="accion" value= "Agregar" class="btn btn-success">Agregar</button>
         <button type="submit" name="accion" value= "Modificar" class="btn btn-warning">Modificar</button>
          <button type="submit" name="accion" value= "Cancelar" class="btn btn-info">Cancelar</button>
        </div>
    <form>

><br/><br/>
</div>

<div class="col-md-12">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaDocente as $docente) { ?>
        
        <tr>
            <td ><?php echo $docente['id_docente']; ?></td>
            <td ><?php echo $docente['foto_docente']; ?></td>
            <td ><?php echo $docente['nombres_docente']; ?></td>
            <td ><?php echo $docente['apellidos_docente']; ?></td>
            <td ><?php echo $docente['cedula_docente']; ?></td>
            <td ><?php echo $docente['sexo_docente']; ?></td>
            <td ><?php echo $docente['fechanacimiento_docente']; ?></td>
            <td ><?php echo $docente['tlf_docente']; ?></td>
            <td ><?php echo $docente['direccion_docente']; ?></td>

            <td >
                
            <form method="POST">

              <input type="hidden" name="id_docente" id="id_docente" value="<?php echo $docente['id_docente']; ?>"/>
              <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>
              <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>

            </form>

            </td>
        </tr>
       <?php }?>
    </tbody>
</table>
</div>

<?php include("template/pie.php"); ?>