 <?php
           include_once("connection.php");
              $id=$_GET["id"];
              $select="SELECT  *FROM js3a_register WHERE admission_no='$id'";
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
                $number_in_class=$row["number_in_class"];
                $session=$row["session"];
                 
            $select="SELECT *FROM first_term_jss3a WHERE admission_no='$id'";
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
                 
                 $igb_1CA=  $row["igb_1CA"];  
                 $igb_2CA=  $row["igb_2CA"];
                 $igb_exam=$row["igb_exam"];
                 $igb_total=$row["igb_total"];
                 $igb_grade=$row["igb_grade"];
                 $igb_subject_position=$row["igb_subject_position"];
                 $igb_teach_remarks=$row["igb_teach_remarks"];
                 
              
                 $bs_1CA=  $row["bs_1CA"];  
                 $bs_2CA=  $row["bs_2CA"];
                 $bs_exam=$row["bs_exam"];
                 $bs_total=$row["bs_total"];
                 $bs_grade=$row["bs_grade"];
                 $bs_subject_position=$row["bs_subject_position"];
                 $bs_teach_remarks=$row["bs_teach_remarks"];
                 
                 $art_1CA=  $row["art_1CA"];  
                 $art_2CA=  $row["art_2CA"];
                 $art_exam=$row["art_exam"];
                 $art_total=$row["art_total"];
                 $art_grade=$row["art_grade"];
                 $art_subject_position=$row["art_subject_position"];
                 $art_teach_remarks=$row["art_teach_remarks"];
                 
                 $bus_1CA=  $row["bus_1CA"];  
                 $bus_2CA=  $row["bus_2CA"];
                 $bus_exam=$row["bus_exam"];
                 $bus_total=$row["bus_total"];
                 $bus_grade=$row["bus_grade"];
                 $bus_subject_position=$row["bus_subject_position"];
                 $bus_teach_remarks=$row["bus_teach_remarks"];
                 
                 $nv_1CA=  $row["nv_1CA"];  
                 $nv_2CA=  $row["nv_2CA"];
                 $nv_exam=$row["nv_exam"];
                 $nv_total=$row["nv_total"];
                 $nv_grade=$row["nv_grade"];
                 $nv_subject_position=$row["nv_subject_position"];
                 $nv_teach_remarks=$row["nv_teach_remarks"];
                 
                 $pvs_1CA=  $row["pvs_1CA"];  
                 $pvs_2CA=  $row["pvs_2CA"];
                 $pvs_exam=$row["pvs_exam"];
                 $pvs_total=$row["pvs_total"];
                 $pvs_grade=$row["pvs_grade"];
                 $pvs_subject_position=$row["pvs_subject_position"];
                 $pvs_teach_remarks=$row["pvs_teach_remarks"];
                 
                 
                 
                 $hs_1CA=  $row["hs_1CA"];  
                 $hs_2CA=  $row["hs_2CA"];
                 $hs_exam=$row["hs_exam"];
                 $hs_total=$row["hs_total"];
                 $hs_grade=$row["hs_grade"];
                 $hs_subject_position=$row["hs_subject_position"];
                 $hs_teach_remarks=$row["hs_teach_remarks"];
                 
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
                 $form_teacher_remark=$row["Form Teacher Remark"];
                 $form_teacher_name=$row["Form Teacher Name"];
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
                 background-image:url(image/shadow_image.jpg)
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
              margin-left:0%!important;
              margin-right:-3%!important;
             background-size:100% 105% !important;
                     }
                     img{
                   position:relative!important;
                 padding-top: -5%!important;
                  right:-80%!important;
                  width: 100px!important;
                  height:80px!important;
                  padding-bottom: 0%!important;
                  background-image:url(image/shadow_image.jpg)!important;
                 
                }
                .container{
                    padding-top: 9%!important;
                    padding-right: 12%!important;
                    padding-left: 7%!important;
                    padding-bottom: 11%!important;
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
        <a href="class_selector_result.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
        <div class="container" style=" padding-left: 15%; padding-right: 8%; padding-top: 5%;" id="b">
             <table cellpadding="15px" width="100%" cellspacing="0px" style="width:100%;">
                 <thead>
                 <tr> 
                     <td style="line-height: 0.1em;">
                
               <?php
               $query="SELECT *FROM js3a_register WHERE admission_no='$id'";
               $result=mysqli_query($connect,$query);
               while($row=mysqli_fetch_array($result)){
                   
                   echo'<img height="100" width="100" style=" margin-top:70px;" src="data:image/jpeg;base64,'.base64_encode($row['passport']).'"/>';
               }
               ?>
          </td>
                
            </tr>
             </thead>
             </table> 
         
            
      <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:2em; margin-top: 5px;">
        <thead>
            <tr>
                <th style="width:60%">Name of Student: <?php echo $surname;?>  <?php echo  $middle_name;?>  <?php echo  $first_name;?> </th>
            <th style="width:15%">Age: <?php echo  '12+'?></th>
            <th style="width:25%">Class:  <?php echo 'J.S.S 3A';?></th>
            </tr>
    </thead>
            </table>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:2em;">
             <thead> 
            <tr>
            <th style="width:45%;">Admission No:  <?php echo $admission_no;?></th>
            <th style="width:25%;">Term:  <?php echo  'first term';?></th>
            <th style="width:30%;">Session:  <?php echo  '2022/2023';?></th>
            </tr>
            </thead>
            </table>
            <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:2em;">
                <thead>
            <tr>
            <th style="">Total Mark Obtainable: 700</th>
            <th style="">Total Mark Obtained: <?php echo $mark_obtained;?></th>
            <th style="">Average: <?php echo $Average;?></th>
            <th style="">Gender: <?php echo $gender;?></th>
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
                <td style="line-height:1.5em;  padding-left: 15px;">IGBO LANGUAGE</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $igb_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $igb_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $igb_exam;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
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
                <td style="line-height:1.5em; padding-left: 15px;">BASIC SCIENCE</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bs_1CA?> </td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo  $bs_2CA;?></td>
               <td style="line-height:1.5em; padding-left: 15px;"><?php echo  $bs_exam;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bs_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bs_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bs_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bs_teach_remarks;?></td>
            </tr>
             <tr>                
                 <td style="line-height:1.5em; padding-left: 15px;">FINE $ APPLIED ART</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $art_exam;?></td>
                <td style="line-height:1.5em;  padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
            </tr>
             <tr>
                <td style="line-height:1.5em; padding-left: 15px;">NATIONAL VALUE</td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $nv_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $nv_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $nv_exam;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $nv_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $nv_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $nv_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $nv_teach_remarks;?></td>
           
            </tr>
             <tr>
                <td style="line-height:1.5em; padding-left: 15px;">PRE-VOCATIONAL STUDIES</td>
                 <td style="line-height:1.5em; padding-left: 15px;"><?php echo $pvs_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $pvs_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $pvs_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $pvs_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $pvs_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $pvs_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $pvs_teach_remarks;?></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">BUSINESS STUDIES</td>
                 <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bus_1CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bus_2CA;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bus_exam;?></td>  
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bus_total;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bus_grade;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bus_subject_position;?></td>
                <td style="line-height:1.5em; padding-left: 15px;"><?php echo $bus_teach_remarks;?></td>
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
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
            </tr>
            <tr>
                <td style="line-height:1.5em; padding-left: 15px;">COMPUTER STUDY</td>
               <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
                <td style="line-height:1.5em; padding-left: 15px;"></td>
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
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 69%;">16TH DECEMBER 2022</td>
                </tr>
                 <tr>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 31%;">Next Term Begins</td>
                    <td style="line-height: 1.5em; font-size: 14px; padding-left: 5px; width: 69%;">9TH JANUARY 2023</td>
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

       