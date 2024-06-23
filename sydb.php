
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
	  echo "<h1>Form Submitted successfully</h1> <br><br><br><br><br><br><br>";
	  $y="SY";
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
	  
	   $r1=$_REQUEST['e1'];
	  $r2=$_REQUEST['e2'];
	  $r3=$_REQUEST['e3'];
	  $r4=$_REQUEST['e4'];
	  $r5=$_REQUEST['e5'];
	  $r6=$_REQUEST['e6'];
	  $r7=$_REQUEST['e7'];
	  $r8=$_REQUEST['e8'];
	  $r9=$_REQUEST['e9'];
	  
	  $u1=$_REQUEST['f1'];
	  $u2=$_REQUEST['f2'];
	  $u3=$_REQUEST['f3'];
	  $u4=$_REQUEST['f4'];
	  $u5=$_REQUEST['f5'];
	  $u6=$_REQUEST['f6'];
	  $u7=$_REQUEST['f7'];
	  $u8=$_REQUEST['f8'];
	  $u9=$_REQUEST['f9'];
	  
	   mysqli_query($conn,"insert into secondyear values('$y','$n','$e',$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$o1,$o2,$o3,$o4,$o5,$o6,$o7,$o8,$o9,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$u1,$u2,$u3,$u4,$u5,$u6,$u7,$u8,$u9);");
	      echo "<script>alert('SUBMITTED SUCCESSFULLY')</script>";
	  
	  
	 // echo "<a href='sypdf.php'><input type='button' value='GENERTAE PDF'></a>";
	  
	  
	  mysqli_close($conn);
  }

?>
</body>
</html>