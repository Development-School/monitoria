<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitores extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Monitor_model', 'monitor');
    if(!$this->session->userdata('logado')){
      redirect(base_url());
    }
  }

  public function index()
  {
    $data['monitores'] = $this->monitor->get();
    $this->load->view('admin1/monitores_view',$data);
  }

  public function solicitar($id='')
  {
    $data['monitor'] = $this->monitor->getById($id);
    $this->load->view('admin1/solicitar_monitores_view',$data);
  }
}

/* End of file Monitores.php */
/* Location: ./application/controllers/Monitores.php */