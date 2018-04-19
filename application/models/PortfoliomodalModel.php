<?php


include APPPATH . 'libraries/Portfoliomodal.php';

class PortfoliomodalModel extends CI_Model{

    //instancia um objeto com os atributos passados pelo metodo post, retorna falso se o post tiver vazio, e encaminha o objeto para a função Insere
    public function cadastraPortfolio(){
        if(sizeof($_POST) == 0) return false;

         $titulo        = $this->input->post('titulo'); 
         $sobre         = $this->input->post('sobre');
         $subum         = $this->input->post('subum');
         $textoum       = $this->input->post('textoum');
         $subdois       = $this->input->post('subdois');
         $textodois     = $this->input->post('textodois');
         $subtres       = $this->input->post('subtres');
         $textotres     = $this->input->post('textotres');

         $portfoliomodal = new Portfoliomodal($titulo,$sobre);
         $portfoliomodal->setSubum($subum);
         $portfoliomodal->setTextoum($textoum);
         $portfoliomodal->setSubdois($subdois);
         $portfoliomodal->setTextodois($textodois);
         $portfoliomodal->setSubtres($subtres);
         $portfoliomodal->setTextotres($textotres);
         $portfoliomodal->insere();
        
         return true;
        }

        //instancia um objeto com os atributos passados pelo metodo post, retorna falso se o post tiver vazio, e encaminha o objeto para a função edita
    public function editaPortfolio(){
        if(sizeof($_POST) == 0) return false;
                
                 $id            = $this->input->post('id');
                 $titulo        = $this->input->post('titulo'); 
                 $sobre         = $this->input->post('sobre');
                 $subum         = $this->input->post('subum');
                 $textoum       = $this->input->post('textoum');
                 $subdois       = $this->input->post('subdois');
                 $textodois     = $this->input->post('textodois');
                 $subtres       = $this->input->post('subtres');
                 $textotres     = $this->input->post('textotres');

                 $portfoliomodal = new Portfoliomodal($titulo,$sobre);
                 $portfoliomodal->setSubum($subum);
                 $portfoliomodal->setTextoum($textoum);
                 $portfoliomodal->setSubdois($subdois);
                 $portfoliomodal->setTextodois($textodois);
                 $portfoliomodal->setSubtres($subtres);
                 $portfoliomodal->setTextotres($textotres);
                 $portfoliomodal->edita($id);

                 return true;
    }

    //instancia um objeto e o retorna dentro da função getAllPortfolioEdita
    public function  getAllPortfolioEdita(){
        $portfoliomodal = new Portfoliomodal();
        return $portfoliomodal->getAllPortfolioEdita();
    }

    //instancia um objeto e o retorna dentro da função getAllPortfolio
    public function  getAllPortfolio(){
        $portfoliomodal = new Portfoliomodal();
        return $portfoliomodal->getAllPortfolio();
    }
    //instancia um objeto e o retorna dentro da função getAllPortfoliomodal
    public function  getAllPortfoliomodal(){
        $portfoliomodal = new Portfoliomodal();
        return $portfoliomodal->getAllPortfoliomodal();
    }
    //instancia um objeto e o retorna dentro da função getPortfoliomodal
    public function getPortfoliomodal($id){
        $portfoliomodal = new Portfoliomodal();
        return $portfoliomodal->getPortfoliomodal($id);  
    }
    
    //instancia um objeto e o retorna dentro da função delete
    public function deletaPortfoliomodal($id){
        $portfoliomodal = new Portfoliomodal();
        return $portfoliomodal->delete($id);
    }

    //instancia um objeto e o retorna dentro da função cadastraPortfolioModal
    public function cadastraPortfolioModal(){
        $portfoliomodal = new Portfoliomodal();
        return $portfoliomodal->cadastraPortfolioModal();
    }
}