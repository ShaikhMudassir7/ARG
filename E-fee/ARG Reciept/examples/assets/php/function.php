<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reciept_submit'])) {
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $date = $_POST['date']; 
        $branch = $_POST['branch'];
        $year = $_POST['year'];
        $sem = $_POST['sem'];
        $bal = $_POST['bal'];
        $paid = $_POST['paid'];
        $check = $_POST['check'];
        $rec = $_POST['rec'];

        include('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Rect(3,50,200,200);
// $pdf->SetFont('helvetica','',10);
// $pdf->Image('images.jpg',20,15,45,0,'JPG');
// $pdf->Cell(190,10,"M.H SABOO SIDDIK POLYTECHNIC",1,1,'C');
// $pdf->Cell(190,10,"Hello World",1,1,'C');
// $pdf->Cell(190,10,"Hello World",1,1,'C');
// $pdf->Cell(190,10,"Hello World",1,1,'C');
$pdf->Image('images.jpeg',5,2,20,20,'JPeG');
$pdf->SetFont('helvetica','',20);
//FEES RECEIPT HEADERS
$pdf->Cell(190,3,"M.H SABOO SIDDIK POLYTECHNIC",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');

$pdf->SetFont('helvetica','',10);
$pdf->Cell(190,3,"8,Saboo Siddik Polytechnic Road,Byculla",0,1,'C');

$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');

$pdf->SetFont('helvetica','',13);
$pdf->Cell(190,3,"Diploma Programme ",0,1,'C');

$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');

$pdf->SetFont('helvetica','',14);
$pdf->Cell(190,3,"(E.T/ I.T / MECH)",0,1,'C');
$pdf->Cell(190,2,"",0,1);
//DETAILS OF STUDENT TO BE FILLED
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');

//Roll No
$pdf->SetFont('helvetica','',10);
$pdf->Cell(60,3,"D Form/Rollno : ".$roll."                                                                                                   Date : ".$date." ",0,1,'L');

$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');

//Branch and Sem
$pdf->Cell(60,3,"Branch :   ".$branch."                                                                                                     Semester : ".$sem." ",0,1,'L');


$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');


$pdf->Cell(60,3,"Name :    ".$name."                                                           
            Year : ".$year." ",0,1,'L');


//Table of Contents 
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');
$pdf->Cell(190,3,"",0,1,'C');


$pdf->SetX(5);
$pdf->Cell(10,3,"Sr.No",1,0,'C');
$pdf->Cell(90,3,"Particulars",1,0,'C');
$pdf->Cell(30,3,"Amount Rs.",1,0,'C');
$pdf->Cell(30,3,"Balance",1,0,'L');

//Sr.No
for($i=0;$i<=5;$i++)
{$pdf->SetX(5);
$pdf->Cell(10,3,$i,1,1,'C');
}

//Particulars
$pdf->SetXY(15,96);
$pdf->Cell(90,3,"Admission Fees",1,1,'L');
$pdf->SetX(15);
$pdf->Cell(90,3,"Tuition Fee",1,1,'L');
$pdf->SetX(15);
$pdf->Cell(90,3,"Development Fee",1,1,'L');
$pdf->SetX(15);
$pdf->Cell(90,3,"Equip Opert. & Maint. charges",1,1,'L');
$pdf->SetX(15);
$pdf->Cell(90,3,"Annual Day",1,1,'L');

//Amount of
$pdf->SetXY(105,96);
$pdf->Cell(30,3,"63348",1,1,'L');
$pdf->SetX(105);
$pdf->Cell(30,3,"6652",1,1,'L');
$pdf->SetX(105);
$pdf->Cell(30,3,"650",1,1,'L');
$pdf->SetX(105);
$pdf->Cell(30,3,"400",1,1,'L');
$pdf->SetX(105);
$pdf->Cell(30,3,"700",1,1,'L');

//Balance the
$pdf->SetXY(135,96);
$pdf->MultiCell(30,50," Rs. ".$bal."",1,1,false);


//Total

$pdf->SetX(5);

$pdf->MultiCell(100,10,"Total Amount Paid:",1,1,false);

//Numeric
$pdf->SetX(105);

$pdf->Cell(30,10," Rs. ".$paid." ",1,1,false);



//check details

$pdf->SetX(5);
$pdf->MultiCell(100,20,"Deposit in Current A/C No:123456789 \n Check /D.D No : ".$check." ",1,1,false);

//Recipt Notes

$pdf->Cell(30,5,"",0,1,false);
$pdf->SetX(5);
$pdf->Cell(50,10,"Receipt No : ".$rec." ",0,1,false);

$pdf->Cell(30,10,"",0,1,false);

//Signature of Clerk and Student 

$pdf->SetX(5);
$pdf->MultiCell(70,20,"Signature of Clerk : ",0,1,false);




$pdf->Output();
    }
}
?>