<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_employee extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_employee');
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
    }
    public function add_employee()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result(); 
        $this->load->view('v_add_employee.php', $data);
    }
    public function view_employee()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['employee'] = $this->m_employee->tampil_Employee()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result(); 
        $this->load->view('v_view_employee.php', $data);
    }

    function InsertEmployee()
    {
        $a = " ";
        $b = " ";
        $c = " ";
        $d = " ";

        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapGender = $this->input->post('gender');
        $tangkapPhone = $this->input->post('phone');
        $tangkapEmail = $this->input->post('email');
        $tangkapAddress = $this->input->post('address');
        $tangkapHire = $this->input->post('hiredate');
        $tangkapDepartment = $this->input->post('department');
        $tangkapSalary = $this->input->post('salary');
        $tangkapCity = $this->input->post('city');
        $tangkapPostcode = $this->input->post('postcode');
        $tangkapState = $this->input->post('state');

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
            'user_type_role' => "Employee",
            'user_status' => 1,
        );

        $id['content'] = $this->m_employee->getID()->result();

        foreach ($id['content'] as $list) {

            $a = $list->id_user;
        }

        $b = $a + 1;

        $data1 = array(
            'id_user' => $b,
            'employee_details_hiredate' => $tangkapHire,
            'employee_details_department' => $tangkapDepartment,
            'employee_details_salary' => $tangkapSalary,
            'employee_details_status' => 1,
        );

        $id['data'] = $this->m_employee->getEmployee()->result();

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
            $this->m_employee->insert_table($data, 'user');
            $this->m_employee->insert_table($data1, 'employee_details');
            redirect('c_employee/view_employee');
        } else if ($flag == 1) {
            $this->m_employee->insert_table($data, 'user');
            $this->m_employee->insert_table($data1, 'employee_details');
            redirect('c_employee/view_employee');
        } else if ($flag == 2) {
            echo '<script type="text/javascript">';
            echo 'window.location.href = "add_employee";';
            echo '</script>';
        }
    }

    function edit_employee($employee)
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $id = $employee;
        $data['employeeEdit'] = $this->m_employee->getProfile($id)->result();
        $this->load->view('v_edit_employee.php', $data);
    }

    function delete_employee($id)
    {
        $data = array(
            'user_status' => '0'
        );
        $data1 = array(
            'employee_details_status' => '0'
        );
        $where = array('id_user' => $id);
        $this->m_employee->update_data($where, $data, 'user');
        $this->m_employee->update_data($where, $data1, 'employee_details');
        redirect('c_employee/view_employee');
    }

    function update_employee()
    {
        $tangkapID = $this->input->post('ID');
        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapGender = $this->input->post('gender');
        $tangkapPhone = $this->input->post('phone');
        $tangkapEmail = $this->input->post('email');
        $tangkapAddress = $this->input->post('address');
        $tangkapHire = $this->input->post('hiredate');
        $tangkapDepartment = $this->input->post('department');
        $tangkapSalary = $this->input->post('salary');
        $tangkapCity = $this->input->post('city');
        $tangkapPostcode = $this->input->post('postcode');
        $tangkapState = $this->input->post('state');

        $data = array(
            'id_user' => $tangkapID,
            'user_fname' => $tangkapfName,
            'user_lname' => $tangkaplName,
            'user_gender' => $tangkapGender,
            'user_phone' => $tangkapPhone,
            'user_address' => $tangkapAddress,
            'user_gender' => $tangkapGender,
            'user_city' => $tangkapCity,
            'user_postcode' => $tangkapPostcode,
            'user_state' => $tangkapState,
            'user_type_role' => "Employee",
            'user_status' => 1,
        );


        $data1 = array(
            'id_user' => $tangkapID,
            'employee_details_hiredate' => $tangkapHire,
            'employee_details_department' => $tangkapDepartment,
            'employee_details_salary' => $tangkapSalary,
            'employee_details_status' => 1,
        );


        $where = array(
            'id_user' => $tangkapID
        );

        $this->m_employee->update_data($where, $data, 'user');
        $this->m_employee->update_data($where, $data1, 'employee_details');
        redirect('c_employee/view_employee');
    }
}
