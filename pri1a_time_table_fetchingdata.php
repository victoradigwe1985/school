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

#navbar a:hover{
    background-color: darkgray;
}
#navbar1:hover{
    background-color: darkgray;
}
@media Print{
    
      #con {
                    display: none!important; 
                }
                #prnt {
                    display: none!important; 
                }
                 #ed {
                    display: none!important; 
                }
                
                #scroll {
                   margin:0% 5% !important;
                   width: 100% !important;
                   
                }
                
                 
 }

            </style>
           
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; position: fixed; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="class_selector_view_timetable_1.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
        
 <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;"  id="scroll"> 
<nav class="navbar navbar-default navbar-fixed-top" style=" margin-left:15%; ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                                                            
          </button>
		  
          <a class="navbar-brand" id="navbar1" href="class_selector_view_timetable_1.php"> << Go Back</a>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="pri1a_time_table_fetchingdata.php">Primary 1A</a></li>
              <li><a href="#">Primary 1B</a></li>
            <li><a href="#">Primary 1C</a></li>
              <li><a href="pri1a_time_table.php">Goto Create Time Table</a></li> 
          </ul>
		 
        </div>
      </div>
    </nav>
	
<br><br><br>
<center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOLS</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5><h5><strong>Primary 1A Third Term Time Table</strong></h5></center>
    <br>
 
 
        <table class=" table table-bordered" style="width:90%;">
  <thead>
    <tr>
	  <th>Day</th>
	  <th>8:00am-8:45am</th>
	  <th>8:45am-9:30am</th>
	  <th>9:30am-10:15am</th>
	  <th>10:15am-11:00am</th>
	  <th>11:00am-11:45am</th>
	  <th>11:45am-12:45pm</th>
	  <th>12:45pm-1:25pm</th>
	  <th>1:25pm-2:10pm</th>
	  <th>2:30pm</th>
	  <th id='ed'>Schedule</th>
	  <th id='ed'>Remove</th>
	</tr> 
  </thead>
        
 <?php
 include_once("connection.php");
 $select="SELECT * FROM pri1a_time_table";
 $query=mysqli_query($connect,$select);
 while($fetch=mysqli_fetch_array($query)){
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
	 $reset='<a class="btn btn-success" style="color:black;" href="pri1a_timetable_reset.php?id='.$fetch['timeTable_id'].'">Reset</a>';
	
   echo "<tr>
           <td>$day</td>
		   <td>$time1</td>
		   <td>$time2</td>
		   <td>$time3</td>
		   <td>$time4</td>
		   <td>$time5</td>
		   <td>$time6</td>
		   <td>$time7</td>
		   <td>$time8</td>
		   <td>$time9</td>
		   <td id='ed'>$reset</td>
		   <td id='ed'><form method='post' action='pri1a_timetable_delete.php'>
               <input type='hidden' value='$timeTable_id' name='delete' />
               <input type='submit' value='Delete'class='btn btn-danger'/>
              </form>
		  </td>
		</tr>";	 
 }
 echo"</table>";
?>
        </table>
<script type="text/javascript">
   function myFunction(){
	    window.print();
	   }
 </script>
 <div class="container" style="padding-bottom:5%; padding-top: 2%;" id="prnt">
      <center><button onclick="myFunction()" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-print"></i> <b>Print</b></button></center>
 </div> 
    </div>
    </body>
</html>