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
                 #t1 {
                    margin-left:60% !important; 
                    font-size:16px !important; 
                   
                }
                #t2 {
                   margin-left:86.4% !important;
                   border:3px solid black !important;
                   width: 13.4% !important; 
                   margin-top: -2.9% !important;
                   font-size: 16px !important; 
                }
                #scroll {
                   margin-left:0% !important;
                   
                }
 }

            </style>
           
            
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; position: fixed; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
                   <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="pri3c_select_session_term.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
      
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;" id="scroll"> 
         
             <center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOLS</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5></strong></h4><h5><strong>Primary 3C First Term School Fee Record</strong></h5></center>
    <br>
    <center> <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size:16px;" >
            <tr align="left">
                <th>Register ID</th>
                <th>Student ID</th>
                 <th style="width:20%;">Full name</th>
                 <th>First payment</th>
                <th>Second payment</th>
                <th>full Payment</th>
                <th style="width:13.3%;">Total</th>
                <th id='ed'>Action</th>
                <th id='ed'>Action</th>
             </tr>
            <?php
             $total1 =0;
            require_once("connection.php");
            $select="SELECT * FROM pri3c_schoolfee";
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
              
           
              
               $edit ='<a href="pri3c_edit.php?id='.$row['register_id'].'"><button  type="button " value="Edit">Add</button></a>';
                echo "<tr><td>$register_id</td>
                         <td>$stud_id</td>
                          <td>$fullname</td>
                          <td>$firstpay</td>  
                         <td>$secondpay</td>
                         <td>$fullpay</td>
                         <td>$total</td>
                              <td id='ed'>   <form method='POST' action='pri3c_delete.php'>
                                 <input type='hidden' value='$register_id' name='delete' />
                                 <input type='submit' value='Delete'>
                               </form>
                        </td>
                         <td id='ed'>$edit</td>
                     
                     </tr>";
            }      echo"</table>";
      echo"</table>";
     
            ?>
             <p style="margin-left:42%; font-size:16px;" id='t1' > <b>TOTAL: ₦ </b></p> <p style="margin-left:64%;  border:3px solid black; width: 13.5%; margin-top: -2.9%; font-size: 16px; " id="t2"><b> <?php   echo number_format($total1, 0, '', ','); ?></b></p>
        </table></center>
    
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
 

            