<?php

    require_once "config/Conexao.php";

    class ProdutoModel{
        private $conexao;

        function __construct(){
            $this->conexao = Conexao::getConnection();
        }

        function inserir($nome, $descricao, $preco, $foto, $idcategoria){
            $sql = "insert into produto (nome, descricao, preco, foto, categoria_idcategoria) values (?, ?, ?, ?, ?)";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("ssdsi", $nome, $descricao, $preco, $foto, $idcategoria);
            $comando->execute();
        }

        function excluir($id){
            $sql = "delete from produto where idproduto = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("i", $id);
            $comando->execute();
        }

        function atualizar($id, $nome, $descricao, $preco, $foto, $idcategoria){
            $sql = "update produto set nome = ?, descricao = ?, preco = ?, foto = ?, idcategoria = ? where idproduto = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("ssdssii", $nome, $descricao, $preco, $foto, $idcategoria, $id);
            $comando->execute();
        }

        function buscarPorId($id){
            $sql = "select * from produto where idproduto = ?";
            $comando = $this->conexao->prepare($sql);
            $comando->bind_param("i", $id);
            if($comando->execute()){
                $resultados = $comando->get_result();
                return $resultados->fetch_assoc();
            }
            return null;
        }

        function buscarPorTodas(){
            $sql = "select * from produto";
            $comando = $this->conexao->prepare($sql);
            if($comando->execute()){
                $resultados = $comando->get_result();
                return $resultados->fetch_all(MYSQLI_ASSOC);
            }
            return null;
        }
    }

?>