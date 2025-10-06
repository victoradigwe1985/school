<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST["delete"])&&!empty($_POST["delete"])){
    include("connection.php");
    $id=$_POST["delete"];
    $select="SELECT register_id FROM staff_salaryapr WHERE register_id='$id'";
    if($query=mysqli_query($connect,$select)){
        $getnum=mysqli_num_rows($query);
        if($getnum>0){
            $del="DELETE FROM staff_salaryapr WHERE register_id='$id'";
            if($query=mysqli_query($connect,$del)){
                ?>
<script type="text/javascript">
    alert("Data Deleted Successfully");
    window.location="fetching_staff_salaryapr.php";
    </script>
    <?php
            }else{
                ?>
    <script>
        alert("Failed to  delete the data");
         window.location="fetching_staff_salaryapr.php";
    </script>
    <?php
         }
        }else{
            ?>
    <script>
        alert("No Data found for this id <?php echo $id; ?>");
         window.location="fetching_staff_salaryapr.php";
    </script>
    <?php
        }
    }else{
        ?>
    <script>
        alert("Failed to query db!");
         window.location="fetching_staff_salaryapr.php";
    </script>
    <?php
    }
}else{
    ?>
    <script>
        alert("Parameter missing! Try again with appropriate parameter");
         window.location="fetching_staff_salaryapr.php";
    </script>
    <?php
}
?>