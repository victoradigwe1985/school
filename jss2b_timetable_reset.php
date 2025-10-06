<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/plugin.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
               
                body{
                    background-color:  lightgoldenrodyellow;
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

<div class="container" style="width:200px; height:1500px;position: fixed; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-md btn-success" style="border-color:gray;  font-size: 16px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="class_selector_view_timetable.php" class="btn btn-md btn-success" style="border-color: gray;  font-size: 16px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container" style="background-color: lightgoldenrodyellow; margin-left:14%;" > 
         
<?php
include_once("connection.php");
$id=$_GET["id"];
$query="SELECT * FROM jss2b_time_table WHERE timeTable_id='$id'";
$que=mysqli_query($connect,$query);
if(mysqli_num_rows($que)>=1){
	while($fetch=mysqli_fetch_array($que)){
         $timeTable_id=$fetch["timeTable_id"];
	 $day=$fetch["day"];
         $time1=$fetch["time1"];
	 $time2=$fetch["time2"];
	 $time3=$fetch["time3"];
	 $time4=$fetch["time4"];
	 $time5=$fetch["time5"];
	 $time6=$fetch["time6"];
	 $time7=$fetch["time7"];
	 $time8=$fetch["time8"];
        $time9=$fetch["time9"];
  
	}
	?>

<div class="container">
    <h3 class='text-default'>Edit and Update this Time Table</h3>
  <form method="post" action="jss2b_time_table_update.php?id=<?php echo "$timeTable_id" ?>">
    <div class="row">
	    
	  <div class="col-md-2">
	  	<label class="label">Lecture Day</label>
	      <div class="form-group">
		    <select name="day" class="form-control" value="<?=$day;?>" placeholder="" required="required">
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
		 <label class="label">Time:8am-8:45am</label>
	       <select name="select1" class="form-control" value="<?=$time1;?>" placeholder="">
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
		 <label class="label">Time:8:45am-9:30am</label>
		    <select name="select2" class="form-control" value="<?=$time2;?>" placeholder="">
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
		    <label class="label">Time:9:30am-10:15am</label>
		    <select name="select3" class="form-control" value="<?=$time3;?>" placeholder="">
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
		 <label class="label">Time:10:15am-11:00am</label>
		    <select name="select4" class="form-control" value="<?=$time4;?>" placeholder="">
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
		   <label class="label">Time:11:00am-11:45am</label>
		    <select name="select5" class="form-control" value="<?=$time5;?>" placeholder="">
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
		   <label class="label">Time:11:45am-12:45pm</label>
		    <select name="select6" class="form-control" value="<?=$time6;?>" placeholder="">
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
		  <label class="label">Time:12pm-1:25pm</label>
		    <select name="select7" class="form-control" value="<?=$time7;?>" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                            <option>Closing</option>
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
		   <label class="label">Time:1:25pm-2:10pm</label>
		    <select name="select8" class="form-control" value="<?=$time8;?>" placeholder="">
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
		   <label class="label">Time:2:30am</label>
		    <select name="select9" class="form-control" value="<?=$time9;?>" placeholder="">
			   <option>Select course</option>
			   <option>Free</option>
                            <option>Break</option>
                           <option>Closing</option>
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
		   <button type="submit" name="submit" style="" class="btn btn-lg btn-success">Update Time Table</button>
         </div>
		</div>
		
       </div>	
  </form>	
	 </div>
	
<?php
}else{
	echo"no entry found";
}
?>
         </div>
</body>
</html>














