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

#table{
        position:relative;
        top:115px;
        right:-26%;
    }
    #table1{
        position:relative;
        top:60px;
        right:-73%;
    }
     #table2{
        position:relative;
        top:128px;
        right:0%;
    }
            </style>
           
    </head>
    <body>
        
        
     

    <center style="margin-bottom: -10%;"> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOL</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5></center><br><br><br>
    
 
 
    <table  class="table table-condensed  table-striped table-bordered" style="width:100%;" id="table2"><thead><tr><th style="padding-left: 28%;">Consolidated Salary Sheet For The Month Of May </th></tr></thead></table>
    <table  class="table table-condensed  table-striped table-bordered" style="width:41%;" id="table"><thead><tr><th style=" background-color: grey;">TOTAL GROSS SALARY</th></tr></thead></table><span><table  class="table table-condensed  table-striped table-bordered" style="width:15%; background-color: grey;" id="table1"><thead><tr><th>TOTAL DEDUCTION</th></tr></thead></table></span>
        <center><table class="table table-condensed  table-striped table-bordered" style="width:100%;">
  <thead>
 
    <tr>
        <th style="padding-top:5%; ">Register Id</th>
	  <th style="padding-top:5%; ">Staff ID</th>
           <th style="">Surname</th>
           <th style="">First Name</th>
            <th style="">Middle Name</th>
	  <th style="">Basic Salary(BS)</th>
	  <th style="">House Rent Allowance</th>
	  <th style="">Medical Allowance</th>
	  <th style="">Tax Allowance</th>
	  <th style="">Wardop Allowance</th>
	  <th style="">Bonuses</th>
	  <th style="">Leave Allowance</th>
          <th style="">Work Days</th>
          <th style="">Days Attended</th>
          <th style="">Tax Deduction</th>
           <th style="">TOTAL</th>
          <th style="">Contribution</th>
          <th style="">Total</th>
          <th style="">NetPay</th>
	</tr> 
  </thead>
  
 <?php
 $netpay1=0;
 include_once("connection.php");     
 $select="SELECT * FROM staff_salarymay";
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
                    <td>$TD</td>
                    <td>$total</td>
                    <td>$CON</td>
                    <td>$total2</td>
                    <td>$netpay</td>
		</tr>";	 
 }
 echo"</table>";
 
?>
    <p style="margin-right:-83%; font-size:16px;"  > <b>TOTAL: ₦ </b></p> <p style="margin-left:95.5%;  border:2px solid lavender; width: 4.8%; margin-top: -4%; font-size: 16px; padding-top: 1.5%;"><b> <?php   echo"$netpay1"; ?></b></p>;   
        </table></center>
        
         <script type="text/javascript">
   function myFunction(){
	    window.print();
	   }
 </script>
 <div class="container" style="padding-bottom:5%;">
      <center><button onclick="myFunction()" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-print"></i> <b>Print</b></button></center>
 </div> 

    </body>
</html>