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
          #con{
                    position: fixed;
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
  overflow-x: auto;
  overflow-y: auto;
  text-align: center;
  padding: 20px;
}

            </style>
           
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="jss1a_select_term_transcript.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;"  id="scroll"> 
        
    <center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOL</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY,PRIMARY AND SECONDARY SCHOOL,</strong></h5><h6><strong>J.S.S 1A THIRD TERM TRANSCRIPT</strong></h6></center>
    <br>
    <table class="table-striped" cellpadding="15px" width="100%" border="1px" cellspacing="0px">
        <tr align="left" >
                <th style="width: 10px; padding:5px;">Amission No</th>
                <th style="width: 5px; padding:5px;">Exam No</th>
                 <th style="width: 10px; padding:5px;">First name</th>
                 <th style="width: 10px; padding:5px;">Middle name</th>
                <th style="width: 10px; padding:5px;">Surname</th>
                 <th style="width: 10px; padding:5px;">Gender</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px; padding: 1px;">Mthematics</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Englis Lang.</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Igbo Lang.</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Basic Sc.</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">National Value</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">P.V.S</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Fine Art</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Business Studies</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">History</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">C.R.S</th>
                
             </tr>
            
             
            <?php
            require_once("connection.php");
            $select="SELECT * FROM third_term_jss1a";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $admission_no= $row["admission_no"];
                $exam_no= $row["exam_no"];
                $first_name= $row["first_name"];
                $middle_name= $row["middle_name"];
                $surname= $row["surname"];
                $gender= $row["gender"];
                $math_total=$row["math_total"];
                $math_teach_remarks=$row["math_teach_remarks"];
                $eng_total=$row["eng_total"];
                $eng_teach_remarks=$row["eng_teach_remarks"];
                $igbo_total=$row["igbo_total"];
                $igbo_teach_remarks=$row["igbo_teach_remarks"];
                $bs_total=$row["bs_total"];
                $bs_teach_remarks=$row["bs_teach_remarks"];
                $nv_total=$row["nv_total"];
                $nv_teach_remarks=$row["nv_teach_remarks"];
                $pvs_total=$row["pvs_total"];
                $pvs_teach_remarks=$row["pvs_teach_remarks"];
                $art_total=$row["art_total"];
                $art_teach_remarks=$row["art_teach_remarks"];
                $bus_total=$row["bus_total"];
                $bus_teach_remarks=$row["bus_teach_remarks"];
                $hs_total=$row["hs_total"];
                $hs_teach_remarks=$row["hs_teach_remarks"]; 
                $crs_total=$row["crs_total"];
                $crs_teach_remarks=$row["crs_teach_remarks"]; 
        
                 
                    
                echo "<tr>
                         <td>$admission_no</td>
                         <td>$exam_no</td>
                          <td>$first_name</td>
                          <td>$middle_name</td>  
                         <td>$surname</td>
                         <td>$gender</td>
                         <td>$math_total $math_teach_remarks</td>
                         <td>$eng_total $eng_teach_remarks</td>
                         <td>$igbo_total $igbo_teach_remarks</td>
                         <td>$bs_total $bs_teach_remarks</td>
                        <td>$nv_total $nv_teach_remarks</td>
                         <td>$psv_total $psv_total</td>
                        <td>$art_total $art_teach_remarks</td>
                         <td>$bus_total $bus_teach_remarks</td>
                         <td>$hs_total $hs_teach_remarks</td>
                         <td>$crs_total $crs_teach_remarks</td>
                     </tr>";
            }
      echo"</table>";
            ?>
        </table>
    <center><div class="container" style="margin-top: 5%;"> <a href="third_term_jss1a_transcript_1.php"><button value="OK">Extract To Print</button></a></div></center>
        
   </div>
    </body>
</html>