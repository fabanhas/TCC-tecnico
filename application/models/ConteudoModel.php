<?php


include APPPATH . 'libraries/Conteudo.php';

class ConteudoModel extends CI_Model{

    //instancia um objeto com os atributos definidos pela função getSobre
    public function getSobre($sessao){
        $sobre = new Conteudo();
        return $sobre->getSobre($sessao);
    }

    //instancia um objeto com os atributos definidos pela função getCabecalho
    public function getCabecalho($sessao){
        $cabecalho = new Conteudo();
        return $cabecalho->getCabecalho($sessao);
    }

    //instancia um objeto com os atributos passados pelo metodo post, retorna falso se o post tiver vazio, e encaminha o objeto para a função atualizaConteudo
    public function atualizaConteudoModel(){
        if(sizeof($_POST) == 0) return false;
        
        $id       =   $this->input->post('id');
        $titulo   =   $this->input->post('titulo');
        $paragrafo =   $this->input->post('paragrafo');
        $paragrafodois =   $this->input->post('paragrafodois');
        $sessao   =   $this->input->post('sessao');

        $cont = new Conteudo($titulo, $paragrafo, $paragrafodois);
        $cont-> setsessao($sessao);
        $cont->atualizaConteudo($id);
    }
}

