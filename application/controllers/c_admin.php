<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_admin extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
        $this->load->model('m_layout');
    }
    public function index()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $data['count'] = $this->m_layout->count_space()->result();
        $data['count_layout_dua'] = $this->m_layout->count_space_layout_dua()->result();
        $data['count_layout_three'] = $this->m_layout->count_space_layout_three()->result();
        $this->load->view('v_admin.php',$data); 
        
        
     }
     public function index_staff()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_staff.php',$data);    
     }
     public function index_pic()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_PIC.php',$data);    
     }
}
?>