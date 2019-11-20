<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_companyprofile extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_Project');
    }
    public function index()
    {
        $this->load->view('v_companyprofile(backup).php');
      }
}
?>