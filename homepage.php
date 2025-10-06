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
                 overflow-y: hidden;
                
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

#wc{
    font-size: 3em;
    font-family: ubuntu;
    font-weight:bolder;
    color:grey;
    padding-top: 10%;
    text-align: center;
    transform-style: preserve-3d;   
}

#hp{
    text-align: center;
     padding-top: 5%;
}

            </style>
    </head>
    <body>
        <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; float: left; padding-top: 20px;">
            <div class="container" style="margin-bottom:8%;">
            <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"><br><br>
            </div>
        <div class="container" style="width:100%;">
            <div class="container"><h3 style="color:white;">Main Menu</h3></div>
   <div class="dropdown">
  <button class="dropbtn">Student Management Portal</button>
  <div class="dropdown-content">
      <a href="schoolfee.php">School Fee</a>
      <a href="creat_view_timetable.php">Student Time Table</a>
    <a href="select_class.php">Student Registration</a>
    <a href="result.php">Student Result</a>
     <a href="class_selector_database.php">Student Database</a>
  </div>
</div>
        </div>
  <div class="container" style="width:100%; margin-top: 10%;">
<div class="dropdown">
  <button class="dropbtn">Staff Management Portal</button>
  <div class="dropdown-content">
      <a href="staff_form.php">Staff Registration</a>
      <a href="select_month.php">Salary Sheet</a>
    <a href="staff_fetchingdata.php">Staff Database</a>
    <a href="creat_view_staff_timetable.php">Staff Time Table</a>
  </div>
</div>            
</div>
       
        </div>
    <div id="wc">WELCOME TO SECONDARY SESSION !</div>
    <div id="hp"> <a href="home.php" class="btn btn-lg btn-success" onclick="defualtAlert()">HomePage</a></div>
    </body>
</html>