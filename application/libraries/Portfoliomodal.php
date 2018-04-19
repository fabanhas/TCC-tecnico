<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Portfoliomodal
 *
 * @author Aluno
 */
class Portfoliomodal {
  
        private $db;
        private $titulo;
        private $sobre;
        private $subum;
        private $textoum;
        private $subdois;
        private $textodois;
        private $subtres;
        private $textotres;
        
        //estancia o objeto
        public function __construct($titulo= null, $sobre= null){
        $this->titulo = $titulo;
        $this->sobre = $sobre;
       

        // acesso ao banco de dados
        $ci = & get_instance();
        $this->db = $ci->db;
    }
    
    public function setSubum($valor){
      $this->subum = $valor;
  }

  public function setTextoum($valor){
    $this ->textoum = $valor;
  }

  public function setSubdois($valor){
    $this->subdois = $valor;
}

public function setTextodois($valor){
  $this ->textodois = $valor;
}

public function setSubtres($valor){
  $this->subtres = $valor;
}

public function setTextotres($valor){
  $this ->textotres = $valor;
}

//faz uma consulta no banco de dados coletando todas as informações da tabela portfoliomodal
// e para cada item na tabela a função insere as informações coletadas na função getRowPorfoliomodal
   public function getAllPortfoliomodal(){
       $html = '';
       $res = $this ->db->get('portfoliomodal');
       $portfoliomodals = $res -> result();
        
       foreach ($portfoliomodals AS $portfoliomodal){
           $html .= $this->getRowPortfoliomodal($portfoliomodal);
           
       }
       return $html;

   }

   //faz uma consulta no banco de dados coletando todas as informações da tabela portfoliomodal
// e para cada item na tabela a função insere as informações coletadas na função getRowPorfolio
   public function getAllPortfolio(){
    $html2 = '';
    $res = $this ->db->get('portfoliomodal');
    $portfoliomodals = $res -> result();
     
    foreach ($portfoliomodals AS $portfoliomodal){
        $html2 .= $this->getRowPortfolio($portfoliomodal);
        
    }
    return $html2;

}

//faz uma consulta no banco de dados coletando todas as informações da tabela portfoliomodal
// e para cada item na tabela a função insere as informações coletadas na função getRowPorfolioEdita
public function getAllPortfolioEdita(){
  $html3 = '';
  $res = $this ->db->get('portfoliomodal');
  $portfoliomodals = $res -> result();
   
  foreach ($portfoliomodals AS $portfoliomodal){
      $html3 .= $this->getRowPortfolioEdita($portfoliomodal);
      
  }
  return $html3;

}

   //faz uma consulta no banco de dados coletando todas as informações da tabela portfoliomodal
// em que o id seja igual ao id passado no parametro da função
    public function getPortfoliomodal($id){
       $cond ['id']= $id;
       $res = $this-> db ->get_where('portfoliomodal, $cond');
       return $res-> row(); //retorna o objeto resultante dessa consulta
       }
    
       //insere as informações contidas nos atributos do objeto no banco de dados na tabela portfoliomodal
    public function insere(){
        $sql = "INSERT INTO  portfoliomodal (titulo, sobre, subum, textoum, subdois, textodois, subtres, textotres)";
        $sql .= " VALUES('$this->titulo', '$this->sobre', '$this->subum', ";
        $sql .= "'$this->textoum', '$this->subdois', '$this->textodois','$this->subtres', '$this->textotres')";
        $this->db->query($sql);
    }


    //atualiza um item no banco de dados com as informações contidas nos atributos do objeto,
    // onde o id do objeto seja igual ao id do item ja existente na tabela
    public function edita($id){
        $sql = "UPDATE portfoliomodal SET titulo = '$this->titulo', sobre = '$this->sobre',";
        $sql .= "subum = '$this->subum', textoum = '$this->textoum', subdois = '$this->subdois',";
        $sql .= "textodois= '$this->textodois',subtres = '$this->subtres', textotres ='$this->textotres' WHERE id =$id" ;
        $this ->db ->query ($sql);
    }
    //deleta as informações na tabela que possua o mesmo id do objeto
    public function  delete($id){
      $this->db->delete('portfoliomodal',array('id'=> $id) );
    }
    //Gera codigo html utilizando de atributos do objeto
    public function getRowPortfolio($portfoliomodal){
      $html2='
     
        <div class="col-sm-4 portfolio-item">
          <a class="portfolio-link" href="#portfolioModal'.$portfoliomodal->id.'" data-toggle="modal">
            <div class="caption">
              <div class="caption-content">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="'.base_url("assets/img/portfolio/livro.jpg").'" alt="">
          </a>
   </div>
 ';
    return $html2;
    }
    //Gera codigo html utilizando de atributos do objeto
    public function getRowPortfoliomodal($portfoliomodal){
        $html = '
        <div class="portfolio-modal modal fade" id="portfolioModal'.$portfoliomodal->id.'" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <h2>'.$portfoliomodal->titulo.' </h2>
                    <hr class="star-primary">
                    <img class="img-fluid img-centered" src="'.base_url("assets/img/portfolio/livro.jpg").'" alt="">
                    <p>'.$portfoliomodal->sobre.'</p>
                    <ul class="list-inline item-details">
                      <li>'.$portfoliomodal->subum.'
                        <strong>
                        '.$portfoliomodal->textoum.'
                        </strong>
                      </li>
                      <li>'.$portfoliomodal->subdois.'
                        <strong>
                        '.$portfoliomodal->textodois.'
                        </strong>
                      </li>
                      <li>'.$portfoliomodal->subtres.'
                        <strong>
                        '.$portfoliomodal->textotres.'
                        </strong>
                      </li>
                    </ul>
                    <button class="btn btn-success" type="button" data-dismiss="modal">
                      <i class="fa fa-times"></i>
                      Fechar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      ';
      return $html;
}
//Gera codigo html utilizando de atributos do objeto
public function getRowPortfolioEdita($portfoliomodal){
  $html3='
 
    <div class="col-sm-5 portfolio-item">
      <a class="portfolio-link" href="#portfolioModal'.$portfoliomodal->id.'" data-toggle="modal">
        <div class="caption">
          <div class="caption-content">
            <i class="fa fa-search-plus fa-3x"></i>
          </div>
        </div>
        <img class="img-fluid" src="'.base_url("assets/img/portfolio/livro.jpg").'" alt="">
      </a>
<div class="Row ml-4" >
<article>
<button  class="btn btn-orange btn-lg mt-3"  " id="editarbutton">Editar</button>
  <div class="formeditar">
  <div class="card mt-4">
  <div class="card-header orange lighten-1 white-text">
  <center>Formulario de edição</center>
  </div>
  <div class="container mb-4">

  <form class="col-md-14 mx-auto" method="POST" action="'.base_url("trabalho/editarPortfolio").' ">
  
  <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Titulo</label>
            <input class="form-control" name="titulo" type="text" placeholder="titulo" value="'.$portfoliomodal->titulo.'">
            </div>
        </div>
    
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Sobre</label>
            <textarea class="form-control" name="sobre"  placeholder="sobre">'.$portfoliomodal->sobre.'</textarea>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Subtitulo um</label>
            <input class="form-control" name="subum" type="text" placeholder="Subtitulo um" value="'.$portfoliomodal->subum.'">
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Texto um</label>
            <input class="form-control" name="textoum" type="text" placeholder="Texto um" value="'.$portfoliomodal->textoum.'">
            </div>
        </div>
    </div>
    </div>
        <div class="row">
        <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Subtitulo dois</label>
            <input class="form-control" name="subdois" type="text" placeholder="Subtitulo dois" value="'.$portfoliomodal->subdois.'">
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Texto dois</label>
            <input class="form-control" name="textodois" type="text" placeholder="Texto dois" value="'.$portfoliomodal->textodois.'">
            </div>
        </div>
    </div>
    </div>
        <div class="row">
        <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Subtitulo três</label>
            <input class="form-control" name="subtres" type="text" placeholder="Subtitulo três" value="'.$portfoliomodal->subtres.'">
            </div>
        </div>
        </div>
        <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Texto três</label>
            <input class="form-control" name="textotres" type="text" placeholder="Texto três"  value="'.$portfoliomodal->textotres.'">
            </div>
        </div>
        </div>
		<input  type=hidden name="id" value="'.$portfoliomodal->id.'"></input>
        </div>
    
    <div class="text-center">
    <button class="btn btn-orange">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
  </div>
    </form>
    </div>
    </div>
  
  </div>
  <button  class="btn btn-red btn-lg mt-3 " id="deletarbutton"><a href="'.base_url("trabalho/deletarPortfolioModal/".$portfoliomodal->id).'">Deletar</a></button>
</article>
</div>
</div>
';
return $html3;
}
//Gera codigo html utilizando de atributos do objeto
public function cadastraPortfolioModal(){
  $html4='
  <div>
  <button  class="btn btn-orange btn-lg  " id="cadastrarbutton">Cadastrar</button>
  <div class="formcadastrar">
  <div class="container mb-4 col-md-4 mx-auto">
  <div class="card mt-4">
  <div class="card-header orange lighten-1 white-text">
  <center>Formulario de cadastro</center>
  </div>
  <form class="col-md-8 mx-auto" method="POST" action="'.base_url("trabalho/cadastraPortfolio").' ">
  
  <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Titulo</label>
            <input class="form-control" name="titulo" type="text" placeholder="titulo">
            </div>
        </div>
    
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Sobre</label>
            <textarea class="form-control" name="sobre"  placeholder="sobre"></textarea>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Subtitulo um</label>
            <input class="form-control" name="subum" type="text" placeholder="Subtitulo um">
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Texto um</label>
            <input class="form-control" name="textoum" type="text" placeholder="Texto um">
            </div>
        </div>
    </div>
    </div>
        <div class="row">
        <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Subtitulo dois</label>
            <input class="form-control" name="subdois" type="text" placeholder="Subtitulo dois">
            </div>
        </div>
    </div>
    <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Texto dois</label>
            <input class="form-control" name="textodois" type="text" placeholder="Texto dois">
            </div>
        </div>
    </div>
    </div>
        <div class="row">
        <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Subtitulo três</label>
            <input class="form-control" name="subtres" type="text" placeholder="Subtitulo três">
            </div>
        </div>
        </div>
        <div class="col-md-6">
    <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Texto três</label>
            <input class="form-control" name="textotres" type="text" placeholder="Texto três" >
            </div>
        </div>
        </div>
	
        </div>
    
    <div class="text-center">
    <button class="btn btn-orange">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
  </div>
    </form>
    </div>
  </div>
  </div>
    </div>
  ';
  return $html4;
}
}