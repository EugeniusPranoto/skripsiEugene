<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_operational extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_operational');
        $this->load->model('m_admin');
    }
    public function add_operational()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['item'] = $this->m_operational->tampil_item()->result();  
        $data['employee'] = $this->m_operational->tampil_employee()->result();  
        $this->load->view('v_add_operational.php',$data);
    }
    public function view_operational()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['operational'] = $this->m_operational->tampil_Operational()->result();
        $this->load->view('v_view_operational.php',$data);
    }

    function InsertOperational()
     {
         $tangkapOperational = $this->input->post('name');
         $tangkapDate = $this->input->post('date');
         $tangkapItem = $this->input->post('item');
         $tangkapInventory = $this->input->post('inventory');
         $tangkapEmployee = $this->input->post('employee');
         $tangkapCost = $this->input->post('cost');
         $tangkapQuantity = $this->input->post('quantity');
         $tangkapAmount = $this->input->post('amount');
         
         $data = array(
         'id_item' => $tangkapItem, 
         'operational_name' => $tangkapOperational,        
         'operational_date' => $tangkapDate,   
         'operational_inventory' => $tangkapInventory,
         'operational_Employee' => $tangkapEmployee,
         'operational_Cost' => $tangkapCost,    
         'operational_Quantity' => $tangkapQuantity,       
         'operational_Amount' => $tangkapAmount,
         'operational_status' => 1,
         );
         
         $this->m_operational->insert_table($data,'operational');
         redirect('c_operational/view_operational');
        }

        function edit_operational($operational){
            $data['id_user'] = $this->session->id_user;
            $data['admin'] = $this->m_admin->tampil_admin()->result();
            $data['operational'] = $this->m_operational->tampil_Operational()->result();
            $where = array('id_operational' => $operational);
            $data['operationalEdit'] = $this->m_operational->edit($where,'operational')->result();
            $this->load->view('v_edit_operational.php',$data);
        }    
        
        function Update_operational(){

         $tangkapID = $this->input->post('ID');
         $tangkapOperational = $this->input->post('name');
         $tangkapDate = $this->input->post('date');
         $tangkapItem = $this->input->post('item');
         $tangkapInventory = $this->input->post('inventory');
         $tangkapEmployee = $this->input->post('employee');
         $tangkapCost = $this->input->post('cost');
         $tangkapQuantity = $this->input->post('quantity');
         $tangkapAmount = $this->input->post('amount');
         
         $data = array(
            'id_item' => $tangkapItem,
            'id_operational' => $tangkapID,          
            'operational_name' => $tangkapOperational,        
            'operational_date' => $tangkapDate,   
            'operational_inventory' => $tangkapInventory,
            'operational_Employee' => $tangkapEmployee,
            'operational_Cost' => $tangkapCost,    
            'operational_Quantity' => $tangkapQuantity,       
            'operational_Amount' => $tangkapAmount,
            'operational_status' => 1,
            );
         $where = array(
            'id_operational' => $tangkapID
        );
         
        $this->m_operational->update_data($where,$data,'operational');
              redirect('c_operational/view_operational');
       }

}
?>