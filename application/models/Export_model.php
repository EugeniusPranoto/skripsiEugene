<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Export_model extends CI_Model {
 
        public function __construct()
        {
            $this->load->database("thesis");
        }
        
        public function importData($data) {
  
            $res = $this->db->insert_batch('item',$data);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
      
        }
    }
?>