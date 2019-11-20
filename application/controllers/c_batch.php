<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_batch extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_admin');
    }
    public function add_batch()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_add_batch.php',$data);
    }
    public function view_active_batch()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_view_active_batch.php',$data);
    }
    public function view_arrived_batch()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_view_arrived_batch.php',$data);
    }
}
?>