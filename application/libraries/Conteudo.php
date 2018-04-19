<?php


class Conteudo{

    private $db;
    private $titulo;
    private $paragrafo;
    private $paragrafodois;
    private $sessao;
    
   public function __construct($titulo=null, $paragrafo=null, $paragrafodois=null ) {
        $this->titulo = $titulo;
        $this->paragrafo = $paragrafo;
        $this->paragrafodois= $paragrafodois;
        
        $ci = & get_instance();
        $this->db = $ci->db;
   }
   
   public function setSessao($valor){
       $this->sessao = $valor;
   }

   //faz um seleção no banco de dados e retorna todas as informações referentes a tabela conteudos onde a variavel sessao seja igual a 'sobre' 
  public function getSobre($sessao){
    $sql = "SELECT * FROM conteudos WHERE sessao = 'sobre'";
    $query  = $this->db->query($sql);
    return $query->row();

    
  }
    //faz um seleção no banco de dados e retorna todas as informações referentes a tabela conteudos onde a variavel sessao seja igual a 'cabecalho'
  public function getCabecalho($sessao){
    $sql = "SELECT * FROM conteudos WHERE sessao = 'cabecalho'";
    $query  = $this->db->query($sql);
    return $query->row();

    
  }

  //atualiza as informações da tabela conteudos onde o id é igual ao id do objeto em questão 
  public function atualizaConteudo($id){
    $sql= "UPDATE conteudos SET titulo = '$this->titulo', paragrafo = '$this->paragrafo', paragrafodois = '$this->paragrafodois' WHERE id = $id ";
    $this->db->query($sql);
  }


}