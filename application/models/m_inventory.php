<?php 
class m_inventory extends CI_Model {
    
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
    function tampil_inventory(){
        $query = $this->db->query("SELECT * FROM item WHERE item_status = 1");
        return $query;
    }
    function tampil_Category(){
        $query = $this->db->query("SELECT id_item_category,item_category FROM item_category WHERE item_category_status = 1");
        return $query;
    }
    
    

}
?>