<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_invoice extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
    }
    public function add_invoice()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_add_invoice',$data);
    }
    public function view_invoice()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_invoice.php',$data);
    }
    public function edit_invoice()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_edit_invoice.php',$data);
    }
    public function print_invoice()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_view_invoice.php',$data);
    }
}
?>