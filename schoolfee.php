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
                        overflow-y:hidden;
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
  padding: 8px 20px;
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
            <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
             <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: -5px; margin-bottom: 5px;">Goto Main Menu</a><br><br>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding:4% 2%; margin-top: -10px;">Shool Fee Records</h4>
        <div class="container" style="width:100%; margin-bottom:5px;">     
   <div class="dropdown">
  <button class="dropbtn">J.S.S 1  </button>
  <div class="dropdown-content">
      <a href="jss1a_select_session_term.php">J.S.S 1A</a>
      <a href="jss1b_select_session_term.php">J.S.S 1B</a>
    <a href="jss1c_select_session_term.php">J.S.S 1C</a>
  </div>
</div>
        </div>
         <div class="container" style="width:100%;  margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">J.S.S 2</button>
  <div class="dropdown-content">
      <a href="jss2a_select_session_term.php">J.S.S 2A</a>
      <a href="jss2b_select_session_term.php">J.S.S 2B</a>
    <a href="jss2c_select_session_term.php">J.S.S 2C</a>
  </div>
</div>
         </div>
         <div class="container" style="width:100%;  margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">J.S.S 3</button>
  <div class="dropdown-content">
       <a href="jss3a_select_session_term.php">J.S.S 3A</a>
      <a href="jss3b_select_session_term.php">J.S.S 3B</a>
    <a href="jss3c_select_session_term.php">J.S.S 3C</a>
  </div>
</div>
         </div>
        <div class="container" style="width:100%;  margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">S.S.S 1</button>
  <div class="dropdown-content">
       <a href="ss1a_select_session_term.php">S.S.S 1A</a>
      <a href="ss1b_select_session_term.php">S.S.S 1B</a>
    <a href="ss1c_select_session_term.php">S.S.S 1C</a>
  </div>
</div>
         </div>
          <div class="container" style="width:100%;  margin-bottom:5px;">
   <div class="dropdown">
  <button class="dropbtn">S.S.S 2</button>
  <div class="dropdown-content">
      <a href="ss2a_select_session_term.php">S.S.S 2A</a>
      <a href="ss2b_select_session_term.php">S.S.S 2B</a>
  </div>
</div>
         </div>
        <div class="container" style="width:100%;">
   <div class="dropdown">
  <button class="dropbtn">S.S.S 3</button>
  <div class="dropdown-content">
      <a href="ss3a_select_session_term.php">S.S.S 3A</a>
      <a href="ss3b_select_session_term.php">S.S.S 3B</a>
  </div>
</div>
         </div>
        
        </div>
        <div class="container-fluid" style="background-color: lightgoldenrodyellow;"> 
      <div class="container">
        <div class="table">
            <center>  <table style="">
            <tr>
         
                <td align="center">  <h2 style="font-family:ubuntu;">School Fee Payment</h2> <div class="emoji "><a href="class_selector_new.php"><img src="image/money.png" width="200" height="200"></a><p>New Student</p></td> 
            </tr>
                </table></center>
        </div>
        </div>
        </div>
    </body>
</html>