<?php
require_once("connection.php");
$id=$_GET["id"];
$select="SELECT *FROM js3c_register WHERE register_id='$id'";
$query=mysqli_query($connect,$select);
if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_array($query)){
        $user=$row["register_id"];
        $firstname=$row["first_name"];
        $middlename=$row["middle_name"];
        $surname=$row["surname"];
        $username=$row["username"];
        $email=$row["email"];
        $password=$row["password"];
        $confirm_password=$row["confirm_password"];
        $gender=$row["gender"];
        $address=$row["address"];
        $registered_on=$row["registered_on"];
          
    }
    ?>

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
            
        </style>
    </head>
    <body>
      <div class="container" style="width:200px; height:1500px; position: fixed; background-color: black; margin-left: 0px; float: left; padding-top: 20px; position: fixed;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size: 18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="jss3c_fetchingdata.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
         <div class="container-fluid" style="background-color: lightgoldenrodyellow; margin-left:15%;"  id="scroll"> 
        
    <Center>
        <table class="table table-bordered">
               
               <?php
               $query="SELECT *FROM js3c_register WHERE register_id='$id'";
               $result=mysqli_query($connect,$query);
               while($row=mysqli_fetch_array($result)){
                   echo'<tr>
                        
                        <img style="margin-top:3%;" height="100" width="80"  src="data:image/jpeg;base64,'.base64_encode($row['passport']).'"/>;
                        </tr>';
               }
               ?>
    </table></center>
    
<center><h3><?=$firstname?></h3></center>
<center><h3><?=$middlename?></h3></center>
<center><h3><?=$surname?></h3></center>
<center><h3><?=$username?></h3></center>
<center><h3><?=$email?></h3></center>
<center><h3><?=$gender?></h3></center>
<center><h3><?=$address?></h3></center>
<center><h3><?=$registered_on?></h3></center>
<?php
}else{
    echo"no data found";
}
?>
<center style=""><a href="jss3c_fetchingdata.php"><button value="OK">OK</button></a></center>
     





  <script>
    $(document).ready(function(){
        $('#insert').click(function(){
            var image_name=$('#image').val();
            if(image_name==''){
                alert("pleas select image");
                return false;
                
            }
            else{
                var extension=$('#image').val().split('.').pop().tolowercase();
                if(jQuery.inArray(extension,['gif,'png','jpg','jpeg''])==-1){
                    alert('invalid image file');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>


   
  </div>

    </body>
</html>
