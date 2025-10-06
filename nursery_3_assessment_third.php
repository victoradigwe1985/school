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
  height: 1000px;
  overflow-x: auto;
  overflow-y: auto;
  text-align: center;
  padding: 5px;
}

            </style>
           
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; position: fixed; background-color: black; margin-left: 0px; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="nursery_3_select_term_assessment.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:5%; padding-bottom: 5%;"  id="scroll"> 
        
     <center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOLS</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h5><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5><h6><strong> Nurseery 3 Third Term Assessment Records</strong></h6></center>
    <br>
    <table class="table  table-bordered table-condensed  table-striped">
            <thead>
                <th>Register_ID</th>
                <th>Amission_No</th>
                 <th>FirstName</th>
                 <th>MiddleName</th>
                <th>Surname</th>
                <th>Neatness</th>
                <th>Puntuality</th>
                <th>Self Control</th>
                <th>Relationship With Other</th>
                <th>Politeness</th>
                <th>Class Teacher's Name</th>
                <th>Head Teacher's Name</th>
                <th>Comment</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
            require_once("connection.php");
            $select="SELECT * FROM nursery_3_assessment_third_register";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $register_id= $row["register_id"];
                $admission_no= $row["admission_no"];
                $first_name= $row["first_name"];
                $middle_name= $row["middle_name"];
                $surname= $row["surname"];
                $neatness=$row["neatness"];
                $puntuality=$row["puntuality"];
                $self_control=$row["self_control"];
                $relationship=$row["relationship"];
                $politeness=$row["politeness"];
                $class_teacher_name=$row["class_teacher_name"];
                $head_teacher_name=$row["head_teacher_name"];
                $comment=$row["comment"];
                
                $edit ='<a href="nursery_3_assessment_third_edit_1.php?id='.$row['register_id'].'"><button  type="button " value="Edit">Add</button></a>';
                echo "<tr><td>$register_id</td>
                         <td>$admission_no</td>
                          <td>$first_name</td>
                          <td>$middle_name</td>  
                         <td>$surname</td>
                         <td>$neatness</td>
                         <td>$puntuality</td>
                         <td>$self_control</td>
                         <td>$relationship</td>
                         <td>$politeness</td>
                         <td>$class_teacher_name</td>
                         <td>$head_teacher_name</td>
                         <td>$comment</td>
                         
                        <td>$edit</td>  
                     </tr>";
            }
      echo"</table>";
            ?>
          </tbody>
        </table>
   </div>
    </body>
</html>