<?php
if($_POST){


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

</head>
<body>  
        
            <div class="jumbotron">
                <h1 class="display-3"><center>Bienvenido</center></h1>
                <p class="lead"><center>Colegio Estadal Dr Ramon Reinoso Nuñez</center> </p>
                <hr class="my-2">
                <p><center>Sistema de Gestion Escolar</center></p>
                <p class="lead">
                </p>
            </div>
            <div class="container">
    <div class="row">
<div class="col-md-4">
  
</div>
    
      <div class="col-md-4">
<br/><br/><br/>
        <div class="card">
          <div class="card-header">
            Inicio de sesion
          </div>
          <div class="card-body">
<?php 
    if(isset($_POST['enviar'])){

      if(empty($_POST['txtUsuario']) || empty($_POST('txtClave'))){
        echo"<script language='JavaScript'>
        alert('No han sido ingresado los datos');
        location.assign('index.php');
        </script>";
      }else{
          $txtUsuario=$_POST['txtUsuario'];
          $txtClave=$_POST['txtClave'];
          $sql="select * from usuario where usuario='".$usuario."' and clave='".$clave."'";
          $resultado=mysqli_query($conexion, $sql); 
          if($fila=mysqli_fetch_assoc($resultado)){ 
                echo "<script language='JavaScript'> 
            alert('Bienvenido');
            location.assign('index.php');
            </script>";
          }else{
            echo "<script language='JavaScript'> 
            alert('Datos son erroneos');
            location.assign('index.php');
            </script>";
      }
    }else
    {

?>
            <form action="<?=$SERVER['PHP_SELF']?>" method="POST" >
            <div class = "form-group">
            <label >Usuario</label>
            <input type="text" class="form-control" name="txtUsuario" placeholder="Escribe tu usuario">
            
            </div>
            <div class="form-group">
            <label for="txtClave">Clave:</label>
            <input type="password" class="form-control" name="txtClave" placeholder="Escribe tu clave">
            </div>
           
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Entrar</button>
            </form>
           
<?php
    }
?>
            
          </div>
        </div>
        
      </div>
<?php include("template/pie.php"); ?>
