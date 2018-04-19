
<div class="container mb-4 col-md-6 mx-auto">
<div class="card mt-4 mb-8"> 
<div class="card-header orange lighten-1 white-text">
<center>Orçamento</center>
</div>

<form class="col-md-10 mx-auto" method="POST">

<div class="control-group">
      <div class="form-group floating-label-form-group controls">
          <label>Preço</label>
          <input class="form-control" name="preco" type="text" placeholder="Insira o preço por palavra" >
      </div>
</div>
  
  <div class="control-group">
      <div class="form-group floating-label-form-group controls">
          <label>Texto</label>
          <textarea class="form-control" name="texto" placeholder="texto"></textarea>
      </div>
  </div>
  <div class="control-group">
      <div class="form-group floating-label-form-group controls">
          <label>Preço final</label>
          <input class="form-control" name="preço"  placeholder="Preço final" value="<?= $resultadoOrcamento ?>">
      </div><br>
  </div>
  <div class="text-center">
          <button class="btn btn-orange">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
  </div>

 

</form>
</div>
</div>
