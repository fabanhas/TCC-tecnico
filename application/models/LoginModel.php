<?php
defined('BASEPATH') OR exit('No direct script access allowed');//impede o acesso ao arquivo diretamente

include APPPATH . 'libraries/Registro.php';

class LoginModel extends CI_model{
    
    public function validate(){
        
         if(sizeof($_POST) == 0){
             return;
        }
         $this->form_validation->set_rules('email', 'Email', 'required'); //regras para os campos de formulario
         $this->form_validation->set_rules('senha', 'Senha', 'required');
         
         if($this->form_validation->run()){
             //dados estao consistentes
             $data = $this->input->post();
             
             
             $login = new Registro();
             $user = $login->validate($data);
             
            
             
             if($user != null){
                 $user->logado = true;
                 $this->session->set_userdata('usuario', $user);
                 redirect('trabalho/administracao');
                //login valido : Registrar usuario na sessao
                  
                 
                }
             else{
                 echo"<script language='javascript' type='text/javascript'>alert('Usuario ou senha incorreto!')</script>";
                 //usuario ou senha incorreta
             }
          
         }
         else{
             echo"<script language='javascript' type='text/javascript'>alert('Algum campo esta vazio... tente novamente')</script>";
             // dados do form estao incorretos
             
         }
    }

    public function register(){
        if(sizeof($_POST)==0)return;
        
        $this->form_validation->set_rules('nome','Nome','required|min_length[2]|max_length[18]');   //regras para os campos do formulario
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('senha','Senha','required|min_length[3]|max_length[16]');
        $this->form_validation->set_rules('confirma_senha','Confirma Senha','required|matches[senha]');
        
        if($this->form_validation->run()){
            //OK os dados foram enviados corretamente
            $data = $this->input->post();
            $login = new Registro();
            $login->register($data);
            echo"<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com Sucesso');window.location.href='administracao';</script>";
        }
        else{
            redirect('trabalho/register');
        }
    }
    
    
    
}

