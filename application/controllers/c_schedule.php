<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_schedule extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_schedule');
        $this->load->model('m_admin');
        $this->load->model('m_employee');
    }
    public function add_schedule()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['employee'] = $this->m_employee->select_employee()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_add_schedule.php', $data);
    }
    public function view_active_schedule()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['schedule'] = $this->m_schedule->active_schedule()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_active_schedule.php', $data);
    }
    public function view_schedule()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['schedule'] = $this->m_schedule->tampil_schedule()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_view_schedule.php', $data);
    }

    function InsertSchedule()
    {
        $tangkapSchedule = $this->input->post('schedule');
        $tangkapName = $this->input->post('name');
        $tangkapTime = $this->input->post('time');
        $tangkapDate = $this->input->post('date');
        $tangkapDescription = $this->input->post('description');

        $data = array(
            'schedule_name' => $tangkapSchedule,
            'schedule_customer' => $tangkapName,
            'schedule_time' => $tangkapTime,
            'schedule_date' => $tangkapDate,
            'schedule_description' => $tangkapDescription,
            'schedule_status' => 2,
        );
        if ($tangkapTime > "17:00" || $tangkapTime < "08:00"){
            echo'
            <script type="text/javascript">
                alert("Adjust time with opening hours");
                location = "add_schedule";
            </script>';
        }
        else{
                        $check = $this->m_schedule->check($tangkapDate, $tangkapTime)->num_rows();
                        if ($check > 1) { 
                            echo '<script type="text/javascript">
                                alert("Schedule fully booked");
                                location = "add_schedule";
                            </script>';
                        } else {
                                $this->m_schedule->insert_table($data, 'schedule');
                                redirect('c_schedule/view_active_schedule');
                            }

                            $row = $this->m_schedule->on_going($tangkapDate)->num_rows();

                        if ($row > 2) { 
                          echo' <script type="text/javascript">
                                alert("Schedule fully booked");
                                location = "add_schedule";
                            </script>';
                         } else {
                            $this->m_schedule->insert_table($data, 'schedule');
                            redirect('c_schedule/view_active_schedule');
                        }
        }
    }

    function edit_schedule($schedule)
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $where = array('id_schedule' => $schedule);
        $data['scheduleEdit'] = $this->m_schedule->edit($where, 'schedule')->result();
        $this->load->view('v_edit_schedule.php', $data);
    }

    function delete_schedule($id)
    {
        $data = array(
            'schedule_status' => '0'
        );
        $where = array('id_schedule' => $id);
        $this->m_schedule->update_data($where, $data, 'schedule');
        redirect('c_schedule/view_schedule');
    }

    function change_schedule($id)
    {
        $data = array(
            'schedule_status' => '1'
        );
        $where = array('id_schedule' => $id);
        $this->m_schedule->update_data($where, $data, 'schedule');
        redirect('c_schedule/view_schedule');
    }

    function Update_schedule()
    {
        $tangkapID = $this->input->post('ID');
        $tangkapSchedule = $this->input->post('schedule');
        $tangkapName = $this->input->post('name');
        $tangkapTime = $this->input->post('time');
        $tangkapDate = $this->input->post('date');
        $tangkapDescription = $this->input->post('description');


        $data = array(
            'id_schedule' => $tangkapID,
            'schedule_name' => $tangkapSchedule,
            'schedule_customer' => $tangkapName,
            'schedule_time' => $tangkapTime,
            'schedule_date' => $tangkapDate,
            'schedule_description' => $tangkapDescription,
            'schedule_status' => 1,
        );

        $where = array(
            'id_schedule' => $tangkapID
        );

        $this->m_schedule->update_data($where, $data, 'schedule');
        redirect('c_schedule/view_schedule');
    }
}
?>