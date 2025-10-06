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
            *{
                margin:0;
                padding:0;
            }
            body{
                background-color: lightgoldenrodyellow;
            }
                header{
                    height:100px;
                    background: black;
                    width: 100%;
                    position: fixed;
                    margin-top: -10%;
                }
               
                .website_name{
                     float:left;
                      width:30%;
                     line-height:100px; 
                 }
                 .website_name a{
                     text-decoration: none;
                     font-size:30px;
                     letter-spacing: 5px;
                 }
                 
                 .container nav{
                     float:right;
                     line-height:100px;
                     font-size:20px;
                     padding-right: 30px;
                     word-spacing: 20px;
                 }
                 .container a{
                     text-decoration: none;
                      }
            nav a:hover{
                background-color:blue;
               
            }
            .footer{
                height: 250pt;
                width: 100%;
                background-color: black;
                position:relative; 
            }
            .footer-bottom{
                background:grey;
                color:white;
                height: 25px;
                width: 100%;
                text-align: center;
                position: absolute;
                bottom: 0px;
                padding: 0px;
            }
            .width{
                width:60%;
                text-align: center;
              
            }
            .width h2{
                padding-top: 5%;
            }
             
            .bolt{
                float:left;
                padding-left: 5px;
                 width:calc(100%/3);
                 padding-top: 5%;
                 box-sizing: border-box;
            }
             .form{
     width: 300px;
     margin: 0 auto;
}
input[type='text'], input[type='email'],
input[type='password'] {
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
.gender{
    width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
input[type='submit']{
     padding: 10px 25px 8px;
     color: #fff;
     background-color: #0067ab;
     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px solid #0164a5;
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
}
input[type='submit']:hover {
     background-color: #024978;
}
gender{
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
    
#scroll {
 
  width: 85%;
  height: 800px;
  overflow-x: hidden;
  overflow-y: auto;
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
        <a href="class_selector_database_1.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%; padding-bottom: 10%;"  id="scroll"> 
        



<?php
include_once("connection.php");
$id=$_GET["id"];
$select="SELECT *FROM pri5a_assessment_register WHERE register_id='$id'";
$query=mysqli_query($connect,$select);
if(mysqli_num_rows($query)>=1){
    while($row=mysqli_fetch_array($query)){
        $user=$row["register_id"];
         $admission_no=$row["admission_no"];
          $first_name=$row["first_name"];
          $middle_name=$row["middle_name"];
          $surname=$row["surname"];
          
                  
    }
    ?>
<div class="form" style=" margin-bottom: 10%">

     <form method="POST" action="pri5a_assessment_update_1.php?id=<?php echo "$user" ?>" >
     <h3>Edit and update this record</h3><br><br>
     <div><label>Admission No:</label></div>
     <input type="text" size="24" name="admission_no"  value="<?=$admission_no;?>" required="required" placeholder="Enter Admission No."><br>
          <br>
          <div><label>First Name:</label></div>
          <input type="text" size="24" name="first_name"  value="<?=$first_name;?>" required="required" placeholder="Enter first Name"><br>
          <br>
          <div> <label>Middle Name:</label></div>
          <input type="text" size="24" name="middle_name"  value="<?=$middle_name;?>" required="required" placeholder="Enter middle Name"><br>
          <br>
          <div> <label>Surname:</label></div>
           <input type="text" name="surname" value="<?=$surname;?>" size="24" required="required" placeholder="Entername"><br><br>
           <div><label>Neatness</label></div>
            <select class="gender" name="neatness" value="" required="required">
            <option></option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
             </select><br><br>
            <div><label>Puntuality</label></div>
            <select class="gender" name="puntuality" value="" required="required">
            <option></option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
             </select><br><br>
             <div><label>Self Control</label></div>
            <select class="gender" name="self_control" value="" required="required">
            <option></option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
             </select><br><br>
             <div><label>Relationship With Other</label></div>
            <select class="gender" name="relationship" value="" required="required">
            <option></option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
             </select><br><br>
             <div><label>Politenss</label></div>
            <select class="gender" name="politeness" value="" required="required">
            <option></option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
             </select><br><br>
           <div><label>Class Teacher's Name:</label></div>
          <input type="text" size="24" name="class_teacher_name"  value="" maxlength="20" required="required" placeholder="Enter Class Teacher's Name"><br>
          <br>
           <div><label>Head Teacher's Name:</label></div>
          <input type="text" size="24" name="head_teacher_name"  value="" maxlength="20" required="required" placeholder="Enter Head Teacher's Name"><br>
          <br>
              <div><label>Class Teacher Comment</label></div>
              <textarea name="comment" rows="10" cols="30" width="20" maxlength="50" required="required"></textarea>
           <input name="submit" type="submit" value="Add">
          </form>
</div>
<?php
}else{
    echo "No entry found";
}
?>

 
</div>
</body>
</html>
 

            