<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_supplier extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_supplier');
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
    }
    public function add_supplier()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result(); 
        $this->load->view('v_add_supplier.php', $data);
    }
    public function view_supplier()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['supplier'] = $this->m_supplier->tampil_Supplier()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result(); 
        $this->load->view('v_view_supplier.php', $data);
    }

    function InsertSupplier()
    {
        $tangkapSupplier = $this->input->post('supplier');
        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapGender = $this->input->post('gender');
        $tangkapPhone = $this->input->post('phone');
        $tangkapEmail = $this->input->post('email');
        $tangkapAddress = $this->input->post('address');
        $tangkapState = $this->input->post('state');
        $tangkapPostcode = $this->input->post('postcode');
        $tangkapCity = $this->input->post('city');

        $data = array(
            'user_fname' => $tangkapfName,
            'user_lname' => $tangkaplName,
            'user_gender' => $tangkapGender,
            'user_phone' => $tangkapPhone,
            'user_email' => $tangkapEmail,
            'user_address' => $tangkapAddress,
            'user_state' => $tangkapState,
            'user_postcode' => $tangkapPostcode,
            'user_city' => $tangkapCity,
            'user_type_role' => "Supplier",
            'user_status' => 1,
        );

        $id['content'] = $this->m_supplier->getID()->result();

        foreach ($id['content'] as $list) {

            $a = $list->id_user;
        }
        $b = $a + 1;

        $data1 = array(
            'id_user' => $b,
            'supplier_details_department' => $tangkapSupplier,
            'supplier_details_status' => 1,
        );

        $id['data'] = $this->m_supplier->tampil_Supplier()->result();

        $flag = 0;

        foreach ($id['data'] as $list) {

            $a = $list->user_fname;
            $b = $list->user_lname;
            $c = $list->user_email;
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
                echo "<script>alert('Email Has Already Been taken')</script>";
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

        if ($flag == 0) {
            $this->m_supplier->insert_table($data, 'user');
            $this->m_supplier->insert_table($data1, 'supplier_details');
            redirect('c_supplier/view_supplier');
        } else if ($flag == 1) {
            $this->m_supplier->insert_table($data, 'user');
            $this->m_supplier->insert_table($data1, 'supplier_details');
            redirect('c_supplier/view_supplier');
        } else if ($flag == 2) {
            echo '<script type="text/javascript">';
            echo 'window.location.href = "add_supplier";';
            echo '</script>';
        }
    }

    function edit_supplier($supplier)
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $id = $supplier;
        $data['supplierEdit'] = $this->m_supplier->supplier($id)->result();
        $this->load->view('v_edit_supplier.php', $data);
    }

    function delete_supplier($id)
    {
        $data = array(
            'user_status' => '0'
        );
        $data1 = array(
            'supplier_details_status' => '0'
        );
        $where = array('id_user' => $id);
        $this->m_supplier->update_data($where, $data, 'user');
        $this->m_supplier->update_data($where, $data1, 'supplier_details');
        redirect('c_supplier/view_supplier');
    }

    function Update_supplier()
    {
        $tangkapID = $this->input->post('ID');
        $tangkapSupplier = $this->input->post('supplier');
        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapGender = $this->input->post('gender');
        $tangkapPhone = $this->input->post('phone');
        $tangkapEmail = $this->input->post('email');
        $tangkapAddress = $this->input->post('address');
        $tangkapState = $this->input->post('state');
        $tangkapPostcode = $this->input->post('postcode');
        $tangkapCity = $this->input->post('city');

        $data = array(
            'id_user' => $tangkapID,
            'user_fname' => $tangkapfName,
            'user_fname' => $tangkapfName,
            'user_lname' => $tangkaplName,
            'user_gender' => $tangkapGender,
            'user_phone' => $tangkapPhone,
            'user_email' => $tangkapEmail,
            'user_address' => $tangkapAddress,
            'user_state' => $tangkapState,
            'user_postcode' => $tangkapPostcode,
            'user_city' => $tangkapCity,
            'user_type_role' => "Supplier",
            'user_status' => 1,
        );

        $data1 = array(
            'id_user' => $tangkapID,
            'supplier_details_department' => $tangkapSupplier,
            'supplier_details_status' => 1,
        );

        $where = array(
            'id_user' => $tangkapID
        );

        $this->m_supplier->update_data($where, $data, 'user');
        $this->m_supplier->update_data($where, $data1, 'supplier_details');
        redirect('c_supplier/view_supplier');
    }
}
