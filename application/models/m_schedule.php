<?php 
class m_schedule extends CI_Model {
    
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
    function active_Schedule(){
        $query = $this->db->query("SELECT * FROM schedule WHERE schedule_status = 2 ");
        return $query;
    }
    function tampil_Schedule(){
        $query = $this->db->query("SELECT * FROM schedule WHERE schedule_status = 1 ");
        return $query;
    }
    function on_going($tangkapDate){
        $query = $this->db->query("SELECT * FROM schedule WHERE schedule_date = '".$tangkapDate."' AND schedule_status = 2");
        return $query;
    }
    function check($tangkapDate,$tangkapTime){
        $query = $this->db->query("SELECT * FROM schedule WHERE schedule_date = '".$tangkapDate."' AND schedule_time = '".$tangkapTime."' AND schedule_status = 2");
        return $query;
    }
    function tampil_overdue(){
        $query = $this->db->query("SELECT * FROM schedule WHERE CURDATE() > `schedule_date` AND schedule_status ='1'");
        return $query;  
     }
}
?>