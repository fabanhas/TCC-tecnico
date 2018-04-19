<?php


include APPPATH . 'libraries/Orcamento.php';

class OrcamentoModel extends CI_Model{
    
    public function fazOrcamento(){
        if(sizeof($_POST) == 0) return false;
        $this->form_validation->set_rules('texto','Texto','required');
        $this->form_validation->set_rules('preco','Preço','required');

        if($this->form_validation->run()){

            $data = $this->input->post();

            $orcamento = new Orcamento();
            $resultadoOrcamento = $orcamento -> calculoOrcamento($data);
            return $resultadoOrcamento;

            
        }else{
             echo"<script language='javascript' type='text/javascript'>alert('Algum campo esta vazio... tente novamente')</script>";
             // dados do form estao incorretos
             
         }
    }

}
