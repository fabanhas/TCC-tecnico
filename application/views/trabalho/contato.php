<?php if ($this->session->flashdata('success') == TRUE): ?>
<div><?= $this->session->flashdata('success'); ?></div>
<?php endif; ?>
<?php if ($this->session->flashdata('error') == TRUE): ?>
<div><?= $this->session->flashdata('error'); ?></div>
<?php endif; ?>


<section id="contact">
  <div class="container">
    <h2 class="text-center">Entre em contato comigo</h2>
    <hr class="paper-primary">
    <div class="row">
      <div class="col-lg-8 mx-auto">

        <form method="POST" action="<?=base_url('enviar-email')?>">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nome</label>
              <input class="form-control" id="nome" type="text" placeholder="Nome" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Endereço de Email</label>
              <input class="form-control" id="email" type="email" placeholder="Endereço de Email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Telefone</label>
              <input class="form-control" id="telefone" type="tel" placeholder="Telefone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Mensagem</label>
              <textarea class="form-control" id="mensagem" rows="5" placeholder="Mensagem" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-orange btn-lg " id="sendMessageButton">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
