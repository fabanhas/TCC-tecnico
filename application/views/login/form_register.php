<!-- Form register --> 

<div class="container mt-5 ">
    
    <div class="row">
        
    <form method="POST" class="col-md-6 mx-auto mt-5" action="<?= base_url('trabalho/register') ?>">
    <p class="h5 text-center mb-4">Cadastro de Usu&aacute;rio</p>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="Nome" name="nome" class="form-control" placeholder="Nome">
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
    </div>
    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="confirma_senha" name="confirma_senha" class="form-control" placeholder="Confirme a senha">
    </div>

    <div class="text-center">
        <button class="btn btn-deep-orange">Registrar</button>
    </div>

    </form>
<!-- Form register -->
        
    </div>
    
</div>
</body>
</html>

                