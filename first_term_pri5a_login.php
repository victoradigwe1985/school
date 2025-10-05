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
                 #con{
                    position: fixed;
                }
                        </style>
    </head>
    <body>
   
        <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size:18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="pri5a_select_term.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        <div class="container-fluid" style="background-color: lightgoldenrodyellow;"> 
          
          
            <center> 
              <div class="container" style="width:40%; margin:5% 40%; float: left;">
  <h2  style="padding-bottom:5%;">Enter Details to View Result</h2>
  <form class="form-horizontal" role="form" action="first_term_pri5a_login_handler.php" method="POST" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Admission Number:</label>
      <div class="col-sm-10">
        <input type="text" name="admission_no" class="form-control input-lg" id="pwd" required="required" placeholder="Enter Admission Number">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Exam Number:</label>
      <div class="col-sm-10">          
          <input type="text" name="exam_no" class="form-control input-lg" id="pwd" required="required" placeholder="Enter Exam Number">
      </div>
    </div>
    <div class="form-group">      
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-lg btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
            </center>
        
        </div>
    </body>
</html>