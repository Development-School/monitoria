<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paineladm extends CI_Controller
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
    $this->load->view('admin1/home_view', $data);
  }
}
/* End of file Paineladm.php */
/* Location: ./application/controllers/admin1/Paineladm.php */
