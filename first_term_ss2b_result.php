 <?php
           include_once("connection.php");
              $id=$_GET["id"];
              $select="SELECT  *FROM ss2b_register WHERE admission_no='$id'";
              $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $register_id= $row["register_id"];
                $admission_no=$row["admission_no"];
                $first_name= $row["first_name"];
                $middle_name=$row["middle_name"];
                $surname= $row["surname"];
                $email= $row["email"];
                $gender= $row["gender"];
                $age=$row["age"];
                $class=$row["class"];
                $session="2020/2021";
                 
            $select="SELECT *FROM first_term_ss2b WHERE admission_no='$id'";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                 $math_1CA=  $row["math_1CA"];  
                 $math_2CA=  $row["math_2CA"];
                 $math_exam=$row["math_exam"];
                 $math_total=$row["math_total"];
                 $math_grade=$row["math_grade"];
                 $math_subject_position=$row["math_subject_position"];
                 $math_teach_remarks=$row["math_teach_remarks"];
                 
                 $eng_1CA=  $row["eng_1CA"];  
                 $eng_2CA=  $row["eng_2CA"];
                 $eng_exam=$row["eng_exam"];
                 $eng_total=$row["eng_total"];
                 $eng_grade=$row["eng_grade"];
                 $eng_subject_position=$row["eng_subject_position"];
                 $eng_teach_remarks=$row["eng_teach_remarks"];
               
                 
                 $econ_1CA=  $row["econ_1CA"];  
                 $econ_2CA=  $row["econ_2CA"];
                 $econ_exam=$row["econ_exam"];
                 $econ_total=$row["econ_total"];
                 $econ_grade=$row["econ_grade"];
                 $econ_subject_position=$row["econ_subject_position"];
                 $econ_teach_remarks=$row["econ_teach_remarks"];
                 
                 $chem_1CA=  $row["chem_1CA"];  
                 $chem_2CA=  $row["chem_2CA"];
                 $chem_exam=$row["chem_exam"];
                 $chem_total=$row["chem_total"];
                 $chem_grade=$row["chem_grade"];
                 $chem_subject_position=$row["chem_subject_position"];
                 $chem_teach_remarks=$row["chem_teach_remarks"];
                 
                 $bio_1CA=  $row["bio_1CA"];  
                 $bio_2CA=  $row["bio_2CA"];
                 $bio_exam=$row["bio_exam"];
                 $bio_total=$row["bio_total"];
                 $bio_grade=$row["bio_grade"];
                 $bio_subject_position=$row["bio_subject_position"];
                 $bio_teach_remarks=$row["bio_teach_remarks"];
                 
                 $phys_1CA=  $row["phys_1CA"];  
                 $phys_2CA=  $row["phys_2CA"];
                 $phys_exam=$row["phys_exam"];
                 $phys_total=$row["phys_total"];
                 $phys_grade=$row["phys_grade"];
                 $phys_subject_position=$row["phys_subject_position"];
                 $phys_teach_remarks=$row["phys_teach_remarks"];
                 
                 $geo_1CA=  $row["geo_1CA"];  
                 $geo_2CA=  $row["geo_2CA"];
                 $geo_exam=$row["geo_exam"];
                 $geo_total=$row["geo_total"];
                 $geo_grade=$row["geo_grade"];
                 $geo_subject_position=$row["geo_subject_position"];
                 $geo_teach_remarks=$row["geo_teach_remarks"];
                 
                 $mak_1CA=  $row["mak_1CA"];  
                 $mak_2CA=  $row["mak_2CA"];
                 $mak_exam=$row["mak_exam"];
                 $mak_total=$row["mak_total"];
                 $mak_grade=$row["mak_grade"];
                 $mak_subject_position=$row["mak_subject_position"];
                 $mak_teach_remarks=$row["mak_teach_remarks"];
                 
                 $gov_1CA=  $row["gov_1CA"];  
                 $gov_2CA=  $row["gov_2CA"];
                 $gov_exam=$row["gov_exam"];
                 $gov_total=$row["gov_total"];
                 $gov_grade=$row["gov_grade"];
                 $gov_subject_position=$row["gov_subject_position"];
                 $gov_teach_remarks=$row["gov_teach_remarks"];
                 
                 $com_1CA=  $row["com_1CA"];  
                 $com_2CA=  $row["com_2CA"];
                 $com_exam=$row["com_exam"];
                 $com_total=$row["com_total"];
                 $com_grade=$row["com_grade"];
                 $com_subject_position=$row["com_subject_position"];
                 $com_teach_remarks=$row["com_teach_remarks"];
                 
                 $lit_1CA=  $row["lit_1CA"];  
                 $lit_2CA=  $row["lit_2CA"];
                 $lit_exam=$row["lit_exam"];
                 $lit_total=$row["lit_total"];
                 $lit_grade=$row["lit_grade"];
                 $lit_subject_position=$row["lit_subject_position"];
                 $lit_teach_remarks=$row["lit_teach_remarks"];
                 
                 $hs_1CA=  $row["hs_1CA"];  
                 $hs_2CA=  $row["hs_2CA"];
                 $hs_exam=$row["hs_exam"];
                 $hs_total=$row["hs_total"];
                 $hs_grade=$row["hs_grade"];
                 $hs_subject_position=$row["hs_subject_position"];
                 $hs_teach_remarks=$row["hs_teach_remarks"];
                 
                 $art_1CA=  $row["art_1CA"];  
                 $art_2CA=  $row["art_2CA"];
                 $art_exam=$row["art_exam"];
                 $art_total=$row["art_total"];
                 $art_grade=$row["art_grade"];
                 $art_subject_position=$row["art_subject_position"];
                 $art_teach_remarks=$row["art_teach_remarks"];
                 
                 $crs_1CA=  $row["crs_1CA"];  
                 $crs_2CA=  $row["crs_2CA"];
                 $crs_exam=$row["crs_exam"];
                 $crs_total=$row["crs_total"];
                 $crs_grade=$row["crs_grade"];
                 $crs_subject_position=$row["crs_subject_position"];
                 $crs_teach_remarks=$row["crs_teach_remarks"];
                 
                 $class_position=$row["class_position"];
                 $mark_obtained=$row["mark_obtained"];
                 $Average=$row["Average"];
                 $form_teacher_remark=$row["Form_Teacher_Remark"];
                 $form_teacher_name=$row["Form_Teacher_Name"];
                 $handwritting_1=$row["handwritting_1"];
                 $HW_2=$row["HW_2"];
                 $HW_3=$row["HW_3"];
                 $HW_4=$row["HW_4"];
                 $HW_5=$row["HW_5"];
                 $GameSport_1=$row["Game_1"];
                 $G_2=$row["G_2"];
                 $G_3=$row["G_3"];
                 $G_4=$row["G_4"];
                 $G_5=$row["G_5"];
                 $DrawingPainting_1=$row["Drawing_Painting_1"];
                 $D_2=$row["D_2"];
                 $D_3=$row["D_3"];
                 $D_4=$row["D_4"];
                 $D_5=$row["D_5"];
                 $Craft_1=$row["Craft_1"];
                 $C_2=$row["C_2"];
                 $C_3=$row["C_3"];
                 $C_4=$row["C_4"];
                 $C_5=$row["C_5"];
                 $Musical_skills_1=$row["Musical_skills_1"];
                 $M_2=$row["M_2"];
                 $M_3=$row["M_3"];
                 $M_4=$row["M_4"];
                 $M_5=$row["M_5"];
                 $Puntuality_1=$row["Puntuality_1"];
                 $P_2=$row["P_2"];
                 $P_3=$row["P_3"];
                 $P_4=$row["P_4"];
                 $P_5=$row["P_5"];
                 $Attendance_1=$row["Attendance_1"];
                 $A_2=$row["A_2"];
                 $A_3=$row["A_3"];
                 $A_4=$row["A_4"];
                 $A_5=$row["A_5"];
                 $Neatness_1=$row["Neatness_1"];
                 $N_2=$row["N_2"];
                 $N_3=$row["N_3"];
                 $N_4=$row["N_4"];
                 $N_5=$row["N_5"];
                 $Communication_1=$row["Communication_1"];
                 $CM_2=$row["CM_2"];
                 $CM_3=$row["CM_3"];
                 $CM_4=$row["CM_4"];
                 $CM_5=$row["CM_5"];
                 $Honesty_1=$row["Honesty_1"];
                 $H_2=$row["H_2"];
                 $H_3=$row["H_3"];
                 $H_4=$row["H_4"];
                 $H_5=$row["H_5"];
                 $Obidence_1=$row["Obidence_1"];
                 $O_2=$row["O_2"];
                 $O_3=$row["O_3"];
                 $O_4=$row["O_4"];
                 $O_5=$row["O_5"];
                 
                 
                 
                 
                 
                 
                 
               
            }
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
           <style type="text/css" media="all">
           #f{
                    float:right;
                    margin-top: -20%;
                }
                 
                body{
              visibility: visible;
                       
                background-image:url(image/LetterHead.jpg) ;
                background-size:80% 100%;
                background-repeat:no-repeat;
                background-position-x: 80%;
                background-color:lightgoldenrodyellow; 
              
                }
                #con{
                    position: fixed;
                }
              
               
              #b  img{
                 position:relative;
                 right:-82%;
                 padding-bottom: 2px;
                  background-image:url(image/shadow_image.jpg);
                }
                
                /**  .container{
                 visibility: visible;
                background :url(image/LetterHead3.jpg);
                background-size:100% 100%;
                background-repeat:no-repeat;
               
            }
             
            @media print{
                 background:url(image/LetterHead3.jpg);
            }**/
              
             @media Print{
                     div{
               
               background-image:url(image/LetterHead.jpg) !important;
             
              font-size: 5pt! important;
              margin-top:0%!important;
              margin-bottom:0%!important;
              margin-left:-3.4%!important;
              margin-right:-3.4%!important;
             background-size:100% 105% !important;
                     }
                     img{
                   position:relative!important;
                 padding-top: -5%!important;
                  right:-80%!important;
                  width: 100px!important;
                  height:70px!important;
                  padding-bottom: 0.1%!important;
                  background-image:url(image/shadow_image.jpg)!important;
                 
                }
                .container{
                    padding-top: 7%!important;
                    padding-right: 12%!important;
                    padding-left: 7%!important;
                    padding-bottom: 7%!important;
                }
                .container-fluid button{
                    display: none!important;
                }
                #con {
                    display: none!important; 
                }
                #g p{
                   
                   padding-left: 25%!important;
                   padding-right:20%!important;
                   
                    
                }
                #f{
                    float:right!important;
                    margin-top: -25%!important;
                    width: 50%!important;
                   
                }
                #cd{
                   
                    padding-right:5px !important;
                   
                }
                  }
                
       
            </style>
    </head>
    <body>
        <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; float: left; padding-top:5%;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size:18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="first_term_ss2b_login.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
          <div class="container" style=" padding-left: 15%; padding-right: 8%; padding-top: 5%;" id="b">
             <table cellpadding="15px" width="100%" cellspacing="0px" style="width:100%;">
                 <thead>
                 <tr> 
                     <td style="line-height: 0.1em;">
                
               <?php
               $query="SELECT *FROM ss2b_register WHERE admission_no='$id'";
               $result=mysqli_query($connect,$query);
               while($row=mysqli_fetch_array($result)){
                   
                   echo'<img height="100" width="100" style=" margin-top:70px;" src="data:image/jpeg;base64,'.base64_encode($row['passport']).'"/>';
               }
               ?>
          </td>
                
            </tr>
             </thead>
             </table> 
         
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
       
     
     <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:2em;">
        <thead>
            <tr>
                <th style="width:60%">Name of Student: <?php echo $surname;?>  <?php echo  $middle_name;?>  <?php echo  $first_name;?> </th>
            <th style="width:15%">Age: <?php echo  $age;?></th>
            <th style="width:25%">Class:  <?php echo  $class;?></th>
            </tr>
    </thead>
            </table>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:2em;">
             <thead> 
            <tr>
            <th style="width:45%;">Admission No:  <?php echo $admission_no;?></th>
            <th style="width:25%;">Term:  <?php echo  'first term';?></th>
            <th style="width:30%;">Session:  <?php echo  '2021/2022';?></th>
            </tr>
            </thead>
            </table>
            <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:2em;">
                <thead>
            <tr>
            <th style="">Total Mark Obtainable: 1400</th>
            <th style="">Total Mark Obtained: <?php echo $mark_obtained;?></th>
            <th style="">Average: <?php echo $Average;?></th>
            <th style="">Class Position: <?php echo $class_position;?></th>
            </tr>
             </thead>
            </table>
           
            <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; margin-bottom: 2%;">
            <tbody>
            <tr>
            <th></th>
            <th style=" padding-left: 10px;">1st<br> CA</th>
            <th style=" padding-left: 10px;">2nd<br> CA</th>
            <th style=" padding-left: 10px;">Term's<br> Exam</th>
            <th style=" padding-left: 10px;">Total</th>
            <th style=" padding-left: 10px;">Grade</th>
            <th style=" padding-left: 10px;">Subject<br> Position</th>
            <th style=" padding-left: 10px;">Teacher's<br> Remark</th>
            </tr>
            
            <tr>
            <th style="line-height:1.5em; padding-left: 15px;">Mark Obtainable</th>
            <th style="line-height:1.5em;  padding-left: 15px;">10</th>
            <th style="line-height:1.5em;  padding-left: 15px;">20</th>
            <th style="line-height:1.5em;  padding-left: 15px;">70</th>
            <th style="line-height:1.5em;  padding-left: 15px;">100</th>
            <th style="line-height:1.5em;  padding-left: 15px;"></th>
            <th style="line-height:1.5em;  padding-left: 15px;"></th>
            <th style="line-height:1.5em;  padding-left: 15px;"></th>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">ENGLISH LANGUAGE</td>
                 <td style="line-height:1.5em; padding-left: 15px;"><?php echo $eng_1CA;?> </td>
                  <td style="line-height:1.5em; padding-left: 15px;"><?php echo $eng_2CA;?></td>
                   <td style="line-height:1.5em; padding-left: 15px;"><?php echo $eng_exam;?></td>
                    <td style="line-height:1.5em; padding-left: 15px;"><?php echo $eng_total;?></td>
                     <td style="line-height:1.5em; padding-left: 15px;"><?php echo $eng_grade;?></td>
                      <td style="line-height:1.5em; padding-left: 15px;"><?php echo $eng_subject_position;?></td>
                      <td style="line-height:1.5em; padding-left: 15px;"><?php echo $eng_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">MATHEMATICS</td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo $math_1CA?> </td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo $math_2CA;?></td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo $math_exam;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $math_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $math_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $math_subject_position;?></td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo $math_teach_remarks;?></td>
            </tr>
           
             <tr>                
                 <td style="line-height:1.5em; padding-left: 15px;">FINE $ APPLIED ART</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_exam;?></td>
                <td style="line-height:1.5em;  padding-left: 15px;"><?php echo $art_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">C.R.S</td>
                 <td style="line-height:1.5em; padding-left: 15px;"><?php echo $crs_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $crs_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $crs_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $crs_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $crs_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $crs_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $crs_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">HISTORY</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $hs_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $hs_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $hs_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $hs_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $hs_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $hs_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $hs_teach_remarks;?></td>
            </tr>
              <tr>
                <td style="line-height:1.5em; padding-left: 15px;">CHEMISTRY</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $chem_1CA?> </td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo  $chem_2CA;?></td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo  $chem_exam;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $chem_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $chem_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $chem_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $chem_teach_remarks;?></td>
            </tr>
             <tr>                
                 <td style="line-height:1.5em; padding-left: 15px;">BIOLOGY</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bio_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bio_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bio_exam;?></td>
                <td style="line-height:1.5em;  padding-left: 15px;"><?php echo $bio_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bio_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bio_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bio_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">GEOGRAHY</td>
                 <td style="line-height:1.5em; padding-left: 15px;"><?php echo $geo_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $geo_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $geo_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $geo_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $geo_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $geo_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $geo_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">COMMERCE</td>
                 <td style="line-height:1.5em; padding-left: 15px;"><?php echo $com_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $com_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $com_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $com_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $com_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $com_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $com_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">ECONOMICS</td>
                 <td style="line-height:1.5em; padding-left: 15px;"><?php echo $econ_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $econ_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $econ_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $econ_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $econ_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $econ_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $econ_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">LITERATURE IN ENGLISH</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $lit_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $lit_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $lit_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $lit_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $lit_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $lit_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $lit_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">PHYSICS</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $phys_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $phys_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $phys_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $phys_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $phys_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $phys_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $phys_teach_remarks;?></td>
            </tr>
             <tr>
                <td style="line-height:1.5em; padding-left: 15px;">GOVERNMENT</td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo $gov_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $gov_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $gov_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $gov_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $gov_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $gov_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $gov_teach_remarks;?></td>
            </tr>
            
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">MARKETING</td>
                 <td style="line-height:1.5em; padding-left: 15px;"><?php echo $mak_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $mak_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $mak_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $mak_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $mak_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $mak_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $mak_teach_remarks;?></td>
            </tr>
            
            </tbody>
            </table>
  
<table cellpadding="15px" width="40%" border="1px" cellspacing="0px" style="margin-bottom:2%; ">
            <tbody>
            <tr>
            <th style="line-height: 1.5em; font-size: 12px; padding-left: 5px;">SYCHOMOT0R DOMAIN</th>
            <th style="line-height: 1.5em; font-size: 12px; padding-left: 5px;">1</th>
            <th style="line-height: 1.5em; font-size: 12px; padding-left: 5px;">2</th>
            <th style="line-height: 1.5em; font-size: 12px; padding-left: 5px;">3</th>
            <th style="line-height: 1.5em; font-size: 12px; padding-left: 5px;">4</th>
            <th style="line-height: 1.5em; font-size: 12px ;padding-left: 5px;">5</th>
            </tr>
          
            <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Handwritting</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px; "><?php echo $handwritting_1;?></td>
            <td style="line-height: 5px; font-size: 20px;  padding-top: 10px;"><?php echo $HW_2;?></td>
            <td style="line-height: 5px; font-size: 20px;  padding-top: 10px;"><?php echo $HW_3;?></td>
            <td style="line-height: 5px; font-size: 20px;  padding-top: 10px;"><?php echo $HW_4;?></td>
            <td style="line-height: 5px; font-size: 20px;  padding-top:10px;"><?php echo $HW_5;?></td>
            </tr>
  
            <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Games/sport</td>
            <td style="line-height: 5px; font-size: 20px;  padding-top: 10px;"><?php echo $GameSport_1;?></td>
            <td style="line-height: 5px; font-size: 20px;  padding-top: 10px;"><?php echo $G_2;?></td>
            <td style="line-height: 5px; font-size: 20px;  padding-top: 10px;"><?php echo $G_3;?></td>
            <td style="line-height: 5px; font-size: 20px;  padding-top: 10px;"><?php echo $G_4;?></td>
            <td style="line-height: 5px; font-size: 20px;  padding-top: 10px;"><?php echo $G_5;?></td>
            </tr>
            <tr>
              
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Drawing and painting</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $DrawingPainting_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $D_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $D_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $D_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $D_5;?></td>
            </tr>
            <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Craft</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $Craft_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $C_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $C_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $C_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $C_5;?></td>
            </tr>
           <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Musical skills</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 15px;"><?php echo $Musical_skills_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 15px;"><?php echo $M_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 15px;"><?php echo $M_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 15px;"><?php echo $M_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 15px;"><?php echo $M_5;?></td>
            </tr>
            <tr>
            <th style="line-height: 5px; font-size: 12px; padding-top: 10px; padding-left: 5px; padding-bottom: 3px;">ACTIVITY DOMAIN</th>
            <th style="line-height: 5px; font-size: 10px; padding-top: 10px; padding-left: 5px;">1</th>
            <th style="line-height: 5px; font-size: 10px; padding-top: 10px; padding-left: 5px;">2</th>
            <th style="line-height: 5px; font-size: 10px; padding-top: 10px; padding-left: 5px;">3</th>
            <th style="line-height: 5px; font-size: 10px; padding-top: 10px; padding-left: 5px;">4</th>
            <th style="line-height: 5px; font-size: 10px; padding-top: 10px; padding-left: 5px;">5</th>
            </tr>
            <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Puntuality</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $Puntuality_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $P_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $P_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $P_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $P_5;?></td>
            </tr>
             <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Attendance</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $Attendance_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $A_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $A_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $A_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $A_5;?></td>
            </tr>
           <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Neatness</td>
            <td style="line-height: 5px; font-size: 20px; padding-top:10px;"><?php echo $Neatness_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $N_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $N_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $N_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $N_5;?></td>
            </tr>
           <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">communication</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $Communication_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $CM_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $CM_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $CM_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $CM_5;?></td>
            </tr>
           <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Honesty</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $Honesty_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $H_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $H_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $H_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $H_5;?></td>
            </tr>
           <tr>
            <td style="line-height: 5px; font-size: 12px; padding-left: 5px;">Obidence</td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $Obidence_1;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $O_2;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $O_3;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $O_4;?></td>
            <td style="line-height: 5px; font-size: 20px; padding-top: 10px;"><?php echo $O_5;?></td>
           </tr>
            <tbody>
         </table>
            
           
       
         
<table cellpadding="15px" width="40%" border="1px" cellspacing="0px" id="f" >
            <tbody>
                <tr>
                    <th></th>
                    <th style="line-height:2em; font-size: 12px; padding-left: 5px;">KEY TO RATING</th>
                </tr>
                <tr>
                    <td style="line-height:1.5em ; font-size: 12px; padding-left: 5px;">5</td>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">Maintain an Excellent degree of an observable traits</td>
                </tr>
                <tr>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">4</td>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">Maintain heigh level of an observable traits</td>
                </tr>
                <tr>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">3</td>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">Maintain acceptable level of an observable traits</td>
                </tr>
                <tr>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">2</td>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">Show minimal regards for observable traits</td>
                </tr>
                <tr>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">1</td>
                    <td style="line-height:1.5em; font-size: 12px; padding-left: 5px;">Has no regards for observable traits</td>
                </tr>
            </tbody>
            </table>
          
               
     
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="margin-bottom:1%;" >
             <tbody>
               <tr>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 31%;">Class Teacher's Comments:</td>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 69%;"><?php echo $form_teacher_remark;?></td>
                </tr>
                 <tr>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 31%;">Class Teacher's Name:</td>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 69%;"><?php echo $form_teacher_name;?></td>
                </tr>
                 <tr>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 31%;">This Term ends</td>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 69%;">10TH DECEMBER 2020</td>
                </tr>
                 <tr>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 31%;">Next Term Begins</td>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 69%;">11TH JANUARY 2021</td>
                </tr>
             </tbody>
             </table>
                </div>
            
  
            
 <div class="container-fluid" style="margin-bottom:10%;  margin-top: 3%;" >
      <center><button onclick="myFunction()" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-print"></i> <b>Print</b></button></center>
 </div>
 <script type="text/javascript">
   function myFunction(){
	    window.print();
	   }
 </script>
      </body>
</html>