
<html>
<body style="background:url('bg1.jpg'); background-size:cover;background-repeat:no-repeat;">
<?php

  $conn=mysqli_connect("localhost:3308","root","","computer");
  if($conn->connect_error)
  {
	  die("Not connected".$con->connect_error);
  }
  else
  {
	  echo "<h1>Form Submitted successfully </h1><br><br><br><br><br><br><br>";
	 
	  
	  
	  $edmam=$_REQUEST['batch2'];
	  
	  if($edmam=="CO2")
	  {
		  
		 $y="TY";
	  $n=$_REQUEST['stuname1'];
	  $e=$_REQUEST['stuemail'];
	  $v1=$_REQUEST['a1'];
	  $v2=$_REQUEST['a2'];
	  $v3=$_REQUEST['a3'];
	  $v4=$_REQUEST['a4'];
	  $v5=$_REQUEST['a5'];
	  $v6=$_REQUEST['a6'];
	  $v7=$_REQUEST['a7'];
	  $v8=$_REQUEST['a8'];
	  $v9=$_REQUEST['a9'];
	  
	  $o1=$_REQUEST['b1'];
	  $o2=$_REQUEST['b2'];
	  $o3=$_REQUEST['b3'];
	  $o4=$_REQUEST['b4'];
	  $o5=$_REQUEST['b5'];
	  $o6=$_REQUEST['b6'];
	  $o7=$_REQUEST['b7'];
	  $o8=$_REQUEST['b8'];
	  $o9=$_REQUEST['b9'];
	  
	  $s1=$_REQUEST['c1'];
	  $s2=$_REQUEST['c2'];
	  $s3=$_REQUEST['c3'];
	  $s4=$_REQUEST['c4'];
	  $s5=$_REQUEST['c5'];
	  $s6=$_REQUEST['c6'];
	  $s7=$_REQUEST['c7'];
	  $s8=$_REQUEST['c8'];
	  $s9=$_REQUEST['c9'];
	  
	  $t1=$_REQUEST['d1'];
	  $t2=$_REQUEST['d2'];
	  $t3=$_REQUEST['d3'];
	  $t4=$_REQUEST['d4'];
	  $t5=$_REQUEST['d5'];
	  $t6=$_REQUEST['d6'];
	  $t7=$_REQUEST['d7'];
	  $t8=$_REQUEST['d8'];
	  $t9=$_REQUEST['d9'];
	  
	  $m1=$_REQUEST['e1'];
	  $m2=$_REQUEST['e2'];
	  $m3=$_REQUEST['e3'];
	  $m4=$_REQUEST['e4'];
	  $m5=$_REQUEST['e5'];
	  $m6=$_REQUEST['e6'];
	  $m7=$_REQUEST['e7'];
	  $m8=$_REQUEST['e8'];
	  $m9=$_REQUEST['e9'];
	  
	   $u1=$_REQUEST['f1'];
	  $u2=$_REQUEST['f2'];
	  $u3=$_REQUEST['f3'];
	  $u4=$_REQUEST['f4'];
	  $u5=$_REQUEST['f5'];
	  $u6=$_REQUEST['f6'];
	  $u7=$_REQUEST['f7'];
	  $u8=$_REQUEST['f8'];
	  $u9=$_REQUEST['f9'];
	  
	  $p1=$_REQUEST['g1'];
	  $p2=$_REQUEST['g2'];
	  $p3=$_REQUEST['g3'];
	  $p4=$_REQUEST['g4'];
	  $p5=$_REQUEST['g5'];
	  $p6=$_REQUEST['g6'];
	  $p7=$_REQUEST['g7'];
	  $p8=$_REQUEST['g8'];
	  $p9=$_REQUEST['g9'];
	  
	  
		mysqli_query($conn,"insert into thirdyear values('$y','$n','$e',$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$o1,$o2,$o3,$o4,$o5,$o6,$o7,$o8,$o9,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$u1,$u2,$u3,$u4,$u5,$u6,$u7,$u8,$u9,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);");
	      echo "<script>alert('SUBMITTED SUCCESSFULLY')</script>";  
	  }
	  if($edmam=="CO3")
	  {
		 $y="TY";
	  $n=$_REQUEST['stuname1'];
	  $e=$_REQUEST['stuemail'];
	  $v1=$_REQUEST['a1'];
	  $v2=$_REQUEST['a2'];
	  $v3=$_REQUEST['a3'];
	  $v4=$_REQUEST['a4'];
	  $v5=$_REQUEST['a5'];
	  $v6=$_REQUEST['a6'];
	  $v7=$_REQUEST['a7'];
	  $v8=$_REQUEST['a8'];
	  $v9=$_REQUEST['a9'];
	  
	  $o1=$_REQUEST['b1'];
	  $o2=$_REQUEST['b2'];
	  $o3=$_REQUEST['b3'];
	  $o4=$_REQUEST['b4'];
	  $o5=$_REQUEST['b5'];
	  $o6=$_REQUEST['b6'];
	  $o7=$_REQUEST['b7'];
	  $o8=$_REQUEST['b8'];
	  $o9=$_REQUEST['b9'];
	  
	  $s1=$_REQUEST['c1'];
	  $s2=$_REQUEST['c2'];
	  $s3=$_REQUEST['c3'];
	  $s4=$_REQUEST['c4'];
	  $s5=$_REQUEST['c5'];
	  $s6=$_REQUEST['c6'];
	  $s7=$_REQUEST['c7'];
	  $s8=$_REQUEST['c8'];
	  $s9=$_REQUEST['c9'];
	  
	  $t1=$_REQUEST['d1'];
	  $t2=$_REQUEST['d2'];
	  $t3=$_REQUEST['d3'];
	  $t4=$_REQUEST['d4'];
	  $t5=$_REQUEST['d5'];
	  $t6=$_REQUEST['d6'];
	  $t7=$_REQUEST['d7'];
	  $t8=$_REQUEST['d8'];
	  $t9=$_REQUEST['d9'];
	  
	  $m1=$_REQUEST['e1'];
	  $m2=$_REQUEST['e2'];
	  $m3=$_REQUEST['e3'];
	  $m4=$_REQUEST['e4'];
	  $m5=$_REQUEST['e5'];
	  $m6=$_REQUEST['e6'];
	  $m7=$_REQUEST['e7'];
	  $m8=$_REQUEST['e8'];
	  $m9=$_REQUEST['e9'];
	  
	   $u1=$_REQUEST['f1'];
	  $u2=$_REQUEST['f2'];
	  $u3=$_REQUEST['f3'];
	  $u4=$_REQUEST['f4'];
	  $u5=$_REQUEST['f5'];
	  $u6=$_REQUEST['f6'];
	  $u7=$_REQUEST['f7'];
	  $u8=$_REQUEST['f8'];
	  $u9=$_REQUEST['f9'];
	  
	  $p1=$_REQUEST['g1'];
	  $p2=$_REQUEST['g2'];
	  $p3=$_REQUEST['g3'];
	  $p4=$_REQUEST['g4'];
	  $p5=$_REQUEST['g5'];
	  $p6=$_REQUEST['g6'];
	  $p7=$_REQUEST['g7'];
	  $p8=$_REQUEST['g8'];
	  $p9=$_REQUEST['g9'];
	  
	
		mysqli_query($conn,"insert into thirdyear values('$y','$n','$e',$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$o1,$o2,$o3,$o4,$o5,$o6,$o7,$o8,$o9,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$u1,$u2,$u3,$u4,$u5,$u6,$u7,$u8,$u9,0,0,0,0,0,0,0,0,0,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);");
	      echo "<script>alert('SUBMITTED SUCCESSFULLY')</script>";   
	  }
	  
	   
	 
	 
	  
	  
	 // echo "<a href='typdf.php'><input type='button' value='GENERTAE PDF' ></a>";
	  
	  
	  mysqli_close($conn);
  }

?>
</body>
</html>