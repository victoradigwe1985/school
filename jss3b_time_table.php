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

#scroll {
 
  width: 85%;
  height: 620px;
  overflow-x: hidden;
  overflow-y: auto;
  text-align: center;
  padding-right: 20px;
}
.form-control{
    width: 135px;
}
.label{
    width: 135px;
    color: black;
    font-size: 14px;
    padding-right: 0%;
}
            </style>
           
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px;position: fixed; background-color: black; margin-left: 0px; float: left; padding-top: 20px; position: fixed;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="class_selector_create_timetable.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:35%;" id=""> 
         
          
  <div class="container">
      <center><h3 class='text-default'>Select Subject and Create Time Table for J.S.S 3B</h3></center></br>
	<form role="form" action="jss3b_time_table_handller.php" method="post">
	  <div class="row">
	    
	  <div class="col-md-2">
	  	<label class="label">Lecture Day</label>
	      <div class="form-group">
		    <select name="select1"  class="form-control"  placeholder="" required="required">
			   <option>Select Day</option>
			   <option>Monday</option>
			   <option>Tuesday</option>
			   <option>Wednesday</option>
			   <option>Thursday</option>
			   <option>Friday</option>
			</select>
         </div>
		</div>
		
		
		
		
	   <div class="col-md-2">
	    <div class="form-group">
		 <label class="label">Time:8am-9:55am</label>
	       <select name="select2" class="form-control" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                            <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
		</div>
		
	  <div class="col-md-2">
	    <div class="form-group">
		 <label class="label">Time:10am-11:55am</label>
		    <select name="select3" class="form-control" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                            <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
		</div>
		
	 <div class="col-md-2">
	    <div class="form-group">
		    <label class="label">Time:12pm-12:55pm</label>
		    <select name="select4" class="form-control" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                            <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
		</div>
		
	  <div class="col-md-2">
	    <div class="form-group">
		 <label class="label">Time:12pm-1:55pm</label>
		    <select name="select5" class="form-control" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                            <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
          </div>
		
	  <div class="col-md-2">
	    <div class="form-group">
		   <label class="label">Time:12pm-1:55pm</label>
		    <select name="select6" class="form-control" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                            <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
		</div>
		
	  <div class="col-md-2">
	     <div class="form-group">
		   <label class="label">Time:1pm-2:55pm</label>
		    <select name="select7" class="form-control" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                           <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
		</div>
		
	 <div class="col-md-2">
	    <div class="form-group">
		  <label class="label">Time:2pm-4:55pm</label>
		    <select name="select8" class="form-control" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                           <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
		</div>
		
	  <div class="col-md-2">
	    <div class="form-group">
		   <label class="label">Time:3pm-4:55pm</label>
		    <select name="select9" class="form-control" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                           <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
		</div>
		
	  <div class="col-md-2">
	    <div class="form-group">
		   <label class="label">Time:5pm-5:55pm</label>
		    <select name="select10" class="form-control" placeholder="">
			   <option>Select course</option>
                            <option>closing</option>
			   <option>Free</option>
                            <option>Break</option>
			   <option>Jumaat Prayer</option>
			   <option>math111</option>
			   <option>math112</option>
			   <option>csc111</option>
			   <option>gse111</option>
			   <option>gse112</option>
			   <option>bio111</option>
			   <option>bio119</option>
			   <option>chem112</option>
			   <option>chem119</option>
			   <option>phy111</option>
			   <option>phy119</option>
			</select>
         </div>
		</div>
		
		
	   <div class="col-md-2">
	    <div class="form-group">
		 <label class="label">Proceed</label>
		   <button type="submit" name="submit" style="" class="btn btn-success">Create Time Table</button>
         </div>
		</div>
		
		
		
	 </div>
	</form>
  </div>
  

 
   
</div>     
                      
                 
    </body>
</html>
