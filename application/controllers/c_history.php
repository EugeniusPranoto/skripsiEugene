<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_history extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }
    public function view_history_incoming()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_history-incoming.php',$data);
    }
    public function view_history_outward()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_history-outward.php',$data);
    }
}
?>