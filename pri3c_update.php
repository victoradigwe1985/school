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
   
   
    
    $update="UPDATE pri3c_schoolfee SET stud_id='".$stud_id."',fullname='".$fullname."',firstpay='".$firstpay."',secondpay='".$secondpay."',fullpay='".$fullpay."',total='".$total."' WHERE register_id='".$id."'";
    $query=mysqli_query($connect,$update);
    
    if($query){
        echo"<script type='text/javascript'>alert('Record Updated Successfully');window.location='pri3c_existing.php';</script>";
    }else{
       echo"<script type='text/javascript'>alert('Record Update Unsuccessful');window.location='pri3c_existing.php';</script>";  
    }
}
?>