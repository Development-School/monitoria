<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Usuario_model','usuarios');
  }

  public function index()
  {
    $this->load->view('login_de_usuario');
  }

  public function login()
  {
    // Regras da Validação
    $this->load->library('form_validation');
    $this->form_validation->set_rules('cpf', 'CPF', 'required|valid_cpf');
    $this->form_validation->set_rules('senha', 'SENHA', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('login_de_usuario');
    }
    else {
      $cpf   = $this->input->post('cpf');
      $senha = $this->input->post('senha');

      //Consulta no Banco de Dados
      $usuario = $this->usuarios->login($cpf,$senha);

      if($usuario) {
        $dados = array(
          'id'=>$usuario->id,
          'nome'=> $usuario->nome,
          'logado'=>TRUE
        );//array com os dados do cookie
        $this->session->set_userdata($dados);//passando a array para o cookie
        redirect(base_url("admin1/paineladm"));
      }
      else {
        $data['erro'] = 'CPF ou Senha Invalido!';
        $this->load->view('login_de_usuario',$data);
      }
    }
  }

  public function sair()
  {
    $this->session->sess_destroy();
    redirect('Home','refresh');
  }
}