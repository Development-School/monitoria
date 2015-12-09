<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model','usuarios');
    }

	public function index()	{
        $data['erro'] = NULL;
        $data['cursos'] = $this->usuarios->get('tbl_cursos');
        $this->load->view('cadastro_usuario_view',$data);
	}

	public function receber(){
		// Regras da Validação
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'NOME', 'required');
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('email', 'EMAIL', 'required');
        $this->form_validation->set_rules('curso', 'CURSO', 'required');
        $this->form_validation->set_rules('telefone', 'FONE', 'required');
        $this->form_validation->set_rules('celular', 'CELULAR', 'required');
        $this->form_validation->set_rules('telefone', 'FONE', 'required');
        // A função matches verifica se os campos são iguais
        $this->form_validation->set_rules('senha', 'SENHA', 'required|matches[senha2]');
        $this->form_validation->set_rules('senha2', 'CONFIRMAR', 'required');
        $this->form_validation->set_message('matches', 'Os campos de SENHA não são iguais!');

        if ($this->form_validation->run() == FALSE) {
            $data['cursos'] = $this->usuarios->get('tbl_cursos');
            $this->load->view('cadastro_usuario_view',$data);
        } else {
			//Recebe os dados da views
			$nome = $this->input->post('nome');
			$nome = strtoupper($nome);
			$data['nome'] = $nome;
            $cpf = $this->input->post('cpf');
            $data['email'] = $this->input->post('email');
            $data['telefone'] = $this->input->post('telefone');
            $data['celular'] = $this->input->post('celular');
            $data['id_curso'] = $this->input->post('curso');
            $data['senha'] = $this->input->post('senha');


            if ( $this->usuarios->verificaCpf($cpf) )
            {   // VERIFICA LOGIN E SENHA
                /*Adiciona o cpf ao cookie do usuario*/
                $data['erro'] = "Usuario já Cadastrado";
                $data['cursos'] = $this->usuarios->get('tbl_cursos');
                $this->load->view('cadastro_usuario_view',$data);
            }
            else
            {
                $data['cpf'] = $cpf;
    			/* Chama a função inserir do modelo */
    			if ($this->usuarios->cadastro($data)) {
    				$this->load->view('mensagem');
    			} else {
    				$dados['local'] = 'Home';
                    $dados['mensagem'] = 'Ocorreu um Erro';
                    $dados['erro'] = true;
                    $dados['tempo'] = 10000;
                    $this->load->view('mensagem',$dados);
    			}
            }
		}
	}
}

/* End of file Cadastro.php */
/* Location: ./application/controllers/Cadastro.php */
