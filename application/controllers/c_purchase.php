<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_purchase extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->helper('row');
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
        $this->load->model('m_inventory');
    }
    public function add_purchase()
    {
        $data['row']=$this->m_inventory->tampil_inventory()->num_rows();
        $data['code'] = getCode();
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['item'] = $this->m_inventory->tampil_inventory()->result();
        $data['category'] = $this->m_inventory->tampil_category()->result();
        $this->load->view('v_add_purchase.php',$data);
      }
    public function view_purchase()
   {
       
    $data['id_user'] = $this->session->id_user;
    $data['admin'] = $this->m_admin->tampil_admin()->result();
    $data['notification'] = $this->m_schedule->tampil_overdue()->result();
       $this->load->view('v_view_purchase.php',$data);
    }
    public function expanse()
   {
       
    $data['id_user'] = $this->session->id_user;
    $data['admin'] = $this->m_admin->tampil_admin()->result();
    $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_add_expanse.php',$data);
    }
}
?>