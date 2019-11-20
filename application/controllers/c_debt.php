<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_debt extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_debt');
        $this->load->model('m_admin');
        
    }
    public function add_debt()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_add_debt.php',$data);
    }
    public function existing_debt()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['account'] = $this->m_debt->account_list()->result();
        $this->load->view('v_existing_account.php',$data);
    }
    public function view_debt()
   {
        $data['id_user'] = $this->session->id_user;
        $data['debt'] = $this->m_debt->tampil_debt()->result();
        $data['admin'] = $this->m_admin->tampil_admin()->result();
       
        $this->load->view('v_view_debt.php',$data);
    }
    public function paid_debt()
   {
        $data['id_user'] = $this->session->id_user;
        $data['paid'] = $this->m_debt->tampil_paid()->result();
        $data['admin'] = $this->m_admin->tampil_admin()->result();
       
        $this->load->view('v_paid_account.php',$data);
    }
    public function personal_account_receivable()
   {
        $data['id_user'] = $this->session->id_user;
        $data['debt'] = $this->m_debt->tampil_debt()->result();
        $data['account'] = $this->m_debt->account_list()->result();
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_personalize_account.php',$data);
    }

    function UpdateDebt($id)
    {
        $data = array(
            'debt_status' => '0'
        );
        $where = array('id_debt' => $id);
        $this->m_debt->update_data($where, $data, 'account_receivable');
        redirect('c_debt/view_debt');
    }

    function InsertDebt()
    {
         $tangkapfname = $this->input->post('fname');
         $tangkaplname = $this->input->post('lname');
         $tangkapPhone = $this->input->post('phone');
         $tangkapDate = $this->input->post('date');
         $tangkapDeadline = $this->input->post('deadline');
         $tangkapAmount = $this->input->post('amount');
         $tangkapDescription = $this->input->post('description');
         
         $date = new DateTime($tangkapDate);
         $date->add(new DateInterval('P7D'));
         $ToP = $date->format('m/d/y'); 

         $data = array(
         'debt_fname' => $tangkapfname,        
         'debt_lname' => $tangkaplname,   
         'debt_phone' => $tangkapPhone,
         'debt_date' => $tangkapDate,
         'debt_deadline' => $ToP,    
         'debt_amount' => $tangkapAmount,   
         'debt_description' => $tangkapDescription,       
         'debt_status' => 1,
         );

         $check = $this->m_debt->check($tangkapfname)->num_rows();
         if ($check > 2) { 
            echo '<script type="text/javascript">
                alert("Term of Credit Limit Reached");
                location = "add_debt";
            </script>';
         }
         else{
                $this->m_debt->insert_table($data,'account_receivable');
                redirect('c_debt/view_debt');
            }
        }

        function InsertExistingDebt()
    {
         $tangkapfname = $this->input->post('debt_fname');
         $tangkaplname = $this->input->post('lname');
         $tangkapPhone = $this->input->post('phone');
         $tangkapDate = $this->input->post('date');
         $tangkapAmount = $this->input->post('amount');
         $tangkapDescription = $this->input->post('description');
         
         $date = new DateTime($tangkapDate);
         $date->add(new DateInterval('P7D'));
         $ToP = $date->format('m/d/y'); 

         $data = array(
         'debt_fname' => $tangkapfname,        
         'debt_lname' => $tangkaplname,   
         'debt_phone' => $tangkapPhone,
         'debt_date' => $tangkapDate,
         'debt_deadline' => $ToP,    
         'debt_amount' => $tangkapAmount,   
         'debt_description' => $tangkapDescription,       
         'debt_status' => 1,
         );

         $check = $this->m_debt->check($tangkapfname)->num_rows();
         if ($check > 2) { 
            echo '<script type="text/javascript">
                alert("Term of Credit Limit Reached");
                location = "existing_debt";
            </script>';
         }
         else{
                $this->m_debt->insert_table($data,'account_receivable');
                redirect('c_debt/view_debt');

                }
        }

        function InsertInstallement()
    {
         $tangkapfname = $this->input->post('fname');
         $tangkaplname = $this->input->post('lname');
         $tangkapPhone = $this->input->post('phone');
         $tangkapDate = $this->input->post('date');
         $tangkapDeadline = $this->input->post('deadline');
         $tangkapDescription = $this->input->post('description');
         $tangkapAmount = $this->input->post('amount');
      
         $data = array(
         'debt_fname' => $tangkapfname,        
         'debt_lname' => $tangkaplname,   
         'debt_phone' => $tangkapPhone,
         'debt_date' => $tangkapDate,
         'debt_deadline' => $tangkapDeadline,   
         'debt_description' => $tangkapDescription,        
         'debt_amount' => $tangkapAmount,
         'debt_status' => 2,
         );
                $this->m_debt->insert_table($data,'account_receivable');
                redirect('c_debt/view_debt');

                
        }

    function edit_debt($debt){
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['account'] = $this->m_debt->account_list()->result();
        $where = array('id_debt' => $debt);
        $data['debtEdit'] = $this->m_debt->edit($where,'account_receivable')->result();
        $this->load->view('v_installement_account.php',$data);
    }
            
    function delete_debt($id){
        $data = array(
            'debt_status' =>'0'
           ); 
       $where = array('id_debt' => $id);
        $this->m_debt->update_data($where,$data,'debt');
        redirect('c_debt/view_debt'); 
        
    }

    function Update_debt(){
        $tangkapID = $this->input->post('ID');
         $tangkapfname = $this->input->post('fname');
         $tangkaplname = $this->input->post('lname');
         $tangkapPhone = $this->input->post('phone');
         $tangkapDate = $this->input->post('date');
         $tangkapDeadline = $this->input->post('deadline');
         $tangkapAmount = $this->input->post('amount');
         
         
         $data = array(
        'id_debt' => $tangkapID,            
         'debt_fname' => $tangkapfname,        
         'debt_lname' => $tangkaplname,   
         'debt_phone' => $tangkapPhone,
         'debt_date' => $tangkapDate,
         'debt_deadline' => $tangkapDeadline,    
         'debt_amount' => $tangkapAmount,       
         'debt_status' => 1,
         );

        $where = array(
           'id_debt' => $tangkapID
       );
        
       $this->m_debt->update_data($where,$data,'account_receivable');
       redirect('c_debt/view_debt');
      }

      function getAccount()
      {
      $debt_fname = $this->input->post('debt_fname', TRUE);
      $data = $this->m_debt->getAccount($debt_fname)->result();
      echo json_encode($data);
      }    

      function getPayment()
      {
      $debt_fname = $this->input->post('debt_fname', TRUE);
      $data = $this->m_debt->getPayment($debt_fname)->result();
      echo json_encode($data);
      }    

      function getData()
      {
      $debt_fname = $this->input->post('debt_fname', TRUE);
      $data = $this->m_debt->account_data($debt_fname)->result();
      echo json_encode($data);
      }    

      
}
?>