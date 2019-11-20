<?php 
class m_Project extends CI_Model {
    
    function tampilkan_data(){
       return $this->db->get("inwork");   
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
   
    function cek_login($table,$where){
        return $this->db->get_where($table,$where);
    }
    
    function select($table, $col, $val) {
        $this->db->where($col, $val);
        $query = $this->db->get($table);
        return $query;
    }
    
    function getID($username){
        $query = $this->db->query("SELECT * FROM admin WHERE admin_username = '".$username."'");
        return $query;
    }
    
    function getIDstock($tangkapID){
        $query = $this->db->query("SELECT * FROM stock_adjust WHERE id_itemdetails = '".$tangkapID."'");
        return $query;
    }
    
    function getIDItem($tangkapName){
        $query = $this->db->query("SELECT * FROM item_details WHERE item_name = '".$tangkapName."'");
        return $query;
    }
    
    function getIDexp($code){
        $query = $this->db->query("SELECT * FROM expenditure WHERE code = '".$code."'");
        return $query;
    }
    function getContacts(){
        $query = $this->db->query("SELECT * FROM contacts");
        return $query;
    }
    function getStaff(){
        $query = $this->db->query("SELECT * FROM admin WHERE status = 1");
        return $query;
    }
    
    function getEmployee(){
        $query = $this->db->query("SELECT * FROM employee WHERE employee_status = 1");
        return $query;
    }
    
    function getItem(){
        $query = $this->db->query("SELECT * FROM item_details WHERE status = 1");
        return $query;
    }
    
    function getStock(){
        $query = $this->db->query("SELECT * FROM item_details WHERE status = 1");
        return $query;
    }
    
    function getBatch(){
        $query = $this->db->query("SELECT batch.id_batch,batch.batch_name,batch.batch_category,batch.batch_description,item_details.id_itemdetails,item_details.item_name, item_details.item_type,item_details.item_sku,item_details.item_unit,item_details.item_manufacturer,item_details.item_brand,
        item_details.item_image,item_details.item_stock FROM batch INNER JOIN item_details ON item_details.id_itemdetails = batch.id_itemdetails 
        WHERE item_details.status = 1");
        return $query;
    }
    
    function webcontent(){
        return $this->db->query("SELECT * FROM web_content"); 
    }
    
    function tampil_contacts(){
       $query = $this->db->query("SELECT * FROM contacts WHERE status = '1'");
       return $query; 
    }
    
    function tampil_allitem(){
       $query = $this->db->query("SELECT * FROM item_details WHERE status ='1'");
       return $query;    
   }
    function tampil_item(){
       $query = $this->db->query("SELECT item_details.item_name,item_details.id_itemdetails,item_details.item_type,item_details.item_stock,item_details.item_sku,itementry_form.id_itemdetails,itementry_form.id_form,itementry_form.in_quantity FROM item_details INNER JOIN itementry_form ON itementry_form.id_itemdetails = item_details.id_itemdetails WHERE `item_incomingdate` < `item_outwarddate` AND item_details.status ='1'");
       return $query;   
   }
     function get_item($tangkapName){
       $query = $this->db->query("SELECT * FROM item_details WHERE status ='1' AND item_name = '".$tangkapName."'");
       return $query;    
   }
    function tampil_itemexpired(){
       $query = $this->db->query("SELECT * FROM item_details WHERE CURDATE() > `item_outwarddate` AND status ='1' ");
       return $query;  
    }
    function tampil_employee(){
       $query = $this->db->query("SELECT * FROM employee WHERE employee_status ='1'");
       return $query; 
    }
    function tampil_pekerja(){
        $query = $this->db->query("SELECT * FROM employee WHERE employee_status ='1'");
        return $query;
    }
    function worker(){
        $query = $this->db->query("SELECT * FROM `employee` WHERE 1");
        return $query;
    }
    function expenditure1(){
        $query = $this->db->query("SELECT * FROM expenditure WHERE status = 1");
        return $query;
    }
    function contacts(){
        $query = $this->db->query("SELECT * FROM contacts WHERE status = 1");
        return $query;
    }
    function invoice(){
        $query = $this->db->query("SELECT * FROM invoice WHERE status = 1");
        return $query;
    }
    
    
    function tampil_batch2()
    {
        return $this->db->query("SELECT DISTINCT batch_name FROM batch_name WHERE status = 1");
    }
    
    function tampil_batch3()
    {
        return $this->db->query("SELECT *  FROM batch_name WHERE status = 1");
    }
    
    function tampil_batchcategory()
    {
        return $this->db->query("SELECT *  FROM batch_category WHERE status = 1");
    }
    
    function tampil_batch(){
        return $this->db->query('SELECT DISTINCT id_batchname,batch_name FROM batch_name WHERE status = 1 ');
    }
    function batch_name(){
        return $this->db->query('SELECT batch.id_batch,batch.id_itemdetails, batch.batch_quantity, batch.id_batchname, batch.id_batchcategory, batch.batch_description, batch.batch_status, batch_category.id_batchcategory, batch_category.batch_category, batch_category.status, batch_name.batch_name, batch_name.id_batchname, batch_name.status, item_details.item_sku, item_details.item_name, item_details.item_type, item_details.item_manufacturer, item_details.item_brand, item_details.item_image FROM batch INNER JOIN item_details ON batch.id_itemdetails = item_details.id_itemdetails INNER JOIN batch_name ON batch.id_batchname = batch_name.id_batchname INNER JOIN batch_category ON batch.id_batchcategory = batch_category.id_batchcategory WHERE batch.batch_status = 1 ');
    }

    function batch_namenew(){
        return $this->db->query('SELECT batch.id_batch,batch.id_itemdetails, batch.batch_quantity, batch.id_batchname, batch.id_batchcategory, batch.batch_description, batch.batch_status, batch_category.id_batchcategory, batch_category.batch_category, batch_category.status, batch_name.batch_name, batch_name.id_batchname, batch_name.status, item_details.item_sku, item_details.item_name, item_details.item_type, item_details.item_manufacturer, item_details.item_brand, item_details.item_image FROM batch INNER JOIN item_details ON batch.id_itemdetails = item_details.id_itemdetails INNER JOIN batch_name ON batch.id_batchname = batch_name.id_batchname INNER JOIN batch_category ON batch.id_batchcategory = batch_category.id_batchcategory WHERE batch.batch_status = 1  AND batch_name.status = 0');
    }
    function getItemByAjax($where){
        $query= $this->db->get_where('item_details',$where);
        if($query->num_rows()>0){
            foreach ($query->result() as $data) {
                $output=array(
                    'item_name' 	=> $data->item_name,
					'item_type' 	=> $data->item_type,                    
                    'item_sku' 		=> $data->item_sku,
                    'item_manufacturer' 	=> $data->item_manufacturer,
					'item_brand' 	=> $data->item_brand,
                    'item_stock' 	=> $data->item_stock,
					);
            }

        }
        return $output;
    }
    
    function getItemByAjax1($where){
        $query= $this->db->get_where('item_details',$where);
        if($query->num_rows()>0){
            foreach ($query->result() as $data) {
                $output=array(
                    'id_itemdetails' => $data->id_itemdetails,
                    'item_name' 	=> $data->item_name,
					'item_type' 	=> $data->item_type,
                    'item_sku' 		=> $data->item_sku,
                    'item_manufacturer' 	=> $data->item_manufacturer,
					'item_brand' 	=> $data->item_brand,
                    'item_stock' 	=> $data->item_stock,
                    'item_image' 	=> $data->item_image,
				);
            }
        }
        return $output;
    }
    
    function getItemByAjax2($where){
        $query= $this->db->get_where('item_details',$where);
        if($query->num_rows()>0){
            foreach ($query->result() as $data) {
                $output=array(
                    'id_itemdetails' => $data->id_itemdetails,
                    'item_name' 	=> $data->item_name,
                    'item_type' 	=> $data->item_type,
                    'item_sku' 		=> $data->item_sku,
                    'item_manufacturer' 	=> $data->item_manufacturer,
					'item_brand' 	=> $data->item_brand,
                    'item_image' 	=> $data->item_image,
                    'item_stock' 	=> $data->item_stock,
				);
            }
        }
        return $output;
    }
    
    function getEditByAjax($where){
        $query= $this->db->get_where('item_details',$where);
        if($query->num_rows()>0){
            foreach ($query->result() as $data) {
                $output=array(
                    'id_itemdetails' 	=> $data->id_itemdetails,
					'item_type' 	=> $data->item_type,
                    'item_sku' 		=> $data->item_sku,
                    'item_manufacturer' 	=> $data->item_manufacturer,
					'item_brand' 	=> $data->item_brand,
                    'item_image' 	=> $data->item_image,
                    'item_stock' 	=> $data->item_stock,
				);
            }

        }
        return $output;
    }
    
    function getEmployeeByAjax($where){
        $query= $this->db->get_where('employee',$where);
		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$output=array(
                    'id_employee' => $data->id_employee,
                    'employee_fname' 	=> $data->employee_fname,
                    'employee_contact' 	=> $data->employee_contact
				);

            }

        }
        return $output;
    }
    
    function getByAjax($where){
        $query= $this->db->query('SELECT DISTINCT id_batchname FROM batch WHERE batch_status = 1 AND id_batch = "'.$where.'"');

			if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$output=array(
                    'id_batch' => $data->id_batch,
                    'id_batchname' =>$data->id_batchname,
                    'id_itemdetails' 	=> $data->id_itemdetails,
                    'batch_name' 	=> $data->batch_name,
                    'batch_category' 	=> $data->batch_category,
                    'item_stock' 	=> $data->item_stock,
				);
            }
        }
        return $output;
    }
    
    function getBatchName($where){
        $query= $this->db->get_where('batch',$where);
		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$output=array(
                    'id_batch' => $data->id_batch,
                    'batch_name' 	=> $data->batch_name,
                    'batch_category' 	=> $data->batch_category
				);

            }

        }
        return $output;
    }
    
    
    function getExistItemByAjax($where){
        $query= $this->db->get_where('item_details',$where);
        if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$output=array(
					'item_name' 	=> $data->item_name,
					'item_type' 	=> $data->item_type,
                    'item_sku' 		=> $data->item_sku,
                    'item_unit' 		=> $data->item_unit,
                    'item_manufacturer' 	=> $data->item_manufacturer,
					'item_brand' 	=> $data->item_brand,
                    'item_description' 	=> $data->item_description,
                    'item_stock' 	=> $data->item_stock,
                    'item_image' 	=> $data->item_image,
                    'item_selling' 	=> $data->item_selling,
                    'item_purchase' 	=> $data->item_purchase,
                    'item_descriptionsales' 	=> $data->item_descriptionsales,
                    'item_descriptionselling' 	=> $data->item_descriptionselling,
                    'item_tax' 	=> $data->item_tax,
                    'item_reorder' 	=> $data->item_reorder,
                    'item_incomingdate' 	=> $data->item_incomingdate,
                    'item_outwarddate' 	=> $data->item_outwarddate,
                    'status' 	=> $data->status,
				);
            }
        }return $output;

    }
    
    function search($keyword){
        $this->db->like('item_name',$keyword);
        $query = $this->db->get('item_details');
        return $query->result();
    }
    function search_employee($keyword){
        $this->db->like('employee_fname',$keyword);
        $query = $this->db->get('employee');
        return $query->result();
    }
    function search_contacts($keyword){
        $this->db->like('contact_fname',$keyword);
        $query = $this->db->get('contacts');
        return $query->result();
    }
    function search_batch($keyword){
        $query = $this->db->query('SELECT batch.id_batch,batch.id_itemdetails,batch.id_batchname,batch.id_batchcategory,batch.batch_description,batch.batch_status,batch_category.id_batchcategory,batch_category.batch_category,batch_category.status,batch_name.batch_name,batch_name.id_batchname,batch_name.status, item_details.item_sku,item_details.item_name,item_details.item_type,item_details.item_manufacturer,item_details.item_brand,item_details.item_image FROM batch INNER JOIN item_details ON batch.id_itemdetails = item_details.id_itemdetails INNER JOIN batch_name ON batch.id_batchname = batch_name.id_batchname INNER JOIN batch_category ON batch.id_batchcategory = batch_category.id_batchcategory WHERE batch.batch_status = 1 AND batch_name.batch_name like "%'.$keyword.'%"');
        return $query->result();
    }
    function search_staff($keyword){
        $this->db->like('admin_name',$keyword);
        $query = $this->db->get('admin');
        return $query->result();
    }
    function tampil_admin(){
       $id_admin = $this->session->userdata('admin_username');
       $query = $this->db->query("SELECT * FROM admin WHERE admin_username = '".$id_admin."' AND status = 1");
       return $query; 
    }
    function tampil_outward(){
        return $this->db->query('SELECT history.id_history,history.history_status, item_details.id_itemdetails, item_details.item_name, item_details.item_sku, item_details.item_manufacturer, item_details.item_outwarddate, item_details.item_type FROM history INNER JOIN item_details ON item_details.id_itemdetails = history.id_itemdetails  WHERE history.history_status=2');
    }
    function tampil_details(){
       $id_itemdetails = $this->session->userdata('item_name');
       $query = $this->db->query("SELECT * FROM item_details WHERE item_name = '".$id_itemdetails."' AND status = 1");
       return $query; 
    }
    function tampil_adminnew(){
       $query = $this->db->query("SELECT * FROM admin WHERE status = 1");
       return $query; 
    }
    function batch(){
        return $this->db->query('SELECT batch.id_batch,batch.batch_name,batch.batch_category,batch.batch_description,item_details.id_itemdetails,item_details.item_name,item_details.item_type,item_details.item_sku,item_details.item_unit,item_details.item_manufacturer,item_details.item_brand,item_details.item_image,item_details.item_stock FROM batch INNER JOIN item_details ON item_details.id_itemdetails = batch.id_itemdetails WHERE item_details.status = 1 AND batch.batch_status = 1');
    }
    function batch_item(){
        return $this->db->query('SELECT * FROM batch WHERE batch_status = 1');
    }
    function expenditure(){
        return $this->db->query('SELECT expenditure.id_expenditure,expenditure.quantity,expenditure.reference,expenditure.address,expenditure.date,
        expenditure.note,expenditure.description,batch.id_batch,batch.batch_name FROM expenditure INNER JOIN batch ON expenditure.id_expenditure = expenditure.id_expenditure INNER JOIN employee ON expenditure.id_expenditure = employee.id_employee'); 
    }
    function history(){
        return $this->db->query('SELECT expenditure.id_itemdetails,history.id_itemdetails FROM expanditure INNER JOIN history ON expanditure.id_itemdetails = history.id_itemdetails');   
    }
    function salesorder(){
        return $this->db->query('SELECT * FROM expenditure WHERE status = 1 '); 
    }
    function sales_name(){
        return $this->db->query('SELECT expenditure.id_expenditure, expenditure.id_batchname, expenditure.id_employee, expenditure.code, expenditure.address, expenditure.date, batch.id_batch, batch.id_batchname, batch.id_itemdetails, batch.batch_quantity, batch_name.id_batchname, batch_name.batch_name, item_details.id_itemdetails, item_details.item_name, item_details.item_sku, item_details.item_image, employee.id_employee, employee.employee_fname, employee.employee_lname FROM expenditure INNER JOIN batch_name ON batch_name.id_batchname = expenditure.id_batchname INNER JOIN batch ON batch_name.id_batchname = batch.id_batchname INNER JOIN employee ON employee.id_employee = expenditure.id_employee INNER JOIN item_details ON item_details.id_itemdetails = batch.id_itemdetails WHERE expenditure.status = 1 AND batch_name.status = 0'); 
    }
    function sales1(){
        return $this->db->query('SELECT * FROM batch_name WHERE status = 0'); 
    }
    function address(){
        return $this->db->query("SELECT * FROM expenditure LIMIT 1");
    }
    function stockadjust(){
        return $this->db->query('SELECT stock_adjust.id_stockadjust,stock_adjust.id_itemdetails,stock_adjust.stock_status,item_details.id_itemdetails,item_details.item_name,item_details.item_type,item_details.item_sku,item_details.item_unit,item_details.item_manufacturer,item_details.item_brand,item_details.item_image,item_details.item_stock,item_details.item_incomingdate FROM stock_adjust INNER JOIN item_details ON item_details.id_itemdetails = stock_adjust.id_stockadjust WHERE item_details.status = 1 AND stock_adjust.stock_status = 1');  
    }    
    function gotoreport($where){
        $this->db->select('employee.id_employee, employee.employee_fname, expenditure.id_expenditure, batch.id_batch, batch.id_batchname, batch.id_batchcategory, batch_name.id_batchname, batch_name.batch_name, batch_category.batch_category, batch_category.id_batchcategory, expenditure.id_expenditure,expenditure.id_employee, expenditure.code, expenditure.reference, expenditure.address, expenditure.date, expenditure.note, expenditure.description, expenditure.status, item_details.id_itemdetails, item_details.item_name, item_details.item_type, item_details.item_image, batch.batch_quantity')
            ->from('expenditure')
            ->join('batch','expenditure.id_batchname = batch.id_batchname','inner')
            ->join('batch_name','batch.id_batchname = batch_name.id_batchname','inner')
            ->join('batch_category','batch.id_batchcategory = batch_category.id_batchcategory','inner')
            ->join('item_details','item_details.id_itemdetails = batch.id_itemdetails','inner')
            ->join('employee','employee.id_employee = expenditure.id_employee ','inner')
           ->where('batch_name.id_batchname="'.$where.'"'); 
        $query = $this->db->get();       
        return $query;  
    }
    function incout(){
        return $this->db->query('SELECT employee.id_employee,employee.employee_fname,employee_lname, expenditure.code,expenditure.address, expenditure.date, expenditure.id_expenditure, expenditure.id_employee FROM expenditure INNER JOIN employee on employee.id_employee = expenditure.id_employee LIMIT 1');
        
        
    }
    function gotoreportincoming($where){
       return $this->db->query('SELECT item_details.id_itemdetails, item_details.item_type,item_details.item_image,item_details.item_manufacturer , item_details.item_name, item_details.item_sku, item_details.item_incomingdate, itementry_form.id_form, itementry_form.id_itemdetails, itementry_form.in_quantity FROM item_details INNER JOIN itementry_form on itementry_form.id_itemdetails = item_details.id_itemdetails WHERE itementry_form.id_form="'.$where.'"');

    }
    function idexpediture($where){
        $this->db->select('expenditure.id_expenditure,batch.id_batch,batch.batch_name,batch.batch_category,expenditure.id_employee,expenditure.code,expenditure.reference,expenditure.quantity,expenditure.address,expenditure.date,expenditure.note,expenditure.description,expenditure.status, item_details.id_itemdetails, item_details.item_name, item_details.item_type')->from('expenditure')
           ->join('batch','expenditure.id_batchname = batch.id_batchname','inner')
           ->join('employee','employee.id_employee = expenditure.id_employee ','inner')
           ->join('item_details','item_details.id_itemdetails = batch.id_itemdetails','inner')
           ->where($where); 
        $query = $this->db->get();       
        return $query;  
    } 
    function tampil_historyout(){
        $this->db->select('item_details.id_itemdetails, item_details.item_name, item_details.item_type')->from('expenditure')
           ->join('batch','expenditure.id_batch = batch.id_batch','inner')
           ->join('employee','employee.id_employee = expenditure.id_employee ','inner')
           ->join('item_details','item_details.id_itemdetails = batch.id_itemdetails','inner')
           ->where($where); 
        $query = $this->db->get();       
        return $query;  
        
        $query = $this->db->query("SELECT * FROM history WHERE status = '2'");
        return $query; 
   }  
    function notification(){
        $query = $this->db->query("SELECT * FROM item_details WHERE `item_reorder` > `item_stock` AND status ='1'");
        return $query; 
   } 
    function incinvoice()
    {
        return $this->db->query('SELECT item_details.id_itemdetails,item_details.item_name,item_details.item_sku,item_details.item_unit, item_details.item_brand,item_details.item_manufacturer,item_details.item_incomingdate,item_details.item_type, item_details.status, itementry_form.id_form,itementry_form.id_itemdetails, itementry_form.in_quantity FROM itementry_form INNER JOIN item_details ON item_details.id_itemdetails = itementry_form.id_itemdetails');
        
    }
    function outinvoice(){
        $this->db->select('expenditure.id_expenditure, batch.id_batch, batch.id_batchname, batch_name.id_batchname,batch_name,batch_name, expenditure.code,expenditure.address,batch.batch_quantity, expenditure.date, expenditure.status')->from('expenditure')
            ->join('batch','expenditure.id_batchname = batch.id_batchname','inner')
            ->join('batch_name','batch.id_batchname = batch_name.id_batchname','inner');
        $query = $this->db->get();      
        return $query; 
    }
    
    function historyout(){
        return $this->db->query("SELECT `item_details`.`item_sku`, `item_details`.`id_itemdetails`, `item_details`.`item_name`, `item_details`.`item_type`, `item_details`.`item_manufacturer`, `expenditure`.`id_expenditure`, `batch`.`id_batch`, `batch`.`id_batchname`, `batch_name`.`id_batchname`, `batch_name`, `batch_name`, `expenditure`.`code`, `expenditure`.`address`, `batch`.`batch_quantity`, `expenditure`.`date`, `expenditure`.`status`, `expenditure`.`id_expenditure`, `expenditure`.`id_batchname` FROM `expenditure` INNER JOIN `batch_name` ON `expenditure`.`id_batchname` = `batch_name`.`id_batchname` INNER JOIN `batch` ON `batch`.`id_batchname` = `batch_name`.`id_batchname` INNER JOIN `item_details` ON `batch`.`id_itemdetails` = `item_details`.`id_itemdetails`");
    }
    function staff(){
        return $this->db->query('SELECT * FROM admin WHERE status = 1'); 
    }
    function initial_stock(){
        return $this->db->query('SELECT itementry_form.id_itemdetails,itementry_form.in_quantity,`item_details`.`item_sku`, `item_details`.`id_itemdetails`,`item_details`.`item_name`,`item_details`.`item_type`,`item_details`.`item_manufacturer`,
        `item_details`.`item_incomingdate`,`item_details`.`item_stock`FROM itementry_form INNER JOIN item_details ON itementry_form.id_itemdetails = `item_details`.`id_itemdetails` WHERE item_details.status=1');
    }
    
    function historyadjust(){
        return $this->db->query('SELECT stock_adjust.id_stockadjust, stock_adjust.id_itemdetails, stock_adjust.adjust_quantity, stock_adjust.stock_status, item_details.id_itemdetails,item_details.item_name,item_details.item_type, item_details.item_sku,item_details.item_brand FROM stock_adjust INNER JOIN item_details ON stock_adjust.id_itemdetails = item_details.id_itemdetails');
    }
    function history_adjust(){
        return $this->db->query('SELECT DISTINCT stock_adjust.id_itemdetails,item_details.item_name FROM stock_adjust INNER JOIN item_details ON stock_adjust.id_itemdetails = item_details.id_itemdetails ORDER BY item_details.id_itemdetails');
    }
     
    
    function getHistoryByAjax($where){
        $query= $this->db->get_where('stock_adjust',$where);

		/*if($query->num_rows()>0){ 
			foreach ($query->result() as $data) {

				$output=array(
                    'id_stockadjust' => $data->id_stockadjust,
                    'id_itemdetails' 	=> $data->id_itemdetails,
                    'adjust_quantity' 	=> $data->adjust_quantity
				);  

            }
                
        }*/
        return $query;
    }
     
    
    function chart(){
        return $this->db->query('SELECT itementry_form.id_form,itementry_form.id_itemdetails,itementry_form.in_quantity,item_details.id_itemdetails,item_details.item_name FROM itementry_form INNER JOIN item_details ON itementry_form.id_itemdetails = item_details.id_itemdetails WHERE itementry_form.status = 1');
    }
    
     function get_data_stok(){
        $query = $this->db->query("SELECT item_name,SUM(item_stock) AS item_stock FROM item_details GROUP BY item_name");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function get_data_chart(){
        $query = $this->db->query("SELECT expenditure.id_expenditure, expenditure.id_batchname, batch.id_batch, batch.id_batchname, batch.batch_quantity, batch_name.id_batchname, batch_name.batch_name,SUM(batch_quantity) AS batch_quantity FROM expenditure INNER JOIN batch_name ON batch_name.id_batchname = expenditure.id_batchname INNER JOIN batch ON batch_name.id_batchname = batch.id_batchname WHERE expenditure.status = 1 GROUP BY batch_name.batch_name");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    
    
    
    
    
    
    //SELECT batch.id_batch,batch.id_itemdetails,batch.id_batchname,batch.id_batchcategory,batch.batch_description,batch.batch_status,batch_category.id_batchcategory,batch_category.batch_category,batch_category.status,batch_name.batch_name,batch_name.id_batchname,batch_name.status, item_details.item_sku,item_details.item_name,item_details.item_type,item_details.item_manufacturer,item_details.item_brand,item_details.item_image FROM batch INNER JOIN item_details ON batch.id_itemdetails = item_details.id_itemdetails INNER JOIN batch_name ON batch.id_batchname = batch_name.id_batchname INNER JOIN batch_category ON batch.id_batchcategory = batch_category.id_batchcategory WHERE batch.batch_status = 1
}
?>