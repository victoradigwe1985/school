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
                #mg{
                    margin-left:0% !important;
                    width:100% !important;
                }
                
                #scroll {
                     
                   margin-left:0% !important;
                   
                }
 }

            </style>
           
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; position:fixed; float: left; padding-top: 20px;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="class_selector_database.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:5%; padding-bottom: 5%;"  id="scroll"> 
        
    <center> <h4><strong>SALVATION EXCELLENCE GROUP OF SCHOOL</strong></h4><h5><strong> No 7 Dein Street, Agbor Delta State </strong></h4><h5><strong> NURSERY/PRIMARY AND SECONDARY SCHOOL,</strong></h5><h5><strong>J.S.S 2B RECORDS</strong></h5></center>
    <br>
    <table id="mg" class="table  table-bordered table-condensed  table-striped" style="margin-left:10%;">
            <thead>
                <th>Register ID</th>
                <th>Amission No</th>
                 <th>First name</th>
                 <th>Middle name</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Email</th>
                <th>password</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Registered On</th>
                <th id="ed">Action</th>
                <th id="ed">Action</th>
                 <th id="ed">Action</th>
            </thead>
            <tbody>
            <?php
            require_once("connection.php");
            $select="SELECT * FROM js2b_register";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $register_id= $row["register_id"];
                $admission_no= $row["admission_no"];
                $first_name= $row["first_name"];
                $middle_name= $row["middle_name"];
                $surname= $row["surname"];
                $username= $row["username"];
                $email= $row["email"];
                $password=$row["password"];
                $gender= $row["gender"];
                $address= $row["address"];
                $registered_on=$row["registered_on"];
                $edit ='<a href="jss2b_edit_1.php?id='.$row['register_id'].'"><button  type="button " value="Edit">Edit</button></a>';
                $view ='<a href="jss2b_view.php?id='.$row['register_id'].'"><button  type="button " value="View">View</button> </a>';
                echo "<tr><td>$register_id</td>
                         <td>$admission_no</td>
                          <td>$first_name</td>
                          <td>$middle_name</td>  
                         <td>$surname</td>
                         <td>$username</td>
                         <td>$email</td>
                         <td>$password</td>
                         <td>$gender</td>
                        <td>$address</td>
                        <td>$registered_on</td>
                         
                         <td id='ed'>   <form method='POST' action='jss2b_delete_1.php'>
                                 <input type='hidden' value='$register_id' name='delete' />
                                 <input type='submit' value='Delete'>
                               </form>
                        </td>
                        <td id='ed'>$edit</td>
                        <td id='ed'>$view</td>
                     </tr>";
            }
      echo"</table>";
            ?>
          </tbody>
        </table>
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