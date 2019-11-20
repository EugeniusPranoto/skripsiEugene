<?php

    
        $pdf = new FPDF('P', 'mm', 'Letter');
        $pdf->SetMargins(15, 10, 1);
     
        $pdf->AddPage(); 
        
        $pdf->SetTitle("DELIVERY NOTE ");
        $pdf->SetFillColor(200);
        
        
        
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(3,5,'',0,1);
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(190,8,'KEPALA DINAS',0,1,'L');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(190,8,'DINAS KESEHATAN PANGAN DAN PERTANIAN',0,1,'L');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(190,8,'Jln. Raja Haji NO. 03' ,0,1,'L');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(190,8,'Telp (0778) 323429 FAX (0778) 327794' ,0,1,'L');
        $pdf->SetFont('Times','',12);
        $pdf->Cell(190,8,'Sekupang - Batam' ,0,1,'L');

        $pdf->Cell(190,8,'' ,0,1,'L');
        
        $pdf->SetFont('Times','U',12);
        $pdf->Cell(190,8,'Hal : Permohonan Rekomendasi Pemasukan Sapi Bali' ,0,1,'L');
        
        $pdf->Cell(190,8,'' ,0,1,'L');
        
        $pdf->SetFont('Times','',12);
        $pdf->Cell(190,8,'Dengan Hormat,' ,0,1,'L');

        $pdf->Cell(190,8,'' ,0,1,'L');
        
        $pdf->SetFont('Times','',12);
        $pdf->Cell(190,8,'Bersama ini kami dari  POLARIS LIVESTOCK mengajukan surat permohonan,' ,0,1,'L');
        $pdf->Cell(190,6,'rekomendasi pemasukan ternak sapi dari Bali ke Batam sbb :' ,0,1,'L');
        
        $pdf->Cell(190,8,'' ,0,1,'L');

            $pdf->SetFont('Times','',12);
            $pdf->Cell(10,10,'No',1,0,'C');
            $pdf->Cell(30,10,'Jenis Hewan',1,0,'C');
            $pdf->Cell(50,5,'Jenis Kelamin',1,0,'C');
            $pdf->Cell(30,10,'Jumlah',1,0,'C');
            $pdf->Cell(30,10,'Asal',1,0,'C');
            $pdf->Cell(40,10,'Keterangan',1,0,'C');
            $pdf->Cell(0,5,'',0,1);
            $pdf->Cell(40,5,'',0,0);
            $pdf->Cell(25,5,'Laki-Laki',1,0,'C');
            $pdf->Cell(25,5,'Perempuan',1,1,'C');

            $pdf->SetFont('Times','',12);
            $pdf->Cell(10,20,'1',1,0,'C');
            $pdf->Cell(30,20,'Sapi Bali',1,0,'C');
            $pdf->Cell(25,20,'90',1,0,'C');
            $pdf->Cell(25,20,'',1,0,'C');
            $pdf->Cell(30,20,'90',1,0,'C');
            $pdf->Cell(30,20,'Bali',1,0,'C');
            $pdf->MultiCell(40,10,'Sapi Qurban 2019 / potong',1,'C');

            $pdf->SetFont('Times','',12);
            $pdf->Cell(10,5,'',1,0,'C');
            $pdf->Cell(30,5,'Total',1,0,'C');
            $pdf->Cell(50,5,'90',1,0,'C');
            $pdf->Cell(30,5,'90',1,0,'C');
            $pdf->Cell(30,5,'',1,0,'C');
            $pdf->Cell(40,5,'',1,0,'C');
            
        
        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->Cell(190,8,'Demikian surat permohonan ini kami buat, atas perhatian dan kerjasamanya kami' ,0,1,'L');
        $pdf->Cell(190,6,'ucapkan terima kasih.' ,0,1,'L');

        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->Cell(190,8,'Batam, 7 Mei 2019' ,0,1,'L');

        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->Cell(190,8,'' ,0,1,'L');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(190,8,'Andy Pranoto' ,0,1,'L');


        
        
        
        

  

          

       
        

         
        
		$pdf->SetY(-1);
        $pdf->SetFont('Arial','I',9);
        $pdf->AliasNbPages();
		
        $pdf->Footer();
        $pdf->Output();
    
    ?>