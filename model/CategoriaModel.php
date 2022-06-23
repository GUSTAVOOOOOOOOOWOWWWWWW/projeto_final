<?php

    require "../config/Conexao.php";

    class CategoriaModel{
        private $conexao;

        function __construct(){
            $this->conexao = Conexao::getConnection();
        }

        function inserir($nome){
            $sql = "insert into categoria (nome) values (?)";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("s", $nome);
            $comando->execute();
        }

        function excluir($id){
            $sql = "delete from categoria where idcategoria = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("i", $id);
            $comando->execute();
        }

        function atualizar($nome,$id){
            $sql = "update categoria set nome = ? where idcategoria = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("si", $nome, $id);
            $comando->execute();
        }

        function buscarPorId($id){
            $sql = "select * from categoria where idcategoria = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("i", $id);
            if($comando->execute()){
                $resultados = $comando->get_result();
                return $resultados->fetch_assoc();
            }
            return null;
        }

        function buscarPorTodas(){
            $sql = "select * from categoria";
            $comando = $this->conexao->prepare($sql);
            if($comando->execute()){
                $resultados = $comando->get_result();
                return $resultados->fetch_all(MYSQLI_ASSOC);
            }
            return null;
        }
    }

?>