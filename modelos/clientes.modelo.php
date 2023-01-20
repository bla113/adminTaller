<?php

require_once "conexion.php";


class ModeloCliente{


    static public function mdlBuscarCliente($tabla,$item,$valor){
       

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);
           
			$stmt -> execute();

			return $stmt -> fetch();

    }
    static public function mdlCrearCliente(){
        
    }
    static public function mdlActualizarCliente(){
        
    }
    static public function mdlEliminarCliente(){
        
    }


}