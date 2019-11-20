<?php 
class m_layout extends CI_Model {
    
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
    function layout_quantity(){
        $query = $this->db->query('SELECT * FROM layout WHERE id_layout= 1 AND layout_status = 1');
        return $query;
    }
    function layout(){
        $query = $this->db->query('SELECT * FROM layout WHERE layout_status = 1');
        return $query;
    }
    function layout_quantity_dua(){
        $query = $this->db->query('SELECT * FROM layout WHERE id_layout= 2 AND layout_status = 1');
        return $query;
    }
    function layout_quantity_three(){
        $query = $this->db->query('SELECT * FROM layout WHERE id_layout= 3 AND layout_status = 1');
        return $query;
    }
    function tampil_inventory(){
        $query = $this->db->query("SELECT * FROM item WHERE item_status = 1");
        return $query;
    }
    function check(){
        $query = $this->db->query("SELECT * FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout WHERE layout.layout_status = 1 AND layout_details.layout_details_status = 3 AND layout_details.id_layout = 1");
        return $query;
    }
    function check_layoutdua(){
        $query = $this->db->query("SELECT * FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout WHERE layout.layout_status = 1 AND layout_details.layout_details_status = 3 AND layout_details.id_layout = 2");
        return $query;
    }
    function check_layout_three(){
        $query = $this->db->query("SELECT * FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout WHERE layout.layout_status = 1 AND layout_details.layout_details_status = 3 AND layout_details.id_layout = 3");
        return $query;
    }
    function relocate(){
        $query = $this->db->query("SELECT * FROM `layout_details` WHERE layout_details_status = 3");
        return $query;
    }
    

    function relocate_where($where){
        $query = $this->db->query("SELECT * FROM `layout_details` WHERE `id_layout` = '".$where."'");
        return $query;
    }

    function tampil_modal(){
        $query = $this->db->query("SELECT * FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout INNER JOIN item ON layout_details.id_layout = item.id_item WHERE layout.layout_status = 1");
        return $query;
    }

    function CheckData($tangkapID){
        $query = $this->db->query("SELECT * FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout INNER JOIN item ON layout_details.id_layout = item.id_item WHERE layout_details.id_item = '".$tangkapID."' AND layout.layout_status = 1");
        return $query;
    }

    function tampil_item(){
        $query = $this->db->query("SELECT * FROM item INNER JOIN item_category ON item.id_item_category = item_category.id_item_category WHERE item.item_status = 1");
        return $query;
    }

    function getCode($id_item)
    {
        $query = $this->db->query("SELECT * FROM item INNER JOIN item_category ON item.id_item_category = item_category.id_item_category WHERE item.item_status = 1 AND id_item = '".$id_item."'");
        return $query;  
    }

    function getLayout($id_layout)
    {
        $query = $this->db->query("SELECT * FROM layout WHERE id_layout = '".$id_layout."' AND layout_status = 1");
        return $query;  
    }

    function getHistory($id_item)
    {
        $query = $this->db->query("SELECT * FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout INNER JOIN item ON layout_details.id_item = item.id_item WHERE layout_details.id_item = '".$id_item."' AND layout.layout_status = 1 ORDER BY layout_details.layout_details_time ASC ");
        return $query;  
    }

    function getHistory_layout_dua($id_item)
    {
        $query = $this->db->query("SELECT * FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout INNER JOIN item ON layout_details.id_item = item.id_item WHERE layout_details.id_item = '10' AND layout.layout_status = 1 AND layout_details.id_layout = 2 ORDER BY layout_details.layout_details_time ASC");
        return $query;  
    }

    function tampil_history(){
        $query = $this->db->query("SELECT DISTINCT layout_details.id_item,item.item_code FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout INNER JOIN item ON layout_details.id_item = item.id_item WHERE layout.layout_status = 1 AND layout_details.layout_details_status = 3");
        return $query;
    }

    function tampil_history_layout_dua(){
        $query = $this->db->query("SELECT DISTINCT layout_details.id_item,item.item_code FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout INNER JOIN item ON layout_details.id_item = item.id_item WHERE layout.layout_status = 1 AND layout_details.id_layout = 2 AND layout_details.layout_details_status = 3");
        return $query;
    }

    function tampil_history_layout_three(){
        $query = $this->db->query("SELECT DISTINCT layout_details.id_item,item.item_code FROM layout INNER JOIN layout_details ON layout.id_layout = layout_details.id_layout INNER JOIN item ON layout_details.id_item = item.id_item WHERE layout.layout_status = 1 AND layout_details.id_layout = 3 AND layout_details.layout_details_status = 3");
        return $query;
    }

    function count_space(){
        $query = $this->db->query("SELECT * FROM layout_details WHERE id_layout = 1 AND layout_details_status = 3");
        return $query;
    }

    function count_space_layout_dua(){
        $query = $this->db->query("SELECT * FROM layout_details WHERE id_layout = 2 AND layout_details_status = 3");
        return $query;
    }

    function count_space_layout_three(){
        $query = $this->db->query("SELECT * FROM layout_details WHERE id_layout = 3 AND layout_details_status = 3");
        return $query;
    }

    function check_space(){
        $query = $this->db->query("SELECT * FROM layout_details WHERE layout_details_status = 3");
        return $query;
    }

    function getCurrent($tangkapID)
    {
        $query = $this->db->query("SELECT * FROM item INNER JOIN item_category ON item.id_item_category = item_category.id_item_category WHERE item.item_status = 1 AND id_item = '".$tangkapID."'");
        return $query;  
    }


    
}
