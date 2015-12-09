<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	public $tabela;

	public function get($tabela)
  {
    return $this->db->get($tabela)->result();
  }

  public function getBy($att, $id)
  {
    $rows = array(); //esta variavel manterá todos os resultados
    $this->db->where( $att, $id );
    $query = $this->db->get( $this->tabela );
    return $query->first_row();
  }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */