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
#scroll {
 
  width: 85%;
  height: 650px;
  text-align: center;
  padding-right:  20%;
  margin-top: 4%;
}

#table{
        position:relative;
        top:115px;
        right:-26%;
    }
    #table1{
        position:relative;
        top:60px;
        right:-95%;
    }
     #table2{
        position:relative;
        top:140px;
        right:0%;
    }
            </style>
           
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; position: fixed; background-color: black; margin-left: 0px; margin-top: -4%; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="home.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="home.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
        
 <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;" id="scroll" > 
<nav class="navbar navbar-default navbar-fixed-top" style=" margin-left:15%; ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                                                            
          </button>
		  
            <a class="navbar-brand" id="navbar1" href="select_month.php"> << Go Back</a>
        </div>
		
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="staff_login.php">Generate Salary Slip</a></li>
              <li class="active"><a href="fetching_staff_salary.php">Consolidation</a></li> 
              <li><a href="staff_salary_sheet.php">Create</a></li> 
          </ul>
		 
        </div>
      </div>
    </nav>
	
<br><br><br>
<center style="padding-left:40%;"> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOL</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5></center><br><br><br>
    
 
 
<div class="container" style="margin-top: -15%;" style="">
    <table  class=" table table-condensed  table-striped table-bordered" style="width:1490px" id="table2"><thead><tr><th style="padding-left: 28%;">Consolidated Salary Sheet For The Month of September</th></tr></thead></table>
        <table  class=" table table-bordered" style="width:41%; background-color: grey;" id="table"><thead><tr><th>TOTAL GROSS SALARY</th></tr></thead></table><span><table  class=" table table-bordered" style="width:15%; background-color: grey;" id="table1"><thead><tr><th>TOTAL DEDUCTION</th></tr></thead></table></span>
        <center><table class="table table-condensed  table-striped table-bordered" style="width:100%;" style="margin-right:30%;">
  <thead>
 
    <tr>
        <th style="padding-top:5%; width:5%;">Register Id</th>
	  <th style="padding-top:5%; width:5%;">Staff ID</th>
           <th style="width:8%;">Surname</th>
           <th style="width:8%;">First Name</th>
            <th style="width:8%;">Middle Name</th>
	  <th style="width:3%;">Basic Salary(BS)</th>
	  <th style="width:3%;">House Rent Allowance</th>
	  <th style="width:3%;">Medical Allowance</th>
	  <th style="width:3%;">Tax Allowance</th>
	  <th style="width:3%;">Wardop Allowance</th>
	  <th style="width:3%;">Bonuses</th>
	  <th style="width:3%;">Leave Allowance</th>
          <th style="width:3%;">Work Days</th>
          <th style="width:3%;">Days Attended</th>
           <th style="width:5%;">TOTAL</th>
           <th style="width:3%;">Tax Deduction</th>
          <th style="width:3%;">Contribution</th>
          <th style="width:5%;">Total</th>
          <th style="width:50%;">NetPay</th>
           <th style="">Option</th>
           <th style="">Option</th>
	</tr> 
  </thead>
  
 <?php
 $netpay1=0;
 include_once("connection.php");     
 $select="SELECT * FROM staff_salarysep";
 $query=mysqli_query($connect,$select);
 while($fetch=mysqli_fetch_array($query)){
     $register_id=$fetch["register_id"];
	 $staff_id=$fetch["staff_id"];
          $firstname=$fetch["first_name"];
             $middlename=$fetch["middle_name"];
              $surname=$fetch["surname"];
         $BS=$fetch["basic_salary"];
            $HRA=$fetch["house_rent_allowance"];
            $MA=$fetch["medical_allowance"];
            $TA=$fetch["transportation_allowance"];
            $WA=$fetch["wardrop_allowance"];
            $BON=$fetch["bonuses"];
            $CON=$fetch["contribution"];
            $LA=$fetch["leave_allowance"];
            $WD=$fetch["work_days"];
            $DA=$fetch["days_attended"];
            $total=$fetch["total"];
            $TD=$fetch["tax_deduction"];
            $total2=$fetch["total2"];
	    $netpay=$fetch["net_pay"];
             $edit ='<a href="staff_salary_editsep.php?id='.$fetch['register_id'].'"><button  type="button " value="Edit">Add</button></a>';
	    $total=$BS+$HRA+$MA+$TA+$WA+$BON+$LA;
            $total2=$TD+$CON;
            $netpay=$total-$total2;
             $netpay1 += $netpay;
        
   echo "<tr>
       <td>$register_id</td>
        <td>$staff_id</td>
             <td>$surname</td>
		   <td>$firstname</td>
                   <td>$middlename</td>
                   <td>$BS</td>
		   <td>$HRA</td>
		   <td>$MA</td>
		   <td>$TA</td>
		   <td>$WA</td>
		   <td>$BON</td>
                   <td>$LA</td>
                   <td>$WD</td>
                   <td>$DA</td>
                    <td>$total</td>
                    <td>$TD</td>
                    <td>$CON</td>
                    <td>$total2</td>
                    <td>$netpay</td>
		   <td><form method='post' action='salary_deletesep.php'>
               <input type='hidden' value='$register_id' name='delete' />
               <input type='submit' value='Delete'class='btn btn-danger'/>
              </form>
		  </td>
                   <td>$edit</td>
		</tr>";	 
 }
 echo"</table>";
 
?>
    <p style="margin-right:-119%; font-size:16px;"  > <b>TOTAL: ₦ </b></p> <p style="margin-left:113.5%;  border:2px solid lavender; width: 6%; margin-top: -4.5%; font-size: 16px; padding-top: 1.5%;"><b> <?php   echo"$netpay1"; ?></b></p>;   
        </table></center>
        
        <div class="container"> <a href="fetching_staff_salarysep1.php"><button value="OK">Extract To Print</button></a></div>
 </div> 
    </div>
    </body>
</html>