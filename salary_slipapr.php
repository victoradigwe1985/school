<?php
          include_once("connection.php");
              $id=$_GET["id"];
              $select="SELECT  *FROM staff_register WHERE staff_id='$id'";
              $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $staff_id= $row["staff_id"];
                $phoneNumber=$row["tele_phone"];
                $firstname= $row["first_name"];
                 $middlename=$row["middle_name"];
                $surname=$row["surname"];
                $position=$row["position"];
             
                
          $select="SELECT *FROM staff_salaryapr WHERE staff_id='$id'";
       $query=mysqli_query($connect,$select);
      while($fetch=mysqli_fetch_array($query)){
	 $staff_id=$fetch["staff_id"];
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
                }
                }
            ?>

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
               #con{
                    float:left;
                }
                
            
            </style>
    </head>
    <body>
       
        <div class="container-fluid" style="background-color: lightgoldenrodyellow;" id="scroll"> <br>
         
          <a href="fetching_staff_salaryapr.php"> <button class="btn btn-default">Goto Salary Sheet</button> </a> 
          <center> <div class="container" > <br><br>   
                <h4> Salary Pay Slip for the Month Of April 2022</h4> 
                <table class="table table-condensed  table-striped table-bordered" style="width:60%; height: 30%;">
                 <tbody style=" height:5px; font-size: 10px;"> 
                     <tr><td style="width:5%;"></td><td style="width:20%;"></td><td style="width:1%;"></td> <td></td><td style="width:10%;"><b>STAFF ID</b></td><td><b> <?php echo $staff_id;?></b></td><td></td> <td></td><td></td> <td></td><td></td><td></td><td></td></tr>
                     <tr><td style="width:5%;"></td><td style="width:20%;"></td><td style="width:1%;"></td> <td></td><td style="width:10%;">Designation</td> <td> <?php echo  $position;?></td><td></td> <td></td><td></td> <td></td><td></td><td>Name</td><td><b style="font-size: 12px;"><?php echo  "$firstname $surname";?></b></td></tr>
                     <tr><td style="width:5%;">I</td><td style="width:20%;">Basic Salary</td><td style="width:1%;"></td> <td>₦ <?php echo  $BS;?></td><td style="width:10%;"></td><td></td><td>A</td><td>Total Attendance</td> <td><?php echo $DA;?></td><td></td><td></td> <td>Designation</td> <td><?php echo "$position ";?></td></tr>
         
                       <tr><td>I</td><td>House Rent Allowance</td><td>₦</td> <td style="width:15%;"> <?php echo  $HRA;?></td><td></td><td></td><td>B</td><td>Total Leave</td> <td><?php echo "0";?></td><td></td> <td></td><td>Total Attendance</td><td><?php echo $WD;?></td> </tr>
                        <tr><td>II</td><td>Medical Allawance </td><td>₦</td><td> <?php echo  $MA;?></td> <td></td><td></td><td>C</td><td>Total Salary days</td> <td><?php echo "30";?></td><td></td> <td></td><td>Total Salary days</td><td><?php echo "30"?></td></tr>
                        <tr><td>III</td> <td>Wadrop Allowance</td><td>₦</td> <td> <?php echo  $WA;?></td> <td></td><td></td><td></td><td></td> <td></td><td></td> <td></td><td>Total Leave </td><td><?php echo "0";?></td></tr>
                         <tr><td>IV</td> <td>Bonuses </td><td>₦</td> <td> <?php echo  $BON;?></td><td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td>Basic Salary</td><td></td></tr>
                          <tr><td>V</td> <td>Transportation Allowance  </td><td>₦</td> <td> <?php echo  $TA;?></td><td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td>House Rent Allowance</td><td> <?php echo  $HRA;?></td></tr>
                         <tr><td></td> <td></td><td></td><td></td><td></td><td></td><td></td> <td></td><td></td> <td></td><td></td><td>Medical Allowance </td><td> <?php echo  $MA;?></td> </tr>
                         <tr><td></td> <td></td> <td></td><td>Total Gross Salary </td><td>₦ <?php echo  $total;?></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td>Transportion Allowance </td><td> <?php echo  $TA;?></td> </tr>
                         
                           
                           <tr><td></td> <td></td><td></td> <td></td><td></td><td></td><td></td> <td></td><td></td> <td></td><td></td><td>Wadrop Allowance </td><td> <?php echo  $WD;?></td></tr>
                           <tr><td></td> <th>Deduction</th><td></td><td></td><td></td><td></td><td></td> <td></td><td></td> <td></td><td></td><td>Bonuses </td><td> <?php echo  $BON;?></td></tr>
                            <tr><td></td> <td>Tax Deduction</td><td>₦</td> <td> <?php echo  $TD;?></td><td></td><td></td><td></td> <td></td><td></td> <td>  </td><td></td><td>Total Additions</td><td> <?php echo  $total;?></td></tr>
                             <tr><td></td> <td>Contribution</td> <td>₦</td><td> <?php echo  $CON;?></td><td></td><td></td><td></td> <td></td><td></td> <td></td><td></td><td>TD</td><td> <?php echo  $TD;?></td></tr>
                             <tr><td></td> <td> </td><td></td> <td></td><td></td><td></td><td></td> <td></td><td></td> <td></td><td></td><td></td><td></td></tr>
                             <tr><td></td><td>Total Deduction</td> <td></td><td></td><td>₦ <?php echo  $total2;?></td><td></td><td></td> <td></td><td></td> <td></td><td> </td><td>Contribution</td><td> <?php echo  $CON;?></td></tr>
                             <tr><td></td> <td>SALARY AFTER DEDUCTION</td><td></td> <td> </td><td>₦ <?php echo  $netpay;?></td><td></td><td></td> <td></td><td></td> <td></td> <td></td><td>Total  Deductions </td><td> <?php echo  $total2;?></td></tr>
                             <tr><td></td> <td></td> <td></td><td></td><td></td> <td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td></tr>
                             <tr><td></td> <td><b>NET TAKE HOME </b></td><td></td><td></td> <td style="font-size:13px;"s><b>₦ <?php echo  $netpay;?></b></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td></tr>
          
  
      
             </tbody>
            </table>  
                 <script type="text/javascript">
   function myFunction(){
	    window.print();
	   }
 </script>
 <div class="container" style="padding-bottom:5%; padding-top: 2%;">
      <center><button onclick="myFunction()" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-print"></i> <b>Print</b></button></center>
 </div> 
        </div>
 
 
      </body>
</html>

       