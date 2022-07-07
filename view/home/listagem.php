<hr>

<!-- Conteúdo da página -->
<div class="container mt-2">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php foreach ($produtos as $produto) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $produto['foto'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?= $produto['nome'] ?></p>
                        <a href="" class="text-decoration-none text-dark stretched-link">
                            <h5 class="card-title">R$<?= $produto['preco'] ?></h5>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>