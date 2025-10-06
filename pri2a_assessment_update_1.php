<?php
if(isset($_POST['submit'])){
    include_once("connection.php");
    
    $id=$_REQUEST["id"];
   
    $admission_no= $_POST["admission_no"];
    $first_name= $_POST["first_name"];
    $middle_name= $_POST["middle_name"];
    $surname= $_POST["surname"];
    $neatness=$_POST["neatness"];
    $puntuality=$_POST["puntuality"];
    $self_control=$_POST["self_control"];
    $relationship=$_POST["relationship"];
    $politeness=$_POST["politeness"];
    $class_teacher_name=$_POST["class_teacher_name"];
    $head_teacher_name=$_POST["head_teacher_name"];
    $comment=$_POST["comment"];
    
    $update="UPDATE pri2a_assessment_register SET admission_no='".$admission_no."',first_name='".$first_name."',middle_name='".$middle_name."',neatness='".$neatness."',puntuality='".$puntuality."',self_control='".$self_control."',relationship='".$relationship."',politeness='".$politeness."',class_teacher_name='".$class_teacher_name."',head_teacher_name='".$head_teacher_name."',comment='".$comment."' WHERE register_id='".$id."'";
    $query=mysqli_query($connect,$update);
    if($query){
        echo"<script type='text/javascript'>alert('Record Added Successfully');window.location='pri2a_assessment.php';</script>";
    }else{
       echo"<script type='text/javascript'>alert('Record Added Unsuccessful');window.location='pri2a_assessment.php';</script>";  
    }
    
}
?>