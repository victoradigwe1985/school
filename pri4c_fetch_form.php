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
            .Reg_form{
                 margin-top:0%;
                 margin-left: 10%;
                  padding-left: 15px;
                   padding-right: 15px;
                  padding-top: 10px;
                  border:3px solid black;
                  border-radius:25px 25px;
                 width: 80%; 
             }
             #image{
                 float:left;
             }
            #pas{
                 float:right;
               padding-right: 5%;  
             }   
   body{
    background-color:lightgoldenrodyellow;
} 
 @media Print{
    
      #con {
                    display: none!important; 
                }
                 #prnt {
                    display: none!important; 
                }
                 #scroll{
    background-color:lightgoldenrodyellow !important;
} 
.Reg_form{
                margin-top:4%!important;
                 margin-bottom: 2%!important;
                 margin-left: 3%!important;
                  padding-left: 15px!important;
                   padding-right: 15px !important;
                  padding-top: 10px !important;
                  border:3px solid black !important;
                  border-radius:25px 25px !important;
                 width: 95% !important;
                  
             }
             #image{
                 float:left !important;      
             }
          #pas{
                 float:right !important;
               padding-right:5% !important; 
               
             }       
             
 }


</style>

    </head>
    <body>
        
      
           <?php
require_once("connection.php");
$select="SELECT *FROM pri4c_register WHERE register_id=(SELECT max(register_id) FROM pri4c_register)";
$query=mysqli_query($connect,$select);
if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_array($query)){
        $user=$row["register_id"];
        $passport='<img height="200" width="150"  src="data:image/jpeg;base64,'.base64_encode($row['passport']).'"/>';
        $firstname=$row["first_name"];
        $middlename=$row["middle_name"];
        $surname=$row["surname"];
        $username=$row["username"];
        $email=$row["email"];
        $age=$row["age"];
        $class=$row["class"];
        $password=$row["password"];
        $confirm_password=$row["confirm_password"];
        $gender=$row["gender"];
        $address=$row["address"];
        $registered_on=$row["registered_on"];
          
    }
    ?>
     
         <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; float: left; padding-top: 20px; position: fixed" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="select_class_1.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        <a href="pri4c_form.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;">Register New</a><br>
        </div>
 
  
        <div class="container" style=" padding-bottom: 5%;"  id="scroll">
         <table cellpadding="15px" width="" cellspacing="0px">
         <tr>
                <td> 
                    <div class="Reg_form">
     <img id="image" src='image/log.jpg' width='100' height='100' alt='logo'> 
     <center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOL</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5>
         <h5><strong>ONLINE REGISTRATION FORM</strong></h5></center>
     <hr style=" border:3px solid black;">
    
<p style="color:red;">
             <?php
                     if(isset($_GET["msg"])&& !empty($_GET["msg"])){
                      echo $_GET["msg"];
                         }else{
                      echo"";
                      }
                  ?>
         </p>

   <p id="pas"><?=$passport?></p><br><br><br><br><br><br><br><br><br><br>
  <h3 style="text-align:center; font-family: ubuntu; font-weight:bold;">STUDENT DETAILS</h3>
<h3>First Name: <?=$firstname?></h3>
<h3>Middle Name: <?=$middlename?></h3>
<h3>Surname: <?=$surname?></h3>
<h3>Gender: <?=$gender?></h3>
<h3>Age: <?=$age?>years</h3>
<h3>Username: <?=$username?></h3>
<h3>E-Mail: <?=$email?></h3>
<h3>Class: <?=$class?></h3>
<h3>Address: <?=$address?></h3>
<h3 style="font-size:13px;">Registered on: <?=$registered_on?></h3>
<?php
}else{
    echo"no data found";
}
?>
  <script type="text/javascript">
   function myFunction(){
	    window.print();
	   }
 </script>
  
 <br><br>
 <div class="container" style="padding-bottom:5%; margin-left: 45%;" id="prnt">
      <button onclick="myFunction()" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-print"></i> <b>Print</b></button>
 </div> 
 </div>

          </td>
            </tr>
        </table> 
        </div>
    </body>
</html>


