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
                        overflow-y:hidden;
                }
                .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 19px;
  font-size: 16px;
  border: none;
  margin: 1px;
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
         <div class="container" style="width:200px; height:1000px; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="creat_view_timetable_1.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:10%;"> 
         
             <center> <div class="container" style="padding:5px 15px;"><br><br><br><br><br><br>
                 <h3>Select Class to View Time Table </h3>
   <div class="dropdown">
  <button class="dropbtn">Nursery</button>
  <div class="dropdown-content">
      <a href="pre_nursery_time_table_fetchingdata.php">Pre-Nursery</a>
    <a href="nursery_1_time_table_fetchingdata.php">Nursery 1</a>
    <a href="nursery_2_time_table_fetchingdata.php">Nursery 2</a>
     <a href="nursery_3_time_table_fetchingdata.php">Nursery 3</a>
  </div>
   </div> 
 <div class="dropdown">
  <button class="dropbtn">Primary 1</button>
  <div class="dropdown-content">
      <a href="pri1a_time_table_fetchingdata.php">Primary 1A</a>
    <a href="#">Primary 1B</a>
    <a href="#">Primary 1C</a>
  </div>
   </div>                   
<div class="dropdown">
  <button class="dropbtn">Primary 2</button>
  <div class="dropdown-content">
      <a href="pri2a_time_table_fetchingdata.php">Primary 2A</a>
    <a href="#">Primary 2B</a>
    <a href="#">Primary 2C</a>
  </div>
</div> 
  <div class="dropdown">
  <button class="dropbtn">Primary 3</button>
  <div class="dropdown-content">
      <a href="pri3a_time_table_fetchingdata.php">Primary 3A</a>
    <a href="#">Primary 3B</a>
    <a href="#">Primary 3C</a>
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn">Primary 4</button>
  <div class="dropdown-content">
      <a href="pri4a_time_table_fetchingdata.php">Primary 4A</a>
    <a href="#">Primary 4B</a>
    <a href="#">Primary 4C</a>
  </div>
</div> 
  <div class="dropdown">
  <button class="dropbtn">Primary 5</button>
  <div class="dropdown-content">
      <a href="pri5a_time_table_fetchingdata.php">Primary 5A</a>
    <a href="#">Primary 5B</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Primary 6</button>
  <div class="dropdown-content">
      <a href="pri6a_time_table_fetchingdata.php">Primary 6A</a>
    <a href="#">Primary 6B</a>
 
  </div>
</div>    
</div>  
                 </div>      
                 
    </body>
</html>
