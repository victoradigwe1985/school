<?php
if(isset($_POST['submit'])){
    include_once("connection.php");
    
           $id=$_REQUEST["id"];
            $staff_id=$_POST["staff_id"];
            $FN=$_POST["fn"];
            $MN=$_POST["mn"];
            $SN=$_POST["sn"];
            $BS=$_POST["bs"];
            $HRA=$_POST["hra"];
            $MA=$_POST["ma"];
            $TA=$_POST["ta"];
            $WA=$_POST["wa"];
            $BON=$_POST["bon"];
            $CON=$_POST["con"];
            $LA=$_POST["la"];
            $WD=$_POST["wd"];
            $DA=$_POST["da"];
            $TD=$_POST["td"];
            $total=$BS+$HRA+$MA+$TA+$WA+$BON+$LA;
            $total2=$TD+$CON;
            $netpay=$total-$total2;
   
    
    $update="UPDATE staff_salarynov SET staff_id='".$staff_id."',first_name='".$FN."',middle_name='".$MN."',surname='".$SN."',basic_salary='".$BS."',house_rent_allowance='".$HRA."',medical_allowance='".$MA."',transportation_allowance='".$TA."',wardrop_allowance='".$WA."',bonuses='".$BON."',leave_allowance='".$LA."',work_days='".$WD."',days_attended='".$DA."',tax_deduction='".$TD."',contribution='".$CON."' WHERE register_id='".$id."'";
    $query=mysqli_query($connect,$update);
    
    if($query){
        echo"<script type='text/javascript'>alert('Staff Salary Updated Successfully');window.location='fetching_staff_salarynov.php';</script>";
    }else{
       echo"<script type='text/javascript'>alert('Staff Salary Update Unsuccessful');window.location='fetching_staff_salarynov.php';</script>";  
    }
}
?>