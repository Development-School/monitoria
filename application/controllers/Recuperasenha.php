<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recuperasenha extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model', 'usuarios');
	}

	public function index()
	{
		$this->load->view('recupera_senha_view');
	}

	public function novasenha($reset_senha='')
	{
		$usuario = $this->usuarios->getBy('reset_senha',$reset_senha);
		if ($usuario)
		{
			$dados['codigo'] = form_hidden('codigo', $reset_senha);
			$dados['id_oculto'] = form_hidden('id', $usuario->id);
			$this->load->view('novasenha_view',$dados);
		}
		else
		{
			$dados['local'] = 'Home';
    	$dados['mensagem'] = 'Acesso negado';
    	$dados['erro'] = true;
    	$dados['tempo'] = 10000;
    	$this->load->view('mensagem',$dados);
		}
	}

	public function email_checker($str)
	{

		if ($this->usuarios->email_check($str))
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('email_checker', 'Este %s não esta cadastrado no site.');
			return FALSE;
		}
	}

	public function receber()
	{
		$this->form_validation->set_rules('senha', 'SENHA', 'required|matches[senha2]');
    $this->form_validation->set_rules('senha2', 'CONFIRMAR', 'required');
    if ($this->form_validation->run() == FALSE)
    {
    	if ($this->input->post('codigo') !== NULL ) {
    		$this->novasenha($this->input->post('codigo'));
    	}
    	else
    	{
    		$this->novasenha();
    	}
    }
    else
    {
    	$id = $this->input->post('id');
    	$data['senha'] = $this->input->post('senha');
    	$data['reset_senha'] = NULL;

      if ($this->usuarios->atualiza($id, $data))
      {
        $dados['local'] = 'Home';
        $dados['mensagem'] = 'Senha  Atualizada com sucesso!';
        $this->load->view('mensagem',$dados);
      } else {
      	$dados['local'] = 'Home';
      	$dados['mensagem'] = 'Ocorreu um erro';
      	$dados['erro'] = true;
      	$this->load->view('mensagem',$dados);
      }
    }
	}

	public function recupera($value='')
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|callback_email_checker');

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$email = $this->input->post('email');
			//Cria uma string randomica alpha numerico com maiuscolas e menusculas
			$this->load->helper('string');
			$data['reset_senha'] = random_string('alnum', 15);

      if ($this->usuarios->reset_senha($email, $data))
      {
				$usuario = $this->usuarios->getBy('email',$email);
		  	$mensagemEmail = $this->load->view('email/ResetSenha', $usuario, TRUE);

				$this->load->library('email');
		  	$this->email->from('monitoria@pitagoras.com', 'Monitoria Pitágoras');
		  	$this->email->to($email);

		  	$this->email->subject('Recuperação de Senha: Monitoria Pitágoras');
		  	$this->email->message($mensagemEmail);

		  	if ($this->email->send())
				{
	      	$dados['local'] = 'Home';
	      	$dados['tempo'] = 10000;
	        $dados['mensagem'] = 'Verifique sua caixa de email!';
	        $this->load->view('mensagem',$dados);
				}
				else
				{
					$dados['local'] = 'Home';
	      	$dados['mensagem'] = 'Ocorreu um erro ao Enviar o email';
	      	$dados['erro'] = true;
	      	$dados['tempo'] = 10000;
	      	$this->load->view('mensagem',$dados);
				}
      }
      else
      {
      	$dados['local'] = 'Home';
      	$dados['mensagem'] = 'Ocorreu um erro no Banco de dados';
      	$dados['erro'] = true;
      	$dados['tempo'] = 10000;
      	$this->load->view('mensagem',$dados);
      }
		}
	}
}

/* End of file Recuperasenha.php */
/* Location: ./application/controllers/Recuperasenha.php */