<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_permit extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
    }
    public function add_permit()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result(); 
        $this->load->view('v_add-permit.php',$data);
      }
    public function view_permit()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result(); 
        $this->load->view('v_view-permit.php',$data);
    }
    function laporan(){
        $this->load->view("v_view_permit.php");
    }
}
?>