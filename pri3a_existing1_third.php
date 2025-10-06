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
                a:hover{
                    background-color:green;
                }
              
            </style>
           
            
    </head>
    <body>
        <div class="container-fluid"> 
    <center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOL</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h4><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h4><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5><h5><strong>Primary 3A Third Term School Fee Record</strong></h5></center>
    <br>
    <center> <table class="table  table-bordered table-condensed  table-striped" style="width:100%;" >
            <tr align="left">
                <th>Register ID</th>
                <th>Student ID</th>
                 <th style="width:20%;">Full name</th>
                 <th>First payment</th>
                <th>Second payment</th>
                <th>full Payment</th>
                <th style="width:13.5%;">Total</th>
             </tr>
            <?php
             $total1 =0;
            require_once("connection.php");
            $select="SELECT * FROM pri3a_schoolfee_third";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $register_id= $row["register_id"];
                $stud_id= $row["stud_id"];
                $fullname= $row["fullname"];
                $firstpay= $row["firstpay"];
                $secondpay= $row["secondpay"];
                $fullpay= $row["fullpay"];
                $total= $row["total"];
               
               $total1 += $total;
                   
               $edit ='<a href="edit.php?id='.$row['register_id'].'"><button  type="button " value="Edit">Add</button></a>';
                echo "<tr><td>$register_id</td>
                         <td>$stud_id</td>
                          <td>$fullname</td>
                          <td>$firstpay</td>  
                         <td>$secondpay</td>
                         <td>$fullpay</td>
                         <td>$total</td>
                             
      
                     </tr>";
            }
      echo"</table>";
            ?>
             <p style="margin-left:65%; font-size: 16px; margin-top: 0.30%; "   > <b>TOTAL: ₦</b></p> <p style="margin-left:86.5%;  border:1px solid black; width: 13.5%; margin-top: -3.8%; font-size: 16px; "><b> <?php   echo number_format($total1, 0, '', ','); ?></b></p>
        </table></center>
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
 

             