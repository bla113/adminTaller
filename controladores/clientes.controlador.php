<?php


class ControladorClientes{

    static public function ctrBuscarClientes(){

        if(isset($_POST['CedulaCliente'])){

            

                $tabla = "tbl_clintes";

				$valor = $_POST["CedulaCliente"];

                $item="IDENTIFICACION";

                

                $respuesta = ModeloCliente::mdlBuscarCliente($tabla,$item,$valor);

                //var_dump($respuesta);

                return $respuesta;



            

        }





    }
    static public function ctrCrearClientes(){




    }
    static public function ctrActualizarClientes(){




    }
    static public function ctrEliminarClientes(){




    }



}