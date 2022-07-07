<?php

    require_once "model/CategoriaModel.php";
    require_once "model/ProdutoModel.php";

    class Home{
        function __construct()
        {
            $this->categoria = new CategoriaModel();
            $this->produto = new ProdutoModel();
        }

        function index(){
            $categorias = $this->categoria->buscarPorTodas();
            $produtos = $this->produto->buscarPorTodas();
            include "view/template/cabecalho.php";
            include "view/template/menu_home.php";
            include "view/home/listagem.php";
            include "view/template/rodape.php";
        }

        function ver($id){
            $categorias = $this->categoria->buscarPorTodas();
            include "view/template/cabecalho.php";
            include "view/template/menu_home.php";
            include "view/home/listagem.php";
            include "view/template/rodape.php";
        }
        
    }
