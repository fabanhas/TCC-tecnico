<?php


class Trabalho extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->view('trabalho/cabecalho');
        $this->load->model('OrcamentoModel', 'orcamento');
        $this->load->model('ConteudoModel', 'conteudo');
        $this->load->model('PortfoliomodalModel', 'portfolio');
    }
	//pagina inicial
    function index(){
        $data['sobre']= $this->conteudo->getSobre($sessao=0);
        $data['cabecalho']= $this->conteudo->getCabecalho($sessao=0);
        $data['portfolio']= $this->portfolio->getAllPortfolio();
        $data['portfolioModal']= $this->portfolio->getAllPortfoliomodal();
        
        $this->load->view('trabalho/navbar');
        $this->load->view('trabalho/header', $data);
        $this->load->view('trabalho/portfolio', $data);
        $this->load->view('trabalho/about', $data);
        $this->load->view('trabalho/contato');
        $this->load->view('trabalho/footer');
        $this->load->view('trabalho/scroll');
        $this->load->view('trabalho/rodape');
    }
    public function EnviarEmail()
    {
        // Carrega a library email
        $this->load->library('email');
        //Recupera os dados do formulário
        $dados = $this->input->post('email', 'nome', 'telefone', 'mensagem');

        //Inicia o processo de configuração para o envio do email
        $config['protocol'] = 'mail'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
        $config['mailtype'] = 'text';
        $this->email->initialize($config);

        // Define remetente e destinatário
        $this->email->from($dados['email'],$dados['nome']); // Remetente
        $this->email->to('crowntechweb@gmail.com'); // Destinatário

        // Define o assunto do email
        $this->email->subject('Contato do site da cliente Tatiane');
        $this->email->message($dados['mensagem'], $dados['telefone']);

        /*
         * Se o envio foi feito com sucesso, define a mensagem de sucesso
         * caso contrário define a mensagem de erro, e carrega a view home
         */
        if($this->email->send())
        {
            $this->session->set_flashdata('success','Email enviado com sucesso!');
        }
        else
        {
            $this->session->set_flashdata('error',$this->email->print_debugger());
        }
    }

     //pagina ainda em desenvolvimento
    public function login(){ //função para usuario logar no sistema
        
        $this->load->model('LoginModel','login');
        $this->login->validate();
        $this->load->view('login/form_login', null);

    }
    
        public function register(){  //função para registrar novo usuario no banco de dados
            if($this->session->usuario->logado){
            $this->load->view('trabalho/navbar3');
            $this->load->model('LoginModel','login');
            $this->login->register();
            
            $this->load->view('login/form_register', null);
        }
        else{

            redirect('trabalho/login');

        }
    }

    public function logout(){

        $this->session->sess_destroy();
        redirect('trabalho/login');
    }
	//pagina de administracao que permite manipulação de dados
    function administracao(){
        if($this->session->usuario->logado){   // condição para iniciar a função apenas se o usuario estiver logado
        $data['cabecalho']= $this->conteudo->getCabecalho($sessao=0);
        $data['sobre']= $this->conteudo->getSobre($sessao=0);
        $data['portfolio']= $this->portfolio->getAllPortfolioEdita();
        $data['portfolioModal']= $this->portfolio->getAllPortfoliomodal();
        $data['cadastraPortfolioModal']= $this->portfolio->cadastraPortfolioModal();
        $data['resultadoOrcamento']=$this->orcamento->fazOrcamento();
        
        $this->load->view('trabalho/navbar2');
        $this->load->view('trabalho/header', $data);
        $this->load->view('adm/atualizaHeader', $data);
        $this->load->view('adm/portfolio', $data);
        $this->load->view('trabalho/about', $data);
        $this->load->view('adm/atualizaAbout', $data);
        $this->load->view('adm/orcamento',$data);
        $this->load->view('trabalho/rodape');
        }
        else{

            redirect('trabalho/login');

        }
    }
    //pagina responsavel somente pela atualização de informações da tabela conteudo, redireciona a pagina de administracao logo apos
    function atualizaConteudo($id=0){
             $this->conteudo->atualizaConteudoModel($id);
             redirect ('trabalho/administracao');
         }
	//pagina responsavel somente pelo cadastro de informações na tabela portfolioModal, redireciona a pagina de administracao logo apos
    function cadastraPortfolio(){
        $this->portfolio->cadastraPortfolio();
        redirect ('trabalho/administracao');
    }
    //pagina responsavel somente pela atualização de informações da tabela portfoliomodal, redireciona a pagina de administracao logo apos
        function editarPortfolio($id=0){
        $this->portfolio->editaPortfolio($id);
        redirect ('trabalho/administracao');


    }
	//pagina responsavel somente pela exclusão de informações da tabela conteudo, redireciona a pagina de administracao logo apos
    function deletarPortfolioModal($id=0){
    $this->portfolio->deletaPortfolioModal($id);
    redirect('trabalho/administracao');

    }

}
