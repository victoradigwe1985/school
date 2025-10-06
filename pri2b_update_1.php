<?php
if(isset($_POST['submit'])){
    include_once("connection.php");
    
    $id=$_REQUEST["id"];
    $admission_no=$_POST["admission_no"];
    $first_name=$_POST["first_name"];
    $middle_name=$_POST["middle_name"];
    $surname=$_POST["surname"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $registered_on=$_POST["registered_on"];
    
    $update="UPDATE pri2b_register SET admission_no='".$admission_no."',first_name='".$first_name."',middle_name='".$middle_name."',surname='".$surname."',username='".$username."',email='".$email."',gender='".$gender."',address='".$address."',registered_on='".$registered_on."' WHERE register_id='".$id."'";
    $query=mysqli_query($connect,$update);
    if($query){
        echo"<script type='text/javascript'>alert('Record Updated Successfully');window.location='pri2b_fetchingdata.php';</script>";
    }else{
       echo"<script type='text/javascript'>alert('Record Update Unsuccessful');window.location='pri2b_fetchingdata.php';</script>";  
    }
    
}
?>