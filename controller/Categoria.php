<?php

    require "../model/CategoriaModel.php";

    $categoria = new CategoriaModel();
    $categoria->inserir("SmartTV");
    $categoria->excluir(2);
    $categoria->atualizar("Smartphone",3);
    var_dump($categoria->buscarPorId(8));
    var_dump($categoria->buscarPorTodas());
    
?>