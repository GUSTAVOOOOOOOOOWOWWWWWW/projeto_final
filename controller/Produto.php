<?php

    require_once "model/ProdutoModel.php";
    require_once "model/CategoriaModel.php";

    class Produto{
        function __construct()
        {
            session_start();
            if(!isset($_SESSION['usuario'])){
                header('Location: ?c=restrito&m=login');
            }
            $this->modelo = new ProdutoModel();
            $this->categoria_modelo = new CategoriaModel();
        }

        function index(){
            $produtos = $this->modelo->buscarPorTodas();
            include "view/template/cabecalho.php";
            include "view/template/menu.php";
            include "view/produto/listagem.php";
            include "view/template/rodape.php";
        }

        function add(){
            $categorias = $this->categoria_modelo->buscarPorTodas();
            include "view/template/cabecalho.php";
            include "view/template/menu.php";
            include "view/produto/form.php";
            include "view/template/rodape.php";
        }

        function editar($id){
            $produto = $this->modelo->buscarPorId($id);
            $categorias = $this->categoria_modelo->buscarPorTodas();
            include "view/template/cabecalho.php";
            include "view/template/menu.php";
            include "view/produto/form.php";
            include "view/template/rodape.php";
        }

        function excluir($id){
            $this->modelo->excluir($id);
            header('Location: ?c=produto');
        }

        function salvar_foto(){
            if(isset($_FILES['foto']) && !$_FILES['foto']['error']){
                $nome_imagem = time() . $_FILES['foto']['name'];
                $origem = $_FILES['foto']['tmp_name'];
                $destino = "fotos/$nome_imagem";
                if(move_uploaded_file($origem, $destino)){
                    return $destino;
                }
            }
            return false;
        }

        function salvar(){
            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                $nome_foto = $this->salvar_foto() ?? "foto/semfoto.jpg";
                if(empty($_POST['idproduto'])){
                    $this->modelo->inserir(
                        $_POST['nome'], 
                        $_POST['descricao'], 
                        $_POST['preco'], 
                        $nome_foto,
                        $_POST['categoria']
                    );
                }else{
                    $this->modelo->atualizar(
                        $_POST['idproduto'],
                        $_POST['nome'], 
                        $_POST['descricao'], 
                        $_POST['preco'], 
                        $nome_foto, 
                        $_POST['categoria']
                    );
                }                
                header('Location: ?c=produto');
            }else{
                echo "Ocorreu um erro, pois os dados n??o foram enviados";
        }
    }
}

?>