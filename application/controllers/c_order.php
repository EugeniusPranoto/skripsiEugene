<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_order extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
    }
    public function add_order()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_add_order.php',$data);
    }
    public function view_order()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_view_order.php',$data);
    }
}
?>