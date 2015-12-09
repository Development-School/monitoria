<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->model('Usuario_model','usuarios');
  }

  public function index()
  {
    $dados['local'] = 'Home';
    $dados['mensagem'] = 'Acesso negado';
    $dados['tempo'] = 10000;
    $this->load->view('mensagem',$dados);
  }

  public function email()
  {
    $data = $this->usuarios->getByEmail('Rodrigo54mix@gmail.com');
    $this->load->view('email/ResetSenha', $data);
  }
  public function novasenha($reset_senha='')
  {
    $usuario = $this->usuarios->getBy('reset_senha',$reset_senha);
    $dados['codigo'] = form_hidden('codigo', $reset_senha);
    $dados['id_oculto'] = form_hidden('id', $usuario->id);
    $this->load->view('novasenha_view',$dados);
  }
}

/* End of file Teste.php */
/* Location: ./application/controllers/Teste.php */