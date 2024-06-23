
<html>
<head>

</head>
<body style="background:url('microbg.png'); background-size:cover;background-repeat:no-repeat;">
  <img src="formlogo.png" width="200px" height="200px" >
  <h1 class="heading" style="font-size:40px;color:white;margin-top:-130px;margin-left:200px">STUDENT FEEDBACK PORTAL</h1>
  <div style="width:1050px;height:1330px;margin-left:100px;margin-top:80px;background-color:transparent;border:2px solid  #FBFCF8;border-radius:20px;
   box-shadow:5px 5px 50px white;"> 
    <div style="width:900px;height:200px;margin-left:20px;"> 
	   <img src="adminlogo1.jpg" width="500px" height="400px" style="border:2px solid transparent;
   border-radius:20px;margin-left:250px;margin-top:30px;">
	</div>
	<div style="width:1000px;height:240px;margin-top:270px;background-color: #FBFCF8;border:2px solid  #FBFCF8;
   border-radius:20px;margin-left:20px"> 
	   <label style="font-size:50px;color:black">   <br>Student Feedback Form<br>Academic Year 2022-2023(Even Sem)</label>
	</div>
	<div style="width:1000px;height:400px;margin-top:50px;background-color: #FBFCF8;border:2px solid  #FBFCF8;
    border-radius:20px;margin-left:20px"> 
	<?php
	$u=$_REQUEST['t1'];
	$p=$_REQUEST['t2'];
	if($u=="admin" && $p=="gpm@123")
	{
	echo "<form action='admin3.php'>";
	
	  echo" <label style='font-size:50px;color:black'>   <br><b>Select Year</b></label><br><br>";
	  echo " <input type='radio' name='year' value='FY' style='width:30px;height:30px;'><label style='font-size:50px;color:black'>First Year</label><br>";
	  echo " <input type='radio' name='year' value='SY' style='width:30px;height:30px;'><label style='font-size:50px;color:black'>Second Year</label><br>";
	   echo "<input type='radio' name='year' value='TY' style='width:30px;height:30px;'><label style='font-size:50px;color:black'>Third Year</label><br>";
	echo "</div>";
	echo "<input type='submit'  name='b'  value='SUBMIT' style='width:240px;height:80px;font-size:50px;color:black;margin-top:50px;margin-left:30px;border:2px solid white;border-radius:70px;background-color:#FBFCF8'>";
	echo "</form>";
	}
	else
	{
		echo "<br><br><br> &nbsp &nbsp &nbsp <label style='font-size:50px;color:black;'><b>INVALID LOGIN</b></label>";
	}
	?>
  </div>
</body>
</html>
