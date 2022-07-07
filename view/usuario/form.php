<!-- Conteúdo da página -->
<div class="container">
    <h1 class="mt-2">Cadastro de Usuário</h1>
    <hr>
    <form method="POST" action="<?= base_url(). "?c=usuario&m=salvar"?>">
        
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="email" class="form-control" id="login" name="login" value="<?= $usuario['login'] ?? '' ?>">
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" value="<?= $usuario['senha'] ?? '' ?>">
        </div>

        <input type="hidden" name="idusuario" value="<?= $usuario['idusuario'] ?? '' ?>">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>