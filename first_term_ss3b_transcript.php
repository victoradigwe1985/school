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
                    background-color: black;
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
  height: 800px;
  overflow-x: hidden;
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
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="class_selector_database.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;"  id="scroll"> 
        
    <center> <h4><strong>BRAIN TRUST SECONCARY SCHOOL,</strong></h4><h5><strong>S.S.S 3B FIRST TERM TRANSCRIPT</strong></h5></center>
    <br>
        <table cellpadding="15px" width="100%" border="1px" cellspacing="0px">
            <tr align="left">
                <th style="width: 10px;">Amission No</th>
                <th style="width: 5px;">Exam No</th>
                 <th style="width: 10px;">First name</th>
                 <th style="width: 10px;">Middle name</th>
                <th style="width: 10px;">Surname</th>
                 <th style="width: 10px;">Gender</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px; padding: 1px;">Mathmatics</th>
                 <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Eng. Lang.</th>
                  <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Agricultural Sc.</th>
                   <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Economics</th>
                    <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Chemistry</th>
                     <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Biology</th>
                      <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Physics</th>
                       <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Geography</th>
                        <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Literature in Eng.</th>
                        
                
             </tr>
            
             
            <?php
            require_once("connection.php");
            $select="SELECT * FROM first_term_ss3b";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $admission_no= $row["admission_no"];
                $exam_no= $row["exam_no"];
                $first_name= $row["first_name"];
                $middle_name= $row["middle_name"];
                $surname= $row["surname"];
                $gender= $row["gender"];
                $math_total= $row["math_total"];
                $math_grade= $row["math_grade"];
                 $eng_total= $row["eng_total"];
                $eng_grade= $row["eng_grade"];
                $agri_total= $row["agri_total"];
                $agri_grade= $row["agri_grade"];
                 $econ_total= $row["econ_total"];
                $econ_grade= $row["econ_grade"];
                 $chem_total= $row["chem_total"];
                $chem_grade= $row["chem_grade"];
                 $bio_total= $row["bio_total"];
                $bio_grade= $row["bio_grade"];
                 $phys_total= $row["phys_total"];
                $phys_grade= $row["phys_grade"];
                 $geo_total= $row["geo_total"];
                $geo_grade= $row["geo_grade"];
                 $lit_total= $row["lit_total"];
                $lit_grade= $row["lit_grade"];
               
                echo "<tr>
                         <td>$admission_no</td>
                         <td>$exam_no</td>
                          <td>$first_name</td>
                          <td>$middle_name</td>  
                         <td>$surname</td>
                         <td>$gender</td>
                         <td>$math_total $math_grade</td>
                         <td>$eng_total $eng_grade</td>
                         <td>$agri_total $agri_grade</td>
                         <td>$econ_total $econ_grade</td>
                        <td>$chem_total $chem_grade</td>
                         <td>$bio_total $bio_grade</td>
                          <td>$phys_total $phys_grade</td>
                           <td>$geo_total $geo_grade</td>
                          <td>$lit_total $lit_grade</td>
                              
                     </tr>";
            }
      echo"</table>";
            ?>
        </table>
    <center><div class="container" style="margin-top: 5%;"> <a href="first_term_ss3b_transcript_1.php"><button value="OK">Extract To Print</button></a></div></center>
        
   </div>
    </body>
</html>