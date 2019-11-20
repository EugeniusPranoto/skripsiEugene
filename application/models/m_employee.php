<?php 
class m_employee extends CI_Model {
    
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
    function tampil_Employee(){
        $query = $this->db->query('SELECT * FROM user INNER JOIN employee_details ON user.id_user = employee_details.id_user WHERE employee_details.employee_details_status = 1');
        return $query;
    }
    function getEmployee(){
        $query = $this->db->query('SELECT * FROM user INNER JOIN employee_details ON user.id_user = employee_details.id_user WHERE employee_details.employee_details_status = 1');
        return $query;
    }
    function getProfile($id){
        $query = $this->db->query("SELECT * FROM user INNER JOIN employee_details ON user.id_user = employee_details.id_user WHERE user.id_user ='" . $id . "' AND user.user_status = 1");
        return $query;
    }
    function getID(){
        return $this->db->query('SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1');
    }
    function select_employee(){
        return $this->db->query('SELECT * FROM user WHERE user_type_role = "Employee" AND user_status = 1');
    }

}
