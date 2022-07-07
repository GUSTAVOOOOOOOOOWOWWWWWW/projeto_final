<?php

function base_url()
{
    return "http://localhost/Gustavo/projeto_final/index.php";
}
$controlador_padrao = 'home';
//verifica se foi enviado a variável c que contém
//o nome do controlador que eu quero executar
$controller = ucfirst($_GET["c"] ?? $controlador_padrao);
$caminho_controller = "controller/$controller.php";

if (file_exists($caminho_controller)) {
    require $caminho_controller;

    $obj = new $controller();
    $funcao = $_GET['m'] ?? "index";

    if (is_callable(array($obj, $funcao))) {
        $id = $_GET["id"] ?? "";
        call_user_func_array(array($obj, $funcao), array($id));
    }
}
