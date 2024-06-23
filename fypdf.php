<?php
		  $conn=mysqli_connect("localhost:3308","root","","computer");
		  if($conn->connect_error)
		  {
			  die("Not connected".$con->connect_error);
		  }
		  else{
			   
	   if(isset($_REQUEST['b1']))
			  {
				$result=mysqli_query($conn,"select * from firstyear;");
				$count=0;
				$count1=0;
				$count2=0;$count3=0;$count4=0;$count5=0;$count6=0;$count7=0;$count8=0;
				while($row=mysqli_fetch_assoc($result))
				{
				   $count=$count+$row['a1'];
				   $count1=$count1+$row['a2'];
				   $count2=$count2+$row['a3'];
				   $count3=$count3+$row['a4'];
				   $count4=$count4+$row['a5'];
				   $count5=$count5+$row['a6'];
				   $count6=$count6+$row['a7'];
				   $count7=$count7+$row['a8'];
				   $count8=$count8+$row['a9'];
				}
				$rows=mysqli_num_rows($result);
				$total=$count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8;
				$grand=$total/(45*$rows);
				$t=round($grand*25,2);
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->Image('padheader.jpeg',1,7,200,40);
					$pdf->Rect(5,5,200,287,'D');
                    $pdf->line(7,50,200,50);
					$pdf->Cell(200,40,"",0,1);
				    $pdf->SetFont('Arial','',10);
				
				
					$pdf->Cell(80,10,"GPM/Comp/Dept/",0,0,'L');
					$pdf->Cell(40,10,"Date: ",0,1,'R');
					$pdf->Cell(80,5,"To,",0,1,'L');
					$pdf->Cell(80,5,"Dr.V.R.Falmari",0,1,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,5,"Government Polytechnic, Miraj",0,1,'L');
					$pdf->SetFont('Arial','B',10);
					$pdf->Cell(80,10,"Sub:Response Of Students Feedback for the Academic Year 2022-23(Even Sem)",0,1,'L');
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(80,10,"Sir/Madam,",0,1,'L');
					
					$pdf->MultiCell(190,5,"the purpose of this letter is to provide the information about the students feedback obtained online for the Academic year 2022-23 (Even sem )pertaining to the subject taught by you.The details are as follows,",0,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,6,"Name of faculty: Dr.V.R.Falmari",0,1,'L');
					$pdf->Cell(80,5,"Course/Subject:Programming with C",0,0,'L');
					$pdf->Cell(80,5,"Department:Computer",0,1,'L');
					$pdf->Cell(80,6,"Academic Year:2022-23(Even-sem)",0,1,'L');
					$pdf->Cell(80,5,"Total Student responses: $rows",0,1,'L');
					
					$pdf->Cell(10,10,"Sr.no",1,0);
					$pdf->Cell(160,10,"Description",1,0);
					$pdf->Cell(20,10,"Grade",1,1);
					$pdf->Cell(10,10,"1.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered entire syallabus as prescribed by the board?",1,0);
					$pdf->Cell(20,10,"$count",1,1);
					
					$pdf->Cell(10,10,"2.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered relevant topics beyond syllabus",1,0);
					$pdf->Cell(20,10," $count1",1,1);
					
					$pdf->Cell(10,10,"3.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Effectiveness of teacher in terms of (a)Technical content/course Content (b)Communication skills (c)Use of teaching aids",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count2 ",1,1);
					
					$pdf->Cell(10,10,"4.",1,0);
					$pdf->Cell(160,10,"Pace on which contents were covered",1,0);
					$pdf->Cell(20,10,"$count3 ",1,1);
					
					$pdf->Cell(10,10,"5.",1,0);
					$pdf->Cell(160,10,"Motivation and Inspiraction for students to learn",1,0);
					$pdf->Cell(20,10,"$count4 ",1,1);
					
					$pdf->Cell(10,10,"6.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Support for development of students skill (1)practical demonstration (2)Hands on Training",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count5 ",1,1);
					
					$pdf->Cell(10,10,"7.",1,0);
					$pdf->Cell(160,10,"Clarity of exceptions of students",1,0);
					$pdf->Cell(20,10,"$count6",1,1);
					
					$pdf->Cell(10,10,"8.",1,0);
					$pdf->Cell(160,10,"Feedback provided on Students progress",1,0);
					$pdf->Cell(20,10,"$count7",1,1);
					
					$pdf->Cell(10,10,"9.",1,0);
					$pdf->Cell(160,10,"Willingness to offer help and advice to students",1,0);
					$pdf->Cell(20,10,"$count8",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Total",0,0,'R');
					$pdf->Cell(20,5,"$total",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Converted Out of 25",0,0,'R');
					$pdf->Cell(20,5,$t,1,1);
					
					$pdf->Cell(160,5,"Excellent=5,Very Good=4, Good=3, Poor=2, very Poor=1",0,1);
					$pdf->Cell(10,5,"Wishing you all the best",0,1);
					$pdf->Cell(10,5,"Thanking you",0,1);
					$pdf->Cell(10,3,"",0,1);
					
					$pdf->Cell(40,5,"Dr.V.R.Falmari",0,0,'L');
					$pdf->Cell(150,5,"capt. DR. N.P.Sonaje",0,1,'R');
					$pdf->Cell(40,5,"HOD Computer Dept.",0,0,'L');
					$pdf->Cell(140,5,"Principal",0,1,'R');
					$pdf->Output();
		  }
		  
		  if(isset($_REQUEST['b2']))
			  {
				$result=mysqli_query($conn,"select * from firstyear;");
				$count=0;
				$count1=0;
				$count2=0;$count3=0;$count4=0;$count5=0;$count6=0;$count7=0;$count8=0;
				while($row=mysqli_fetch_assoc($result))
				{
				   $count=$count+$row['b1'];
				   $count1=$count1+$row['b2'];
				   $count2=$count2+$row['b3'];
				   $count3=$count3+$row['b4'];
				   $count4=$count4+$row['b5'];
				   $count5=$count5+$row['b6'];
				   $count6=$count6+$row['b7'];
				   $count7=$count7+$row['b8'];
				   $count8=$count8+$row['b9'];
				}
				$rows=mysqli_num_rows($result);
				$total=$count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8;
				$grand=$total/(45*$rows);
				$t=round($grand*25,2);
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->Image('padheader.jpeg',1,7,200,40);
					$pdf->Rect(5,5,200,287,'D');
                    $pdf->line(7,50,200,50);
					$pdf->Cell(200,40,"",0,1);
				    $pdf->SetFont('Arial','',10);
				
				
					$pdf->Cell(80,10,"GPM/Comp/Dept/",0,0,'L');
					$pdf->Cell(40,10,"Date: ",0,1,'R');
					$pdf->Cell(80,5,"To,",0,1,'L');
					$pdf->Cell(80,5,"Mrs.S.R.Ohol",0,1,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,5,"Government Polytechnic, Miraj",0,1,'L');
					$pdf->SetFont('Arial','B',10);
					$pdf->Cell(80,10,"Sub:Response Of Students Feedback for the Academic Year 2022-23(Even Sem)",0,1,'L');
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(80,10,"Sir/Madam,",0,1,'L');
					
					$pdf->MultiCell(190,5,"the purpose of this letter is to provide the information about the students feedback obtained online for the Academic year 2022-23 (Even sem )pertaining to the subject taught by you.The details are as follows,",0,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,6,"Name of faculty: Mr.S.R.Ohol",0,1,'L');
					$pdf->Cell(130,5,"Course/Subject:Mathematics II",0,0,'L');
					$pdf->Cell(80,5,"Department:Computer",0,1,'L');
					$pdf->Cell(80,6,"Academic Year:2022-23(Even-sem)",0,1,'L');
					$pdf->Cell(80,5,"Total Student responses: $rows",0,1,'L');
					
					$pdf->Cell(10,10,"Sr.no",1,0);
					$pdf->Cell(160,10,"Description",1,0);
					$pdf->Cell(20,10,"Grade",1,1);
					$pdf->Cell(10,10,"1.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered entire syallabus as prescribed by the board?",1,0);
					$pdf->Cell(20,10,"$count",1,1);
					
					$pdf->Cell(10,10,"2.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered relevant topics beyond syllabus",1,0);
					$pdf->Cell(20,10," $count1",1,1);
					
					$pdf->Cell(10,10,"3.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Effectiveness of teacher in terms of (a)Technical content/course Content (b)Communication skills (c)Use of teaching aids",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count2 ",1,1);
					
					$pdf->Cell(10,10,"4.",1,0);
					$pdf->Cell(160,10,"Pace on which contents were covered",1,0);
					$pdf->Cell(20,10,"$count3 ",1,1);
					
					$pdf->Cell(10,10,"5.",1,0);
					$pdf->Cell(160,10,"Motivation and Inspiraction for students to learn",1,0);
					$pdf->Cell(20,10,"$count4 ",1,1);
					
					$pdf->Cell(10,10,"6.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Support for development of students skill (1)practical demonstration (2)Hands on Training",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count5 ",1,1);
					
					$pdf->Cell(10,10,"7.",1,0);
					$pdf->Cell(160,10,"Clarity of exceptions of students",1,0);
					$pdf->Cell(20,10,"$count6",1,1);
					
					$pdf->Cell(10,10,"8.",1,0);
					$pdf->Cell(160,10,"Feedback provided on Students progress",1,0);
					$pdf->Cell(20,10,"$count7",1,1);
					
					$pdf->Cell(10,10,"9.",1,0);
					$pdf->Cell(160,10,"Willingness to offer help and advice to students",1,0);
					$pdf->Cell(20,10,"$count8",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Total",0,0,'R');
					$pdf->Cell(20,5,"$total",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Converted Out of 25",0,0,'R');
					$pdf->Cell(20,5,$t,1,1);
					
					$pdf->Cell(160,5,"Excellent=5,Very Good=4, Good=3, Poor=2, very Poor=1",0,1);
					$pdf->Cell(10,5,"Wishing you all the best",0,1);
					$pdf->Cell(10,5,"Thanking you",0,1);
					$pdf->Cell(10,3,"",0,1);
					
					$pdf->Cell(40,5,"Dr.V.R.Falmari",0,0,'L');
					$pdf->Cell(150,5,"capt. DR. N.P.Sonaje",0,1,'R');
					$pdf->Cell(40,5,"HOD Computer Dept.",0,0,'L');
					$pdf->Cell(140,5,"Principal",0,1,'R');
					$pdf->Output();
		  }
		  if(isset($_REQUEST['b3']))
			  {
				$result=mysqli_query($conn,"select * from firstyear;");
				$count=0;
				$count1=0;
				$count2=0;$count3=0;$count4=0;$count5=0;$count6=0;$count7=0;$count8=0;
				while($row=mysqli_fetch_assoc($result))
				{
				   $count=$count+$row['c1'];
				   $count1=$count1+$row['c2'];
				   $count2=$count2+$row['c3'];
				   $count3=$count3+$row['c4'];
				   $count4=$count4+$row['c5'];
				   $count5=$count5+$row['c6'];
				   $count6=$count6+$row['c7'];
				   $count7=$count7+$row['c8'];
				   $count8=$count8+$row['c9'];
				}
				$rows=mysqli_num_rows($result);
				$total=$count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8;
				$grand=$total/(45*$rows);
				$t=round($grand*25,2);
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->Image('padheader.jpeg',1,7,200,40);
					$pdf->Rect(5,5,200,287,'D');
                    $pdf->line(7,50,200,50);
					$pdf->Cell(200,40,"",0,1);
				    $pdf->SetFont('Arial','',10);
				
				
					$pdf->Cell(80,10,"GPM/Comp/Dept/",0,0,'L');
					$pdf->Cell(40,10,"Date: ",0,1,'R');
					$pdf->Cell(80,5,"To,",0,1,'L');
					$pdf->Cell(80,5,"Mrs.S.S.Patil",0,1,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,5,"Government Polytechnic, Miraj",0,1,'L');
					$pdf->SetFont('Arial','B',10);
					$pdf->Cell(80,10,"Sub:Response Of Students Feedback for the Academic Year 2022-23(Even Sem)",0,1,'L');
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(80,10,"Sir/Madam,",0,1,'L');
					
					$pdf->MultiCell(190,5,"the purpose of this letter is to provide the information about the students feedback obtained online for the Academic year 2022-23 (Even sem )pertaining to the subject taught by you.The details are as follows,",0,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,6,"Name of faculty: Mrs.S.S.Patil",0,1,'L');
					$pdf->Cell(80,5,"Course/Subject:Basic Electronics",0,0,'L');
					$pdf->Cell(80,5,"Department:Computer",0,1,'L');
					$pdf->Cell(80,6,"Academic Year:2022-23(Even-sem)",0,1,'L');
					$pdf->Cell(80,5,"Total Student responses: $rows",0,1,'L');
					
					$pdf->Cell(10,10,"Sr.no",1,0);
					$pdf->Cell(160,10,"Description",1,0);
					$pdf->Cell(20,10,"Grade",1,1);
					$pdf->Cell(10,10,"1.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered entire syallabus as prescribed by the board?",1,0);
					$pdf->Cell(20,10,"$count",1,1);
					
					$pdf->Cell(10,10,"2.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered relevant topics beyond syllabus",1,0);
					$pdf->Cell(20,10," $count1",1,1);
					
					$pdf->Cell(10,10,"3.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Effectiveness of teacher in terms of (a)Technical content/course Content (b)Communication skills (c)Use of teaching aids",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count2 ",1,1);
					
					$pdf->Cell(10,10,"4.",1,0);
					$pdf->Cell(160,10,"Pace on which contents were covered",1,0);
					$pdf->Cell(20,10,"$count3 ",1,1);
					
					$pdf->Cell(10,10,"5.",1,0);
					$pdf->Cell(160,10,"Motivation and Inspiraction for students to learn",1,0);
					$pdf->Cell(20,10,"$count4 ",1,1);
					
					$pdf->Cell(10,10,"6.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Support for development of students skill (1)practical demonstration (2)Hands on Training",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count5 ",1,1);
					
					$pdf->Cell(10,10,"7.",1,0);
					$pdf->Cell(160,10,"Clarity of exceptions of students",1,0);
					$pdf->Cell(20,10,"$count6",1,1);
					
					$pdf->Cell(10,10,"8.",1,0);
					$pdf->Cell(160,10,"Feedback provided on Students progress",1,0);
					$pdf->Cell(20,10,"$count7",1,1);
					
					$pdf->Cell(10,10,"9.",1,0);
					$pdf->Cell(160,10,"Willingness to offer help and advice to students",1,0);
					$pdf->Cell(20,10,"$count8",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Total",0,0,'R');
					$pdf->Cell(20,5,"$total",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Converted Out of 25",0,0,'R');
					$pdf->Cell(20,5,$t,1,1);
					
					$pdf->Cell(160,5,"Excellent=5,Very Good=4, Good=3, Poor=2, very Poor=1",0,1);
					$pdf->Cell(10,5,"Wishing you all the best",0,1);
					$pdf->Cell(10,5,"Thanking you",0,1);
					$pdf->Cell(10,3,"",0,1);
					
					$pdf->Cell(40,5,"Dr.V.R.Falmari",0,0,'L');
					$pdf->Cell(150,5,"capt. DR. N.P.Sonaje",0,1,'R');
					$pdf->Cell(40,5,"HOD Computer Dept.",0,0,'L');
					$pdf->Cell(140,5,"Principal",0,1,'R');
					$pdf->Output();
		  }
		 
		  if(isset($_REQUEST['b4']))
			  {
				$result=mysqli_query($conn,"select * from firstyear;");
				$count=0;
				$count1=0;
				$count2=0;$count3=0;$count4=0;$count5=0;$count6=0;$count7=0;$count8=0;
				while($row=mysqli_fetch_assoc($result))
				{
				   $count=$count+$row['d1'];
				   $count1=$count1+$row['d2'];
				   $count2=$count2+$row['d3'];
				   $count3=$count3+$row['d4'];
				   $count4=$count4+$row['d5'];
				   $count5=$count5+$row['d6'];
				   $count6=$count6+$row['d7'];
				   $count7=$count7+$row['d8'];
				   $count8=$count8+$row['d9'];
				}
				$rows=mysqli_num_rows($result);
				$total=$count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8;
				$grand=$total/(45*$rows);
				$t=round($grand*25,2);
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->Image('padheader.jpeg',1,7,200,40);
					$pdf->Rect(5,5,200,287,'D');
                    $pdf->line(7,50,200,50);
					$pdf->Cell(200,40,"",0,1);
				    $pdf->SetFont('Arial','',10);
				
				
					$pdf->Cell(80,10,"GPM/Comp/Dept/",0,0,'L');
					$pdf->Cell(40,10,"Date: ",0,1,'R');
					$pdf->Cell(80,5,"To,",0,1,'L');
					$pdf->Cell(80,5,"Mr.M.A.Tahashildar",0,1,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,5,"Government Polytechnic, Miraj",0,1,'L');
					$pdf->SetFont('Arial','B',10);
					$pdf->Cell(80,10,"Sub:Response Of Students Feedback for the Academic Year 2022-23(Even Sem)",0,1,'L');
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(80,10,"Sir/Madam,",0,1,'L');
					
					$pdf->MultiCell(190,5,"the purpose of this letter is to provide the information about the students feedback obtained online for the Academic year 2022-23 (Even sem )pertaining to the subject taught by you.The details are as follows,",0,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,6,"Name of faculty: Mr.M.A.Tahashildar",0,1,'L');
					$pdf->Cell(130,5,"Course/Subject:Elements of Electrical Engineering",0,0,'L');
					$pdf->Cell(80,5,"Department:Computer",0,1,'L');
					$pdf->Cell(80,6,"Academic Year:2022-23(Even-sem)",0,1,'L');
					$pdf->Cell(80,5,"Total Student responses:$rows ",0,1,'L');
					
					$pdf->Cell(10,10,"Sr.no",1,0);
					$pdf->Cell(160,10,"Description",1,0);
					$pdf->Cell(20,10,"Grade",1,1);
					$pdf->Cell(10,10,"1.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered entire syallabus as prescribed by the board?",1,0);
					$pdf->Cell(20,10,"$count",1,1);
					
					$pdf->Cell(10,10,"2.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered relevant topics beyond syllabus",1,0);
					$pdf->Cell(20,10," $count1",1,1);
					
					$pdf->Cell(10,10,"3.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Effectiveness of teacher in terms of (a)Technical content/course Content (b)Communication skills (c)Use of teaching aids",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count2 ",1,1);
					
					$pdf->Cell(10,10,"4.",1,0);
					$pdf->Cell(160,10,"Pace on which contents were covered",1,0);
					$pdf->Cell(20,10,"$count3 ",1,1);
					
					$pdf->Cell(10,10,"5.",1,0);
					$pdf->Cell(160,10,"Motivation and Inspiraction for students to learn",1,0);
					$pdf->Cell(20,10,"$count4 ",1,1);
					
					$pdf->Cell(10,10,"6.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Support for development of students skill (1)practical demonstration (2)Hands on Training",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count5 ",1,1);
					
					$pdf->Cell(10,10,"7.",1,0);
					$pdf->Cell(160,10,"Clarity of exceptions of students",1,0);
					$pdf->Cell(20,10,"$count6",1,1);
					
					$pdf->Cell(10,10,"8.",1,0);
					$pdf->Cell(160,10,"Feedback provided on Students progress",1,0);
					$pdf->Cell(20,10,"$count7",1,1);
					
					$pdf->Cell(10,10,"9.",1,0);
					$pdf->Cell(160,10,"Willingness to offer help and advice to students",1,0);
					$pdf->Cell(20,10,"$count8",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Total",0,0,'R');
					$pdf->Cell(20,5,"$total",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Converted Out of 25",0,0,'R');
					$pdf->Cell(20,5,$t,1,1);
					
					$pdf->Cell(160,5,"Excellent=5,Very Good=4, Good=3, Poor=2, very Poor=1",0,1);
					$pdf->Cell(10,5,"Wishing you all the best",0,1);
					$pdf->Cell(10,5,"Thanking you",0,1);
					$pdf->Cell(10,3,"",0,1);
					
					$pdf->Cell(40,5,"Dr.V.R.Falmari",0,0,'L');
					$pdf->Cell(150,5,"capt. DR. N.P.Sonaje",0,1,'R');
					$pdf->Cell(40,5,"HOD Computer Dept.",0,0,'L');
					$pdf->Cell(140,5,"Principal",0,1,'R');
					$pdf->Output();
		  }
		   if(isset($_REQUEST['b5']))
			  {
				$result=mysqli_query($conn,"select * from firstyear;");
				$count=0;
				$count1=0;
				$count2=0;$count3=0;$count4=0;$count5=0;$count6=0;$count7=0;$count8=0;
				while($row=mysqli_fetch_assoc($result))
				{
				   $count=$count+$row['e1'];
				   $count1=$count1+$row['e2'];
				   $count2=$count2+$row['e3'];
				   $count3=$count3+$row['e4'];
				   $count4=$count4+$row['e5'];
				   $count5=$count5+$row['e6'];
				   $count6=$count6+$row['e7'];
				   $count7=$count7+$row['e8'];
				   $count8=$count8+$row['e9'];
				}
				$rows=mysqli_num_rows($result);
				$total=$count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8;
				$grand=$total/(45*$rows);
				$t=round($grand*25,2);
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->Image('padheader.jpeg',1,7,200,40);
					$pdf->Rect(5,5,200,287,'D');
                    $pdf->line(7,50,200,50);
					$pdf->Cell(200,40,"",0,1);
				    $pdf->SetFont('Arial','',10);
				
				
					$pdf->Cell(80,10,"GPM/Comp/Dept/",0,0,'L');
					$pdf->Cell(40,10,"Date: ",0,1,'R');
					$pdf->Cell(80,5,"To,",0,1,'L');
					$pdf->Cell(80,5,"Mr.R.R.Chougule",0,1,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,5,"Government Polytechnic, Miraj",0,1,'L');
					$pdf->SetFont('Arial','B',10);
					$pdf->Cell(80,10,"Sub:Response Of Students Feedback for the Academic Year 2022-23(Even Sem)",0,1,'L');
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(80,10,"Sir/Madam,",0,1,'L');
					
					$pdf->MultiCell(190,5,"the purpose of this letter is to provide the information about the students feedback obtained online for the Academic year 2022-23 (Even sem )pertaining to the subject taught by you.The details are as follows,",0,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,6,"Name of faculty: Mr.R.R.Chougule",0,1,'L');
					$pdf->Cell(130,5,"Course/Subject:Programming with C (Practical)",0,0,'L');
					$pdf->Cell(80,5,"Department:Computer",0,1,'L');
					$pdf->Cell(80,6,"Academic Year:2022-23(Even-sem)",0,1,'L');
					$pdf->Cell(80,5,"Total Student responses:$rows ",0,1,'L');
					
					$pdf->Cell(10,10,"Sr.no",1,0);
					$pdf->Cell(160,10,"Description",1,0);
					$pdf->Cell(20,10,"Grade",1,1); 
					$pdf->Cell(10,10,"1.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered entire syallabus as prescribed by the board?",1,0);
					$pdf->Cell(20,10,"$count",1,1);
					
					$pdf->Cell(10,10,"2.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered relevant topics beyond syllabus",1,0);
					$pdf->Cell(20,10," $count1",1,1);
					
					$pdf->Cell(10,10,"3.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Effectiveness of teacher in terms of (a)Technical content/course Content (b)Communication skills (c)Use of teaching aids",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count2 ",1,1);
					
					$pdf->Cell(10,10,"4.",1,0);
					$pdf->Cell(160,10,"Pace on which contents were covered",1,0);
					$pdf->Cell(20,10,"$count3 ",1,1);
					
					$pdf->Cell(10,10,"5.",1,0);
					$pdf->Cell(160,10,"Motivation and Inspiraction for students to learn",1,0);
					$pdf->Cell(20,10,"$count4 ",1,1);
					
					$pdf->Cell(10,10,"6.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Support for development of students skill (1)practical demonstration (2)Hands on Training",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count5 ",1,1);
					
					$pdf->Cell(10,10,"7.",1,0);
					$pdf->Cell(160,10,"Clarity of exceptions of students",1,0);
					$pdf->Cell(20,10,"$count6",1,1);
					
					$pdf->Cell(10,10,"8.",1,0);
					$pdf->Cell(160,10,"Feedback provided on Students progress",1,0);
					$pdf->Cell(20,10,"$count7",1,1);
					
					$pdf->Cell(10,10,"9.",1,0);
					$pdf->Cell(160,10,"Willingness to offer help and advice to students",1,0);
					$pdf->Cell(20,10,"$count8",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Total",0,0,'R');
					$pdf->Cell(20,5,"$total",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Converted Out of 25",0,0,'R');
					$pdf->Cell(20,5,$t,1,1);
					
					$pdf->Cell(160,5,"Excellent=5,Very Good=4, Good=3, Poor=2, very Poor=1",0,1);
					$pdf->Cell(10,5,"Wishing you all the best",0,1);
					$pdf->Cell(10,5,"Thanking you",0,1);
					$pdf->Cell(10,3,"",0,1);
					
					$pdf->Cell(40,5,"Dr.V.R.Falmari",0,0,'L');
					$pdf->Cell(150,5,"capt. DR. N.P.Sonaje",0,1,'R');
					$pdf->Cell(40,5,"HOD Computer Dept.",0,0,'L');
					$pdf->Cell(140,5,"Principal",0,1,'R');
					$pdf->Output();
		  }
		   if(isset($_REQUEST['b6']))
			  {
				$result=mysqli_query($conn,"select * from firstyear;");
				$count=0;
				$count1=0;
				$count2=0;$count3=0;$count4=0;$count5=0;$count6=0;$count7=0;$count8=0;
				while($row=mysqli_fetch_assoc($result))
				{
				   $count=$count+$row['f1'];
				   $count1=$count1+$row['f2'];
				   $count2=$count2+$row['f3'];
				   $count3=$count3+$row['f4'];
				   $count4=$count4+$row['f5'];
				   $count5=$count5+$row['f6'];
				   $count6=$count6+$row['f7'];
				   $count7=$count7+$row['f8'];
				   $count8=$count8+$row['f9'];
				}
				$rows=mysqli_num_rows($result);
				$total=$count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8;
				$grand=$total/(45*$rows);
				$t=round($grand*25,2);
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->Image('padheader.jpeg',1,7,200,40);
					$pdf->Rect(5,5,200,287,'D');
                    $pdf->line(7,50,200,50);
					$pdf->Cell(200,40,"",0,1);
				    $pdf->SetFont('Arial','',10);
				
				
					$pdf->Cell(80,10,"GPM/Comp/Dept/",0,0,'L');
					$pdf->Cell(40,10,"Date: ",0,1,'R');
					$pdf->Cell(80,5,"To,",0,1,'L');
					$pdf->Cell(80,5,"Mrs.S.S.Suryawanshi",0,1,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,5,"Government Polytechnic, Miraj",0,1,'L');
					$pdf->SetFont('Arial','B',10);
					$pdf->Cell(80,10,"Sub:Response Of Students Feedback for the Academic Year 2022-23(Even Sem)",0,1,'L');
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(80,10,"Sir/Madam,",0,1,'L');
					
					$pdf->MultiCell(190,5,"the purpose of this letter is to provide the information about the students feedback obtained online for the Academic year 2022-23 (Even sem )pertaining to the subject taught by you.The details are as follows,",0,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,6,"Name of faculty: Mrs.S.S.Suryawanshi",0,1,'L');
					$pdf->Cell(130,5,"Course/Subject:Web page Designing with HTML",0,0,'L');
					$pdf->Cell(80,5,"Department:Computer",0,1,'L');
					$pdf->Cell(80,6,"Academic Year:2022-23(Even-sem)",0,1,'L');
					$pdf->Cell(80,5,"Total Student responses:$rows ",0,1,'L');
					
					$pdf->Cell(10,10,"Sr.no",1,0);
					$pdf->Cell(160,10,"Description",1,0);
					$pdf->Cell(20,10,"Grade",1,1);
					$pdf->Cell(10,10,"1.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered entire syallabus as prescribed by the board?",1,0);
					$pdf->Cell(20,10,"$count",1,1);
					
					$pdf->Cell(10,10,"2.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered relevant topics beyond syllabus",1,0);
					$pdf->Cell(20,10," $count1",1,1);
					
					$pdf->Cell(10,10,"3.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Effectiveness of teacher in terms of (a)Technical content/course Content (b)Communication skills (c)Use of teaching aids",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count2 ",1,1);
					
					$pdf->Cell(10,10,"4.",1,0);
					$pdf->Cell(160,10,"Pace on which contents were covered",1,0);
					$pdf->Cell(20,10,"$count3 ",1,1);
					
					$pdf->Cell(10,10,"5.",1,0);
					$pdf->Cell(160,10,"Motivation and Inspiraction for students to learn",1,0);
					$pdf->Cell(20,10,"$count4 ",1,1);
					
					$pdf->Cell(10,10,"6.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Support for development of students skill (1)practical demonstration (2)Hands on Training",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count5 ",1,1);
					
					$pdf->Cell(10,10,"7.",1,0);
					$pdf->Cell(160,10,"Clarity of exceptions of students",1,0);
					$pdf->Cell(20,10,"$count6",1,1);
					
					$pdf->Cell(10,10,"8.",1,0);
					$pdf->Cell(160,10,"Feedback provided on Students progress",1,0);
					$pdf->Cell(20,10,"$count7",1,1);
					
					$pdf->Cell(10,10,"9.",1,0);
					$pdf->Cell(160,10,"Willingness to offer help and advice to students",1,0);
					$pdf->Cell(20,10,"$count8",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Total",0,0,'R');
					$pdf->Cell(20,5,"$total",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Converted Out of 25",0,0,'R');
					$pdf->Cell(20,5,$t,1,1);
					
					$pdf->Cell(160,5,"Excellent=5,Very Good=4, Good=3, Poor=2, very Poor=1",0,1);
					$pdf->Cell(10,5,"Wishing you all the best",0,1);
					$pdf->Cell(10,5,"Thanking you",0,1);
					$pdf->Cell(10,3,"",0,1);
					
					$pdf->Cell(40,5,"Dr.V.R.Falmari",0,0,'L');
					$pdf->Cell(150,5,"capt. DR. N.P.Sonaje",0,1,'R');
					$pdf->Cell(40,5,"HOD Computer Dept.",0,0,'L');
					$pdf->Cell(140,5,"Principal",0,1,'R');
					$pdf->Output();
		  }
		   if(isset($_REQUEST['b7']))
			  {
				$result=mysqli_query($conn,"select * from firstyear;");
				$count=0;
				$count1=0;
				$count2=0;$count3=0;$count4=0;$count5=0;$count6=0;$count7=0;$count8=0;
				while($row=mysqli_fetch_assoc($result))
				{
				   $count=$count+$row['g1'];
				   $count1=$count1+$row['g2'];
				   $count2=$count2+$row['g3'];
				   $count3=$count3+$row['g4'];
				   $count4=$count4+$row['g5'];
				   $count5=$count5+$row['g6'];
				   $count6=$count6+$row['g7'];
				   $count7=$count7+$row['g8'];
				   $count8=$count8+$row['g9'];
				}
				$rows=mysqli_num_rows($result);
				$total=$count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8;
				$grand=$total/(45*$rows);
				$t=round($grand*25,2);
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->Image('padheader.jpeg',1,7,200,40);
					$pdf->Rect(5,5,200,287,'D');
                    $pdf->line(7,50,200,50);
					$pdf->Cell(200,40,"",0,1);
				    $pdf->SetFont('Arial','',10);
				
				
					$pdf->Cell(80,10,"GPM/Comp/Dept/",0,0,'L');
					$pdf->Cell(40,10,"Date: ",0,1,'R');
					$pdf->Cell(80,5,"To,",0,1,'L');
					$pdf->Cell(80,5,"Mrs.S.S.Patil",0,1,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,5,"Government Polytechnic, Miraj",0,1,'L');
					$pdf->SetFont('Arial','B',10);
					$pdf->Cell(80,10,"Sub:Response Of Students Feedback for the Academic Year 2022-23(Even Sem)",0,1,'L');
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(80,10,"Sir/Madam,",0,1,'L');
					
					$pdf->MultiCell(190,5,"the purpose of this letter is to provide the information about the students feedback obtained online for the Academic year 2022-23 (Even sem )pertaining to the subject taught by you.The details are as follows,",0,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,6,"Name of faculty: Mrs.S.S.Patil",0,1,'L');
					$pdf->Cell(150,5,"Course/Subject:Computer Peripheral and Hardware Maintenance",0,0,'L');
					$pdf->Cell(80,5,"Department:Computer",0,1,'L');
					$pdf->Cell(80,6,"Academic Year:2022-23(Even-sem)",0,1,'L');
					$pdf->Cell(80,5,"Total Student responses:$rows ",0,1,'L');
					
					$pdf->Cell(10,10,"Sr.no",1,0);
					$pdf->Cell(160,10,"Description",1,0);
					$pdf->Cell(20,10,"Grade",1,1);
					$pdf->Cell(10,10,"1.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered entire syallabus as prescribed by the board?",1,0);
					$pdf->Cell(20,10,"$count",1,1);
					
					$pdf->Cell(10,10,"2.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered relevant topics beyond syllabus",1,0);
					$pdf->Cell(20,10," $count1",1,1);
					
					$pdf->Cell(10,10,"3.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Effectiveness of teacher in terms of (a)Technical content/course Content (b)Communication skills (c)Use of teaching aids",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count2 ",1,1);
					
					$pdf->Cell(10,10,"4.",1,0);
					$pdf->Cell(160,10,"Pace on which contents were covered",1,0);
					$pdf->Cell(20,10,"$count3 ",1,1);
					
					$pdf->Cell(10,10,"5.",1,0);
					$pdf->Cell(160,10,"Motivation and Inspiraction for students to learn",1,0);
					$pdf->Cell(20,10,"$count4 ",1,1);
					
					$pdf->Cell(10,10,"6.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Support for development of students skill (1)practical demonstration (2)Hands on Training",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count5 ",1,1);
					
					$pdf->Cell(10,10,"7.",1,0);
					$pdf->Cell(160,10,"Clarity of exceptions of students",1,0);
					$pdf->Cell(20,10,"$count6",1,1);
					
					$pdf->Cell(10,10,"8.",1,0);
					$pdf->Cell(160,10,"Feedback provided on Students progress",1,0);
					$pdf->Cell(20,10,"$count7",1,1);
					
					$pdf->Cell(10,10,"9.",1,0);
					$pdf->Cell(160,10,"Willingness to offer help and advice to students",1,0);
					$pdf->Cell(20,10,"$count8",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Total",0,0,'R');
					$pdf->Cell(20,5,"$total",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Converted Out of 25",0,0,'R');
					$pdf->Cell(20,5,$t,1,1);
					
					$pdf->Cell(160,5,"Excellent=5,Very Good=4, Good=3, Poor=2, very Poor=1",0,1);
					$pdf->Cell(10,5,"Wishing you all the best",0,1);
					$pdf->Cell(10,5,"Thanking you",0,1);
					$pdf->Cell(10,3,"",0,1);
					
					$pdf->Cell(40,5,"Dr.V.R.Falmari",0,0,'L');
					$pdf->Cell(150,5,"capt. DR. N.P.Sonaje",0,1,'R');
					$pdf->Cell(40,5,"HOD Computer Dept.",0,0,'L');
					$pdf->Cell(140,5,"Principal",0,1,'R');
					$pdf->Output();
		  }
		   if(isset($_REQUEST['b8']))
			  {
				$result=mysqli_query($conn,"select * from firstyear;");
				$count=0;
				$count1=0;
				$count2=0;$count3=0;$count4=0;$count5=0;$count6=0;$count7=0;$count8=0;
				while($row=mysqli_fetch_assoc($result))
				{
				   $count=$count+$row['h1'];
				   $count1=$count1+$row['h2'];
				   $count2=$count2+$row['h3'];
				   $count3=$count3+$row['h4'];
				   $count4=$count4+$row['h5'];
				   $count5=$count5+$row['h6'];
				   $count6=$count6+$row['h7'];
				   $count7=$count7+$row['h8'];
				   $count8=$count8+$row['h9'];
				}
				$rows=mysqli_num_rows($result);
				$total=$count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8;
				$grand=$total/(45*$rows);
				$t=round($grand*25,2);
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->Image('padheader.jpeg',1,7,200,40);
					$pdf->Rect(5,5,200,287,'D');
                    $pdf->line(7,50,200,50);
					$pdf->Cell(200,40,"",0,1);
				    $pdf->SetFont('Arial','',10);
				
				
					$pdf->Cell(80,10,"GPM/Comp/Dept/",0,0,'L');
					$pdf->Cell(40,10,"Date: ",0,1,'R');
					$pdf->Cell(80,5,"To,",0,1,'L');
					$pdf->Cell(80,5,"Mr.V.S.Magar",0,1,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,5,"Government Polytechnic, Miraj",0,1,'L');
					$pdf->SetFont('Arial','B',10);
					$pdf->Cell(80,10,"Sub:Response Of Students Feedback for the Academic Year 2022-23(Even Sem)",0,1,'L');
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(80,10,"Sir/Madam,",0,1,'L');
					
					$pdf->MultiCell(190,5,"the purpose of this letter is to provide the information about the students feedback obtained online for the Academic year 2022-23 (Even sem )pertaining to the subject taught by you.The details are as follows,",0,'L');
					$pdf->Cell(80,5,"",0,1,'L');
					$pdf->Cell(80,6,"Name of faculty: Mr.V.S.Magar",0,1,'L');
					$pdf->Cell(130,5,"Course/Subject:Musiness Communication and Computer Network",0,0,'L');
					$pdf->Cell(80,5,"Department:Computer",0,1,'L');
					$pdf->Cell(80,6,"Academic Year:2022-23(Even-sem)",0,1,'L');
					$pdf->Cell(80,5,"Total Student responses:$rows ",0,1,'L');
					
					$pdf->Cell(10,10,"Sr.no",1,0);
					$pdf->Cell(160,10,"Description",1,0);
					$pdf->Cell(20,10,"Grade",1,1);
					$pdf->Cell(10,10,"1.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered entire syallabus as prescribed by the board?",1,0);
					$pdf->Cell(20,10,"$count",1,1);
					
					$pdf->Cell(10,10,"2.",1,0);
					$pdf->Cell(160,10,"Has the teacher covered relevant topics beyond syllabus",1,0);
					$pdf->Cell(20,10," $count1",1,1);
					
					$pdf->Cell(10,10,"3.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Effectiveness of teacher in terms of (a)Technical content/course Content (b)Communication skills (c)Use of teaching aids",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count2 ",1,1);
					
					$pdf->Cell(10,10,"4.",1,0);
					$pdf->Cell(160,10,"Pace on which contents were covered",1,0);
					$pdf->Cell(20,10,"$count3 ",1,1);
					
					$pdf->Cell(10,10,"5.",1,0);
					$pdf->Cell(160,10,"Motivation and Inspiraction for students to learn",1,0);
					$pdf->Cell(20,10,"$count4 ",1,1);
					
					$pdf->Cell(10,10,"6.",1,0);
					$pdf->SetFont('Arial','',8);
					$pdf->Cell(160,10,"Support for development of students skill (1)practical demonstration (2)Hands on Training",1,0);
					$pdf->SetFont('Arial','',10);
					$pdf->Cell(20,10,"$count5 ",1,1);
					
					$pdf->Cell(10,10,"7.",1,0);
					$pdf->Cell(160,10,"Clarity of exceptions of students",1,0);
					$pdf->Cell(20,10,"$count6",1,1);
					
					$pdf->Cell(10,10,"8.",1,0);
					$pdf->Cell(160,10,"Feedback provided on Students progress",1,0);
					$pdf->Cell(20,10,"$count7",1,1);
					
					$pdf->Cell(10,10,"9.",1,0);
					$pdf->Cell(160,10,"Willingness to offer help and advice to students",1,0);
					$pdf->Cell(20,10,"$count8",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Total",0,0,'R');
					$pdf->Cell(20,5,"$total",1,1);
					
					$pdf->Cell(10,5,"",0,0);
					$pdf->Cell(160,5,"Converted Out of 25",0,0,'R');
					$pdf->Cell(20,5,$t,1,1);
					
					$pdf->Cell(160,5,"Excellent=5,Very Good=4, Good=3, Poor=2, very Poor=1",0,1);
					$pdf->Cell(10,5,"Wishing you all the best",0,1);
					$pdf->Cell(10,5,"Thanking you",0,1);
					$pdf->Cell(10,3,"",0,1);
					
					$pdf->Cell(40,5,"Dr.V.R.Falmari",0,0,'L');
					$pdf->Cell(150,5,"capt. DR. N.P.Sonaje",0,1,'R');
					$pdf->Cell(40,5,"HOD Computer Dept.",0,0,'L');
					$pdf->Cell(140,5,"Principal",0,1,'R');
					$pdf->Output();
		  }
		  }
	  /*$result=mysqli_query($conn,"select * from firstyear;");
		  	    require('fpdf.php');
				$pdf=new FPDF();
				$pdf->AddPage();
		  while($row=mysqli_fetch_assoc($result))
		  {

				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(80,10,"YEAR",1,0,'L');
				$pdf->Cell(40,10,$row['Year'],1,1,'C');
				$pdf->Cell(80,10,"NAME",1,0,'L');
				$pdf->Cell(40,10,$row['Name'],1,1,'C');
				$pdf->Cell(80,10,"EMAIL",1,0,'L');
				$pdf->Cell(40,10,$row['Email'],1,1,'C');
				$pdf->Cell(80,10,"PCI(1)",1,0,'L');
				$pdf->Cell(40,10,$row['a1'],1,1,'C');
				$pdf->Cell(80,10,"PCI(2)",1,0,'L');
				$pdf->Cell(40,10,$row['a2'],1,1,'C');
				$pdf->Cell(80,10,"PCI(3)",1,0,'L');
				$pdf->Cell(40,10,$row['a3'],1,1,'C');
				$pdf->Cell(80,10,"PCI(4)",1,0,'L');
				$pdf->Cell(40,10,$row['a4'],1,1,'C');
				$pdf->Cell(80,10,"PCI(5)",1,0,'L');
				$pdf->Cell(40,10,$row['a5'],1,1,'C');
				$pdf->Cell(80,10,"PCI(6)",1,0,'L');
				$pdf->Cell(40,10,$row['a6'],1,1,'C');
				$pdf->Cell(80,10,"PCI(7)",1,0,'L');
				$pdf->Cell(40,10,$row['a7'],1,1,'C');
				$pdf->Cell(80,10,"PCI(8)",1,0,'L');
				$pdf->Cell(40,10,$row['a8'],1,1,'C');
				$pdf->Cell(80,10,"PCI(9)",1,0,'L');
				$pdf->Cell(40,10,$row['a9'],1,1,'C');
				
				$pdf->Cell(80,10,"M2(1)",1,0,'L');
				$pdf->Cell(40,10,$row['b1'],1,1,'C');
				$pdf->Cell(80,10,"M2(2)",1,0,'L');
				$pdf->Cell(40,10,$row['b2'],1,1,'C');
				$pdf->Cell(80,10,"M2(3)",1,0,'L');
				$pdf->Cell(40,10,$row['b3'],1,1,'C');
				$pdf->Cell(80,10,"M2(4)",1,0,'L');
				$pdf->Cell(40,10,$row['b4'],1,1,'C');
				$pdf->Cell(80,10,"M2(5)",1,0,'L');
				$pdf->Cell(40,10,$row['b5'],1,1,'C');
				$pdf->Cell(80,10,"M2(6)",1,0,'L');
				$pdf->Cell(40,10,$row['b6'],1,1,'C');
				$pdf->Cell(80,10,"M2(7)",1,0,'L');
				$pdf->Cell(40,10,$row['b7'],1,1,'C');
				$pdf->Cell(80,10,"M2(8)",1,0,'L');
				$pdf->Cell(40,10,$row['b8'],1,1,'C');
				$pdf->Cell(80,10,"M2(9)",1,0,'L');
				$pdf->Cell(40,10,$row['b9'],1,1,'C');
				
				$pdf->Cell(80,10,"BEC(1)",1,0,'L');
				$pdf->Cell(40,10,$row['c1'],1,1,'C');
				$pdf->Cell(80,10,"BEC(2)",1,0,'L');
				$pdf->Cell(40,10,$row['c2'],1,1,'C');
				$pdf->Cell(80,10,"BEC(3)",1,0,'L');
				$pdf->Cell(40,10,$row['c3'],1,1,'C');
				$pdf->Cell(80,10,"BEC(4)",1,0,'L');
				$pdf->Cell(40,10,$row['c4'],1,1,'C');
				$pdf->Cell(80,10,"BEC(5)",1,0,'L');
				$pdf->Cell(40,10,$row['c5'],1,1,'C');
				$pdf->Cell(80,10,"BEC(6)",1,0,'L');
				$pdf->Cell(40,10,$row['c6'],1,1,'C');
				$pdf->Cell(80,10,"BEC(7)",1,0,'L');
				$pdf->Cell(40,10,$row['c7'],1,1,'C');
				$pdf->Cell(80,10,"BEC(8)",1,0,'L');
				$pdf->Cell(40,10,$row['c8'],1,1,'C');
				$pdf->Cell(80,10,"BEC(9)",1,0,'L');
				$pdf->Cell(40,10,$row['c9'],1,1,'C');
				
				$pdf->Cell(80,10,"EEC(1)",1,0,'L');
				$pdf->Cell(40,10,$row['d1'],1,1,'C');
				$pdf->Cell(80,10,"EEC(2)",1,0,'L');
				$pdf->Cell(40,10,$row['d2'],1,1,'C');
				$pdf->Cell(80,10,"EEC(3)",1,0,'L');
				$pdf->Cell(40,10,$row['d3'],1,1,'C');
				$pdf->Cell(80,10,"EEC(4)",1,0,'L');
				$pdf->Cell(40,10,$row['d4'],1,1,'C');
				$pdf->Cell(80,10,"EEC(5)",1,0,'L');
				$pdf->Cell(40,10,$row['d5'],1,1,'C');
				$pdf->Cell(80,10,"EEC(6)",1,0,'L');
				$pdf->Cell(40,10,$row['d6'],1,1,'C');
				$pdf->Cell(80,10,"EEC(7)",1,0,'L');
				$pdf->Cell(40,10,$row['d7'],1,1,'C');
				$pdf->Cell(80,10,"EEC(8)",1,0,'L');
				$pdf->Cell(40,10,$row['d8'],1,1,'C');
				$pdf->Cell(80,10,"EEC(9)",1,0,'L');
				$pdf->Cell(40,10,$row['d9'],1,1,'C');
				
				$pdf->Cell(40,10,"",0,1,'C');
		  }
		  $pdf->Output();
		  }*/
	    
	  
	  
	  mysqli_close($conn);
?>