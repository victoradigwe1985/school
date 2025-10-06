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
                        overflow-y:hidden;
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

.Reg_form{
             
                  padding-left: 15px;
                   padding-right: 15px;
                  border:3px solid black;
                  border-radius:25px 25px;
                  font-family: ubuntu-light;
                  
             }
             #image{
                 float:left;
             }
            body{
    background-color: lightgoldenrodyellow;
}    
#scroll {
 
  width: 85%;
  height: 800px;
  overflow-x: hidden;
  overflow-y: auto;
  text-align: center;
  padding: 20px;
}
     
            </style>
           
     
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="select_class.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; padding-bottom: 0%;"> 
         
             <div class="container" id="scroll">
                 <div class="container" style="margin-top: -5%;  width: 70%;" >
   <form action="js2b_handller.php" method="POST" class="form-horizontal" role="form"  enctype="multipart/form-data" >
      
         <br><br><br>
         <div class="Reg_form"  style="">
     <img id="image" src='image/log.jpg' width='100' height='100' alt='logo'> 
     <center> <h2 style="font-size:30px;"><strong>BRAIN TRUST SECONDARY SCHOOL,</strong></h2><br><h5><strong> 27,Ezechichie Street Idumu-Ozoma quarter Ubulu-Okiti Delta State</strong></h5>
         <h5><strong>ONLINE REGISTRATION FORM</strong></h5></center>
    <hr>
    <center> <h5>(Please make sure you do not register more than once) </h5></center>
     <p style="color:red; padding-top: 10px;">
             <?php
                     if(isset($_GET["msg"])&& !empty($_GET["msg"])){
                      echo $_GET["msg"];
                         }else{
                      echo"";
                      }
                  ?>
         </p>
 
       <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Passport:</label>
      <div class="col-sm-10">
        <input type="file" name="image" id="image" class="form-control input-lg"  placeholder="Enter First Name">
      </div>
    </div>

          <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">First Name:</label>
      <div class="col-sm-10">
          <input type="text" name="firstname" class="form-control input-lg" required="required" placeholder="Enter First Name">
      </div>
    </div>
         <div class="form-group">
         <label class="control-label col-sm-2" for="inputlg">Middle Name:</label>
      <div class="col-sm-10">
        <input type="text" name="middlename" class="form-control input-lg"  required="required" placeholder="Enter Middle Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Surname:</label>
      <div class="col-sm-10">          
          <input type="text" name="surname" class="form-control input-lg"  required="required" placeholder="Enter Surname">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Username:</label>
      <div class="col-sm-10">          
          <input type="text" name="username" class="form-control input-lg"  required="required" placeholder="Enter username">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">E-Mail:</label>
      <div class="col-sm-10">          
          <input type="email" name="email" class="form-control input-lg"  required="required" placeholder="Enter E-mail">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Password:</label>
      <div class="col-sm-10">          
          <input type="password" name="password" class="form-control input-lg"  required="required" placeholder="Enter Password">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Gender:</label>
      <div class="col-sm-10"> 
          <select name="gender" required="required"  required="required" class="form-control input-lg">
            <option>Male</option>
            <option>Female</option>
             <option>others</option>
 </select>
      </div>
    </div>
          <div class="form-group">
         <label class="control-label col-sm-2" for="inputlg">Age:</label>
      <div class="col-sm-10">
        <input type="number" name="age" class="form-control input-lg"  required="required"  placeholder="Enter Age">
      </div>
    </div>
          <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Class:</label>
      <div class="col-sm-10"> 
          <select name="class" required="required" class="form-control input-lg">
            <option>J.S.S 1A</option>
             <option>J.S.S 1B</option>
              <option>J.S.S 1C</option>
              <option>J.S.S 2A</option>
             <option>J.S.S 2B</option>
              <option>J.S.S 2C</option>
              <option>J.S.S 3A</option>
             <option>J.S.S 3B</option>
              <option>J.S.S 3C</option>
              <option>S.S 1A</option>
             <option>S.S 1B</option>
              <option>S.S 1C</option>
              <option>S.S 2A</option>
             <option>S.S 2B</option>
             <option>S.S 3A</option>
             <option>S.S 3B</option>
                  
 </select>
      </div>
    </div>
          <div class="form-group">
      <label class="control-label col-sm-2" for="inputlg">Address:</label>
      <div class="col-sm-10">          
          <input type="text" name="address" class="form-control input-lg"  required="required" placeholder="Enter Address">
      </div>
    </div>
    <div class="form-group">      
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit"  name="submit" class="btn btn-lg btn-default">Register</button>
      </div>
    </div>
    </div>
  </form>
 </div>
 </div>

         </div>
    </body>     
    </html>   
  