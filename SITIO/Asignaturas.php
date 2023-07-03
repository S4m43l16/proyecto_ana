<?php include("template/cabecera.php"); ?>
<?php
print_r($_POST);
print_r($_FILES);
?>


<div class="col-md-5">

<div class="card">
    <div class="card-header">
        Datos de asignaturas

    </div>
    <div class="card-body">
    <form method= "POST" enctype="multipart/form-data">
   <div class = "form-group">
   <label for="txtID_Asignatura">ID</label>
   <input type="TEXT" class="form-control" name="txtID_Asignatura" id="txtID_Asignatura"  placeholder="ID">
   </div>

   <div class = "form-group">
   <label for="txtNombre_Asignatura">Nombre de la Asignatura</label>
   <input type="TEXT" class="form-control" name="txtNombre_Asignatura" id="txtNombre_Asignatura"  placeholder="Nombre de Asignatura">
   </div>
 
   <div class = "form-group">
   <label for="txtIdDocente">Nombre del docente</label>
   <input type="text" class="form-control" name="txtIdDocente" id="txtIdDocente" placeholder="Nombre del docente">
   </div>

   <div class="form-group">
                    <label for="txtNivel_Asignatura">Nivel de instrucción</label>
                    <select class="custom-select" name="txtNivel_Asignatura" id="txtNivel_Asignatura">
                        <option selected>Selecciona una opcion</option>
                        <option value="text">Bachillerato</option>
                        <option value="text">Primaria</option>
                    </select>
                </div>

        <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="accion" value= "Agregar" class="btn btn-success">Agregar</button>
         <button type="submit" name="accion" value= "Modificar" class="btn btn-warning">Modificar</button>
          <button type="submit" name="accion" value= "Cancelar" class="btn btn-info">Cancelar</button>
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

</div>



<?php include("template/pie.php"); ?>