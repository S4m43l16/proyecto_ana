<?php include("template/cabecera.php"); ?>
<?php
//print_r($_POST);
include("config/bd.php");

$txtID_Asignatura=(isset($_POST['txtID_Asignatura']))?$_POST['txtID_Asignatura']:"";
$txtNombre_Asignatura=(isset($_POST['txtNombre_Asignatura']))?$_POST['txtNombre_Asignatura']:"";
$txtIdDocente_Asignatura=(isset($_POST['txtIdDocente_Asignatura']))?$_POST['txtIdDocente_Asignatura']:"";
$txtNivel_Asignatura=(isset($_POST['txtNivel_Asignatura']))?$_POST['txtNivel_Asignatura']:"";
$txtseccion_Asignatura=(isset($_POST['txtseccion_Asignatura']))?$_POST['txtseccion_Asignatura']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
//echo $txtID_Asignatura."<br/>";
//echo $txtNombre_Asignatura."<br/>";
//echo $txtIdDocente_Asignatura."<br/>";
//echo $txtNivel_Asignatura."<br/>";
//echo $txtseccion_Asignatura."<br/>";

switch($accion){

    case "Agregar":
        $sentenciaSQL=$conexion->prepare("INSERT INTO asignaturas (Nombre_Asignatura, IdDocente_Asignatura, Nivel_Asignatura, Seccion_Asignatura) VALUES ( :Nombre_Asignatura, :IdDocente_Asignatura, :Nivel_Asignatura, :Seccion_Asignatura );");
        $sentenciaSQL->bindParam(':Nombre_Asignatura',$txtNombre_Asignatura);
        $sentenciaSQL->bindParam(':IdDocente_Asignatura',$txtIdDocente_Asignatura);
        $sentenciaSQL->bindParam(':Nivel_Asignatura',$txtNivel_Asignatura);
        $sentenciaSQL->bindParam(':Seccion_Asignatura',$txtseccion_Asignatura);
        $sentenciaSQL->execute();
        header("Location:Asignaturas.php");
    break;
    case "Modificar":
    //echo "Presionando boton modificar";
        $sentenciaSQL=$conexion->prepare("UPDATE asignaturas SET Nombre_Asignatura=:Nombre_Asignatura WHERE Id_Asignatura=:Id_Asignatura");
        $sentenciaSQL->bindParam(':Nombre_Asignatura',$txtNombre_Asignatura);
        $sentenciaSQL->bindParam(':Id_Asignatura',$txtID_Asignatura);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE asignaturas SET IdDocente_Asignatura=:IdDocente_Asignatura WHERE Id_Asignatura=:Id_Asignatura");
        $sentenciaSQL->bindParam(':IdDocente_Asignatura',$txtIdDocente_Asignatura);
        $sentenciaSQL->bindParam(':Id_Asignatura',$txtID_Asignatura);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE asignaturas SET Nivel_Asignatura=:Nivel_Asignatura WHERE Id_Asignatura=:Id_Asignatura");
        $sentenciaSQL->bindParam(':Nivel_Asignatura',$txtNivel_Asignatura);
        $sentenciaSQL->bindParam(':Id_Asignatura',$txtID_Asignatura);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE asignaturas SET Seccion_Asignatura=:Seccion_Asignatura WHERE Id_Asignatura=:Id_Asignatura");
        $sentenciaSQL->bindParam(':Seccion_Asignatura',$txtseccion_Asignatura);
        $sentenciaSQL->bindParam(':Id_Asignatura',$txtID_Asignatura);
        $sentenciaSQL->execute();
        header("Location:Asignaturas.php");
    break;

    case "Cancelar":
        header("Location:Asignaturas.php");
        break;

    case "Seleccionar":
       // echo "Presionando boton Seleccionar";
       $sentenciaSQL=$conexion->prepare("SELECT * FROM asignaturas WHERE Id_Asignatura=:Id_Asignatura");
            $sentenciaSQL->bindParam(':Id_Asignatura',$txtID_Asignatura);
            $sentenciaSQL->execute();
            $asignatura=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        
            $txtNombre_Asignatura=$asignatura['Nombre_Asignatura'];
            $txtIdDocente_Asignatura=$asignatura['IdDocente_Asignatura'];
            $txtNivel_Asignatura=$asignatura['Nivel_Asignatura'];
            $txtseccion_Asignatura=$asignatura['Seccion_Asignatura'];

        break;

    case "Borrar":

            $sentenciaSQL=$conexion->prepare("DELETE FROM asignaturas WHERE Id_Asignatura=:Id_Asignatura");
            $sentenciaSQL->bindParam(':Id_Asignatura',$txtID_Asignatura);
            $sentenciaSQL->execute();
            header("Location:Asignaturas.php");
    break;
}

$sentenciaSQL=$conexion->prepare("SELECT * FROM asignaturas");
$sentenciaSQL->execute();
$listaAsignaturas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<br/>
<div class="col-md-5">

<div class="card">
    <div class="card-header">
        Datos de asignaturas

    </div>
    <div class="card-body">
    <form method= "POST" enctype="multipart/form-data">
   <div class = "form-group">
   <label for="txtID_Asignatura">ID</label>
   <input type="TEXT" required readonly class="form-control" value="<?php echo $txtID_Asignatura; ?>"  name="txtID_Asignatura" id="txtID_Asignatura"  placeholder="ID">
   </div>

   <div class = "form-group">
   <label for="txtNombre_Asignatura">Nombre de la Asignatura</label>
   <input type="TEXT" REQUIRED class="form-control" value="<?php echo $txtNombre_Asignatura; ?>" name="txtNombre_Asignatura" id="txtNombre_Asignatura"  placeholder="Nombre de Asignatura">
   </div>
 
   <div class = "form-group">
   <label for="txtIdDocente_Asignatura">ID del docente</label>
   <input type="text" REQUIRED class="form-control" value="<?php echo $txtIdDocente_Asignatura; ?>" name="txtIdDocente_Asignatura" id="txtIdDocente_Asignatura" placeholder="ID correspondiente al docente">
   </div>
   <!-- <br/>
   <div class="form-group">
                    <label for="txtNivel_Asignatura">Nivel de instrucción</label>
                    <select class="custom-select" value= "<?php echo $txtNivel_Asignatura; ?>" name="txtNivel_Asignatura" id="txtNivel_Asignatura">
                        <option selected>Selecciona una opcion</option>
                        <option value="Bachillerato" >Bachillerato</option>
                        <option value="Primaria" >Primaria</option>
                    </select>
                </div>

                <br/> -->
    <div class = "form-group">
    <label for="txtNivel_Asignatura">Nivel de instrucción</label>
    <input type="text" REQUIRED class="form-control" value="<?php echo $txtNivel_Asignatura; ?>" name="txtNivel_Asignatura" id="txtNivel_Asignatura" placeholder="Primaria o Bachillerato">
    </div>

    <div class = "form-group">
    <label for="txtseccion_Asignatura">Grado/Año y Sección</label>
    <input type="text" REQUIRED class="form-control" value="<?php echo $txtseccion_Asignatura; ?>" name="txtseccion_Asignatura" id="txtseccion_Asignatura" placeholder="Año o grado + seccion. Ejemplo: 1B">
    </div>
    <br/>
        <div class="btn-group" role="group" aria-label="" alight= "center">
        <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":""; ?> value= "Agregar" class="btn btn-success">Agregar</button>
        <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value= "Modificar" class="btn btn-warning">Modificar</button>
        <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":""; ?> value= "Cancelar" class="btn btn-info">Cancelar</button>
         </div>

   </form>
    </div>
  
</div>
  
   
   

</div>
<div class="col-md-7">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre de la asignatura</th>
            <th>Nombre del docente</th>
            <th>Nivel de instrucción</th>
            <th>Grado/Año y Sección</th>
            <th >Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaAsignaturas as $asignaturas) { ?>
        
        <tr>
            <td ><?php echo $asignaturas['Id_Asignatura']; ?></td>
            <td ><?php echo $asignaturas['Nombre_Asignatura']; ?></td>
            <td ><?php echo $asignaturas['IdDocente_Asignatura']; ?></td>
            <td ><?php echo $asignaturas['Nivel_Asignatura']; ?></td>
            <td ><?php echo $asignaturas['Seccion_Asignatura']; ?></td>
                
            <td >
            <form method="POST">

              <input type="hidden" name="txtID_Asignatura" id="txtID_Asignatura" value="<?php echo $asignaturas['Id_Asignatura']; ?>"/>
              <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>
              <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>

            </form>

            </td>
        </tr>
       <?php }?>
    </tbody>
</table>
</div>

</div>



<?php include("template/pie.php"); ?>