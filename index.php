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
                background:url(image/building.jpg);
                background-size:90% 100%;
                background-repeat:no-repeat;
                background-position-x: 90%;
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

#bt:hover{
    background-color: darkgreen;
     
}

            </style>
    </head>
    <body>
        <div class="container" style="width:200px; height:1000px; background-color: black; margin-left: 0px; float: left; padding-top: 20px;">
            <div class="container" style="margin-bottom:8%;">
            <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"><br><br>
            </div>
        <div class="container-fluid" style=" margin-bottom: 10%;">
            <div class="container"><h3 style="color:white;">Main Menu</h3></div>
 
      <a href="homepage.php"> <button  class="bt btn-lg btn-success" id="bt">Secondary School Session</button></a>
        </div>
   <div class="container-fluid" style="">
          
 
      <a href="homepage_1.php"> <button  class="bt btn-lg btn-success" id="bt">Primary School Session</button></a>
   </div>
            <br>
        <div class="container-fluid" style="">
             <a href="logout_admin.php" class="btn btn-success btn-lg">LogOut</a>
         </div>
        </div>
        
    </body>
</html>
