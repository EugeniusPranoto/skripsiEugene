<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_staff extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_staff');
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
    }
    public function add_staff()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_add_staff.php',$data);
      }
    public function view_staff()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['staff'] = $this->m_staff->tampil_Staff()->result(); 
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_view_staff.php',$data);
    }
    public function edit()
   {
       $data['id_user'] = $this->session->id_user;
       $data['admin'] = $this->m_admin->tampil_admin()->result();
       $this->load->view('v_edit_staff.php',$data);
    }
   
    function InsertStaff()
    {
        $a = " ";
        $b = " ";
        $c = " ";
        $d = " ";

        
        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapGender = $this->input->post('gender');
        $tangkapEmail = $this->input->post('email');
        $tangkapRole = $this->input->post('role');
        $tangkapPassword = $this->input->post('password');
        $tangkapPhone = $this->input->post('phone');
        $tangkapAddress = $this->input->post('address');
        $tangkapCity = $this->input->post('city');
        $tangkapPostcode = $this->input->post('postcode');
        $tangkapState = $this->input->post('state');
        $tangkapPhoto = $this->input->post('photo');
        
        $data = array(

            'user_fname' => $tangkapfName,
            'user_lname' => $tangkaplName,
            'user_phone' => $tangkapPhone,
            'user_email' => $tangkapEmail,
            'user_address' => $tangkapAddress,
            'user_gender' => $tangkapGender,
            'user_city' => $tangkapCity,
            'user_postcode' => $tangkapPostcode,
            'user_state' => $tangkapState,
            'user_type_role' => $tangkapRole,
            'user_status' => 1,
        );

        $id['content'] = $this->m_staff->getID()->result();

        foreach ($id['content'] as $list) {

            $a = $list->id_user;
        }

        $b = $a + 1;

        $data1 = array(
            'id_user' => $b,
            'user_username' => $tangkapEmail,
            'user_password' => md5($tangkapPassword),
            'user_photo' => $tangkapPhoto,
            'user_status' => 1,
        );

        $id['data'] = $this->m_staff->getAdmin()->result();

        $flag = 0;

        foreach ($id['data'] as $list) {

            $a = $list->user_fname;
            $b = $list->user_lname;
            $c = $list->user_username;
            $d = $list->user_phone;



            if ($tangkapfName == $a && $tangkaplName == $b) {
                echo "<script>alert('Name Has Already Been taken')</script>";

                $flag = 2;
                break;
            } else if ($tangkapfName == $a && $tangkaplName != $b) {
                $flag = 1;
            } else if ($tangkapfName != $a && $tangkaplName == $b) {
                $flag = 1;
            } else if ($tangkapEmail == $c) {
                $flag = 2;
                echo "<script>alert('Username Has Already Been taken')</script>";
                break;
            } else if ($tangkapPhone == $d) {
                $flag = 2;
                echo "<script>alert('Phone Number Has Already Been taken')</script>";
                break;
            }

            // }

            if ($flag == 2) {
                break;
            }
        }
            
        if ($flag == 0)
        {
            $this->m_staff->insert_table($data, 'user');
            $this->m_staff->insert_table($data1, 'user_details');
            redirect('c_staff/view_staff');
        }
        else if ($flag == 1)
        {
            $this->m_staff->insert_table($data, 'user');
            $this->m_staff->insert_table($data1, 'user_details');
            redirect('c_staff/view_staff');
        }
        else if($flag == 2)
        {
            echo '<script type="text/javascript">'; 
            echo 'window.location.href = "add_staff";';
            echo '</script>';
        }   
    }

    function edit_staff($staff){
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $id =  $staff;
        $data['staffEdit'] = $this->m_staff->getProfile($id)->result();
        $this->load->view('v_edit_staff.php',$data);
    }

    function delete_staff($id){
        $data = array(
            'user_status' =>'0'
        ); 
        $data1 = array(
            'user_status' =>'0'
        ); 
        $where = array('id_user' => $id);
        $this->m_staff->update_data($where,$data,'user');
        $this->m_staff->update_data($where,$data1,'user_details');
        redirect('c_staff/view_staff'); 
    }
    
    function update_staff(){
        $tangkapID = $this->input->post('ID');
        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapEmail = $this->input->post('email');
        $tangkapPhone = $this->input->post('phone');
        $tangkapRole = $this->input->post('role');
        $tangkapAddress = $this->input->post('address');
        $tangkapCity = $this->input->post('city');
        $tangkapState = $this->input->post('state');
        $tangkapPostcode = $this->input->post('postcode');
        $tangkapPhoto = $this->input->post('photo');
        $tangkapGender = $this->input->post('gender');
        
        $data = array(
            'id_user' => $tangkapID,
            'user_fname' => $tangkapfName,
            'user_lname' => $tangkaplName,
            'user_phone' => $tangkapPhone,
            'user_email' => $tangkapEmail,
            'user_address' => $tangkapAddress,
            'user_gender' => $tangkapGender,
            'user_city' => $tangkapCity,
            'user_postcode' => $tangkapPostcode,
            'user_state' => $tangkapState,
            'user_type_role' => $tangkapRole,
            'user_status' => 1,
        );

        
        $data1 = array(
            'id_user' => $tangkapID,
            'user_username' => $tangkapEmail,
            'user_photo' => $tangkapPhoto,
            'user_status' => 1,
        );

        $where = array(
            'id_user' => $tangkapID
        );

        $this->m_staff->update_data($where, $data, 'user');
        $this->m_staff->update_data($where, $data1, 'user_details');
        redirect('c_staff/view_staff');
    }

}
