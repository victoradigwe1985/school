 <!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/plugin.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<br>
 <center> <h4><strong>BRAIN TRUST SECONCARY SCHOOL,</strong></h4><h5><strong>J.S.S 3B First Term Time Table</strong></h5></center>
    <br>
 
<div class="container">
 <table class=" table table-bordered">
  <thead>
    <tr>
	  <th>Day</th>
	  <th>8:00am-8:45am</th>
	  <th>8:45am-9:30am</th>
	  <th>9:30am-10:15am</th>
	  <th>10:00am-11:00am</th>
	  <th>11:00am-11:45am</th>
	  <th>11:45am-12:45pm</th>
	  <th>12:45pm-1:25pm</th>
	  <th>1:25pm-2:10pm</th>
	  <th>2:30pm</th>
	  
	</tr> 
  </thead>
 <?php
 include_once("connection.php");
 $select="SELECT * FROM jss3b_time_table";
 $query=mysqli_query($connect,$select);
 while($fetch=mysqli_fetch_array($query)){
	 $timeTable_id=$fetch["timeTable_id"];
	 $day=$fetch["day"];
         $time1=$fetch["time1"];
	 $time2=$fetch["time2"];
	 $time3=$fetch["time3"];
	 $time4=$fetch["time4"];
	 $time5=$fetch["time5"];
	 $time6=$fetch["time6"];
	 $time7=$fetch["time7"];
	 $time8=$fetch["time8"];
     $time9=$fetch["time9"];
	 
	 //$delete='<a class="btn btn-danger" style="color:white;" href="delete.php?id='.$fetch['tiemtable_id'].'">Delete</a>';
   echo "<tr>
           <td>$day</td>
		   <td>$time1</td>
		   <td>$time2</td>
		   <td>$time3</td>
		   <td>$time4</td>
		   <td>$time5</td>
		   <td>$time6</td>
		   <td>$time7</td>
		   <td>$time8</td>
		   <td>$time9</td>
		</tr>";	 
 }
 echo"</table>";
 ?>
 </table>
     </div> 
 
 <script type="text/javascript">
   function myFunction(){
	    window.print();
	   }
 </script>
 <div class="container" style="padding-bottom:5%; padding-top: 2%;">
      <center><button onclick="myFunction()" class="btn btn-grey btn-sm"><i class="glyphicon glyphicon-print"></i> <b>Print</b></button></center>
 </div>

    </body>
</html>