<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends MY_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->tabela = "tbl_usuarios";
  }

  # LOGIN DE USUÁRIO
  public  function login($cpf,$senha)
  {
    $cpf = preg_replace('/[^0-9]/','',$cpf);
    $senha = md5($senha);
		$this->db->where('cpf',$cpf);
		$this->db->where('senha',$senha);
		return $this->db->get( $this->tabela )->result();
  }

  public function verificaCpf($cpf)
  {
    $cpf = preg_replace('/[^0-9]/','',$cpf);
    $this->db->where('cpf',$cpf);
    $query = $this->db->get( $this->tabela );
    if($query->num_rows() > 0)
    {
      return $query->num_rows();
    }
    else
    {
      return false;
    }
  }

  public function cadastro($dados)
  {
    $dados['cpf'] = preg_replace('/[^0-9]/','',$dados['cpf']);
    $dados['senha'] = md5( $dados['senha'] );
    return $this->db->insert( $this->tabela , $dados);
  }

  # ALTERAÇÃO DE CADASTRO
  public function getById($id)
  {
    $rows = array(); //esta variavel manterá todos os resultados
    $this->db->where('id',$id);
    $query = $this->db->get( $this->tabela );
    return $query->first_row();
  }

  public function getByEmail($email)
  {
    $rows = array(); //esta variavel manterá todos os resultados
    $this->db->where('email',$email);
    $query = $this->db->get( $this->tabela );
    return $query->first_row();
  }

  public function email_check($str)
  {
    $query = $this->db->get_where( $this->tabela , array('email' => $str), 1);
    if ($query->num_rows() == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function atualiza($id, $data)
  {
    if ( isset($data['senha']) ) {
      $data['senha'] = md5( $data['senha'] );
    }
    if ( isset($data['cpf']) ) {
      $data['cpf'] = preg_replace('/[^0-9]/','',$data['cpf']);
    }
    $this->db->where('id', $id);
    return $this->db->update( $this->tabela, $data);
  }

  public function reset_senha($email, $data)
  {
    $this->db->where('email', $email);
    return $this->db->update( $this->tabela, $data);
  }

}
/* End of file Usuario_model.php */
/* Location: ./application/models/Usuario_model.php */
