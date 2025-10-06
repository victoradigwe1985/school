<?php
if(isset($_POST['submit'])){
     include_once("connection.php");
	
    $id=$_REQUEST["id"];
         $day=$_POST["day"];
         $time1=$_POST["select1"];
	 $time2=$_POST["select2"];
	 $time3=$_POST["select3"];
	 $time4=$_POST["select4"];
	 $time5=$_POST["select5"];
	 $time6=$_POST["select6"];
	 $time7=$_POST["select7"];
	 $time8=$_POST["select8"];
         $time9=$_POST["select9"];
         
	$update="UPDATE jss3a_time_table SET day='".$day."',time1='".$time1."',time2='".$time2."',time3='".$time3."',time4='".$time4."',time5='".$time5."',time6='".$time6."',time7='".$time7."',time8='".$time8."',time9='".$time9."' WHERE timeTable_id='$id'";
	$query=mysqli_query($connect,$update);

        
	if($query){
	    echo"<script type='text/javascript'>alert('Time Table Updated Successfully');window.location='jss3a_time_table_fetchingdata.php';</script>";
    }else{
		 echo "<script type='text/javascript'>alert('Updation is Unsuccessful')</script>";
		    header("location:jss3a_time_table_fetchingdata.php?msg=$msg");
	 }
	 
}
?>












