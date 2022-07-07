<!-- Conteúdo da página -->
<div class="container">
    <h1 class="mt-2">Relação de Produto</h1>
    <hr>

    <a href="<?= base_url() . "?c=produto&m=add"?>" class="btn btn-success">Inserir Produto</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th class="col-6">Nome</th>
                <th>Preco</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto):?>
            <tr>
                <td><?= $produto["nome"] ?></td>
                <td><?= $produto["preco"] ?></td>
                <td><?= $produto["foto"] ?></td>
                <td>
                    <a href="<?php echo base_url() . "?c=produto&m=excluir&id=" . $produto['idproduto']; ?>"class="btn btn-danger" title="Excluir"><i class="fa-solid fa-trash-can"></i>
                        Excluir
                    </a>
                    <a href="<?php echo base_url() . "?c=produto&m=editar&id=" . $produto['idproduto']; ?>" class="btn btn-primary" title="Editar"><i class="fa-solid fa-pencil"></i> 
                        Editar
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
 </div>