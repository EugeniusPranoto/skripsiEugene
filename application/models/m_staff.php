<?php 
class m_staff extends CI_Model {
    
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
    function tampil_Staff(){
        return $this->db->query('SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user_details.user_status = 1');
    }
    function getProfile($id){
        $query = $this->db->query("SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user.id_user ='" . $id . "' AND user.user_status = 1");
        return $query;
    }
    
    function getAdmin()
    {
        return $this->db->query('SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user_details.user_status = 1');
        
    }
    function getID(){
        return $this->db->query('SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1');
    }

}
?>