<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_layout extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_layout');
        $this->load->model('m_inventory');
    }
    public function layoutsatu()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['layout'] = $this->m_layout->layout_quantity()->result();  
        $data['inventory'] = $this->m_layout->tampil_inventory()->result(); 
        $data['item'] = $this->m_layout->tampil_item()->result();  
        $data['layoutlist'] = $this->m_layout->layout()->result(); 
        $data['check1'] = $this->m_layout->check()->result();  
        $data['relocate'] = $this->m_layout->relocate()->result();  
        $data['modal'] = $this->m_layout->tampil_modal()->result();
        $data['history'] = $this->m_layout->tampil_history()->result();
        $data['count'] = $this->m_layout->count_space()->result();
        $data['check'] = $this->m_layout->check_space()->result();
        $this->load->view('v_layout_kandangsatu.php',$data);
    }

     function getAjax(){
        $id_layout = $this->input->post('id_layout');
        $where = array('id_layout' => $id_layout);
        $data = $this->m_layout->getAjax($where);
        echo json_encode($data);
    }

      public function layoutdua()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['layout2'] = $this->m_layout->layout_quantity_dua()->result(); 
        $data['inventory'] = $this->m_layout->tampil_inventory()->result(); 
        $data['item'] = $this->m_layout->tampil_item()->result();  
        $data['check_layout'] = $this->m_layout->check_layoutdua()->result(); 
        $data['relocate'] = $this->m_layout->relocate()->result();  
        $data['modal'] = $this->m_layout->tampil_modal()->result();
        $data['layoutlist'] = $this->m_layout->layout()->result(); 
        $data['history'] = $this->m_layout->tampil_history_layout_dua()->result();
        $data['count_layout_dua'] = $this->m_layout->count_space_layout_dua()->result();
        $data['check'] = $this->m_layout->check_space()->result(); 
        $this->load->view('v_layout_kandangdua.php',$data);
    }
    public function layoutdua_2()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['layout2'] = $this->m_layout->layout_quantity_dua()->result(); 
        $data['inventory'] = $this->m_layout->tampil_inventory()->result(); 
        $data['item'] = $this->m_layout->tampil_item()->result();  
        $data['check_layout'] = $this->m_layout->check_layoutdua()->result(); 
        $data['relocate'] = $this->m_layout->relocate()->result();  
        $data['modal'] = $this->m_layout->tampil_modal()->result();
        $data['layoutlist'] = $this->m_layout->layout()->result(); 
        $data['history'] = $this->m_layout->tampil_history_layout_dua()->result();
        $data['count_layout_dua'] = $this->m_layout->count_space_layout_dua()->result();
        $data['check'] = $this->m_layout->check_space()->result(); 
        $this->load->view('v_layout_kandangdua_halaman2.php',$data);
    }
    
    public function layoutdua_3()
    {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['layout2'] = $this->m_layout->layout_quantity_dua()->result(); 
        $data['inventory'] = $this->m_layout->tampil_inventory()->result(); 
        $data['item'] = $this->m_layout->tampil_item()->result();  
        $data['check_layout'] = $this->m_layout->check_layoutdua()->result(); 
        $data['relocate'] = $this->m_layout->relocate()->result();  
        $data['modal'] = $this->m_layout->tampil_modal()->result();
        $data['layoutlist'] = $this->m_layout->layout()->result(); 
        $data['history'] = $this->m_layout->tampil_history_layout_dua()->result();
        $data['count_layout_dua'] = $this->m_layout->count_space_layout_dua()->result();
        $data['check'] = $this->m_layout->check_space()->result(); 
        $this->load->view('v_layout_kandangdua_halaman3.php',$data);
      }
    public function layoutiga()
    {
          $data['id_user'] = $this->session->id_user;
          $data['admin'] = $this->m_admin->tampil_admin()->result();
          $data['layout3'] = $this->m_layout->layout_quantity_three()->result(); 
          $data['inventory'] = $this->m_layout->tampil_inventory()->result(); 
          $data['item'] = $this->m_layout->tampil_item()->result();  
          $data['check_layout'] = $this->m_layout->check_layout_three()->result(); 
          $data['relocate'] = $this->m_layout->relocate()->result();  
          $data['modal'] = $this->m_layout->tampil_modal()->result();
          $data['layoutlist'] = $this->m_layout->layout()->result(); 
          $data['history'] = $this->m_layout->tampil_history_layout_three()->result();
          $data['count_layout_three'] = $this->m_layout->count_space_layout_three()->result();
          $data['check'] = $this->m_layout->check_space()->result(); 
          
          $this->load->view('v_layout_kandangtiga',$data);
    }  
    public function layoutiga_2()
    {
          $data['id_user'] = $this->session->id_user;
          $data['admin'] = $this->m_admin->tampil_admin()->result();
          $data['layout3'] = $this->m_layout->layout_quantity_three()->result(); 
          $data['inventory'] = $this->m_layout->tampil_inventory()->result(); 
          $data['item'] = $this->m_layout->tampil_item()->result();  
          $data['check_layout'] = $this->m_layout->check_layout_three()->result(); 
          $data['relocate'] = $this->m_layout->relocate()->result();  
          $data['modal'] = $this->m_layout->tampil_modal()->result();
          $data['layoutlist'] = $this->m_layout->layout()->result(); 
          $data['history'] = $this->m_layout->tampil_history_layout_three()->result();
          $data['count_layout_three'] = $this->m_layout->count_space_layout_three()->result();
          $data['check'] = $this->m_layout->check_space()->result(); 
          $this->load->view('v_layout_kandangtiga_halaman2',$data);
    }
    public function layoutiga_3()
    {
          $data['id_user'] = $this->session->id_user;
          $data['admin'] = $this->m_admin->tampil_admin()->result();
          $data['layout3'] = $this->m_layout->layout_quantity_three()->result(); 
          $data['inventory'] = $this->m_layout->tampil_inventory()->result(); 
          $data['item'] = $this->m_layout->tampil_item()->result();  
          $data['check_layout'] = $this->m_layout->check_layout_three()->result(); 
          $data['relocate'] = $this->m_layout->relocate()->result();  
          $data['modal'] = $this->m_layout->tampil_modal()->result();
          $data['layoutlist'] = $this->m_layout->layout()->result(); 
          $data['history'] = $this->m_layout->tampil_history_layout_three()->result();
          $data['count_layout_three'] = $this->m_layout->count_space_layout_three()->result();
          $data['check'] = $this->m_layout->check_space()->result(); 
          $this->load->view('v_layout_kandangtiga_halaman3',$data);
    }
    function getCode()
    {
        $id_item = $this->input->post('id_item', TRUE);
        $data = $this->m_layout->getCode($id_item)->result();
        echo json_encode($data);
    }    

    function getLayout()
    {
        $id_layout = $this->input->post('id_layout', TRUE);
        $data['layout'] = $this->m_layout->getLayout($id_layout)->result();
        $data['detail'] = $this->m_layout->relocate_where($id_layout)->result();
        echo json_encode($data);
    }    

    function getHistory()
    {
        $id_item = $this->input->post('id_item', TRUE);
        $data = $this->m_layout->getHistory($id_item)->result();
        echo json_encode($data);
    }    

    function getHistory_layout_dua()
    {
        $id_item = $this->input->post('id_item', TRUE);
        $data = $this->m_layout->getHistory_layout_dua($id_item)->result();
        echo json_encode($data);
    }    

    function delete_item($id)
    {
        $data = array(
            'layout_details_status' => 0,
        );
        $where = array('id_item' => $id);
        $this->m_layout->update_data($where, $data, 'layout_details');
        redirect('c_layout/layoutsatu');
    }

    function InsertItem($id)
    {
         $tangkapID = $this->input->post('id_item');
         $tangkapNumber = $this->input->post('number');
         $tangkapLayout = $this->input->post('id_layout');
         $tangkapCheck = $this->input->post('checkbox');
         $date = date('Y-m-d');          
         date_default_timezone_set("Asia/Jakarta");
         $time = date("h:i:s");

         if($tangkapCheck == 0){
            $data = array(
                'id_layout' => $tangkapLayout,
                'id_item' => $tangkapID,
                'layout_details_date' => $date,	
                'layout_details_time' => $time,	
                'layout_box_number' => $tangkapNumber,
                'layout_details_status' => 3,
            );

            $space = $this->m_layout->check_space()->result();
            foreach ($space as $list) {
                $a = $list->layout_box_number;    
            }
                if($tangkapNumber == $a){
                    echo '<script type="text/javascript">
                    alert("Shed Number Has Been Filled");
                    document.location = "../layoutsatu"
                     </script>';
                }
                else{
                    
            $this->m_layout->insert_table($data,'layout_details');
            redirect('c_layout/layoutsatu');
                }
            }

         if($tangkapCheck == 1){
            $tangkapRelocate = $this->input->post('relocate');
            $date = date('Y-m-d'); 
            date_default_timezone_set("Asia/Jakarta");
            $time = date("h:i:s");
            
                    $data1 = array(
                        'id_layout' => $tangkapLayout,
                        'id_item' => $tangkapID,       
                        'layout_box_number' => $tangkapNumber,
                        'layout_details_status' => 1,
                        );
    
                    $where = array(
                        'layout_box_number' => $tangkapNumber
                    );
                    
                    $this->m_layout->update_data($where, $data1,'layout_details');

                    $data = array(
                        'id_layout' => $tangkapLayout,
                        'id_item' => $tangkapID,
                        'layout_details_date' => $date, 
                        'layout_details_time' => $time,	
                        'layout_box_number' => $tangkapRelocate,
                        'layout_details_status' => 3,
                    );
                
                    $this->m_layout->insert_table($data,'layout_details');
                    redirect('c_layout/layoutsatu');

                    // $data = array(
                    //     'id_layout' => $tangkapLayout,
                    //     'id_item' => $tangkapID,
                    //     'layout_details_date' => $date, 
                    //     'layout_details_time' => $time,	
                    //     'layout_box_number' => $tangkapNumber,
                    //     'layout_details_status' => 3,
                    // );
                
                    // $this->m_layout->insert_table($data,'layout_details');
                    // redirect('c_layout/layoutsatu');
                //  }      
         }
        }





        function InsertItem_2($id)
    {
         $tangkapID = $this->input->post('id_item');
         $tangkapNumber = $this->input->post('number');
         $tangkapLayout = $this->input->post('id_layout');
         $tangkapCheck = $this->input->post('checkbox');
         $date = date('Y-m-d');          
         date_default_timezone_set("Asia/Jakarta");
         $time = date("h:i:s");

         if($tangkapCheck == 0){
            $data = array(
                'id_layout' => 2,
                'id_item' => $tangkapID,
                'layout_details_date' => $date,	
                'layout_details_time' => $time,	
                'layout_box_number' => $tangkapNumber,
                'layout_details_status' => 1,
            );

            $space = $this->m_layout->check_space()->result();
            foreach ($space as $list) {
                $a = $list->layout_box_number;    
            }
            
                if($tangkapNumber == $a){
                    echo '<script type="text/javascript">
                    alert("Shed Number Has Been Filled");
                    document.location = "../layoutdua"
                     </script>';
                }
                else{
                    
            $this->m_layout->insert_table($data,'layout_details');
            redirect('c_layout/layoutdua');
                }
            }


         if($tangkapCheck == 1){
            $tangkapRelocate = $this->input->post('relocate');
            $date = date('Y-m-d'); 
            date_default_timezone_set("Asia/Jakarta");
            $time = date("h:i:s");
            
                    $data1 = array(
                        'id_layout' => $tangkapLayout,
                        'id_item' => $tangkapID,       
                        'layout_box_number' => $tangkapRelocate,
                        'layout_details_status' => 1,
                        );
    
                    $where = array(
                        'layout_box_number' => $tangkapNumber
                    );

                    
                    $this->m_layout->update_data($where, $data1,'layout_details');

                    $data = array(
                        'id_layout' => $tangkapLayout,
                        'id_item' => $tangkapID,
                        'layout_details_date' => $date, 
                        'layout_details_time' => $time,	
                        'layout_box_number' => $tangkapNumber,
                        'layout_details_status' => 3,
                    );
                
                    $this->m_layout->insert_table($data,'layout_details');
                    redirect('c_layout/layoutdua');
    
                //  }
            
         
         }

         
             
        }

        function InsertItem_3($id)
    {
         $tangkapID = $this->input->post('id_item');
         $tangkapNumber = $this->input->post('number');
         $tangkapLayout = $this->input->post('id_layout');
         $tangkapCheck = $this->input->post('checkbox');
         $date = date('Y-m-d');          
         date_default_timezone_set("Asia/Jakarta");
         $time = date("h:i:s");

         if($tangkapCheck == 0){
            $data = array(
                'id_layout' => 3,
                'id_item' => $tangkapID,
                'layout_details_date' => $date,	
                'layout_details_time' => $time,	
                'layout_box_number' => $tangkapNumber,
                'layout_details_status' => 1,
            );

            $space = $this->m_layout->check_space()->result();
            foreach ($space as $list) {
                $a = $list->layout_box_number;    
            }
            
                if($tangkapNumber == $a){
                    echo '<script type="text/javascript">
                    alert("Shed Number Has Been Filled");
                    document.location = "../layoutiga"
                     </script>';
                }
                else{
                    
            $this->m_layout->insert_table($data,'layout_details');
            redirect('c_layout/layoutiga');
                }
            }


         if($tangkapCheck == 1){
            $tangkapRelocate = $this->input->post('relocate');
            $date = date('Y-m-d'); 
            date_default_timezone_set("Asia/Jakarta");
            $time = date("h:i:s");
            
                    $data1 = array(
                        'id_layout' => $tangkapLayout,
                        'id_item' => $tangkapID,       
                        'layout_box_number' => $tangkapRelocate,
                        'layout_details_status' => 1,
                        );
    
                    $where = array(
                        'layout_box_number' => $tangkapNumber
                    );

                    
                    $this->m_layout->update_data($where, $data1,'layout_details');

                    $data = array(
                        'id_layout' => $tangkapLayout,
                        'id_item' => $tangkapID,
                        'layout_details_date' => $date, 
                        'layout_details_time' => $time,	
                        'layout_box_number' => $tangkapNumber,
                        'layout_details_status' => 3,
                    );
                
                    $this->m_layout->insert_table($data,'layout_details');
                    redirect('c_layout/layoutiga');
    
                //  }
            
         
         }

         
             
        }

}
