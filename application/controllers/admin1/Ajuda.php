<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajuda extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('logado')){
      redirect(base_url());
    }
  }

  public function index()
  {
    $this->load->view('admin1/ajuda_view');
  }
}