<?php 
  require 'header.php'
 ?>
    <!-- Main content -->
        <main class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">SiMCAV</li>
                <li class="breadcrumb-item active">Cuenca</li>
            </ol>

        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row" id="listadoregistros">
                      <div class="col-md-1"></div>
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-header" id="btnagregar">
                                    <i class="fa fa-signal"></i> Categorías <button style="margin-left: 2%;" class="btn btn-success btn-sm" onclick="mostrarform(true)"><li class="fa fa-plus-circle"></li> Agregar</button>
                                </div>
                                <div class="card-block">
                                  <div class="widget-content nopadding table-responsive">
                                    <table class="table table-striped table-bordered table-condensed table-hover" id="tbllistado">
                                        <thead>
                                            <tr>
                                                <th>Opciones</th>
                                                <th>Nombre</th>
                                                <th>Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody> 
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                    <div class="row" id="formularioregistros">
                      <div class="col-md-3"></div>
                      <div class="col-md-7">
                      <div class="card">
                        <div class="card-header">
                            <i class="fa fa-pencil-square-o"></i>Categorías <button onclick="cancelarform()" style="margin-left: 2%;" class="btn btn-info btn-sm"><li class="fa fa-list-alt"></li> Ver listado</button>
                        </div>
                        <div class="card-block">
                            <form method="post" id="formulario">
                                <div class="form-group col-md-11">
                                      <label>Nombre</label>
                                      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de la categoría" required>
                                      <label>Tipo</label>
                                      <div>
                                        <label for="producto">Producto</label>
                                        <input type="radio" name="tipo" value="1" id="producto">
                                        <label for="servicio">Servicio</label>
                                        <input type="radio" name="tipo" value="0" id="servicio">
                                      </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="btnGuardar" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
                            <button type="reset" class="btn btn-sm btn-danger" onclick="cancelarform()" style="margin-left: 1%"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                        </div>
                      </form>
                    </div>
                    <!-- ./card-->
                  </div>
                </div>
                <!-- ./row -->
            </div>
        </div>
        <!-- /.conainer-fluid -->
    </main>
</div>
<?php
  require 'footer.php';
?>
<script type="text/javascript" src="scripts/categoria.js"></script>
