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
 
 
  height: 620px;
  overflow-x: hidden;
  overflow-y: auto;
  text-align: center;
  padding: 20px;
}

            </style>
           
    </head>
    <body>
        
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin: auto; padding-bottom: 10%;"  id="scroll"> 
        
  <center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOL</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY,PRIMARY AND SECONDARY SCHOOL,</strong></h5><h6><strong>PRE-NURSERY THIRD TERM TRANSCRIPT</strong></h6></center>
    <br>
    <table class="table-striped" cellpadding="15px" width="100%" border="1px" cellspacing="0px">
        <tr align="left" >
                <th style="width: 10px; padding:5px;">Amission No</th>
                <th style="width: 5px; padding:5px;">Exam No</th>
                 <th style="width: 10px; padding:5px;">First name</th>
                 <th style="width: 10px; padding:5px;">Middle name</th>
                <th style="width: 10px; padding:5px;">Surname</th>
                 <th style="width: 10px; padding:5px;">Gender</th>
                <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px; padding: 1px;">Oral Comm.</th>
                 <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Recog.(L.S)</th>
                  <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Writting(L.S)</th>
                   <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Counting</th>
                    <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Recog.(M.S)</th>
                     <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Writting(M.S)</th>
                      <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Social N.I.</th>
                       <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Fine $ C.Art</th>
                        <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">Scientific R.T.</th>
                       <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">P.H.E</th>  
                       <th style=" transform:rotate(90deg); width: 5px; height: 100px; font-size: 11px;">C.R.S</th>
             </tr>
            
             
            <?php
            require_once("connection.php");
            $select="SELECT * FROM pre_nursery_first_term_scores";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $admission_no= $row["admission_no"];
                $exam_no= $row["exam_no"];
                $first_name= $row["first_name"];
                $middle_name= $row["middle_name"];
                $surname= $row["surname"];
                $gender= $row["gender"];
                $oral_comm_total= $row["oral_comm_total"];
                $oral_comm_gl= $row["oral_comm_gl"];
                $recog_eng_total= $row["recog_eng_total"];
                $recog_eng_gl= $row["recog_gl"];
                $writing_eng_total= $row["writing_eng_total"];
                $writting_eng_gl= $row["writing_eng_gl"];
                 $counting_total= $row["counting_total"];
                $counting_gl= $row["counting_gl"];
                 $recog_math_total= $row["recog_math_total"];
                $recog_math_gl= $row["recog_math_gl"];
                 $writing_math_total= $row["writing_math_total"];
                $writing_math_gl= $row["writing_math_gl"];
                 $social_n_ins_total= $row["social_n_ins_total"];
                $social_n_ins_gl= $row["social_n_ins_gl"];
                 $fine_c_a_total= $row["fine_c_a_total"];
                $fine_c_a_gl= $row["fine_c_a_gl"];
                 $scientific_r_t_total= $row["scientific_r_t_total"];
                $scientific_r_t_gl= $row["scientific_r_t_gl"];
               $phe_total= $row["phe_total"];
                $phe_gl= $row["phe_gl"];
                $crs_total= $row["crs_total"];
                $crs_gl= $row["crs_gl"];
                echo "<tr>
                         <td>$admission_no</td>
                         <td>$exam_no</td>
                          <td>$first_name</td>
                          <td>$middle_name</td>  
                         <td>$surname</td>
                         <td>$gender</td>
                         <td>$oral_comm_total $oral_comm_gl</td>
                         <td>$recog_eng_total $recog_eng_gl</td>
                         <td>$writing_eng_total $writting_eng_gl</td>
                         <td>$counting_total $counting_gl</td>
                        <td>$recog_math_total $recog_math_gl</td>
                         <td>$writing_math_total $writing_math_gl</td>
                          <td>$social_n_ins_total $social_n_ins_gl</td>
                           <td>$fine_c_a_total $fine_c_a_gl</td>
                          <td>$scientific_r_t_total $scientific_r_t_gl</td>
                           <td>$phe_total $phe_gl</td>  
                               <td>$crs_total $crs_gl</td>
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