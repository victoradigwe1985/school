<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if(isset($_POST["submit"])){
            require("connection.php");
            $day=sanitize($connect,$_POST["select1"]);
            $time1=sanitize($connect,$_POST["select2"]);
            $time2=sanitize($connect,$_POST["select3"]);
            $time3=sanitize($connect,$_POST["select4"]);
            $time4=sanitize($connect,$_POST["select5"]);
            $time5=sanitize($connect,$_POST["select6"]);
            $time6=sanitize($connect,$_POST["select7"]);
            $time7=sanitize($connect,$_POST["select8"]);
            $time8=sanitize($connect,$_POST["select9"]);
            $time9=sanitize($connect,$_POST["select10"]);
            
            
        $insert="INSERT INTO jss2a_time_table(timeTable_id,day,time1,time2,time3,time4,time5,time6,time7,time8,time9)VALUES('','$day','$time1','$time2','$time3','$time4','$time5','$time6','$time7','$time8','$time9')";
        if(mysqli_query($connect,$insert)){
        echo"<script type='text/javascript'>alert('Time Table Created Successfully');window.location='jss2a_time_table_fetchingdata.php';</script>";
        }else{
       echo"<script type='text/javascript'>alert('Time Table Not Created');window.location='jss2a_time_table_fetchingdata.php';</script>";  
    }
                       
         }                      
            
            ?>
