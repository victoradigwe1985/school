<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if(isset($_POST["submit"])){
            require("connection.php");
             $stud_id=$_POST["stud_id"];
            $fullname=$_POST["fullname"];
            $firstpay=$_POST["firstpay"];
            $secondpay=$_POST["secondpay"];
            $fullpay=$_POST["fullpay"];
            $total=$firstpay+$secondpay+$fullpay;
           
                            
         $select="SELECT stud_id FROM jss1c_schoolfee WHERE stud_id='$stud_id'";
            if($query=mysqli_query($connect,$select)){
                $num=mysqli_num_rows($query);
                if($num > 0){
                    $msg="Student ID <b>$stud_id </b> already exists!";
                    header("location:jss1b_new.php?msg=$msg");
                }else{
                        $insert="INSERT INTO jss1c_schoolfee(stud_id,fullname,firstpay,secondpay,fullpay,total)VALUES('$stud_id','$fullname','$firstpay','$secondpay','$fullpay','$total')";
                        if(mysqli_query($connect,$insert)){
                            $msg="School Fee submitted successfully";
                             header("location:jss1c_new.php?msg=$msg");
                        }else{
                            $msg="failed to exercute query on the database!";
                             header("location:jss1c_new.php?msg=$msg");
                        }
                }
            }
 }
          
            ?>


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
                    background-color:lightgoldenrodyellow;
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

#submit:hover{
   background-color:green;
   color:white;
}

            </style>
           
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; position: fixed; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
              <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="class_selector_new.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
         <a href="jss1c_existing.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;">View Records</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:10%;"> 
             <br>
        <div class="container" style="padding-left: 1%; width: 40%; font-size: 1.2em;">
            <p style="color:red; padding-top: 10px;">
             <?php
                     if(isset($_GET["msg"])&& !empty($_GET["msg"])){
                      echo $_GET["msg"];
                         }else{
                      echo"";
                      }
                  ?>
         </p>
         <br>
         <form action="" method="POST" class="form-horizontal" role="form" style="background-color:lightgray; height:500px; width: 350px;" >
       <h2  style=" font-size: 25px; text-align: center; font-family: ubuntu; background-color: darkslategrey; color:white;">Add Payment</h2>
       <div class="form-group" style="padding-left:25px; width: 300px;">
           <label>Student ID</label>
      <input type="text" name="stud_id" class="form-control input-lg" required="required" placeholder="Enter student ID">
       <label>Name of Student</label>
      <input type="text" name="fullname" class="form-control input-lg" required="required" placeholder="Enter Full Name">
       <label>First Payment</label>
       <input type="text" name="firstpay" class="form-control input-lg" placeholder="" style="width:110px;">
      <label>Second Payment</label>
      <input type="text" name="secondpay" class="form-control input-lg"  placeholder="" style="width:110px;">
      <label>Full Payment</label>
      <input type="text" name="fullpay" class="form-control input-lg"  placeholder="" style="width:110px;">
    <button type="submit"  name="submit" class="btn btn-gray" id="submit">Submit</button>
    </div> 
    </form>
  <div <div style="background-color:lightgray; width: 350px; padding: 5px;"> <a href="jss1c_new_first_term.php"><button value="OK" class="btn btn-gray" id="submit">OK</button></a> <a href="jss1c_existing.php"><button value="View Records" class="btn btn-gray" id="submit">View Records</button></a></div>
</div>
             
         </div>            
    </body>
</html>
