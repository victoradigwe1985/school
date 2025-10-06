<?php
if(isset($_POST['submit'])){
    include_once("connection.php");
    
    $id=$_REQUEST["id"];
    $stud_id=$_POST["stud_id"];
    $fullname=$_POST["fullname"];
    $firstpay=$_POST["firstpay"];
    $secondpay=$_POST["secondpay"];
    $fullpay=$_POST["fullpay"];
    $total=$firstpay+$secondpay+$fullpay;
   
   
    
    $update="UPDATE jss1a_schoolfee SET stud_id='".$stud_id."',fullname='".$fullname."',firstpay='".$firstpay."',secondpay='".$secondpay."',fullpay='".$fullpay."',total='".$total."' WHERE register_id='".$id."'";
    $query=mysqli_query($connect,$update);
    
    if($query){
        echo"<script type='text/javascript'>alert('Record Updated Successfully');window.location='jss1a_existing.php';</script>";
    }else{
       echo"<script type='text/javascript'>alert('Record Update Unsuccessful');window.location='jjss1a_existing.php';</script>";  
    }
}
?>