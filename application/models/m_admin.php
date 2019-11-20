<?php 
class m_admin extends CI_Model {
    
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
    function tampil_admin(){
        $query = $this->db->query("SELECT user_photo FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user_type_role = 'Admin' AND user.user_status = 1");
        return $query;
    }
    
}
?>