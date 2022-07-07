<?php

require_once "model/CategoriaModel.php";
require_once "model/ProdutoModel.php";

class Home
{
    function __construct()
    {
        $this->categoria = new CategoriaModel();
        $this->produto = new ProdutoModel();
    }

    function index($id = null)
    {
        $categorias = $this->categoria->buscarPorTodas();
        if (!$id) {
            $produtos = $this->produto->buscarPorTodas();
        } else {
            $produtos = $this->produto->buscarPorCategoria($id);
        }

        include "view/template/cabecalho.php";
        include "view/template/menu_home.php";
        include "view/home/listagem.php";
        include "view/template/rodape.php";
    }

    function ver($id)
    {
        $categorias = $this->categoria->buscarPorTodas();
        $produto = $this->produto->buscarPorId($id);
        include "view/template/cabecalho.php";
        include "view/template/menu_home.php";
        include "view/home/ver.php";
        include "view/template/rodape.php";
    }

    function search()
    {
        $categorias = $this->categoria->buscarPorTodas();
        $produtos = $this->produto->buscarPorLikeNome($_POST['search']);
        include "view/template/cabecalho.php";
        include "view/template/menu_home.php";
        include "view/home/listagem.php";
        include "view/template/rodape.php";
    }
}
