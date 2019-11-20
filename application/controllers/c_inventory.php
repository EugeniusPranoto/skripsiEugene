<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_inventory extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->helper('row');
        $this->load->model('m_admin');
        $this->load->model('m_schedule');
        $this->load->model('m_inventory');
    }
    public function add_inventory()
    {
        $data['row']=$this->m_inventory->tampil_inventory()->num_rows();
        $data['code'] = getCode();
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['item'] = $this->m_inventory->tampil_inventory()->result();
        $data['category'] = $this->m_inventory->tampil_category()->result();
        
        $this->load->view('v_add_inventory.php',$data);
    }
    public function view_inventory()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['item'] = $this->m_inventory->tampil_inventory()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_view_inventory.php',$data);
    }
    public function view_inventory_detail()
   {
        $data['id_user'] = $this->session->id_user;
        $data['admin'] = $this->m_admin->tampil_admin()->result();
        $data['notification'] = $this->m_schedule->tampil_overdue()->result();
        $this->load->view('v_inventory_detail.php',$data);
    }
    function InsertInventory1()
    {
         $tangkapCode = $this->input->post('code');
         $tangkapType = $this->input->post('type');
         $tangkapTrip = $this->input->post('trip');
         $tangkapArrival = $this->input->post('destination');
         $tangkapDate = $this->input->post('date');
         $tangkapWeight = $this->input->post('weight');
         $tangkapPrice= $this->input->post('price');
         
         $data = array(
         'id_item_category'=> 0,
         'id_operations'=> 0,    
         'item_code' => $tangkapCode,        
         'item_type' => $tangkapType,   
         'item_trip' => $tangkapTrip,
         'item_arrival' => $tangkapArrival,
         'item_date' => $tangkapDate,
         'item_weight' => $tangkapWeight,
         'item_price' => $tangkapPrice,     
         'item_status' => 1,
         );

         $this->m_inventory->insert_table($data,'item');
         
        }

        function InsertInventory(){

        $stockBali = 0;
        $stockSimental = 0;
        $stockLimosin = 0;

         $tangkapCode1 = $this->input->post('code_abc');
         $tangkapType = $this->input->post('type');
         $tangkapTrip = $this->input->post('trip');
         $tangkapArrival = $this->input->post('destination');
         $tangkapDate = $this->input->post('date');
         $tangkapWeight = $this->input->post('weight');
         $tangkapPrice= $this->input->post('price');
         $tangkapCounter = $this->input->post('counter');

         
         echo "<script>alert($tangkapCounter)</script>";
         if($tangkapType == "1"){
            $stockBali = $stockBali + 1;
        }

        else if($tangkapType == "2"){
            $stockSimental = $stockSimental + 1;
        }

        else if($tangkapType == "3"){
            $stockLimosin = $stockLimosin + 1;
        }

        echo "<script>alert('Bali = '$stockBali)</script>";
        echo "<script>alert('Simental = '$stockSimental)</script>";
        echo "<script>alert('Limosin = '$stockLimosin)</script>";

      

        $data1 = array(
            'item_category_stock' => $stockBali,
        );
        $where = array(
            'id_item_category' => 1
        );

        $this->m_inventory->update_data($where,$data1,'item_category');

        $data2 = array(
            'item_category_stock' => $stockSimental,
        );
        $where2 = array(
            'id_item_category' => 2
        );

        $this->m_inventory->update_data($where2,$data2,'item_category');

        $data3 = array(
            'item_category_stock' => $stockLimosin,
        );
        $where3 = array(
            'id_item_category' => 3
        );

        $this->m_inventory->update_data($where3,$data3,'item_category');

        
         $data = array(
         'id_item_category'=> $tangkapType,
         'id_operations'=> 0,    
         'item_code' => $tangkapCode1,          
         'item_trip' => $tangkapTrip,
         'item_arrival' => $tangkapArrival,
         'item_date' => $tangkapDate,
         'item_weight' => $tangkapWeight,
         'item_price' => $tangkapPrice,     
         'item_status' => 1,
         );

         

         $this->m_inventory->insert_table($data,'item');
        // redirect('c_inventory/view_inventory');
        // $this->m_inventory->update_batch('item_category', $data1, $where); 
        $stockBali = 0;
        $stockSimental = 0;
        $stockLimosin = 0;
         if($tangkapCounter >= 1){
            

            for($i = 1; $i<=$tangkapCounter; $i++){

                $tangkapCode = $this->input->post('code_abc'.$i);
                $tangkapType = $this->input->post('type'.$i);
                $tangkapTrip = $this->input->post('trip'.$i);
                $tangkapArrival = $this->input->post('destination'.$i);
                $tangkapDate = $this->input->post('date'.$i);
                $tangkapWeight = $this->input->post('weight'.$i);
                $tangkapPrice= $this->input->post('price'.$i);

                if($tangkapType == "1"){
                    $stockBali = $stockBali + 1;
                }
        
                else if($tangkapType == "2"){
                    $stockSimental = $stockSimental + 1;
                }
        
                else if($tangkapType == "3"){
                    $stockLimosin = $stockLimosin + 1;
                }
        
                echo "<script>alert('Bali = '$stockBali)</script>";
                echo "<script>alert('Simental = '$stockSimental)</script>";
                echo "<script>alert('Limosin = '$stockLimosin)</script>";
        
              
                $data = array(
                    'id_item_category'=> 0,
                    'id_operations'=> 0,    
                    'item_code' => $tangkapCode,          
                    'item_trip' => $tangkapTrip,
                    'item_arrival' => $tangkapArrival,
                    'item_date' => $tangkapDate,
                    'item_weight' => $tangkapWeight,
                    'item_price' => $tangkapPrice,     
                    'item_status' => 1,
                    );


                $this->m_inventory->insert_table($data,'item');
                echo "<script>alert(' i =".$i.", counter = '".$tangkapCounter."')</script>";
                //redirect('c_inventory/view_inventory');

                }


                $data1 = array(
                    'item_category_stock' => $stockBali,
                );
                $where = array(
                    'id_item_category' => 1
                );
        
                $this->m_inventory->update_data($where,$data1,'item_category');
               
        
                $data2 = array(
                    'item_category_stock' => $stockSimental,
                );
                $where2 = array(
                    'id_item_category' => 2
                );
        
                $this->m_inventory->update_data($where2,$data2,'item_category');
        
                $data3 = array(
                    'item_category_stock' => $stockLimosin,
                );
                $where3 = array(
                    'id_item_category' => 3
                );
        
                $this->m_inventory->update_data($where3,$data3,'item_category');

            }

           
        }
}
