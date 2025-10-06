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
                    background-color: black;
                     overflow-y: hidden;
                }
         
                .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 19px;
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
  min-width: 90px;
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
           
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;"> 
         
             <center> <div class="container" style="padding:5px 15px;"><br>
                     <h3 style="background-color:green; color:white; width: 25%;">SALARY SHEET </h3><br><br><br>
   <div class="dropdown">
       <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salary.php">JANUARY</a></button>
 
   </div>   
<div class="dropdown">
    <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salaryfeb.php">FEBRUARY</a></button>
  
</div> 
  <div class="dropdown">
      <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salarymar.php">MARCH</a></button>
  
  </div>
  <div class="dropdown">
      <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salaryapr.php">APRIL</a></button>
 
</div> 
  <div class="dropdown">
      <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salarymay.php">MAY</a></button>
  
</div>
  <div class="dropdown">
      <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salaryjun.php">JUNE</a></button>
  
</div>               
<div class="dropdown">
    <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salaryjul.php">JULLY</a></button>
  
</div>  
  <div class="dropdown">
      <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salaryaug.php">AUGUST </a></button>
  
</div> 
 <div class="dropdown">
     <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salarysep.php">SEPTEMBER </a></button>
  
</div> 
                 <div class="dropdown">
                     <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salaryoct.php">OCTOBER </a></button>
  
                 </div> <br> <br>
                 <div class="dropdown">
                     <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salarynov.php">NOVEMBER </a></button>
  
</div>
                 <div class="dropdown">
                     <button class="dropbtn"> <a style="color:white;" href="fetching_staff_salarydec.php">DECEMBER</a></button>
  
</div> 
</div>  
 </div>     
                 
    </body>
</html>
