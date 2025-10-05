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
        
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin: auto; padding-bottom: 10%;"  id="scroll"> 
        
    <center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOL</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY,PRIMARY AND SECONDARY SCHOOL,</strong></h5><h6><strong>J.S.S 3A FIRST TERM TRANSCRIPT</strong></h6></center>
    <br>
        <table class="table-striped" cellpadding="15px" width="100%" border="1px" cellspacing="0px">
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
                   <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Intergrated Sc.</th>
                    <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">P.H.E</th>
                     <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Civic</th>
                      <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Art</th>
                       <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Computer</th>
                        <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Literature in Eng.</th>
                        
                
             </tr>
            
             
            <?php
            require_once("connection.php");
            $select="SELECT * FROM first_term_jss3a";
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
                 $int_total= $row["int_total"];
                $int_grade= $row["int_grade"];
                 $phe_total= $row["phe_total"];
                $phe_grade= $row["phe_grade"];
                 $civic_total= $row["civic_total"];
                $civic_grade= $row["civic_grade"];
                 $art_total= $row["art_total"];
                $art_grade= $row["art_grade"];
                 $computer_total= $row["computer_total"];
                $computer_grade= $row["computer_grade"];
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
                         <td>$int_total $int_grade</td>
                        <td>$phe_total $phe_grade</td>
                         <td>$civic_total $civic_grade</td>
                          <td>$art_total $art_grade</td>
                           <td>$computer_total $computer_grade</td>
                          <td>$lit_total $lit_grade</td>
                              
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
  
  
 <div class="container" style="padding-bottom:5%; padding-top: 2%;">
      <center><button onclick="myFunction()" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-print"></i> <b>Print Result</b></button></center>
 </div> 
   </div>
    </body>
</html>