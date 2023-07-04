<?php include("template/cabecera.php"); ?>
<?php

$txtid_docente=(isset($_POST['txtid_docente']))?$_POST['txtid_docente']:"";
$txtfoto_docente=(isset($_FILES['txtfoto_docente']['name']))?$_FILES['txtfoto_docente']['name']:"";
$txtnombres_docente=(isset($_POST['txtnombres_docente']))?$_POST['txtnombres_docente']:"";
$txtapellidos_docente=(isset($_POST['txtapellidos_docente']))?$_POST['txtapellidos_docente']:"";
$txtcedula_docente=(isset($_POST['txtcedula_docente']))?$_POST['txtcedula_docente']:"";
$txtsexo_docente=(isset($_POST['txtsexo_docente']))?$_POST['txtsexo_docente']:"";
$txtfechanacimiento_docente=(isset($_POST['txtfechanacimiento_docente']))?$_POST['txtfechanacimiento_docente']:"";
$txttlf_docente=(isset($_POST['txttlf_docente']))?$_POST['txttlf_docente']:"";
$txtdireccion_docente=(isset($_POST['txtdireccion_docente']))?$_POST['txtdireccion_docente']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("config/bd.php");
//INSERT INTO `docente` (`id_docente`, `foto_docente`, `nombres_docente`, `apellidos_docente`, `cedula_docente`, `sexo_docente`, `fechanacimiento_docente`, `tlf_docente`, `direccion_docente`) VALUES (NULL, 'imagen.jpg', 'maria', 'perez', 'v1234433', 'femenino', '21/04/1997', '0423-23232322', 'maracaibo');

switch($accion){

        case "Agregar":
            $sentenciaSQL=$conexion->prepare("INSERT INTO docente (foto_docente, nombres_docente, apellidos_docente, cedula_docente, sexo_docente, fechanacimiento_docente, tlf_docente, direccion_docente) VALUES ( :foto_docente,:nombres_docente,:apellidos_docente,:cedula_docente, :sexo_docente,:fechanacimiento_docente,:tlf_docente,:direccion_docente );");
            $sentenciaSQL->bindParam(':foto_docente',$txtfoto_docente);
            $sentenciaSQL->bindParam(':nombres_docente',$txtnombres_docente);
            $sentenciaSQL->bindParam(':apellidos_docente',$txtapellidos_docente);
            $sentenciaSQL->bindParam(':cedula_docente',$txtcedula_docente);
            $sentenciaSQL->bindParam(':sexo_docente',$txtsexo_docente);
            $sentenciaSQL->bindParam(':fechanacimiento_docente',$txtfechanacimiento_docente);
            $sentenciaSQL->bindParam(':tlf_docente',$txttlf_docente);
            $sentenciaSQL->bindParam(':direccion_docente',$txtdireccion_docente);

            //2:14
            // $fecha= new datetime();
            // $nombreArchivo=($txtfoto_docente!="")?$fecha->getTimestamp()."_".$FILES["txtfoto_docente"]["name"]:"imagen.jpg";
            // $tmpImagen=$_FILES["txtfoto_docente"]["tmp_name"];
            // if($tmpImagen!=""){
            //     move_uploaded_file($tmpImagen,"../img/".$nombreArchivo);

            // }
            // $sentenciaSQL->bindParam(':foto_docente',$nombreArchivo);
            $sentenciaSQL->execute();

        break;
        case "Modificar":
        //echo "Presionando boton modificar";
        $sentenciaSQL=$conexion->prepare("UPDATE docente SET nombres_docente=:nombres_docente WHERE id_docente=:id_docente");
        $sentenciaSQL->bindParam(':nombres_docente',$txtnombres_docente);
        $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE docente SET apellidos_docente=:apellidos_docente WHERE id_docente=:id_docente");
        $sentenciaSQL->bindParam(':apellidos_docente',$txtapellidos_docente);
        $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
        $sentenciaSQL->execute();
       
        $sentenciaSQL=$conexion->prepare("UPDATE docente SET cedula_docente=:cedula_docente WHERE id_docente=:id_docente");
        $sentenciaSQL->bindParam(':cedula_docente',$txtcedula_docente);
        $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE docente SET sexo_docente=:sexo_docente WHERE id_docente=:id_docente");
        $sentenciaSQL->bindParam(':sexo_docente',$txtsexo_docente);
        $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE docente SET fechanacimiento_docente=:fechanacimiento_docente WHERE id_docente=:id_docente");
        $sentenciaSQL->bindParam(':fechanacimiento_docente',$txtfechanacimiento_docente);
        $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE docente SET tlf_docente=:tlf_docente WHERE id_docente=:id_docente");
        $sentenciaSQL->bindParam(':tlf_docente',$txttlf_docente);
        $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE docente SET direccion_docente=:direccion_docente WHERE id_docente=:id_docente");
        $sentenciaSQL->bindParam(':direccion_docente',$txtdireccion_docente);
        $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
        $sentenciaSQL->execute();


        // if($tmpImagen!=""){
        //     $tmpImagen=$_FILES["txtImagen"]["tmp_name"
        //     move_uploaded_file($tmpImagen,"../img/".$nombreArchivo);

        // }
        break;

        case "Cancelar":
            echo "Presionando boton cancelar";
            break;

        case "Seleccionar":
        //    echo "Presionando boton Seleccionar";
            $sentenciaSQL=$conexion->prepare("SELECT * FROM docente WHERE id_docente=:id_docente");
            $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
            $sentenciaSQL->execute();
            //$docentes=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            // $txtfoto_docente=$docentes['foto_docente'];
            // $txtnombres_docente=$docentes['nombres_docente'];
            // $txtapellidos_docente=$docentes['apellidos_docente'];
            // $txtcedula_docente=$docentes['cedula_docente'];
            // $txtsexo_docente=$docentes['sexo_docente'];
            // $txtlistadocente=$docentes['fechanacimiento_docente'];
            // $txttlf_docente=$docentes['tlf_docente'];
            // $txtdireccion_docente=$docentes['direccion_docente'];

            $docentes=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
            if ($docentes !== false) {
                $txtfoto_docente=$docentes['foto_docente'];
                $txtnombres_docente=$docentes['nombres_docente'];
                $txtapellidos_docente=$docentes['apellidos_docente'];
                $txtcedula_docente=$docentes['cedula_docente'];
                $txtsexo_docente=$docentes['sexo_docente'];
                $txtlistadocente=$docentes['fechanacimiento_docente'];
                $txttlf_docente=$docentes['tlf_docente'];
                $txtdireccion_docente=$docentes['direccion_docente'];
            }

            break;

        case "Borrar":

            // $sentenciaSQL=$conexion->prepare("SELECT foto_docente FROM docente WHERE id_docente=:id_docente");
            // $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
            // $sentenciaSQL->execute();
            // $docentes=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            // if(isset($docente["foto_docente"]) &&($docente["foto_docente"]!="imagen.jpg")){
            //     if(file_exists("../img/".$docente["foto_docente"])){
            //         // unlink("../img".$docente["imagen.jpg"])
            //     }
            // }
            $sentenciaSQL=$conexion->prepare("DELETE FROM docente WHERE id_docente=:id_docente");
             $sentenciaSQL->bindParam(':id_docente',$txtid_docente);
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
    <label for="txtid_docente">ID</label>
    <input type="text" class="form-control" value="<?php echo $txtid_docente; ?>" name="txtid_docente" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtfoto_docente">Foto</label>
    <?php echo $txtfoto_docente; ?>
    <input type="file" class="form-control" name="txtfoto_docente" id="txtfoto_docente" placeholder="Sube el archivo">
    </div>

    <div class = "form-group">
    <label for="txtnombres_docente">Nombres</label>
    <input type="text" class="form-control" value="<?php echo $txtnombres_docente; ?>" name="txtnombres_docente" id="txtnombres_docente" placeholder="Escribe los nombres">
    </div>

    <div class = "form-group">
    <label for="txtapellidos_docente">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $txtapellidos_docente; ?>" name="txtapellidos_docente" id="txtapellidos_docente" placeholder="Escribe tus apellidos">
    </div>

    <div class = "form-group">
    <label for="txtcedula_docente">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $txtcedula_docente; ?>" name="txtcedula_docente" id="txtcedula_docente" placeholder="Escribe la cedula V12344565">
    </div>

    <div class = "form-group">
    <label for="txtsexo_docente">Sexo</label>
    <input type="text" class="form-control" value="<?php echo $txtsexo_docente; ?>" name="txtsexo_docente" id="txtsexo_docente" placeholder="Femenino o masculino">
    </div>

    <div class = "form-group">
    <label for="txtfechanacimiento_docente">Fecha de nacimiento</label>
    <input type="text" class="form-control" value="<?php echo $txtfechanacimiento_docente; ?>" name="txtfechanacimiento_docente" id="txtfechanacimiento_docente" placeholder="21/04/1997">
    </div>

    <div class = "form-group">
    <label for="txttlf_docente">Teléfono</label>
    <input type="text" class="form-control" value="<?php echo $txttlf_docente; ?>" name="txttlf_docente" id="txttlf_docente" placeholder="04xx-xxxxxxx">
    </div>

    <div class = "form-group">
    <label for="txtdireccion_docente">Dirección</label>
    <input type="text" class="form-control" value="<?php echo $txtdireccion_docente; ?>" name="txtdireccion_docente" id="txtdireccion_docente" placeholder="Calle, Sector">
    </div>


  


        <div class="btn-group" role="group" aria-label="" alight= "center">
          <button type="submit" name="accion" value= "Agregar" class="btn btn-success">Agregar</button>
         <button type="submit" name="accion" value= "Modificar" class="btn btn-warning">Modificar</button>
          <button type="submit" name="accion" value= "Cancelar" class="btn btn-info">Cancelar</button>
        </div>
    <form>

<br/><br/>
</div>

<div class="col-md-12">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Teléfono</th>
            <th>Dirección</th>
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