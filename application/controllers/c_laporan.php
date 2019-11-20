<?php 
defined ('BASEPATH') OR exit ('No direct script access allowed');

class c_permit extends CI_Controller {
     
    function __construct(){
        parent::__construct();
       
        $this->load->library('pdf');
    }
    
    function test() { 
        $pdf = new FPDF('P', 'mm', 'A4'); //page
        $pdf->AddPage(); //membuat halaman baru
        
        //header
        $pdf->SetFillColor(200);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(3,4,'',0,1);
        $pdf->Cell(190,7,'0812-1991-4982',0,1,'R');
        $pdf->Cell(190,7,'company@INworkmanagement.com',0,1,'R');
        $pdf->Cell(190,7,'INworkManagement.com',0,1,'R');
        
        //ini invoice tengah
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(13,7,'',0,1);
        $pdf->SetFont('Arial', 'B', 20); //setting jenis font yang akan digunakan
        $pdf->Cell(190,7,'INVOICE',0,1,'C');
        $pdf->Cell(20,7,"",0,1);
        
        //ini informasi buat si cust
        $pdf->SetFont('Arial', 'B', 8); //setting jenis font yang akan digunakan
        $pdf->Cell(40,7,'Invoice Num',0,0);
        $pdf->Cell(40,7,"1",0,1,'L');
        
        $pdf->SetFont('Arial', 'B', 8); //setting jenis font yang akan digunakan
        $pdf->Cell(40,7,'Expediture Code',0,0);
        $pdf->Cell(40,7,"1",0,1,'L');
        
        $pdf->SetFont('Arial', 'B', 8); //setting jenis font yang akan digunakan
        $pdf->Cell(40,7,'Emploee Incharge',0,0,'L');
        $pdf->Cell(40,7,"deb",0,1,'L');
        
        $pdf->Cell(40,7,'Date Out',0,0);
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(40,7,"20/1",0,1,'L');
         
        $pdf->SetFont('Arial', 'B', 8); //setting jenis font yang akan digunakan
        $pdf->Cell(40,7,'Deliver to',0,0);
        $pdf->Cell(40,7,"isi alamat",0,1,'L');

        $pdf->Cell(40,10,"",0,1);

        
        //$pdf->SetFont('Arial', 'B', 8);
        //$pdf->Cell(40,7,'1',0,1,"L");
            

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor('R');
        $pdf->Cell(5,13,'',0,0);
        $pdf->Cell(40,13,'',0,0);//Gbr
        $pdf->Cell(3,13,'',0,0);
        $pdf->Cell(40,13,'Product',0,0,'C');
        $pdf->Cell(10,13,'',0,0);
        $pdf->Cell(30,13,'Batch Name',0,0,'C');
        $pdf->Cell(3,13,'',0,0);
        $pdf->Cell(30,13,'Item Type',0,0,'C');
        $pdf->Cell(3,13,'',0,0);
        $pdf->Cell(15,13,'Qty',0,1,'C');
        
        
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(5,30,'',0,0);
        
        $pdf->Cell(3,30,'',0,0);
        $pdf->Cell(40,30,'Waist Bag SUPER MURA BANGET HAHAHAH','C');
        $pdf->Cell(10,30,'',0,0);
        $pdf->Cell(30,30,'Test',0,0);
        $pdf->Cell(3,30,'',0,0);
        $pdf->Cell(30,30,'jacket',0,0);
        $pdf->Cell(3,30,'',0,0);
        $pdf->Cell(15,30,'10',0,1);
        
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(5,7,'',0,0);
        
        $pdf->Cell(3,7,'',0,0);
        $pdf->Cell(40,7,'Waist Bag SUPER MURA BANGET HAHAHAH','C');
        $pdf->Cell(10,7,'',0,0);
        $pdf->Cell(30,7,'Test',0,0);
        $pdf->Cell(3,7,'',0,0);
        $pdf->Cell(30,7,'jacket',0,0);
        $pdf->Cell(3,7,'',0,0);
        $pdf->Cell(15,7,'10',0,1);
        
        $pdf->Output();
    }
    
    function laporan(){
        $this->load->view("invoiceinwork.php");
    }

}