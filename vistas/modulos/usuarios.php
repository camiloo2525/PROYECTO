

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          

          <div class="box">
            <div class="box-header">

            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuarios"> Agregar Usuarios</button>



              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped tablas">
                <thead>
                <tr>
                  <th>#</th>
                  <th>nombre</th>
                  <th>usuario</th>
                  <th>perfil</th>
                  <th>fecha</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                <?php

                $item= null;
                $valor = null;

                $usuarios = ControladorUsuarios :: ctrMostrarUsuarios ($item,$valor);

                foreach($usuarios as $key => $valores){

                  echo "

                  <tr>

                  <td>".($key+1)."</td>
                  <td>".$valores["nombre"]."</td>
                  <td>".$valores["usuario"]."</td>
                  <td>".$valores["perfil"]."</td>
                  <td>".$valores["fecha"]."</td>

                  <td>
                  
                  <button class='btn btn-primary btnEditarUsuario' idUsuario=".$valores["id"]."
                  data-toogle='modal' data-target='#modalEditarUsuarios'>Editar</button>
                  
                  
                  <button class='btn btn-danger'>Eliminar</button>
                  
                  </td>
                  

                  </tr>

                  ";
                }

                ?>
               

                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<div  id="modalEditarUsuarios" class="modal fade" role="dialog">

<div class= "modal-dialog">

<div class= "modal-content">

<form rool="form" method="post" action="">

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>

  <h4 class="modal-title">Editar usuarios</h4>
</div>

<div class="modal-body">
<div class="box-body">
<div class="form-group">
<div class="input-group">

<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input type="text" class="form-control input-lg" name="editarnombre" id="editarNombre">

</div>
</div>

<div class="form-group">
<div class="input-group">

<span class="input-group-addon"><i class="fa fa-users"></i></span>
<input type="text" class="form-control input-lg" name="editarusuario" id="editarUsuario">

</div>
</div>

<div class="form-group">
<div class="input-group">

<span class="input-group-addon"><i class="fa fa-key"></i></span>
<input type="password" class="form-control input-lg" name="editarpassword" id="editarPassword">

</div>
</div>

<div class="form-group">
<div class="input-group">

<span class="input-group-addon"><i class="fa fa-th"></i></span>
<input type="Administrador" class="form-control input-lg" name="editarperfil" id="editarPerfil">

</div>
</div>

</div>
</div>

<div class="modal-footer">
  
<button type="button" class="btb btn-default" data-dismiss="modal">Salir</button>
<button type="submit" class="btb btn-primary">Editar usuario</button>
</div>

</form>

<?php

$crearUsuarios = new ControladorUsuarios();
$crearUsuarios -> ctrEditarUsuarios();

?>

</div>

</div>
</div>
  


