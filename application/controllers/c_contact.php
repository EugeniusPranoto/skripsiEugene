<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_contact extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_contact');
        $this->load->model('m_admin');
    }
    public function add_contact()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_add_contact.php', $data);
    }

    public function view_contact()
    {
        $data['id_user'] = $this->session->id_user;
        $data['contact'] = $this->m_contact->tampil_Contact()->result();
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $this->load->view('v_view_contact.php', $data);
    }

    function InsertContact()
    {
        $a = " ";
        $b = " ";
        $c = " ";
        $d = " ";


        $tangkapfname = $this->input->post('fname');
        $tangkaplname = $this->input->post('lname');
        $tangkapPhone = $this->input->post('phone');
        $tangkapEmail = $this->input->post('email');
        $tangkapRole = $this->input->post('role');
        $tangkapGender = $this->input->post('gender');
        $tangkapAddress = $this->input->post('address');
        $tangkapState = $this->input->post('state');
        $tangkapPostcode = $this->input->post('postcode');
        $tangkapCity = $this->input->post('city');

        $data = array(
            'user_fname' => $tangkapfname,
            'user_lname' => $tangkaplname,
            'user_phone' => $tangkapPhone,
            'user_email' => $tangkapEmail,
            'user_gender' => $tangkapGender,
            'user_address' => $tangkapAddress,
            'user_state' => $tangkapState,
            'user_postcode' => $tangkapPostcode,
            'user_city' => $tangkapCity,
            'user_type_role' => $tangkapRole,
            'user_status' => 1,

        );

        $id['data'] = $this->m_contact->getContact()->result();

        $flag = 0;

        foreach ($id['data'] as $list) {

            $a = $list->user_fname;
            $b = $list->user_lname;
            $c = $list->user_email;
            $d = $list->user_phone;



            if ($tangkapfname == $a && $tangkaplname == $b) {
                echo "<script>alert('Name Has Already Been taken')</script>";
                $flag = 2;
                break;
            } else if ($tangkapfname == $a && $tangkaplname != $b) {
                $flag = 1;
            } else if ($tangkapfname != $a && $tangkaplname == $b) {
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
            $this->m_contact->insert_table($data, 'user');
            redirect('c_contact/view_contact');
        } else if ($flag == 1) {
            $this->m_contact->insert_table($data, 'user');
            redirect('c_contact/view_contact');
        } else if ($flag == 2) {
            echo '<script type="text/javascript">';
            echo 'window.location.href = "add_contact";';
            echo '</script>';
        }
    }

    function edit_contact($contact)
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $where = array('id_user' => $contact);
        $data['contactEdit'] = $this->m_contact->edit($where, 'user')->result();
        $this->load->view('v_edit_contact.php', $data);
    }

    function delete_contact($id)
    {
        $data = array(
            'user_status' => '0'
        );
        $where = array('id_user' => $id);
        $this->m_contact->update_data($where, $data, 'user');
        redirect('c_contact/view_contact');
    }

    function Update_contact()
    {

        $tangkapID = $this->input->post('ID');
        $tangkapfname = $this->input->post('fname');
        $tangkaplname = $this->input->post('lname');
        $tangkapPhone = $this->input->post('phone');
        $tangkapEmail = $this->input->post('email');
        $tangkapGender = $this->input->post('gender');
        $tangkapRole = $this->input->post('role');
        $tangkapAddress = $this->input->post('address');
        $tangkapState = $this->input->post('state');
        $tangkapPostcode = $this->input->post('postcode');
        $tangkapCity = $this->input->post('city');

        $data = array(
            'id_user' => $tangkapID,
            'user_fname' => $tangkapfname,
            'user_lname' => $tangkaplname,
            'user_phone' => $tangkapPhone,
            'user_email' => $tangkapEmail,
            'user_gender' => $tangkapGender,
            'user_type_role' => $tangkapRole,
            'user_address' => $tangkapAddress,
            'user_state' => $tangkapState,
            'user_postcode' => $tangkapPostcode,
            'user_city' => $tangkapCity,
            'user_status' => 1,
        );
        $where = array(
            'id_user' => $tangkapID
        );

        $this->m_contact->update_data($where, $data, 'user');
        redirect('c_contact/view_contact');
    }
}
