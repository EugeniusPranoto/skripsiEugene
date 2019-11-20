<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class import extends CI_Controller {
     
    
        // construct
        public function __construct() {
            parent::__construct();
            // load model
            $this->load->model('Export_model');
            $this->load->helper(array('url','html','form'));
        }    

    public function index() {
        $this->load->view('import.php');
    }
 
    public function importFile(){
  
        if ($this->input->post('submit')) {
                   
                  $path = 'assets/Excel/';
                  require_once APPPATH . "/third_party/PHPExcel.php";
                  $config['upload_path'] = $path;
                  $config['allowed_types'] = 'xlsx|xls|csv';
                  $config['remove_spaces'] = TRUE;
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);            
                  if (!$this->upload->do_upload('uploadFile')) {
                      $error = array('error' => $this->upload->display_errors());
                  } else {
                      $data = array('upload_data' => $this->upload->data());
                  }
                  if(empty($error)){
                    if (!empty($data['upload_data']['file_name'])) {
                      $import_xls_file = $data['upload_data']['file_name'];
                  } else {
                      $import_xls_file = 0;
                  }
                  $inputFileName = $path . $import_xls_file;
                   
                  try {
                      $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                      $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                      $objPHPExcel = $objReader->load($inputFileName);
                      $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                      $flag = true;
                      $i=0;
                      foreach ($allDataInSheet as $value) {
                        if($flag){
                          $flag =false;
                          continue;
                        }
                        $inserdata[$i]['id_item'] = $value['A'];
                        $inserdata[$i]['id_item_category'] = $value['B'];
                        $inserdata[$i]['id_operations'] = $value['C'];
                        $inserdata[$i]['item_code'] = $value['D'];
                        $inserdata[$i]['item_trip'] = $value['E'];
                        $inserdata[$i]['item_arrival'] = $value['F'];
                        $inserdata[$i]['item_weight'] = $value['G'];
                        $inserdata[$i]['item_price'] = $value['H'];
                        $inserdata[$i]['item_status'] = $value['I'];
                        $i++;
                      }               
                      $result = $this->Export_model->importData($inserdata);   
                      if($result){
                        echo "Imported successfully";
                      }else{
                        echo "ERROR !";
                      }             
        
                } catch (Exception $e) {
                     die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                              . '": ' .$e->getMessage());
                  }
                }else{
                    echo $error['error'];
                  }
                   
                   
          }
          $this->load->view('import.php');
      }
       
  }
  ?>
