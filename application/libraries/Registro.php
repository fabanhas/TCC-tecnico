<?php
defined('BASEPATH') OR exit('No direct script access allowed');//impede o acesso ao arquivo diretamente



class Registro{
    
    private $db;
    
    public function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }
    
    /**
     * 
     * Verifica se os dados estao corretos
     * 
     */
    
    public function validate ($data){ //variavel data tem as informaçoes ('email' => 'o que o usuario digitar', 'senha' => '')
        $aux['email'] = $data['email'];
        $aux['senha']= md5($data['senha']); 
        $this->db->where($aux);
        
        $query = $this->db->get('login');
        
        //verifica se as informaçoes existem no banco de dados.
        
        if($query->num_rows() > 0)
            return $query->row();
        else return null;
        
    }

    //insere o usuario na tabela login
    public function register($data){
        $aux['nome'] = $data['nome'];
        $aux['email']= $data['email'];
        $aux['senha']= md5($data['senha']);
        
        $this->db->insert('login',$aux);

        
        
        return $this->db->insert_id();
    }
    
    
    
    
}

