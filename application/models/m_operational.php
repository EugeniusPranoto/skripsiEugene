<?php 
class m_operational extends CI_Model {
    
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
    function tampil_Operational(){
        $query = $this->db->query("SELECT * FROM item INNER JOIN operational ON item.id_item = operational.id_item WHERE item_status = 1");
        return $query;
    }
    function tampil_item(){
        $query = $this->db->query("SELECT * FROM item WHERE item_status = 1");
        return $query;
    }
    function tampil_Employee(){
        $query = $this->db->query('SELECT * FROM user INNER JOIN employee_details ON user.id_user = employee_details.id_user WHERE employee_details.employee_details_status = 1');
        return $query;
    }
}
?>