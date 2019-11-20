<?php 
class m_upload_csv extends CI_Model {
    
    public function importData($data) {
  
        $res = $this->db->insert_batch('import',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
  
    }
}
?>
    
