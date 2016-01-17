<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitor_model extends MY_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->tabela = "tbl_monitores";
  }

  public function getMonitores()
  {
    $this->db->select('tbl_usuarios.id, nome, email, descricao, turno, dia_semana');
    $this->db->from( $this->tabela );
    $this->db->join('tbl_usuarios', 'tbl_usuarios.id = tbl_monitores.id_usuario', 'inner');
    return $this->db->get()->result();
  }


}

/* End of file Monitor_model.php */
/* Location: ./application/models/Monitor_model.php */