<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/popper/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Contact Form JavaScript -->
<script src="<?= base_url('assets/js/jqBootstrapValidation.js') ?>"></script>
<script src="<?= base_url('assets/js/contact_me.js') ?>"></script>

<!-- Custom scripts for this template -->
<script src="<?= base_url('assets/js/trabalho.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>

<script>
   $(function editar(){
    $('div.formeditar').hide();
    $('button#editarbutton').click(function(){
        $(this).siblings('div.formeditar').slideToggle();
        $('button#deletarbutton').hide();
        if($(this).text() == "Editar"){
            $(this).text("Fechar");
        }else{
            $(this).text("Editar");
            $('button#deletarbutton').show();
        }
    });
});

$(function cadastrar(){
    $('div.formcadastrar').hide();
    $('button#cadastrarbutton').click(function(){
        $(this).siblings('div.formcadastrar').slideToggle();
        if($(this).text() == "Cadastrar"){
            $(this).text("Fechar");
        }else{
            $(this).text("Cadastrar");
        }
    });
});


    </script>
</body>

</html>
