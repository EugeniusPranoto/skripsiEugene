<?php 
class m_contact extends CI_Model {
    
    function tampilkan_data(){
       return $this->db->get("thesis");   
   }
    function insert_table($data,$table){
        $this->db->insert($table,$data);
    }
    function select_table($data,$table){
        $this->db->select($table,$data);
    }
     function edit($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function tampil_contact(){
        $query = $this->db->query("SELECT * FROM user WHERE user_type_role = 'Supplier' OR user_type_role = 'Customer' OR user_type_role = 'Government' AND user_status = 1");
        return $query;
    }

    function getContact(){
        $query = $this->db->query("SELECT * FROM user WHERE user_type_role = 'Supplier' OR user_type_role = 'Customer' OR user_type_role = 'Government' AND user_status = 1");
        return $query;
    }
}
?>