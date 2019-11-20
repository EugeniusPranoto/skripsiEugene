<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
    }
    public function login()
    {
        $this->load->view('v_login.php');
    }
    public function sign_up()
    {
        $this->load->view('v_sign_up.php');
    }
    public function password()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_password.php',$data);
        
    }

    function proses_login()
    {
        $tangkapUsername = $this->input->post('email');
        $tangkapPassword = $this->input->post('password');
        $tangkapPhoto = $this->input->post('photo');
        
        $id['data'] = $this->m_login->getLogin($tangkapUsername)->result();
        foreach ($id['data'] as $list) {
            $a = $list->id_user;    
        }
        $cek = $this->m_login->cek_login($tangkapUsername,md5($tangkapPassword))->num_rows();
        $cek1 = $this->m_login->cek_Staff($tangkapUsername,md5($tangkapPassword))->num_rows();
        $cek2 = $this->m_login->cek_Pic($tangkapUsername,md5($tangkapPassword))->num_rows();

        

        if ($cek > 0) {
            $data_session = array(
                'user_fname' => $tangkapUsername,
                'user_username' => $tangkapUsername,
                'user_photo' => $tangkapPhoto,
                'id_user' => $a,
            );
            $this->session->set_userdata($data_session);
            redirect('c_admin/index');
        }
        else {
            echo "<script>alert('Please Input The correct Email & Password')</script>";
            $this->load->view('v_login.php');
        }

        if ($cek1 > 0) {
            $data_session = array(
                'user_fname' => $tangkapUsername,
                'user_username' => $tangkapUsername,
                'user_photo' => $tangkapPhoto,
                'id_user' => $a,
            );
            $this->session->set_userdata($data_session);
            redirect('c_admin/index_staff');
        }
        else {
            echo "<script>alert('Please Input The correct Email & Password')</script>";
            $this->load->view('v_login.php');
        }

        if ($cek2 > 0) {
            $data_session = array(
                'user_fname' => $tangkapUsername,
                'user_username' => $tangkapUsername,
                'user_photo' => $tangkapPhoto,
                'id_user' => $a,
            );
            $this->session->set_userdata($data_session);
            redirect('c_admin/index_pic');
        }
        else {
            echo "<script>alert('Please Input The correct Email & Password')</script>";
            $this->load->view('v_login.php');
        }

        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('c_login/login');
    }

    function InsertAdmin()
    {
        $a = " ";
        $b = " ";
        $d = " ";
        $e = " ";

        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapGender = $this->input->post('gender');
        $tangkapEmail = $this->input->post('email');
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
            'user_address' => $tangkapAddress,
            'user_gender' => $tangkapGender,
            'user_city' => $tangkapCity,
            'user_postcode' => $tangkapPostcode,
            'user_state' => $tangkapState,
            'user_status' => 1,
            'user_type_role' => "admin",
        );


        $id['content'] = $this->m_login->getID()->result();

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

        $id['data'] = $this->m_login->getAdmin()->result();

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

        if ($flag == 0) {
            $this->m_login->insert_table($data, 'user');
            $this->m_login->insert_table($data1, 'user_details');
            redirect('c_login/login');
        } else if ($flag == 1) {
            $this->m_login->insert_table($data, 'user');
            $this->m_login->insert_table($data1, 'user_details');
            $this->load->view('v_login.php');
        } else if ($flag == 2) {
            $this->load->view('v_sign_up.php');
        }
    }

    function Update_admin()
    {

        $tangkapID = $this->input->post('ID');
        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapEmail = $this->input->post('email');
        $tangkapPassword = $this->input->post('password');
        $tangkapPhone = $this->input->post('phone');
        $tangkapAddress = $this->input->post('address');
        $tangkapPhoto = $this->input->post('photo');
        $tangkapGender = $this->input->post('gender');

        $data = array(
            'id_admin' => $tangkapID,
            'user_fname' => $tangkapfName,
            'user_lname' => $tangkaplName,
            'user_username' => $tangkapEmail,
            'user_password' => md5($tangkapPassword),
            'user_phone' => $tangkapPhone,
            'user_address' => $tangkapAddress,
            'user_photo' => $tangkapPhoto,
            'user_gender' => $tangkapGender,
            'user_status' => 1,
        );

        $where = array(
            'id_user' => $tangkapID
        );

        $this->m_admin->update_data($where, $data, 'user');
        redirect('c_login/editprofile');
    }

    function edit($id)
    {

        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $idprofile = $id;
        $data['Useredit'] = $this->m_login->getProfile($idprofile)->result();
        $this->load->view('v_editprofile.php', $data);
    }

    function editPassword($id)
    {

        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $where = array('id_user' => $id);
        $data['Passwordedit'] = $this->m_login->edit($where, 'user')->result();
        $this->load->view('v_password.php', $data);
    }

    function Update_profile()
    {

        $tangkapID = $this->input->post('ID');
        $tangkapfName = $this->input->post('fname');
        $tangkaplName = $this->input->post('lname');
        $tangkapEmail = $this->input->post('email');
        $tangkapPhone = $this->input->post('phone');
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
            'user_address' => $tangkapAddress,
            'user_city' => $tangkapCity,
            'user_postcode' => $tangkapPostcode,
            'user_state' => $tangkapState,
            'user_gender' => $tangkapGender,
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

        $this->m_login->update_data($where, $data, 'user');
        $this->m_login->update_data($where, $data1, 'user_details');
        redirect('c_admin/index');
    }

    function update_password($id)
    {
        $tangkapID = $this->input->post('ID');
        $tangkapOldpass = $this->input->post('oldpass');
        $tangkapNewpass = $this->input->post('newpass');
        $tangkapRepass = $this->input->post('repass');

        if ($tangkapOldpass != "") {

            $data = $this->m_login->getIDpassword($tangkapID)->result();

            
            foreach ($data as $list) {
                $Old = $list->user_password;
                
            }
            
            if (md5($tangkapOldpass) == $Old) {
                //kalo pw lama betul
                

                if ($tangkapNewpass == $tangkapRepass) {
                    echo "<script>alert('$tangkapRepass')</script>";


                    $data = array(
                        'id_user' => $id,
                    );
                    $data1 = array(
                        'id_user' => $id,
                        'user_password' => md5($tangkapNewpass),
                    );
                    $where = array(
                        'id_user' => $id
                    );

                    $where = array('id_user' => $id);
                    $this->m_login->update_data($where, $data, 'user');
                    $this->m_login->update_data($where, $data1, 'user_details');
                    redirect('c_admin/index');
                } else {
                    echo "<script>alert('a')</script>";
                }
            } else {
                echo "<script>alert('b')</script>";
            }
        }
    }
}
