<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
require_once("connection.php");
if(isset($_POST["admission_no"])&& !empty($_POST["admission_no"])){
    $admission_no=sanitize($connect,$_POST['admission_no']);
     $exam_no=$_POST['exam_no'];
    
      
     $query="SELECT  *FROM pri6b_second_term_scores WHERE admission_no='$admission_no' AND exam_no='$exam_no'";
     if($remote=mysqli_query($connect,$query)){
         $countrow= mysqli_num_rows($remote);
         
         $_SESSION["admission_no"]="$admission_no";
         $_SESSION["exam_no"]="$exam_no";
          
         
         
         if($countrow>0){
             ?><script>window.location='second_term_pri6b_result.php?id=<?php echo "$admission_no" ?>';</script><?php
         }else{
             ?><script>alert('invalid Login Details');window.location='second_term_pri6b_login.php';</script><?php
         }
     }else{
         ?><script>alert('fail to connect to Database');window.location='second_term_pri6b_login.php';</script><?php 
     }
    
}
?>