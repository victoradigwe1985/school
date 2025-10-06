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
             #con a:hover{
                    background-color:green;
                }
                .emoji{
                float:right;
                padding-top: 30px;
     
            }
             .table{
                margin-top: 5%;
            }
            .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 8px 21px;
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
  min-width: 93px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 20px;
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
            <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div>
            <h4 style="color:white; background-color: darkgreen; text-align: center; padding:5% 2%; margin-top: 10%;">Shool Fee Records</h4>
             <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: -5px; margin-bottom: 5px;">Goto Main Menu</a><br>
        
        <div class="container" style="width:100%; margin-bottom:5px;">     
   <div class="dropdown">
       <button class="dropbtn" style="padding-left:40%; padding-right: 55%;">Nursery </button>
  <div class="dropdown-content" style="min-width:110px;">
      <a href="pre_nursery_select_session_term.php">Pre-Nursery</a>
      <a href="nursery_1_select_session_term.php">Nursery 1</a>
    <a href="nursery_2_select_session_term.php">Nursery 2</a>
    <a href="nursery_3_select_session_term.php">Nursery 3</a>
  </div>
</div>
        </div> 
 <div class="container" style="width:100%;  margin-bottom:5px;">        
    <div class="dropdown">
  <button class="dropbtn">Primary 1  </button>
  <div class="dropdown-content">
      <a href="pri1a_select_session_term.php">Primary 1A</a>
      <a href="pri1b_select_session_term.php">Primary 1B</a>
    <a href="pri1c_select_session_term.php">Primary 1C</a>
  </div>
</div>         
        </div>
         <div class="container" style="width:100%;  margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">Primary 2</button>
  <div class="dropdown-content">
      <a href="pri2a_select_session_term.php">Primary 2A</a>
      <a href="pri2b_select_session_term.php">Primary 2B</a>
    <a href="pri2c_select_session_term.php">Primary 2C</a>
  </div>
</div>
         </div>
         <div class="container" style="width:100%;  margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">Primary 3</button>
  <div class="dropdown-content">
       <a href="pri3a_select_session_term.php">Primary 3A</a>
      <a href="pri3b_select_session_term.php">Primary 3B</a>
    <a href="pri3c_select_session_term.php">Primary 3C</a>
  </div>
</div>
         </div>
        <div class="container" style="width:100%;  margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">Primary 4</button>
  <div class="dropdown-content">
       <a href="pri4a_select_session_term.php">Primary 4A</a>
      <a href="pri4b_select_session_term.php">Primary 4B</a>
    <a href="pri4c_select_session_term.php">Primary 4C</a>
  </div>
</div>
         </div>
          <div class="container" style="width:100%;  margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">Primary 5</button>
  <div class="dropdown-content">
      <a href="pri5a_select_session_term.php">Primary 5A</a>
      <a href="pri5b_select_session_term.php">Primary 5B</a>
  </div>
</div>
         </div>
        <div class="container" style="width:100%; margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">Primary 6</button>
  <div class="dropdown-content">
      <a href="pri6a_select_session_term.php">Primary 6A</a>
      <a href="pri6b_select_session_term.php">Primary 6B</a>
  </div>
</div>
         </div>
        
        </div>
        <div class="container-fluid" style="background-color: lightgoldenrodyellow;"> 
      <div class="container">
        <div class="table">
            <center>  <table style="">
            <tr>
         
                <td align="center">  <h2 style="font-family:ubuntu;">School Fee Payment</h2> <div class="emoji "><a href="class_selector_new_1.php"><img src="image/money.png" width="200" height="200"></a><p>New Student</p></td> 
            </tr>
                </table></center>
        </div>
        </div>
        </div>
    </body>
</html>