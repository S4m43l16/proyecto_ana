<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebita</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

</head>
<body>  
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

            <form method="POST" >
            <div class = "form-group">
            <label >Usuario</label>
            <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">
            
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Clave:</label>
            <input type="password" class="form-control" name="clave" placeholder="Escribe tu clave">
            </div>
           
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
            
            

            
          </div>
        </div>
        
      </div>
      
      <?php include("template/pie.php"); ?>