<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alteracadastro extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('logado')){
      redirect(base_url());
    }
    $this->load->model('Usuario_model', 'usuario');
  }

  public function index()
  {
    $id = $this->session->userdata('id');
    $dados['cursos'] = $this->usuario->getTabela('tbl_cursos');
    $dados['usuario'] = $this->usuario->getById($id);
    $this->load->view('admin1/alteracao_cadastro_view',$dados);
  }

  public function altera()
  {
    $nome = $this->input->post('nome');
    $nome = strtoupper($nome);
    $data['nome'] = $nome;
    $data['cpf'] = $this->input->post('cpf');
    $data['email'] = $this->input->post('email');
    $data['telefone'] = $this->input->post('telefone');
    $data['celular'] = $this->input->post('celular');
    $senha = $this->input->post('senha');
    if ( $senha != null ) {
      $data['senha'] = $this->input->post('senha');
    }
    $id = $this->session->userdata('id');
    if ($this->usuario->atualiza($id, $data)) {
      redirect('admin1/paineladm');
    } else {
      $dados['local'] = 'admin1/paineladm';
      $dados['mensagem'] = 'Erro ao atualizar Dados';
      $dados['erro'] = true;
      $dados['tempo'] = 10000;
      $this->load->view('mensagem',$dados);
    }
  }
}
/* End of file Alteracadastro.php */
/* Location: ./application/controllers/admin1/Alteracadastro.php */
