<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <title> </title>
        <meta name="author" content="">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    	<link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
        <script src="js/modernizr-2.6.2.min.js"></script>
		    <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		    <script src="js/moment.js"></script>
            <script src="js/bootstrap-datetimepicker.js"></script>
         
       <style>
                body{
                    background-color: lightgoldenrodyellow;
                }
                a:hover{
                    background-color:green;
                }
                .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

            </style>
           
            </style>
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; position: fixed; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="jss2c_select_session_term.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;"> 
         


<?php
include_once("connection.php");
$id=$_GET["id"];
$select="SELECT *FROM jss2c_schoolfee WHERE register_id='$id'";
$query=mysqli_query($connect,$select);
if(mysqli_num_rows($query)>=1){
    while($row=mysqli_fetch_array($query)){
        $user=$row["register_id"];
        $stud_id= $row["stud_id"];
                $fullname= $row["fullname"];
                $firstpay= $row["firstpay"];
                $secondpay= $row["secondpay"];
                $fullpay= $row["fullpay"];
                $total= $row["total"];
    }
    ?>
             
             <div class="container" style="width:40%;">           
<div class="form" style=" margin-bottom: 10%">
    <h4>Enter Amount To Update School Fee</h4>
     <form method="POST" action="jss2c_update.php?id=<?php echo "$user" ?>" 
          <div class="form-group" style="padding-left:10px;">
              <label>Student_id:</label>
      <input type="text" size="24" name="stud_id"  value="<?=$stud_id;?>" class="form-control input-lg" placeholder="">
       <label>Name of Student</label>
      <input type="text" name="fullname" value="<?=$fullname;?>" class="form-control input-lg" required="required" placeholder="Enter Full Name">
       <label>First Payment</label>
      <input type="text" name="firstpay" value="<?=$firstpay;?>" class="form-control input-lg" placeholder="">
      <label>Second Payment</label>
      <input type="text" name="secondpay" value="<?=$secondpay;?>" class="form-control input-lg"  placeholder="">
      <label>Full Payment</label>
      <input type="text" name="fullpay" value="<?=$fullpay;?>" class="form-control input-lg"  placeholder="">
      <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
       </form>
    </div> 
   
</div>
</div>
<?php
}else{
    echo "No entry found";
}
?>

      


         </body>
</html>
