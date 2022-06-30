<!-- Conteúdo da página -->
<div class="container">
    <h1 class="mt-2">Relação de Categoria</h1>
    <hr>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categorias as $categoria):?>
            <tr>
                <td><?= $categoria["nome"] ?></td>
                <td>
                    <a href="<?php echo base_url() . "?c=categoria&m=excluir&id=" . $categoria['idcategoria']; ?>" 
                    class="btn btn-danger" title="Excluir">
                        <i class="fa-solid fa-trash-can"></i> 
                        Excluir
                    </a>
                    <a href="" class="btn btn-primary" title="Editar">
                        <i class="fa-solid fa-pencil"></i> 
                        Editar
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
 </div>