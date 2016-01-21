<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	public $tabela;

  public function get($limit=null)
  {
    ($limit != null) ? $this->db->limit($limit) : null;
    $query = $this->db->get($this->tabela);
    return  $query->result();
  }

  public function getBy($att, $id)
  {
    $this->db->where( $att, $id );
    $query = $this->db->get( $this->tabela );
    return $query->first_row();
  }

  public function getTabela($tabela)
  {
    return  $this->db->get($tabela)->result();
  }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */