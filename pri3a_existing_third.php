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

#scroll {
 
  width: 85%;
  height: 1000px;
  overflow-x: hidden;
  overflow-y: auto;
  text-align: center;
  padding: 20px;
}
            </style>
           
            
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; position: fixed; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
                   <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="pri3a_select_session_term.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
      
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;" id="scroll"> 
         
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
                <th style="width:13.3%;">Total</th>
                <th>Action</th>
                <th>Action</th>
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
              
           
              
               $edit ='<a href="pri3a_edit_third.php?id='.$row['register_id'].'"><button  type="button " value="Edit">Add</button></a>';
                echo "<tr><td>$register_id</td>
                         <td>$stud_id</td>
                          <td>$fullname</td>
                          <td>$firstpay</td>  
                         <td>$secondpay</td>
                         <td>$fullpay</td>
                         <td>$total</td>
                              <td>   <form method='POST' action='pri3a_delete_third.php'>
                                 <input type='hidden' value='$register_id' name='delete' />
                                 <input type='submit' value='Delete'>
                               </form>
                        </td>
                         <td>$edit</td>
                     
                     </tr>";
            }      echo"</table>";
      echo"</table>";
     
            ?>
             <p style="margin-left:42%; font-size:16px;"  > <b>TOTAL: ₦ </b></p> <p style="margin-left:62.5%;  border:1px solid black; width: 13.5%; margin-top: -4.5%; font-size: 16px; "><b> <?php   echo number_format($total1, 0, '', ','); ?></b></p>;
        </table></center>
    
     <center><div class="container" style="margin-top: 5%;"> <a href="pri3a_existing1_third.php"><button value="OK">Extract To Print</button></a></div></center>
   </div>
   
</body>
</html>
 

            