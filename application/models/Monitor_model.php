<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitor_model extends MY_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->tabela = "tbl_monitores";
  }

  public function get($limit = null)
  {
    ($limit != null) ? $this->db->limit($limit) : null;
    $this->db->select('tbl_usuarios.id, nome, email, descricao, turno, dia_semana');
    $this->db->from( $this->tabela );
    $this->db->join('tbl_usuarios', 'tbl_usuarios.id = tbl_monitores.id_usuario', 'inner');
    return $this->db->get()->result();
  }

  public function getById($id)
  {
    $this->db->where('tbl_monitores.id', $id);
    $this->db->select('tbl_usuarios.id, nome, email, descricao, turno, dia_semana');
    $this->db->from( $this->tabela );
    $this->db->join('tbl_usuarios', 'tbl_usuarios.id = tbl_monitores.id_usuario', 'inner');
    return $this->db->get()->first_row();
  }
}

/* End of file Monitor_model.php */
/* Location: ./application/models/Monitor_model.php */