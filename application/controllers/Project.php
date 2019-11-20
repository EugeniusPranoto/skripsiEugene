<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Project extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->helper('hitungan');
        $this->load->model('m_Project');
        $this->load->model('m_admin');
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->library('pdf');
        $this->load->library('email');
    }
    public function index()
    {
        $data['webcontent'] = $this->m_Project->webcontent()->result();
        $this->load->view('Project.php',$data);
      }
    public function login()
    {
         $this->load->view('login.php'); 
     }
    public function signup()
    {
        $this->load->view('signup.php'); 
    }
    public function admin()
    {
        
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['notification'] = $this->m_Project->notification()->result();
        $data['staff'] = $this->m_Project->staff()->result();
        $data['employee'] = $this->m_Project->tampil_employee()->result();
        $data['active'] = $this->m_Project->tampil_allitem()->result();
        $data['item_details'] = $this->m_Project->initial_stock()->result();
        $data['expired'] = $this->m_Project->tampil_itemexpired()->result();
        $data['batch'] = $this->m_Project->tampil_batch()->result();
        $data['expediture'] = $this->m_Project->expenditure1()->result();
        $data['contacts'] = $this->m_Project->contacts()->result();
        $data['join1'] = $this->m_Project->batch_name()->result();
        $data['history'] = $this->m_Project->history_adjust()->result();
        $data['id_admin'] = $this->session->id_admin;
        $data['chart']=$this->m_Project->get_data_stok();
        $data['chart2']=$this->m_Project->get_data_chart();
        $this->load->view('Admin.php',$data); 
    }
    public function staff()
    {
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['admin_username'] = $this->session->admin_username;
        $this->load->view('add_staff.php',$data); 
    }
    public function view_staff(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['admin'] = $this->m_admin->tampil_adminbaru()->result();
        $this->load->view('view_staff.php',$data);  
    }
    
    function InsertAdmin(){
        $a = "";
        $b = " "; 
        
        $tangkapUsername = $this->input->post('username');
        $tangkapFirstname = $this->input->post('fname');
        $tangkapLastname = $this->input->post('lname');
        $tangkapPassword = $this->input->post('password');
        $tangkapEmail = $this->input->post('email');
        $tangkapPhone = $this->input->post('phone');
        $tangkapAddress = $this->input->post('address');
        $tangkapImage = $this->input->post('image');
        
        $data = array(
            'admin_username' => $tangkapUsername,     
            'admin_name' => $tangkapFirstname, 
            'admin_lastname' => $tangkapLastname, 
            'admin_password' => md5($tangkapPassword),
            'email' => $tangkapEmail,
            'phone' => $tangkapPhone,
            'address' => $tangkapAddress,
            'image' => $tangkapImage,
            'status' => 1,
        );
         
        $id['data'] = $this->m_Project->getID($tangkapUsername)->result();
        
        foreach($id['data'] as $list)
        {
            $a = $list->admin_username;
            $b = $list->email;
        }
         if($a !=" " && $b != " "){
            echo "<script>alert('$a')</script>";
        if($tangkapUsername == $a){
            echo "<script>alert('Username Has Already Been taken')</script>";
             $this->load->view('signup.php'); 
        }else{
            if($tangkapEmail == $b){
            echo "<script>alert('Email Address Has Already Been taken')</script>";
             $this->load->view('signup.php'); 
            }
        }
         }
         else{
             
            $from_mail = 'inworkmanagement@gmail.com';
            $to = $tangkapEmail;
 
            $subject = 'Inwork - Accounts';
            $message = "Hello! Welcome to Inwork Management System.\n\nYou have just created an INwork Management account.\nManaging inventory is not easy, there will many problems that you will handle\nlike overstock item, messy item documentation, unregistered expenditure of \ngoods, and many more because of that, we have a solution for u to handle all of it.\nyou just need to use INwork Management System for the better documentation of your goods. 
            
            \nIf u have any question or help, please contact us by reply this email.\nWe will reply as soon as possible 

                        \nThank you for trusting us!:)
                        ";

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text; charset=iso-8859-1' . "\r\n";
            $headers .= 'To: Your Name <'.$to.'>' . "\r\n";
            $headers .= 'From: Inwork Management <'.$from_mail.'>' . "\r\n";

            $sendtomail = mail($to, $subject, $message, $headers);
            if( $sendtomail ) echo "";
            else echo ''; 

            $this->m_Project->insert_table($data,'admin');
            $this->load->view('login.php');      
        } 
    }

    function InsertAdminNew()
    {
         $a = " ";
         $b = " ";
         $c = " ";
         $d = " ";
		
        $tangkapUsername = $this->input->post('username');
        $tangkapFirstname = $this->input->post('fname');
        $tangkapLastname = $this->input->post('lname');
        $tangkapPassword = $this->input->post('password');
        $tangkapEmail = $this->input->post('email');
        $tangkapGender = $this->input->post('gender');
        $tangkapPhone = $this->input->post('phone');
        $tangkapAddress = $this->input->post('address');
        $tangkapImage = $this->input->post('image');
        $data = array(
        'admin_username' => $tangkapUsername,     
        'admin_name' => $tangkapFirstname, 
        'admin_lastname' => $tangkapLastname, 
        'admin_password' => md5($tangkapPassword),
        'email' => $tangkapEmail,
        'admin_gender' => $tangkapGender,    
        'phone' => $tangkapPhone,
        'address' => $tangkapAddress,
        'image' => $tangkapImage,
        'status' => 1,
        );
        
         $id['data'] = $this->m_Project->getStaff()->result();
        
        $flag = 0;
        
        foreach($id['data'] as $list)
        {
            
            $a = $list->admin_name;
            $b = $list->admin_lastname;
            $c = $list->email;
            $d = $list->phone;
            $e = $list->admin_username;
            
             if($tangkapFirstname == $a && $tangkapLastname == $b)
            {
                echo "<script>alert('Name Has Already Been taken')</script>";
             
                $flag = 2;
                break;
                
             }
             else if($tangkapFirstname == $a && $tangkapLastname != $b )
             {
                 $flag = 1;
                 $this->m_Project->insert_table($data,'admin');
                 
             }else if($tangkapFirstname != $a && $tangkapLastname == $b){
                  $flag = 1;
                  echo "<script>alert('Last Name Has Already Been taken')</script>";
                  $this->m_Project->insert_table($data,'admin');
                  //redirect('Project/view');
            }else if($tangkapEmail == $c){
                $flag = 2;
                echo "<script>alert('Email Has Already Been taken')</script>";
                break;     
                
            }
            else if($tangkapPhone == $d){
                $flag = 2;
                echo "<script>alert('Phone Number Has Already Been taken')</script>";
                break;
                   
            }
            else if($tangkapUsername == $e){
                $flag = 2;
                echo "<script>alert('Username Has Already Been taken')</script>";
                break;
                
            }
        // }
            
            if($flag == 1 || $flag == 2)
            {
                break;
            }
            
        }
            
        
        if ($flag == 0)
        {
            $this->m_Project->insert_table($data,'admin');
            redirect('Project/view_staff');
        }
        else if ($flag == 1)
        {
            redirect('Project/view_staff');
        }
        else if($flag == 2)
        {
          $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['admin'] = $this->m_admin->tampil_adminbaru()->result();
        $this->load->view('add_staff.php',$data);  
        }   
    }
    
    function delete_staff($id){
        $data = array(
            'status' =>'0'
        ); 
        
        $where = array('id_admin' => $id);
        $this->m_Project->update_data($where,$data,'admin');
        redirect('Project/view_staff'); 
    }
    
    function edit_staff($admin){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $where = array('id_admin' => $admin);
        $data['adminEdit'] = $this->m_Project->edit($where,'admin')->result();
        $this->load->view('edit_staff.php',$data);
    }
    
    function update_admin(){
        $tangkapID = $this->input->post('ID');
        $tangkapUsername = $this->input->post('username');
        $tangkapFirstname = $this->input->post('fname');
        $tangkapLastname = $this->input->post('lname');
        $tangkapEmail = $this->input->post('email');
        $tangkapPhone = $this->input->post('phone');
        $tangkapAddress = $this->input->post('address');
        $tangkapImage = $this->input->post('image');
        
        $data = array(
            'id_admin' => $tangkapID,
            'admin_username' => $tangkapUsername,     
            'admin_name' => $tangkapFirstname, 
            'admin_lastname' => $tangkapLastname, 
            'email' => $tangkapEmail,
            'phone' => $tangkapPhone,
            'address' => $tangkapAddress,
            'image' => $tangkapImage,
            'status' => 1,
        );
        
        $where = array(
            'id_admin' => $tangkapID
        );
             
        $this->m_Project->update_data($where,$data,'admin');
        redirect('Project/view_staff');
    }
    
    function proses_login(){
        $tangkapUsername = $this->input->post('username');
        $tangkapPassword = $this->input->post('password');
        
        $where = array(
            'admin_username' => $tangkapUsername,
            'admin_password' => md5($tangkapPassword)
        );
        
        $id['data'] = $this->m_Project->getID($tangkapUsername)->result();
        
        foreach($id['data'] as $list){
            $a = $list->id_admin;
        }
         
        $cek = $this->m_Project->cek_login("admin",$where)->num_rows();
        if($cek > 0){
            $data_session = array(
                'admin_name' => $tangkapUsername, 
                'admin_username' => $tangkapUsername, 
                'id_admin' => $a,   
           );
        
        $this->session->set_userdata($data_session);
        redirect('Project/admin');
        }
        
        else{
            echo "<script>alert('Please Input The correct Email & Password')</script>";
            $this->load->view('login.php'); 
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('Project/login');
    }
    
    public function tambah(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $this->load->view('formtambah.php',$data); 
    }
    
    public function view(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['contacts'] = $this->m_Project->tampil_contacts()->result();
        $this->load->view('Form(view).php',$data);  
    }
    
    public function salesorder(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['salesorder'] = $this->m_Project->sales_name()->result();
        $data['sales'] = $this->m_Project->sales1()->result();
        $data['batchname'] = $this->m_Project->batch_namenew()->result();
        $data['address'] = $this->m_Project->address()->result();
        $this->load->view('salesorder.php',$data); 
    }
    
    public function purchaseorder(){
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['notification'] = $this->m_Project->notification()->result();
        $this->load->view('purchaseorder.php',$data); 
    }
    
    public function additem(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $this->load->view('formbarang.php',$data); 
    }
    
    public function activeitem(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['item_details'] = $this->m_Project->tampil_item()->result();
        $this->load->view('active.php',$data); 
    }
    
    public function inactiveitem(){   
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['item_details'] = $this->m_Project->tampil_itemexpired()->result();
        $this->load->view('inactive.php',$data); 
    }
    
    public function stockadjust(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username; 
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['item_details'] = $this->m_Project->tampil_item()->result();
        $this->load->view('stockadjust.php',$data); 
    }
    
    public function batch(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username; 
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['join'] = $this->m_Project->tampil_item()->result();
        $data['name'] = $this->m_Project->batch_name()->result();
        $this->load->view('batch',$data);    
    }
    
    public function view_batch(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['join1'] = $this->m_Project->batch_name()->result();
        $data['batch'] = $this->m_Project->tampil_batch3()->result();
        
        $this->load->view('view_batch.php',$data); 
    }
    
    public function existing_batch(){
         $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username; 
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['join'] = $this->m_Project->tampil_item()->result();
         $data['batch'] = $this->m_Project->tampil_batch3()->result();
         $data['category'] = $this->m_Project->tampil_batchcategory()->result();
        $this->load->view('view_batchnew',$data);    
    }
    
    public function invoice(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username; 
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $this->load->view('invoice.php',$data); 
    }
    
    public function incoming(){
         $data['notification'] = $this->m_Project->notification()->result();
         $data['admin_username'] = $this->session->admin_username;
         $data['admin'] = $this->m_Project->tampil_admin()->result();
         $data['itemdetails'] = $this->m_Project->incinvoice()->result();
         $this->load->view('incoming.php',$data); 
    }
    
    function outward(){
        $data['notification'] = $this->m_Project->notification()->result(); 
         $data['admin_username'] = $this->session->admin_username;
         $data['admin'] = $this->m_Project->tampil_admin()->result();
         $data['outward'] = $this->m_Project->historyout()->result();
         $this->load->view('outward.php',$data); 
    }
    
    
    public function existing_item(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['item_details'] = $this->m_Project->tampil_item()->result();
        $this->load->view('existing_item.php',$data); 
    }
    
    function InsertContacts(){
         $a = " ";
         $b = " ";
         $c = " ";
         $d = " ";
        
        $tangkapFname = $this->input->post('fname');
        $tangkapLname = $this->input->post('lname');
        $tangkapCompany = $this->input->post('company');
        $tangkapContact = $this->input->post('contact');  
        $tangkapAddress = $this->input->post('address'); 
        $tangkapState = $this->input->post('state');  
        $tangkapPostcode = $this->input->post('postcode');  
        $tangkapCity = $this->input->post('city');
        $tangkapCountry = $this->input->post('country');  
        $data = array(
            'contact_fname' => $tangkapFname, 
            'contact_lname' => $tangkapLname,
            'contact_company' => $tangkapCompany,
            'contact_contact' => $tangkapContact,
            'contact_address' => $tangkapAddress, 
            'contact_state' => $tangkapState,
            'contact_postcode' => $tangkapPostcode, 
            'contact_city' => $tangkapCity,
            'contact_Country' => $tangkapCountry,     
            'status' => 1,
        );
        
        $id['data'] = $this->m_Project->getContacts()->result();
        
        $flag = 0;
        
        foreach($id['data'] as $list)
        {
            $a = $list->contact_fname;
            $b = $list->contact_lname;
            $c = $list->contact_company;
            $d = $list->contact_contact;
        
         //if($a != "" && $b != "" && $c != "" && $d != ""){
            
            if($tangkapFname == $a && $tangkapLname == $b)
            {
                echo "<script>alert('Name Has Already Been taken')</script>";
             
                $flag = 2;
                break;
                //$this->load->view('formtambah.php',$data);  
             }
             else if($tangkapFname == $a && $tangkapLname != $b )
             {
                 $flag = 1;
                 $this->m_Project->insert_table($data,'contacts');
                 //redirect('Project/view');
             }else if($tangkapFname != $a && $tangkapLname == $b){
                  $flag = 1;
                  echo "<script>alert('Last Name Has Already Been taken')</script>";
                  $this->m_Project->insert_table($data,'contacts');
                  //redirect('Project/view');
            }else if($tangkapCompany == $c){
                $flag = 2;
                echo "<script>alert('Company Name Has Already Been taken')</script>";
                break;     
                //$this->load->view('formtambah.php',$data);   
            }
            else if($tangkapContact == $d){
                $flag = 2;
                echo "<script>alert('Phone Number Has Already Been taken')</script>";
                break;
                //$this->load->view('formtambah.php',$data);   
            }
        // }
            
            if($flag == 1 || $flag == 2)
            {
                break;
            }
            
        }
            
        
        if ($flag == 0)
        {
            $this->m_Project->insert_table($data,'contacts');
            redirect('Project/view');
        }
        else if ($flag == 1)
        {
            redirect('Project/activeitem');
        }
        else if($flag == 2)
        {
        $data['notification'] = $this->m_Project->notification()->result();
         $data['admin_username'] = $this->session->admin_username;
         $data['admin'] = $this->m_Project->tampil_admin()->result();
            $this->load->view('formtambah.php',$data);  
        }
        
    }
    
    function InsertItem(){
        
        $a = " ";
        $b = " ";
        $flag = 0;
        
       // $tangkapID = $this->input->post('id');
        $tangkapName = $this->input->post('name');
        $tangkapType = $this->input->post('type');
        $tangkapSKU = $this->input->post('sku');
        $tangkapUnit = $this->input->post('unit');  
        $tangkapManufacturer = $this->input->post('manufacturer'); 
        $tangkapBrand = $this->input->post('brand');  
        $tangkapDescription = $this->input->post('description');  
        $tangkapImage = $this->input->post('image');
        $tangkapSelling = $this->input->post('selling');  
        $tangkapPurchase = $this->input->post('purchase');  
        $tangkapDescription1 = $this->input->post('description1');  
        $tangkapDescription2 = $this->input->post('description2');
        $tangkapTax = $this->input->post('tax');  
        $tangkapOpening = $this->input->post('opening');  
        $tangkapReorder = $this->input->post('reorder');  
        $tangkapIncoming = $this->input->post('incoming'); 
        $tangkapOutward = $this->input->post('outward');  
        $tangkapquantity = $this->input->post('qty');  
        
        
        
         $data['data2'] = $this->m_Project->getItem()->result();
        foreach($data['data2'] as $list)
        {
            $a = $list->item_name;
            $b = $list->item_sku;
            
            
            
              if($tangkapName == $a){
                $flag = 2;
                echo "<script>alert('Item Name Has Already Been taken')</script>";
                break;     
                   
            }
            else if($tangkapSKU == $b){
                $flag = 2;
                echo "<script>alert('SKU Number Has Already Been taken')</script>";
                break;      
                
                  
            }
            
            
        }
            
        if ($flag == 0)
        {
            $data_item = array(
           // 'id_itemdetails' => $tangkapID,
            'item_name' => $tangkapName, 
            'item_type' =>  $tangkapType,
            'item_sku' => $tangkapSKU,
            'item_unit' => $tangkapUnit,
            'item_manufacturer' =>  $tangkapManufacturer, 
            'item_brand' => $tangkapBrand,
            'item_description' => $tangkapDescription, 
            'item_image' => $tangkapImage,
            'item_selling' => $tangkapSelling, 
            'item_purchase' => $tangkapPurchase, 
            'item_descriptionsales' => $tangkapDescription1, 
            'item_descriptionselling' => $tangkapDescription2, 
            'item_tax' => $tangkapTax,
            'item_stock' => $tangkapOpening,
            'item_reorder' => $tangkapReorder,
            'item_incomingdate' => $tangkapIncoming,
            'item_outwarddate' => $tangkapOutward,
            'status' => 1,
            );
            
            $this->m_Project->insert_table($data_item,'item_details');
        
            $id['data1'] = $this->m_Project->get_item($tangkapName)->result();
            
            foreach($id['data1'] as $list2)
            {
                $id = $list2->id_itemdetails;
            }
            
            
     
            $data1 = array(
                'id_itemdetails' => $id,
                'history_status' => 1,
            );    
            $this->m_Project->insert_table($data1,'history');

            $data2 = array(
                'id_itemdetails' => $id,
                'in_quantity' => $tangkapOpening,
                'status' => 1,
            );
            $this->m_Project->insert_table($data2,'itementry_form');


            $data['notification'] = $this->m_Project->notification()->result();
            $data['admin_username'] = $this->session->admin_username;
            $data['admin'] = $this->m_Project->tampil_admin()->result();
             $data['item_details'] = $this->m_Project->tampil_item()->result();
            $this->load->view('active.php',$data);


            }
            else if($flag == 2)
            {
                $data['notification'] = $this->m_Project->notification()->result();
                $data['admin_username'] = $this->session->admin_username;
                $data['admin'] = $this->m_Project->tampil_admin()->result();
                $this->load->view('formbarang.php',$data);  
            }
        
        
    }
    
    function delete_item($id){
        
        $data = array(
            'status' =>'0'
        ); 
        
        $where = array('id_itemdetails' => $id);
        $this->m_Project->update_data($where,$data,'item_details');
        redirect('Project/activeitem'); 
    }
    
    function edit($details){
        $data['notification'] = $this->m_Project->notification()->result(); 
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        
        $where = array('id_itemdetails' => $details);
        $data['itemEdit'] = $this->m_Project->edit($where,'item_details')->result();
        $this->load->view('edit_formbarang.php',$data);
    }
    
    function details($details){
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['notification'] = $this->m_Project->notification()->result();
        $where = array('id_itemdetails' => $details);
        $data['itemEdit'] = $this->m_Project->edit($where,'item_details')->result();
        $this->load->view('item_details.php',$data);
    }
    
    function update_item(){
        
        $a = " ";
        $b = " ";
        $flag = 0;
        
        $tangkapID = $this->input->post('id');
        $tangkapName = $this->input->post('name');
        $tangkapType = $this->input->post('type');
        $tangkapSKU = $this->input->post('sku');
        $tangkapUnit = $this->input->post('unit');  
        $tangkapManufacturer = $this->input->post('manufacturer'); 
        $tangkapBrand = $this->input->post('brand');  
        $tangkapDescription = $this->input->post('description');  
        $tangkapImage = $this->input->post('image');
        $tangkapSelling = $this->input->post('selling');  
        $tangkapPurchase = $this->input->post('purchase');  
        $tangkapDescription1 = $this->input->post('description1');  
        $tangkapDescription2 = $this->input->post('description2');
        $tangkapTax = $this->input->post('tax');  
        $tangkapOpening = $this->input->post('opening');  
        $tangkapReorder = $this->input->post('reorder');  
        $tangkapIncoming = $this->input->post('incoming'); 
        $tangkapOutward = $this->input->post('outward');  
        
    
/*        $data['data2'] = $this->m_Project->getItem()->result();
        foreach($data['data2'] as $list)
        {
            $a = $list->item_name;
            $b = $list->item_sku;
            
        
              if($tangkapName == $a){
                $flag = 2;
                echo "<script>alert('Item Name Has Already Been taken')</script>";
                break;     
                   
            }
            else if($tangkapSKU == $b){
                $flag = 2;
                echo "<script>alert('SKU Number Has Already Been taken')</script>";
                break;      
                
                  
            }
            
            
        }*/
            
        if ($flag == 0)
        {
            $data_item = array(
           // 'id_itemdetails' => $tangkapID,
            'id_itemdetails' => $tangkapID,
            'item_name' => $tangkapName, 
            'item_type' =>  $tangkapType,
            'item_sku' => $tangkapSKU,
            'item_unit' => $tangkapUnit,
            'item_manufacturer' =>  $tangkapManufacturer, 
            'item_brand' => $tangkapBrand,
            'item_description' => $tangkapDescription, 
            'item_image' => $tangkapImage,
            'item_selling' => $tangkapSelling, 
            'item_purchase' => $tangkapPurchase, 
            'item_descriptionsales' => $tangkapDescription1, 
            'item_descriptionselling' => $tangkapDescription2, 
            'item_tax' => $tangkapTax,
            'item_stock' => $tangkapOpening,
            'item_reorder' => $tangkapReorder,
            'item_incomingdate' => $tangkapIncoming,
            'item_outwarddate' => $tangkapOutward,
            'status' => 1,
            );
            
             $where = array(
            'id_itemdetails' => $tangkapID
             );
            
            $this->m_Project->update_data($where,$data_item,'item_details');
            redirect('Project/activeitem');

            }
        
            else if($flag == 2)
            {
                $data['notification'] = $this->m_Project->notification()->result(); 
                $data['admin_username'] = $this->session->admin_username;
                $data['admin'] = $this->m_Project->tampil_admin()->result();
                $this->load->view('edit_formbarang.php',$data); 
            }
    }
    
    function update_existitem(){
        $tangkapID= $this->input->post('id_itemdetails');
        $tangkapType = $this->input->post('item_type');
        $tangkapSKU = $this->input->post('item_sku');
        $tangkapUnit = $this->input->post('unit');  
        $tangkapManufacturer = $this->input->post('item_manufacturer'); 
        $tangkapBrand = $this->input->post('item_brand');  
        $tangkapDescription = $this->input->post('item_description');  
        $tangkapImage = $this->input->post('item_image');
        $tangkapSelling = $this->input->post('item_selling');  
        $tangkapPurchase = $this->input->post('item_purchase');  
        $tangkapDescription1 = $this->input->post('item_descriptionselling');  
        $tangkapDescription2 = $this->input->post('item_descriptionsales');
        $tangkapTax = $this->input->post('item_tax');  
        $tangkapOpening = $this->input->post('item_stock');  
        $tangkapReorder = $this->input->post('item_reorder');  
        $tangkapIncoming = $this->input->post('item_incomingdate'); 
        $tangkapOutward = $this->input->post('item_outwarddate');  
            
        $data = array(
            'id_itemdetails' => $tangkapID,
            'item_type' =>  $tangkapType,
            'item_sku' => $tangkapSKU,
            'item_unit' => $tangkapUnit,
            'item_manufacturer' =>  $tangkapManufacturer, 
            'item_brand' => $tangkapBrand,
            'item_description' => $tangkapDescription, 
            'item_image' => $tangkapImage,
            'item_selling' => $tangkapSelling, 
            'item_purchase' => $tangkapPurchase, 
            'item_descriptionsales' => $tangkapDescription1, 
            'item_descriptionselling' => $tangkapDescription2, 
            'item_tax' => $tangkapTax,
            'item_stock' => $tangkapOpening,
            'item_reorder' => $tangkapReorder,
            'item_incomingdate' => $tangkapIncoming,
            'item_outwarddate' => $tangkapOutward,
            'status' => 1,
        );
        
        $where = array(
            'id_itemdetails' => $tangkapID
        );

        $this->m_Project->update_data($where,$data,'item_details');
        redirect('Project/activeitem');
    }
    
    function delete_contact($id){
        $data = array(
            'status' =>'0'
        ); 
        
        $where = array('id_contact' => $id);
        $this->m_Project->update_data($where,$data,'contacts');
        redirect('Project/view'); 
    }
    
    function edit_contact($contacts){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $where = array('id_contact' => $contacts);
        $data['contactEdit'] = $this->m_Project->edit($where,'contacts')->result();
        $this->load->view('edit_formtambah.php',$data);
    }
    
    function update_contact(){
        $tangkapID = $this->input->post('id');
        $tangkapFname = $this->input->post('fname');
        $tangkapLname = $this->input->post('lname');
        $tangkapCompany = $this->input->post('company');
        $tangkapContact = $this->input->post('contact');  
        $tangkapAddress = $this->input->post('address'); 
        $tangkapState = $this->input->post('state');  
        $tangkapPostcode = $this->input->post('postcode');  
        $tangkapCity = $this->input->post('city');
        $tangkapCountry = $this->input->post('country');  
             
        $data = array(
            'id_contact' => $tangkapID,
            'contact_fname' => $tangkapFname, 
            'contact_lname' => $tangkapLname,
            'contact_company' => $tangkapCompany,
            'contact_contact' => $tangkapContact,
            'contact_address' => $tangkapAddress, 
            'contact_state' => $tangkapState,
            'contact_postcode' => $tangkapPostcode, 
            'contact_city' => $tangkapCity,
            'contact_Country' => $tangkapCountry,     
            'status' => 1,
        );
        
        $where = array(
            'id_contact' => $tangkapID
        );
                  
        $this->m_Project->update_data($where,$data,'contacts');
        redirect('Project/view');
    }
    
    public function profile(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $this->load->view('Profile.php',$data);
    }
    
    public function employee(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $this->load->view('employee.php',$data);
    }
    
    public function employee_view(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['employee'] = $this->m_Project->tampil_employee()->result();
         
        $this->load->view('employee_view.php',$data);
    }
    
    public function InsertEmployee(){
         $a = " ";
         $b = " ";
         $c = " ";
         $d = " ";
        
        $tangkapSN = $this->input->post('SN');
        $tangkapFname = $this->input->post('fname');
        $tangkapLname = $this->input->post('lname');
        $tangkapGender = $this->input->post('gender');  
        $tangkapAddress = $this->input->post('address'); 
        $tangkapContact = $this->input->post('contact');  
        $tangkapEmail = $this->input->post('email');  
        $tangkapHire = $this->input->post('hiredate');
        $tangkapEffective = $this->input->post('effectivedate');  
        $tangkapDepartment = $this->input->post('department');  
        $tangkapSalary = $this->input->post('salary');  
        
        $data = array(
            'employee_social' => $tangkapSN, 
            'employee_fname' => $tangkapFname,
            'employee_lname' => $tangkapLname,
            'employee_gender' => $tangkapGender,
            'employee_address' => $tangkapAddress,
            'employee_contact' => $tangkapContact,
            'employee_email' => $tangkapEmail,
            'employee_hiredate' => $tangkapHire,
            'employee_effectivedate' => $tangkapEffective,
            'employee_department' => $tangkapDepartment,
            'employee_salary' => $tangkapSalary, 
            'employee_status' => 1,
        );
        $id['data'] = $this->m_Project->getEmployee()->result();
        
        $flag = 0;
        
        foreach($id['data'] as $list)
        {
            
            $a = $list->employee_fname;
            $b = $list->employee_lname;
            $c = $list->employee_email;
            $d = $list->employee_contact;
            $e = $list->employee_social;
            
             if($tangkapFname == $a && $tangkapLname == $b)
            {
                echo "<script>alert('Name Has Already Been taken')</script>";
                $flag = 2;
                break;
                
             }
             else if($tangkapFname == $a && $tangkapLname != $b )
             {
                 $flag = 1;
                 $this->m_Project->insert_table($data,'employee');
                 
             }else if($tangkapFname != $a && $tangkapLname == $b){
                  $flag = 1;
                  $this->m_Project->insert_table($data,'employee');
            }else if($tangkapEmail == $c){
                $flag = 2;
                echo "<script>alert('Email Has Already Been taken')</script>";
                break;     
                
            }
            else if($tangkapContact == $d){
                $flag = 2;
                echo "<script>alert('Phone Number Has Already Been taken')</script>";
                break;
                   
            }
            else if($tangkapSN == $e){
                $flag = 2;
                echo "<script>alert('Social Number Has Already Been taken')</script>";
                break;
                
            }
        // }
            
            if($flag == 1 || $flag == 2)
            {
                break;
            }
            
        }
            
        
        if ($flag == 0)
        {
            $this->m_Project->insert_table($data,'employee');
            redirect('Project/employee_view');
        }
        else if ($flag == 1)
        {
            redirect('Project/employee_view');
        }
        else if($flag == 2)
        {
         $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $this->load->view('employee.php',$data);
        }   
             
       
    }
    
    function edit_employee($employee){
        $data['notification'] = $this->m_Project->notification()->result(); 
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result(); 
        $where = array('id_employee' => $employee);
        $data['employeeEdit'] = $this->m_Project->edit($where,'employee')->result();
        $this->load->view('edit_employee.php',$data);
    }
    
    function update_employee(){
        $tangkapID = $this->input->post('ID');
        $tangkapSN = $this->input->post('SN');
        $tangkapFname = $this->input->post('fname');
        $tangkapLname = $this->input->post('lname');
        $tangkapGender = $this->input->post('gender');  
        $tangkapAddress = $this->input->post('address'); 
        $tangkapContact = $this->input->post('contact');  
        $tangkapEmail = $this->input->post('email');  
        $tangkapHire = $this->input->post('hiredate');
        $tangkapEffective = $this->input->post('effectivedate');  
        $tangkapDepartment = $this->input->post('department');  
        $tangkapSalary = $this->input->post('salary');  
             
        $data = array(
            'id_employee' =>$tangkapID,
            'employee_social' => $tangkapSN, 
            'employee_fname' => $tangkapFname,
            'employee_lname' => $tangkapLname,
            'employee_gender' => $tangkapGender,
            'employee_address' => $tangkapAddress,
            'employee_contact' => $tangkapContact,
            'employee_email' => $tangkapEmail,
            'employee_hiredate' => $tangkapHire,
            'employee_effectivedate' => $tangkapEffective,
            'employee_department' => $tangkapDepartment,
            'employee_salary' => $tangkapSalary, 
            'employee_status' => 1,
        );
        
        $where = array(
            'id_employee' => $tangkapID
        );

        $this->m_Project->update_data($where,$data,'employee');
        redirect('Project/employee_view');
    }
    
    function delete_employee($id){
        $data = array(
            'employee_status' =>'0'
        ); 
        
        $where = array(
            'id_employee' => $id
        );
        
        $this->m_Project->update_data($where,$data,'employee');
        redirect('Project/employee_view'); 
    }
    
    function getItemByAjax(){
        $item_name = $this->input->post('item_name');
        $where = array('item_name' => $item_name);
        $data = $this->m_Project->getItemByAjax($where);
        echo json_encode($data);
    }
    
    function getItemByAjax1(){
        $id_itemdetails = $this->input->post('id_itemdetails');
        $where = array('id_itemdetails' => $id_itemdetails);
        $data = $this->m_Project->getItemByAjax($where);
        echo json_encode($data);
    }
    
    function getExistItemByAjax(){
        $id_itemdetails = $this->input->post('id_itemdetails');
        $where = array('id_itemdetails' => $id_itemdetails);
        $data = $this->m_Project->getExistItemByAjax($where);
        echo json_encode($data);
    }
    
    function update_stockadjust(){    
        $tangkapID= $this->input->post('id_itemdetails');
        $tangkapSKU = $this->input->post('item_sku');
        $tangkapName = $this->input->post('item_name');
        $tangkapType = $this->input->post('item_type');
        $tangkapManufacturer = $this->input->post('item_manufacturer');  
        $tangkapBrand = $this->input->post('item_brand'); 
        $tangkapStock = $this->input->post('item_stock');
        $tangkapQuantity = $this->input->post('stock');
        
        
                
        $data = array(
            'id_itemdetails' => $tangkapID,
            'item_sku' => $tangkapSKU, 
            'item_type' => $tangkapType,
            'item_manufacturer' => $tangkapManufacturer,
            'item_brand' => $tangkapBrand, 
            'item_stock' => $tangkapQuantity, 
            'status' => 1,
        );
        
        $where = array(
            'id_itemdetails' => $tangkapID
        );
             
        $this->m_Project->update_data($where,$data,'item_details');
        
        $data1 = array(
            'id_itemdetails' => $tangkapID, 
            'adjust_quantity' => $tangkapQuantity, 
            'stock_status' => 1,
        );
             
        $this->m_Project->insert_table($data1,'stock_adjust');
        redirect('Project/activeitem');
    }
    
    public function search_model(){
        $data['notification'] = $this->m_Project->notification()->result(); 
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['item'] = $this->m_Project->tampil_item()->result();
        $this->load->view('search.php',$data); 
    }
    
    function execute_search(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();    
        $keyword    =   $this->input->post('search');
        $data['results'] = $this->m_Project->search($keyword);
        $this->load->view('search.php',$data); 
     }
    
    function editUser($id){
        
         $data['notification'] = $this->m_Project->notification()->result();
        
         $data['admin_username'] = $this->session->admin_username;
         $data['admin'] = $this->m_Project->tampil_admin()->result();
        $where = array('admin_username' => $id);
        $data['editUser'] = $this->m_Project->edit($where,'admin')->result();
        $this->load->view('editprofile.php',$data);
    }
    
    function update_profile($id){
        $tangkapUsername = $this->input->post('username');
        $tangkapName = $this->input->post('name');
        $tangkapLname = $this->input->post('lname');
        $tangkapEmail = $this->input->post('email'); 
        $tangkapPhone = $this->input->post('phone');
        $tangkapAddress = $this->input->post('address');
        $tangkapGender = $this->input->post('gender');
        $tangkapImage = $this->input->post('image');
        $tangkapOldpass = $this->input->post('oldpass');
        $tangkapNewpass = $this->input->post('newpass');
        $tangkapRepass = $this->input->post('repass');
        
        if($tangkapOldpass == ""){
    
             $data = array(
                 'admin_username' => $tangkapUsername, 
                 'admin_name' => $tangkapName,
                 'admin_lastname' => $tangkapLname,
                 'email' => $tangkapEmail, 
                 'phone' => $tangkapPhone,
                 'address' => $tangkapAddress,
                 'admin_gender' => $tangkapGender,
                 'image' => $tangkapImage, 
                 'status' => 1
             );
                $where = array(
                'admin_username' => $id
                );
             $this->session->set_userdata('admin_username', $tangkapUsername);
             $this->m_Project->update_data($where,$data,'admin');
             $data['notification'] = $this->m_Project->notification()->result();        
            $data['admin_username'] = $this->session->admin_username;
            $data['admin'] = $this->m_Project->tampil_admin()->result();
            $where = array('admin_username' => $id);
            $data['editUser'] = $this->m_Project->edit($where,'admin')->result();
            $this->load->view('editprofile.php',$data);
        }
        else{
            $pass = $this->m_Project->select('admin', 'admin_username', $id)->result();
            
            foreach($pass as $list) {
                $old = $list->admin_password;
                
            }
            
            if(md5($tangkapOldpass) == $old) {
                //kalo pw lama betul
                 
                if($tangkapNewpass == $tangkapRepass) {
                                  

                    $data = array(
                        'admin_username' => $tangkapUsername, 
                        'admin_name' => $tangkapName,
                        'admin_lastname' => $tangkapLname,
                        'email' => $tangkapEmail, 
                        'admin_password' =>md5($tangkapNewpass),
                        'phone' => $tangkapPhone,
                        'address' => $tangkapAddress,
                        'admin_gender' => $tangkapGender,
                        'image' => $tangkapImage, 
                        'status' => 1
                    );
                    $where = array(
                        'admin_username' => $id
                    );
                    $this->session->set_userdata('admin_username', $tangkapUsername);
                    $this->m_Project->update_data($where,$data,'admin');
                    $data['notification'] = $this->m_Project->notification()->result();        
                    $data['admin_username'] = $this->session->admin_username;
                    $data['admin'] = $this->m_Project->tampil_admin()->result();
                     $where = array('admin_username' => $id);
                    $data['editUser'] = $this->m_Project->edit($where,'admin')->result();
                    $this->load->view('editprofile.php',$data);

                }
                else {
                     echo "<script>alert('a')</script>";
                    
                    
                }
            }
            else {
                 echo "<script>alert('b')</script>";
            }
        }
    }
   
    public function search_employee()
    {
         
      $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['employee'] = $this->m_Project->tampil_pekerja()->result();
        $this->load->view('search_employee.php',$data); 
    }
    
    
    function execute_employee()
     {
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();    
        $keyword    =   $this->input->post('search');
        $data['results']    =   $this->m_Project->search_employee($keyword);
         
        
        $this->load->view('search_employee.php',$data);
     }
    public function search_contacts()
    {
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['contacts'] = $this->m_Project->tampil_pekerja()->result();
        $this->load->view('search_contacts.php',$data); 
    }
    function execute_contacts()
     {
      $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();    
        $keyword    =   $this->input->post('search');
        $data['results']    =   $this->m_Project->search_contacts($keyword);
    $this->load->view('search_contacts.php',$data);
     }
    function getItemByAjax2(){
        $id_itemdetails = $this->input->post('id_itemdetails');
        $where = array('id_itemdetails' => $id_itemdetails);
        $data = $this->m_Project->getItemByAjax2($where);
        echo json_encode($data);
    }
    function insert_batch()
    {
        $a="";
        $b = "";
        $flag = 0;
        
        $tangkapName = $this->input->post('batch_name');
        $tangkapCategory = $this->input->post('batch_category');
        
        
        $data['data'] = $this->m_Project->tampil_batch3()->result();
        foreach($data['data'] as $list)
        {
            $a = $list->batch_name;
          
            
              if($tangkapName == $a){
                $flag = 2;
                echo "<script>alert('Batch Name Has Already Been taken')</script>";
                break;     
                   
            }
        }
        
         $data1['data'] = $this->m_Project->tampil_batchcategory()->result();
        foreach($data1['data'] as $list)
        {

            $b = $list->batch_category;
            
             if($tangkapCategory == $b){
                $flag = 2;
                echo "<script>alert('Batch Category Has Already Been taken')</script>";
                break;      
                  
            }
        }
            
            if ($flag == 0)
            {
                 
                $data1 = array( 
                    'batch_name' => $tangkapName,    
                    'status' => 1,
                );
                $this->m_Project->insert_table($data1,'batch_name');
                
                $data2 = array( 
                    'batch_category' => $tangkapCategory,    
                    'status' => 1,
                );
                $this->m_Project->insert_table($data2,'batch_category');
                redirect('Project/existing_batch');
                  
            }
            else if($flag == 2)
            {
                $data['notification'] = $this->m_Project->notification()->result();
                $data['admin_username'] = $this->session->admin_username; 
                $data['admin'] = $this->m_Project->tampil_admin()->result();
                $data['join'] = $this->m_Project->tampil_item()->result();
                $data['name'] = $this->m_Project->batch_name()->result();
                $this->load->view('batch',$data);    
            }   
    }
    function existing_batch1()
    {
        $tangkapID = $this->input->post('id_itemdetails');
        $tangkapName = $this->input->post('id_batchname');
        $tangkapCategory = $this->input->post('category');
        $tangkapDescription = $this->input->post('batch_description');
        $tangkapStock = $this->input->post('item_stock');
        $tangkapQuantity = $this->input->post('quantity');
        
        
        
        if($tangkapQuantity >= $tangkapStock){
           
            
            echo "<script>alert('test')</script>";
             redirect('Project/existing_batch');
        }
        
        else{
            $a = $tangkapStock - $tangkapQuantity;
            $data1 = array(
                'id_itemdetails' => $tangkapID,    
                'id_batchname' => $tangkapName, 
                'id_batchcategory' => $tangkapCategory,
                'batch_description' => $tangkapDescription,
                'batch_quantity' => $tangkapQuantity,
                'batch_status' => 1,
                 );

            $this->m_Project->insert_table($data1,'batch');

            $a = $tangkapStock - $tangkapQuantity;

            $data2 = array(
                'id_itemdetails'=>  $tangkapID,
                'item_stock' => $a,
            );

            $where = array(
                'id_itemdetails' => $tangkapID
            );
            $this->m_Project->update_data($where,$data2,'item_details');
            redirect('Project/view_batch');
        }
                  
    }
    
    function delete_batch($id)
    {
         $data = array(
        'batch_status' =>'0'
        ); 
        $where = array('id_batch' => $id);
        $this->m_Project->update_data($where,$data,'batch');
        redirect('Project/view_batch'); 
    }
     function edit_batch($id){
         $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
         $data['admin'] = $this->m_Project->tampil_admin()->result();
         $data['join'] = $this->m_Project->tampil_item()->result();
         $data['batch'] = $this->m_Project->tampil_batch3()->result();
         $data['category'] = $this->m_Project->tampil_batchcategory()->result();
        $where = array('id_batch' => $id);
        $data['batchEdit'] = $this->m_Project->edit($where,'batch')->result();
        $this->load->view('edit_batch.php',$data);
    }
     function getEditByAjax(){
        $id_itemdetails = $this->input->post('id_itemdetails');
        $where = array('id_itemdetails' => $id_itemdetails);
        $data = $this->m_Project->getEditByAjax($where);
        echo json_encode($data);
    }
    function Update_batch(){
            $tangkapIDbatch = $this->input->post('id');
            $tangkapID = $this->input->post('id_itemdetails');
            $tangkapName = $this->input->post('batch_name');
            $tangkapCategory = $this->input->post('batch_category');
            $tangkapDescription = $this->input->post('batch_description');
            
         echo "<script>alert('$tangkapIDbatch')</script>";
        echo "<script>alert('$tangkapCategory')</script>";
        
             $data = array(
                 'id_batch' => $tangkapIDbatch,
                 'id_itemdetails' => $tangkapID,
                 'id_batchname' => $tangkapName,
                 'id_batchcategory' => $tangkapCategory,
                 'batch_description' => $tangkapDescription,
                 'batch_status' => 1,
             );
        
                 $where = array(
                'id_batch' => $tangkapIDbatch
                );

             $this->m_Project->update_data($where,$data,'batch');
             redirect('Project/view_batch');
    }
    
    public function search_batch()
    {   
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['batch'] = $this->m_Project->tampil_batch()->result();
        $this->load->view('search_batch.php',$data); 
    }
    function execute_batch()
     {
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();    
        $keyword    =   $this->input->post('search');
        $data['results']    =   $this->m_Project->search_batch($keyword);
        $this->load->view('search_batch.php',$data);
         }
     public function search_staff()
     {
        $data['notification'] = $this->m_Project->notification()->result();
         $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['adminnew'] = $this->m_Project->tampil_adminnew()->result();
        $this->load->view('search_staff.php',$data); 
    }
    function execute_staff()
     {
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();    
        $keyword    =   $this->input->post('search');
        $data['results']    =   $this->m_Project->search_staff($keyword);
        $this->load->view('search_staff.php',$data);
         }
    public function expenditure()
    {
        $row=$this->m_Project->batch_item()->num_rows();
        $data['code'] = getCode($row);
        $data['admin_username'] = $this->session->admin_username; 
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['notification'] = $this->m_Project->notification()->result();
        $data['employee'] = $this->m_Project->tampil_pekerja()->result();
        $data['batch'] = $this->m_Project->tampil_batch()->result();
        $this->load->view('purchaseorder',$data);    
    }
    function stockhistory()
     {
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result(); 
        $data['tampilstockadj'] = $this->m_Project->historyadjust()->result();
        $this->load->view('historystock.php',$data); 
         }
    
    function getEmployeeByAjax(){
        $id_employee = $this->input->post('id_employee');
        $where = array('id_employee' => $id_employee);
        $data = $this->m_Project->getEmployeeByAjax($where);
        echo json_encode($data);
    }
    function getByAjax(){
         $id_batch = $this->input->post('id_batch');
        $where = $id_batch;
        $data = $this->m_Project->getByAjax($where);
        echo json_encode($data);
    }
    function getBatchName(){
        $batch_name = $this->input->post('batch_name');
        $where = array('batch_name' => $batch_name);
        $data = $this->m_Project->getBatchName($where);
        echo json_encode($data);
    }
     function getb(){
        $id_batchname = $this->input->post('id_batchname');
        $where = array('id_batchname' => $id_batchname);
        $data = $this->m_Project->getb($where);
        echo json_encode($data);
    }
    function Insertexpenditure(){
        
        $row=$this->m_Project->batch_item()->num_rows();
        $data['code'] = getCode($row);
        $code = $data['code'];
        $tangkapIDitem = $this->input->post('id_itemdetails');     
        $tangkapID = $this->input->post('id_employee');
        $tangkapExpenditure = $this->input->post('expenditure');
        $tangkapRefrence = $this->input->post('refrence');
        $tangkapDate = $this->input->post('date');
        $tangkapAddress = $this->input->post('address');
        $tangkapIDbatch = $this->input->post('id_batch');
        $tangkapNotes = $this->input->post('notes');
        $tangkapDescription = $this->input->post('description');
             
        $data = array(
            'id_batchname' => $tangkapIDbatch,
            'id_employee' => $tangkapID,
            'code' =>  $code,
            'reference' => $tangkapRefrence,
            'address' =>  $tangkapAddress, 
            'date' => $tangkapDate,
            'note' => $tangkapNotes, 
            'description' => $tangkapDescription, 
            'status' => 1,
        );
             
        $this->m_Project->insert_table($data,'expenditure');
        
        $data10 = array(
            'id_batchname' => $tangkapIDbatch,
            'status' => 0,
        );
        
        $where = array(
            'id_batchname' => $tangkapIDbatch
        );

        $this->m_Project->update_data($where,$data10,'batch_name');
    
       
        $tangkapIDitem = $this->input->post('id_itemdetails');
        $data2 = array(
            'id_itemdetails'=>$tangkapIDitem,
            'history_status'=>2,
        );
        
        $this->m_Project->insert_table($data2,'history');
        
        $id['data'] = $this->m_Project->getIDexp($code)->result();
        echo "<script>alert('$code')</script>";
        
        foreach($id['data'] as $list){
            $a = $list->id_expenditure; // data id expenditure uda keambil
        }
        
        redirect('Project/salesorder');
    }
    
    function laporan($expenditure){
            
        $where =$expenditure;
        $data['expediture'] = $this->m_Project->gotoreport($where,'expenditure')->result();
        $data['dateout'] = $this->m_Project->incout()->result();
        $this->load->view("invoiceinwork.php",$data);
    } 
    function laporanmasuk($incoming){
        $where = $incoming;
        $data['incoming'] = $this->m_Project->gotoreportincoming($where,'itementry_form')->result();
        $this->load->view("incoicein.php",$data);
    }
    
    function incominginvoiceview(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['invoice'] = $this->m_Project->incinvoice()->result();
        $this->load->view('incominginvoiceview.php',$data); 
    }
    function outinvoiceview(){
        $data['notification'] = $this->m_Project->notification()->result();
        $data['admin_username'] = $this->session->admin_username;
        $data['admin'] = $this->m_Project->tampil_admin()->result();
        $data['salesorder'] = $this->m_Project->sales_name()->result();
        $data['sales'] = $this->m_Project->sales1()->result();
        $data['batchname'] = $this->m_Project->batch_name()->result();
        $data['address'] = $this->m_Project->address()->result();
        $this->load->view('salesorder.php',$data); 
    }
     function getHistoryByAjax(){
        $id_itemdetails = $this->input->post('id_itemdetails');
        $where = array('id_itemdetails' => $id_itemdetails);
        $data = $this->m_Project->getHistoryByAjax($where)->result();
        echo json_encode($data);
         //echo "<script>console.log('TEST');</script>";
    }
    
    
}
?>