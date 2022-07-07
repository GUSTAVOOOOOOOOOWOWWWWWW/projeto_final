<?php

    class Conexao{
        static function getConnection(){
            $conexao = new mysqli(
                "localhost",
                "root",
                "info",
                "db_catalogo_3e1",
                3306
            );
    
            if($conexao->connect_error){
                echo $conexao->connect_error;
                die();
            }

            return $conexao;
        }
    }
    
?>