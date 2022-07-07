<?php

    require_once "config/Conexao.php";

    class UsuarioModel{
        private $conexao;

        function __construct(){
            $this->conexao = Conexao::getConnection();
        }

        function inserir($login, $senha){
            $sql = "insert into usuario (login, senha) values (?,?)";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("ss", $login, $senha);
            $comando->execute();
        }

        function excluir($id){
            $sql = "delete from usuario where idusuario = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("i", $id);
            $comando->execute();
        }

        function atualizar($id, $login, $senha){
            $sql = "update usuario set login = ?, senha = ? where idusuario = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("ssi", $login, $senha, $id);
            $comando->execute();
        }

        function buscarPorLogin($login){
            $sql = "select * from usuario where login = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("s", $login);
            if($comando->execute()){
                $resultados = $comando->get_result();
                return $resultados->fetch_assoc();
            }
            return null;
        }

        function buscarPorId($id){
            $sql = "select * from usuario where idusuario = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("i", $id);
            if($comando->execute()){
                $resultados = $comando->get_result();
                return $resultados->fetch_assoc();
            }
            return null;
        }

        function buscarPorTodas(){
            $sql = "select * from usuario";
            $comando = $this->conexao->prepare($sql);
            if($comando->execute()){
                $resultados = $comando->get_result();
                return $resultados->fetch_all(MYSQLI_ASSOC);
            }
            return null;
        }
    }

?>