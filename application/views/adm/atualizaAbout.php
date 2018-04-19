<article>
		  <button  class="btn btn-orange btn-lg  " id="editarbutton">Editar</button>
<div class="formeditar">
<div class="container mb-4 col-md-6 mx-auto">
    <div class="card mt-4 mb-8"> 
  <div class="card-header orange lighten-1 white-text">
  <center>Formulario de edição</center>
  </div>
  
  <form class="col-md-10 mx-auto" method="POST" action="<?=base_url("trabalho/atualizaConteudo")?>">
  
        <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Titulo</label>
                    <input class="form-control" name="titulo" type="text" placeholder="titulo" value="<?=$sobre->titulo?>">
                </div>
        </div>
            
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Paragrafo 1</label>
                    <textarea class="form-control" name="paragrafo"  placeholder="paragrafo"><?=$sobre->paragrafo?></textarea>
                </div>
            </div>
                    <input  type=hidden name="sessao" value="<?=$sobre->sessao?>"></input>
                    <input  type=hidden name="id" value="<?=$sobre->id?>"></input>

            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Paragrafo 2</label>
                    <textarea class="form-control" name="paragrafodois"  placeholder="paragrafo dois"><?=$sobre->paragrafodois?></textarea>
                </div>
            </div>
                    <input  type=hidden name="sessao" value="<?=$sobre->sessao?>"></input>
                    <input  type=hidden name="id" value="<?=$sobre->id?>"></input>     

            <div class="text-center">
                    <button class="btn btn-orange">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
		
</form>
</div>
</div>
</div>
</article>