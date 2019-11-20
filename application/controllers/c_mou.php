<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_mou extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }
    public function add_mou()
    {
        $data['id_admin'] = $this->session->id_admin;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_add-mou.php',$data);
      }
    public function view_mou()
   {
        $data['id_admin'] = $this->session->id_admin;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_view-mou.php',$data);
    }
}
?>