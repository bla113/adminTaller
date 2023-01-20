<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Administrar matnimientos de los Vehículos <i class="fa fa-truck"></i>

        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Administrar ventas</li>


        </ol>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">

            <div class="box-header with-border">
                <h3 class="box-title">Crear Mantenimiento de Vehículos Registrados</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>

            </div>

            <div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa fa-users" aria-hidden="true"></i>

                                            Datos del Cliente
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">

                                        <div class="col-md-4">
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Identificación Cliente</label>
                                                    <input type="text" class="form-control" id="CedulaCliente"
                                                        name="CedulaCliente" required
                                                        placeholder="Digite el Numero de Identificación">
                                                </div>
                                                <button type="submit" class="btn btn-success btn-lg"><i
                                                        class="fa fa-search"></i>
                                                    Buscar Cliente</button>


                                               
                                                <hr class="">

                                                <?php

                                                $clientes = ControladorClientes::ctrBuscarClientes();
                                                var_dump($clientes);
                                                ?>
                                            </form>
                                            <button type="submit" class="btn btn-danger btn-lg"><i
                                                        class="fa fa-save"></i>
                                                    Guardar</button>


                                            <button class="btn btn-primary btn-lg" data-toggle="modal"
                                                data-target="#modalAgregarCliente">
                                                <i class="fa fa-user" aria-hidden="true"></i>


                                                Agregar Cliente

                                            </button>
                                            <hr class="">

                                            <form action="" method="post">
                                                <input type="hidden" value="">
                                                <button type="submit" class="btn btn-warning btn-lg"><i
                                                        class="fa fa-key"></i>
                                                    Generar Código</button>
                                            </form>



                                        </div>

                                        <div class="col-md-4">
                                        <?php 
                                        $array = array(1, 2, 3, 4);
                                        foreach ($clientes as &$valor) {
                                                              
                                                            $valor['IDENTIFICACION'];
                                                            }

                              ?>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Identificación Cliente</label>
                                                    <input type="text" value=" class="form-control" id="indetificacionCliente"
                                                        name="indetificacionCliente" require>
                                                </div>
                                           
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nombre Completo </label>
                                                <input type="email" class="form-control" id="nombreCompleto"
                                                    name="nombreCompleto" aria-describedby="emailHelp"
                                                    placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo Electrónico</label>
                                                <input type="email" class="form-control" id="emailCliente"
                                                    aria-describedby="emailHelp" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="telfonoCelular">Teléfono</label>
                                                <input type="email" class="form-control" id="telfonoCelular"
                                                    name="telfonoCelular" enabled require aria-describedby="emailHelp"
                                                    placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Dirección</label>
                                                <input type="email" class="form-control" id="direccionCliente"
                                                    name="direccionCliente" enabled require aria-describedby=""
                                                    placeholder="Ingrese Dirección">
                                            </div>

                                      <?php  ?>
                                        </div>


                                    </div>

                                </div>

                            </div>

                            <div class="panel panel-primary">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="fa fa-car" aria-hidden="true"></i>

                                            Datos Vehículo
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">



                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <form action="" method="post">
                                                    <label for="exampleInputEmail1">Número de Placa</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Digite el Numero Placa Ejemplo BBB996"
                                                        id="numeroplaca">
                                                    <small>Ejemplo: <strong clas="font bold">BBN123</strong> /
                                                        <strong>588925</strong></small>

                                            </div>


                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                                Buscar Placa</button>
                                            </form>

                                            <button class="btn btn-success" data-toggle="modal"
                                                data-target="#modalAgregarVehiculo">
                                                <i class="fa fa-car" aria-hidden="true"></i>


                                                Agregar Vehículo

                                            </button>

                                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>
                                                Guardar</button>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Placa</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" dissabled placeholder="Placa">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Marca</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Marca">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Estilo</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Estilo">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tipo de Combustible</label>
                                                <input type="email" class="form-control" id="telfonoCelular"
                                                    aria-describedby="emailHelp" placeholder="Tipo de Combustible">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tipo Transmisión</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Tipo Transmisión">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Modelo</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Modelo">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Color</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Color">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tracción</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Tracción">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Cilindrada</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Cilindrada">
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa fa-briefcase" aria-hidden="true"></i>

                                        Detalle de Mantenimiento
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">

                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Técnico Encargado</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" dissabled placeholder="Tecnico">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Fecha</label>
                                            <input type="date" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Kilómetro Salida">
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kilómetro de Ingreso</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" dissabled
                                                placeholder="Kilómetro de Ingreso">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kilómetro Salida</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Kilómetro Salida" required>
                                        </div>



                                    </div>




                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Tipo de Mantenimiento</label>
                                            <select class="form-control select2" multiple="multiple"
                                                data-placeholder="ddd" style="width: 50%" required>
                                                <option value="Cambio de Aceite">Cambio de Aceite</option>
                                                <option value="Mecánica Rapida">Mecánica Rapida</option>
                                                
                                            </select>
                                        </div>


                                        
                                        <button class="btn btn-primary" method="post" >
                                        <i class="fa fa-cogs" aria-hidden="true"></i>



                                                       Guardar Detalle Manteniminimiento

                                                    </button>
                                    </div>



                                </div>
                            </div>
                        </div>


                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">

                                        <i class="fa fa-money" aria-hidden="true"></i>


                                        Productos y Facturación
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">






                                    <div class="col-md-6">
                                        <section class="content">

                                            <div class="box">

                                                <div class="box-header with-border">

                                                    <button class="btn btn-primary" data-toggle="modal"
                                                        data-target="#modalAgregarProducto">
                                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>


                                                        Agregar producto

                                                    </button>


                                                </div>

                                                <div class="box-body">

                                                    <table
                                                        class="table table-bordered table-striped dt-responsive tablas">

                                                        <thead>

                                                            <tr>

                                                                <th style="width:10px">Código</th>
                                                                <th>Descripción</th>
                                                                <th>Precio</th>
                                                                <th>Tamaño</th>
                                                                <th>Cantidad</th>
                                                                <th>Selección</th>
                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                            <tr>

                                                                <td>CD123</td>

                                                                <td>EACEITE REPSOL 50W20</td>
                                                                <td>250.233,45</td>
                                                                <td>Litro</td>
                                                                <td><input style="width:60px" type="number" value="1"
                                                                        disabled></td>
                                                                <td>

                                                                    <div class="btn-group">


                                                                        <button type="submit" class="btn btn-info"><i
                                                                                class="fa fa-check"></i> </button>


                                                                    </div>

                                                                </td>

                                                            </tr>
                                                            <tr>

                                                                <td>CD123</td>

                                                                <td>EACEITE REPSOL 50W20</td>
                                                                <td>250.233,45</td>
                                                                <td>Litro</td>
                                                                <td><input style="width:60px" type="number" value="1"
                                                                        disabled></td>
                                                                <td>

                                                                    <div class="btn-group">


                                                                        <button type="submit" class="btn btn-info"><i
                                                                                class="fa fa-check"></i> </button>


                                                                    </div>

                                                                </td>

                                                            </tr>





                                                        </tbody>

                                                    </table>

                                                </div>

                                            </div>

                                        </section>
                                    </div>

                                    <div class="col-md-4">
                                        <section class="content">

                                            <div class="box">

                                                <div class="box-header with-border">



                                                </div>

                                                <div class="box-body">

                                                    <table class="table table-bordered ">

                                                        <thead>

                                                            <tr>

                                                                <th>Descripción</th>
                                                                <th>Precio</th>
                                                                <th>Cantidada</th>
                                                                <th>Total</th>
                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                            <tr>
                                                                <td>EACEITE REPSOL 50W20</td>
                                                                <td>250.233,45</td>
                                                                <td>2</td>
                                                                <td>250.233,45</td>
                                                                <td>
                                                                    <div class="btn-group">


                                                                        <button type="submit" class="btn btn-danger"><i
                                                                                class="fa fa-times"></i> </button>


                                                                    </div>

                                                                </td>

                                                            </tr>



                                                        </tbody>

                                                    </table>

                                                </div>

                                            </div>

                                        </section>



                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Sub Total</label>
                                            <label class="form-control">24.523,52</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Descuento</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Decuento  0 %">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Impuesto</label>
                                            <label for="" class="form-control">13%</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total</label>
                                            <label for="" class="form-control"></label>
                                        </div>


                                        <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-lg"><i
                                                        class="fa fa-save"></i>
                                                    Guardar Mantenimiento</button>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa fa-gavel" aria-hidden="true"></i>

                                        Términos y servicios
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">

                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Técnico Encargado</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" dissabled placeholder="Tecnico" disabled>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="">Código de Verificación</label>
                                                <input type="text" class="form-control" id="" name="CodigoCliente"
                                                    aria-describedby="emailHelp" dissabled
                                                    placeholder=" Ingrese el Codigo de Verificacion" disabled>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3">



                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customSwitch2" />
                                                <label class="custom-control-label" for="customSwitch2">¿ El cliente
                                                    acepta los terminos y condiciones ?</label>
                                            </div>



                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-lg"><i
                                                        class="fa fa-save"></i>
                                                    Guardar Mantenimiento</button>
                                            </div>
                                        </div>

                                    </div>







                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Crear tiket de Servicio
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script>
$(document).ready(function() {
    $('#numeroplaca').mask('00000000');
    $('#telfonoCelular').mask('0000-0000');
    $('#CedulaCliente').mask('000000000000');
});
</script>


<!--=====================================
MODAL AGREGAR CATEGORÍA
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post">

                <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

                <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Agregar Producto</h4>

                </div>

                <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

                <div class="modal-body">

                    <div class="box-body">

                        <!-- ENTRADA PARA EL NOMBRE -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevaCategoria"
                                    placeholder="Ingresar categoría" required>

                            </div>

                        </div>

                    </div>

                </div>

                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar categoría</button>

                </div>

                <?php

          $crearCategoria = new ControladorCategorias();
          $crearCategoria -> ctrCrearCategoria();

        ?>

            </form>

        </div>

    </div>

</div>


<!--=====================================
MODAL AGREGAR VRHICULO
======================================-->

<div id="modalAgregarVehiculo" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post">

                <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

                <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Agregar Cliente</h4>

                </div>

                <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

                <div class="modal-body">

                    <div class="box-body">

                        <!-- ENTRADA PARA EL NOMBRE -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevaCategoria"
                                    placeholder="Ingresar categoría" required>

                            </div>

                        </div>

                    </div>

                </div>

                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar cliente</button>

                </div>

                <?php

          $crearCategoria = new ControladorCategorias();
          $crearCategoria -> ctrCrearCategoria();

        ?>

            </form>

        </div>

    </div>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post">

                <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

                <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Agregar Cliente</h4>

                </div>

                <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

                <div class="modal-body">

                    <div class="box-body">

                        <!-- ENTRADA PARA EL NOMBRE -->

                        <div class="form-group">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                                <input type="text" class="form-control input-lg" name="nuevaCategoria"
                                    placeholder="Ingresar categoría" required>

                            </div>

                        </div>

                    </div>

                </div>

                <!--=====================================
        PIE DEL MODAL
        ======================================-->

                <div class="modal-footer">

                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                    <button type="submit" class="btn btn-primary">Guardar cliente</button>

                </div>

                <?php

          $crearCategoria = new ControladorCategorias();
          $crearCategoria -> ctrCrearCategoria();

        ?>

            </form>

        </div>

    </div>

</div>