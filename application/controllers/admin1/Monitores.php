<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitores extends CI_Controller {

  public function index()
  {
    $this->load->view('admin1/monitores_view');
  }

  public function solicitar()
  {
    $this->load->view('admin1/solicitar_monitores_view');
  }
}

/* End of file Monitores.php */
/* Location: ./application/controllers/Monitores.php */