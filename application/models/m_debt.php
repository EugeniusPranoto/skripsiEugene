<?php 
class m_debt extends CI_Model {
    
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
    function tampil_debt(){
        $query = $this->db->query("SELECT * FROM account_receivable WHERE debt_status = 1 ORDER BY debt_fname ASC");
        return $query;
    }
    function tampil_paid(){
        $query = $this->db->query("SELECT * FROM account_receivable WHERE debt_status = 2 ORDER BY debt_fname ASC");
        return $query;
    }
    function account_list(){
        $query = $this->db->query("SELECT DISTINCT debt_fname FROM account_receivable ORDER BY debt_fname ASC");
        return $query;
    }
    function divider(){
        $query = $this->db->query("SELECT DISTINCT debt_fname FROM account_receivable WHERE debt_status = 1");
        return $query;
    }
    function account_data($debt_fname){
        $query = $this->db->query("SELECT DISTINCT debt_fname,debt_lname,debt_phone FROM account_receivable WHERE debt_status = 1 AND debt_fname = '".$debt_fname."'");
        return $query;
    }
    function getAccount($debt_fname)
    {
        $query = $this->db->query("SELECT * FROM account_receivable  WHERE debt_status = 1 AND debt_fname = '".$debt_fname."'");
        return $query;  
    }
    function getPayment($debt_fname)
    {
        $query = $this->db->query("SELECT * FROM account_receivable WHERE debt_status = 2 AND debt_fname = '".$debt_fname."'");
        return $query;  
    }
    function check($tangkapfname){
        $query = $this->db->query("SELECT * FROM account_receivable WHERE debt_fname = '".$tangkapfname."' AND debt_status = 1");
        return $query;
    }
    

}
?>