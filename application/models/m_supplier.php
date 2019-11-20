<?php 
class m_supplier extends CI_Model {
    
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
    function tampil_Supplier(){
        $query = $this->db->query("SELECT * FROM user INNER JOIN supplier_details ON user.id_user = supplier_details.id_user WHERE user_type_role = 'Supplier' AND user_status = 1");
        return $query;
    }
    function supplier($id){
        $query = $this->db->query("SELECT * FROM user INNER JOIN supplier_details ON user.id_user = supplier_details.id_user WHERE user_type_role = 'Supplier' AND user.id_user = '" . $id . "' AND user_status = 1");
        return $query;
    }
    function getSupplier(){
        $query = $this->db->query("SELECT * FROM user WHERE user_type_role = 'Supplier' AND user_status = 1");
        return $query;
    }
    function getID(){
        return $this->db->query('SELECT * FROM user  ORDER BY id_user DESC LIMIT 1');
    }

}
