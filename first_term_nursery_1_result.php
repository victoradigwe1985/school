 <?php
           include_once("connection.php");
              $id=$_GET["id"];
              $select="SELECT  *FROM nursery_1_register WHERE admission_no='$id'";
              $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                $register_id= $row["register_id"];
                $admission_no=$row["admission_no"];
                $first_name= $row["first_name"];
                $middle_name=$row["middle_name"];
                $surname= $row["surname"];
                $gender= $row["gender"];
                $age=$row["age"];
                $class=$row["class"];
                 
            $select="SELECT *FROM nursery_1_first_term_scores WHERE admission_no='$id'";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                 $oral_comm_test=$row["oral_comm_test"];  
                 $oral_comm_project=$row["oral_comm_project"];
                 $oral_comm_assessment=$row["oral_comm_assessment"];
                 $oral_comm_exam=$row["oral_comm_exam"];
                 $oral_comm_total=$row["oral_comm_total"];
                 $oral_comm_gl=$row["oral_comm_gl"];
                 $oral_comm_sg=$row["oral_comm_sg"];
                 
                 $recog_eng_test=$row["recog_eng_test"];  
                 $recog_eng_project=$row["recog_eng_project"];
                 $recog_eng_assessment=$row["recog_eng_assessment"];
                 $recog_eng_exam=$row["recog_eng_exam"];
                 $recog_eng_total=$row["recog_eng_total"];
                 $recog_eng_gl=$row["recog_eng_gl"];
                 $recog_eng_sg=$row["recog_eng_sg"];
                 
                 $writing_eng_test=$row["writing_eng_test"];  
                 $writing_eng_project=$row["writing_eng_project"];
                 $writing_eng_assessment=$row["writing_eng_assessment"];
                 $writing_eng_exam=$row["writing_eng_exam"];
                 $writing_eng_total=$row["writing_eng_total"];
                 $writing_eng_gl=$row["writing_eng_gl"];
                 $writing_eng_sg=$row["writing_eng_sg"];
                 
                 $counting_test=$row["counting_test"];  
                 $counting_project=$row["counting_project"];
                 $counting_assessment=$row["counting_assessment"];
                 $counting_exam=$row["counting_exam"];
                 $counting_total=$row["counting_total"];
                 $counting_gl=$row["counting_gl"];
                 $counting_sg=$row["counting_sg"];
                 
                 $recog_math_test=$row["recog_math_test"];  
                 $recog_math_project=$row["recog_math_project"];
                 $recog_math_assessment=$row["recog_math_assessment"];
                 $recog_math_exam=$row["recog_math_exam"];
                 $recog_math_total=$row["recog_math_total"];
                 $recog_math_gl=$row["recog_math_gl"];
                 $recog_math_sg=$row["recog_math_sg"];
                 
                 $writing_math_test=$row["writing_math_test"];  
                 $writing_math_project=$row["writing_math_project"];
                 $writing_math_assessment=$row["writing_math_assessment"];
                 $writing_math_exam=$row["writing_math_exam"];
                 $writing_math_total=$row["writing_math_total"];
                 $writing_math_gl=$row["writing_math_gl"];
                 $writing_math_sg=$row["writing_math_sg"];
                    
                 $social_n_ins_test=$row["social_n_ins_test"];  
                 $social_n_ins_project=$row["social_n_ins_project"];
                 $social_n_ins_assessment=$row["social_n_ins_assessment"];
                 $social_n_ins_exam=$row["social_n_ins_exam"];
                 $social_n_ins_total=$row["social_n_ins_total"];
                 $social_n_ins_gl=$row["social_n_ins_gl"];
                 $social_n_ins_sg=$row["social_n_ins_sg"];
                 
                 $fine_c_a_test=$row["fine_c_a_test"];  
                 $fine_c_a_project=$row["fine_c_a_project"];
                 $fine_c_a_assessment=$row["fine_c_a_assessment"];
                 $fine_c_a_exam=$row["fine_c_a_exam"];
                 $fine_c_a_total=$row["fine_c_a_total"];
                 $fine_c_a_gl=$row["fine_c_a_gl"];
                 $fine_c_a_sg=$row["fine_c_a_sg"];
                 
                 $scientific_r_t_test=$row["scientific_r_t_test"];  
                 $scientific_r_t_project=$row["scientific_r_t_project"];
                 $scientific_r_t_assessment=$row["scientific_r_t_assessment"];
                 $scientific_r_t_exam=$row["scientific_r_t_exam"];
                 $scientific_r_t_total=$row["scientific_r_t_total"];
                 $scientific_r_t_gl=$row["scientific_r_t_gl"];
                 $scientific_r_t_sg=$row["scientific_r_t_sg"];
                 
                 $phe_test=$row["phe_test"];  
                 $phe_project=$row["phe_project"];
                 $phe_assessment=$row["phe_assessment"];
                 $phe_exam=$row["phe_exam"];
                 $phe_total=$row["phe_total"];
                 $phe_gl=$row["phe_gl"];
                 $phe_sg=$row["phe_sg"];
                 
                 $crs_test=$row["crs_test"];  
                 $crs_project=$row["crs_project"];
                 $crs_assessment=$row["crs_assessment"];
                 $crs_exam=$row["crs_exam"];
                 $crs_total=$row["crs_total"];
                 $crs_gl=$row["crs_gl"];
                 $crs_sg=$row["crs_sg"];
              
                 $class_position=$row["class_position"];
                 $mark_obtained=$row["mark_obtained"];
                 $Average=$row["Average"];
                 
                 
                 
                  $select="SELECT *FROM nursery_1_assessment_first_register WHERE admission_no='$id'";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                 $neatness=  $row["neatness"];  
                 $puntuality=  $row["puntuality"];
                 $self_control=$row["self_control"];
                 $relationship=$row["relationship"];
                 $politeness=$row["politeness"];
                 $class_teacher_name=$row["class_teacher_name"];
                 $head_teacher_name=$row["head_teacher_name"];
                 $comment=$row["comment"];
                 
                }
                 
               
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
            <link rel="stylesheet" media="screen" href="main.css" />
<link rel="stylesheet" media="print" href="print.css" />

            <style type="text/css" media="all">
                
                
                 
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
              margin-left:0%!important;
              margin-right:-5%!important;
             background-size:100% 100% !important;
             
                     }
                     img{
                   position:relative!important;
                 padding-top: -10%!important;
                  right:-80%!important;
                  width: 80px!important;
                  height: 80px!important;
                  padding-bottom: 0%!important;
                  background-image:url(image/shadow_image.jpg)!important;
                 
                }
                .container{
                    padding-top: 10%!important;
                    padding-right: 12%!important;
                    padding-left: 7%!important;
                    padding-bottom: 14%!important;
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

                  }
                
            </style>
    </head>
    <body>
         <div class="container" style="width:200px; height:1500px; background-color: black; margin-left: 0px; float: left; padding-top:5%;" id="con">
             <div class="container">  <img src="image/log.jpg" width="120" height="120" class="img-circle" alt="Cinque Terre" style="padding-right: 0px; background-color: white;"></div><br><br>
             <div class="container"><h3 style="color:white;">Menu</h3></div>
        <h4 style="color:white; background-color: darkgreen; text-align: center; padding: 5%;">Student Management System</h4>
        <a href="homepage_1.php" class="btn btn-lg btn-success" style="border-color:gray;  font-size:18px; color:white;  margin-top: 10px;">Goto Main Menu</a><br>
        <a href="class_selector_result_1.php" class="btn btn-lg btn-success" style="border-color: gray;  font-size: 18px;  margin-top: 10px; color:white;"> <<< Go Back</a><br>
        </div>
        
        <div class="container" style=" padding-left: 15%; padding-right: 8%; padding-top: 10%;" id="b">
             <table cellpadding="15px" width="100%" cellspacing="0px" style="width:100%;">
                 <thead>
                 <tr> 
                     <td style="line-height: 0.1em;">
                
               <?php
               $query="SELECT *FROM nursery_1_register WHERE admission_no='$id'";
               $result=mysqli_query($connect,$query);
               while($row=mysqli_fetch_array($result)){
                   
                   echo'<img height="80" width="100" style=" margin-top:45px;" src="data:image/jpeg;base64,'.base64_encode($row['passport']).'"/>';
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
      
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:1.9em;">
        <thead>
            <tr>
                <th style="width:60%">Name of Student: <?php echo $surname;?> <?php echo  $first_name;?> </th>
            <th style="width:15%">Age:<?php echo  '2+';?></th>
            <th style="width:25%">Class:  <?php echo' Nursery 1';?></th>
            </tr>
    </thead>
            </table>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 14px; line-height:1.9em;">
             <thead> 
            <tr>
            <th style="width:40%;">Admission No:  <?php echo $admission_no;?></th>
           <th style="width:31%;">Term Ends:  <?php echo  '16th Dec. 2022';?></th>
            <th style="width:31%;">Next Term :  <?php echo  '9th Jan. 2023';?></th>
            </tr>
            </thead>
            </table>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:2em;">
                <thead>
            <tr>
            <th style="">Total Mark Obtainable: 11000</th>
            <th style="">Total Mark Obtained: <?php echo $mark_obtained;?></th>
            <th style="">Average: <?php echo $Average;?></th>
            <th style="">Term: First Term</th>
            </tr>
             </thead>
            </table>
          
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 13px;">
            <tbody>
                <tr><th style=" text-align: center; line-height: 1.7em;">Acedemic Performance Level for Grade</th></tr>
            </tbody>
                </table>
 <table cellpadding="15px" width="100%" border="1px" cellspacing="0px">
     <thead>
            
            <tr  style=" font-size: 13px;">
            <th style=" padding-left: 10px; line-height:1.5em; ">A+</th>
            <th style=" padding-left: 10px; line-height:1.5em; ">A</th>
            <th style=" padding-left: 10px; line-height:1.5em; ">B+</th>
            <th style=" padding-left: 10px; line-height:1.5em;">B</th>
            <th style=" padding-left: 10px; line-height:1.5em;">C+</th>
            <th style=" padding-left: 10px; line-height:1.5em;">C</th>
            <th style=" padding-left: 10px; line-height:1.5em;">D</th>
            <th style=" padding-left: 10px; line-height:1.5em;">E</th>
            <th style=" padding-left: 10px; line-height:1.5em;">F</th>
            </tr>
     </thead>
        <tbody>
            <tr  style=" font-size: 13px;">
            <td style=" line-height:1.5em; ">100%-90</td>
            <td style=" line-height:1.5em;">89%-70</td>
            <td style=" line-height:1.5em; ">69%-66</td>
            <td style=" line-height:1.5em;">65%-60</td>
            <td style=" line-height:1.5em;">56%-59</td>
            <td style=" line-height:1.5em;">50%-55</td>
            <td style="line-height:1.5em;">49%-45</td>
            <td style="line-height:1.5em;">44%-40</td>
            <td style="line-height:1.5em;">BELOW</td>
            </tr>
            
            </tbody>
           </table>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="" >
    <thead>
            <tr  style=" font-size: 13px;">
            <th style=" padding-left: 10px; line-height: 1.5em;">4</th>
            <th style=" padding-left: 10px; line-height:1.5em; ">3</th>
            <th style=" padding-left: 10px; line-height:1.5em; ">2</th>
            <th style=" padding-left: 10px; line-height:1.5em;">1</th>
            </tr>
            </thead>
           
            <tr  style=" font-size: 13px;">
            <td style="padding-left: 15px; line-height:1.5em;">High</td>
            <td style="  padding-left: 15px; line-height:1.5em;">Satisfactory</td>
            <td style=" padding-left: 15px; line-height:1.5em; ">Progressing</td>
            <td style=" padding-left: 15px; line-height:1.5em; ">need improvement</td>
           
            </tr>
           
           </table>
            <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="">
                <thead>
             <tr style=" font-size: 13px;">
             <th style="text-align: center; line-height:1.6em;">Language <br> and<br> Communication Skills</th>
            <th style=" text-align: center;">Test<br>%</th>
            <th style=" text-align: center;">Project<br>%</th>
            <th style=" text-align: center;">Assessment<br>%</th>
            <th style=" text-align: center;">Exam<br>%</th>
            <th style=" text-align: center;">Total<br>%</th>
            <th style=" text-align: center;">Grade<br>Level</th>
            <th style=" text-align: center;">Skills<br>Grade</th>
            </tr>
                </thead>
              
            <tr style="font-size: 13px; line-height: 1.6em;">
            <td>Oral Communication</td>
            <td style="text-align: center;"><?php echo $oral_comm_test;?></td>
            <td style="text-align: center;"><?php echo $oral_comm_project;?></td>
            <td style="text-align: center;"><?php echo $oral_comm_assessment;?></td>
            <td style="text-align: center;"><?php echo $oral_comm_exam;?></td>
            <td style="text-align: center;"><?php echo $oral_comm_total;?></td>
            <td style="text-align: center;"><?php echo $oral_comm_gl;?></td>
            <td style="text-align: center;"><?php echo $oral_comm_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.6em;">
            <td>Recognition</td>
            <td style="text-align: center;"><?php echo $recog_eng_test;?></td>
            <td style="text-align: center;"><?php echo $recog_eng_project;?></td>
            <td style="text-align: center;"><?php echo $recog_eng_assessment;?></td>
            <td style="text-align: center;"><?php echo $recog_eng_exam;?></td>
            <td style="text-align: center;"><?php echo $recog_eng_total;?></td>
            <td style="text-align: center;"><?php echo $recog_eng_gl;?></td>
            <td style="text-align: center;"><?php echo $recog_eng_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.6em;">
            <td>Writing</td>
            <td style="text-align: center;"><?php echo $writing_eng_test;?></td>
            <td style="text-align: center;"><?php echo $writing_eng_project;?></td>
            <td style="text-align: center;"><?php echo $writing_eng_assessment;?></td>
            <td style="text-align: center;"><?php echo $writing_eng_exam;?></td>
            <td style="text-align: center;"><?php echo $writing_eng_total;?></td>
            <td style="text-align: center;"><?php echo $writing_eng_gl;?></td>
            <td style="text-align: center;"><?php echo $writing_eng_sg;?></td>
            </tr>
           </table>
          <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="" >
              <thead>
             <tr style=" font-size: 13px;">
             <th style="text-align: center; line-height:1.6em;">Mathematics<br>Skills</th>
            <th style=" text-align: center;">Test<br>%</th>
            <th style=" text-align: center;">Project<br>%</th>
            <th style=" text-align: center;">Assessment<br>%</th>
            <th style=" text-align: center;">Exam<br>%</th>
            <th style=" text-align: center;">Total<br>%</th>
            <th style=" text-align: center;">Grade<br>Level</th>
            <th style=" text-align: center;">Skills<br>Grade</th>
            </tr>
              </thead>
            <tr style="font-size: 13px; line-height: 1.6em;">
            <td style="">Counting</td>
            <td style="text-align: center;"><?php echo $counting_test;?></td>
            <td style="text-align: center;"><?php echo $counting_project;?></td>
            <td style="text-align: center;"><?php echo $counting_assessment;?></td>
            <td style="text-align: center;"><?php echo $counting_exam;?></td>
            <td style="text-align: center;"><?php echo $counting_total;?></td>
            <td style="text-align: center;"><?php echo $counting_gl;?></td>
            <td style="text-align: center;"><?php echo $counting_sg;?></td>
            </tr>
             <tr style="font-size: 13px; line-height: 1.6em;">
            <td>Recognition</td>
            <td style="text-align: center;"><?php echo $recog_math_test;?></td>
            <td style="text-align: center;"><?php echo $recog_math_project;?></td>
            <td style="text-align: center;"><?php echo $recog_math_assessment;?></td>
            <td style="text-align: center;"><?php echo $recog_math_exam;?></td>
            <td style="text-align: center;"><?php echo $recog_math_total;?></td>
            <td style="text-align: center;"><?php echo $recog_math_gl;?></td>
            <td style="text-align: center;"><?php echo $recog_math_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.6em;">
            <td style="">Writing</td>
            <td style="text-align: center;"><?php echo $writing_math_test;?></td>
            <td style="text-align: center;"><?php echo $writing_math_project;?></td>
            <td style="text-align: center;"><?php echo $writing_math_assessment;?></td>
            <td style="text-align: center;"><?php echo $writing_math_exam;?></td>
            <td style="text-align: center;"><?php echo $writing_math_total;?></td>
            <td style="text-align: center;"><?php echo $writing_math_gl;?></td>
            <td style="text-align: center;"><?php echo $writing_math_sg;?></td>
            </tr>
           </table>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="">
    <thead>
             <tr style=" font-size: 13px;">
             <th style="text-align: center; line-height:1.6em;"></th>
            <th style=" text-align: center;">Test<br>%</th>
            <th style=" text-align: center;">Project<br>%</th>
            <th style=" text-align: center;">Assessment<br>%</th>
            <th style=" text-align: center;">Exam<br>%</th>
            <th style=" text-align: center;">Total<br>%</th>
            <th style=" text-align: center;">Grade<br>Level</th>
            <th style=" text-align: center;">Skills<br>Grade</th>
            </tr>
    </thead>
            <tr style="font-size: 13px; line-height: 1.6em;">
            <td style="">Social Norms/Moral Instruction</td>
            <td style="text-align: center;"><?php echo $social_n_ins_test;?></td>
            <td style="text-align: center;"><?php echo $social_n_ins_project;?></td>
            <td style="text-align: center;"><?php echo $social_n_ins_assessment;?></td>
            <td style="text-align: center;"><?php echo $social_n_ins_exam;?></td>
            <td style="text-align: center;"><?php echo $social_n_ins_total;?></td>
            <td style="text-align: center;"><?php echo $social_n_ins_gl;?></td>
            <td style="text-align: center;"><?php echo $social_n_ins_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.6em;">
            <td style="">Fine $ Creative Arts</td>
            <td style="text-align: center;"><?php echo $fine_c_a_test;?></td>
            <td style="text-align: center;"><?php echo $fine_c_a_project;?></td>
            <td style="text-align: center;"><?php echo $fine_c_a_assessment;?></td>
            <td style="text-align: center;"><?php echo $fine_c_a_exam;?></td>
            <td style="text-align: center;"><?php echo $fine_c_a_total;?></td>
            <td style="text-align: center;"><?php echo $fine_c_a_gl;?></td>
            <td style="text-align: center;"><?php echo $fine_c_a_sg;?></td>
            </tr>
             <tr style="font-size: 13px; line-height: 1.6em;">
            <td style="">Scientific $ Reflective Thinking</td>
            <td style="text-align: center;"><?php echo $scientific_r_t_test;?></td>
            <td style="text-align: center;"><?php echo $scientific_r_t_project;?></td>
            <td style="text-align: center;"><?php echo $scientific_r_t_assessment;?></td>
            <td style="text-align: center;"><?php echo $scientific_r_t_exam;?></td>
            <td style="text-align: center;"><?php echo $scientific_r_t_total;?></td>
            <td style="text-align: center;"><?php echo $scientific_r_t_gl;?></td>
            <td style="text-align: center;"><?php echo $scientific_r_t_sg;?></td>
            </tr>
             <tr style="font-size: 13px; line-height: 1.6em;">
            <td style="">Physical $ Health Education.</td>
            <td style="text-align: center;"><?php echo $phe_test;?></td>
            <td style="text-align: center;"><?php echo $phe_project;?></td>
            <td style="text-align: center;"><?php echo $phe_assessment;?></td>
            <td style="text-align: center;"><?php echo $phe_exam;?></td>
            <td style="text-align: center;"><?php echo $phe_total;?></td>
            <td style="text-align: center;"><?php echo $phe_gl;?></td>
            <td style="text-align: center;"><?php echo $phe_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.6em;">
            <td>Christian Religion Studies</td>
            <td style="text-align: center;"><?php echo $crs_test;?></td>
            <td style="text-align: center;"><?php echo $crs_project;?></td>
            <td style="text-align: center;"><?php echo $crs_assessment;?></td>
            <td style="text-align: center;"><?php echo $crs_exam;?></td>
            <td style="text-align: center;"><?php echo $crs_total;?></td>
            <td style="text-align: center;"><?php echo $crs_gl;?></td>
            <td style="text-align: center;"><?php echo $crs_sg;?></td>
            </tr>
           </table>

<table cellpadding="15px" width="50%" border="1px" cellspacing="0px" style="float:left; margin-top: 3px;">
            <thead>
             <tr style=" font-size: 12px;">
             <th style="text-align: center; width: 35%; line-height: 1.3em; width: ">Behavioural</th>
            <th style=" text-align: center; width: 5%; line-height: 1.3em; width:">Assessment</th>
             </tr>
           
             
            <tr style="font-size: 10px; line-height: 1.3em;">
            <td style=" width: 35%;">Neatness</td>
            <td style="width: 5%; text-align: center;"><?php echo $neatness;?></td>
           
            </tr>
            <tr style="font-size: 10px; line-height: 1.3em;">
            <td style=" width: 35%; line-height: 1.3em;">Puntuality</td>
            <td style="width: 5%; line-height: 1.3em; text-align: center;"><?php echo $puntuality;?></td>
            
            </tr>
            <tr style="font-size: 10px; line-height: 1.3em;">
            <td style="width: 35%; line-height: 1.3em;">Self Control</td>
            <td style="width: 5%;line-height: 1.3em; text-align: center;"><?php echo $self_control;?></td>
            
            </tr>
             <tr style="font-size: 10px; line-height: 1.3em;">
            <td style=" width: 35%; line-height: 1.3em;">Relationship With Other</td>
            <td style=" width: 5%; line-height: 1.3em; text-align: center;"><?php echo $relationship;?></td>
            
            </tr>
             <tr style="font-size: 10px; line-height: 1.3em;">
            <td style="line-height:1.3em; width: 35%;">Politeness</td>
            <td style="width: 5%; line-height: 1.3em; text-align: center;"><?php echo $politeness;?></td>
            
            </tr>
           </table>
          
            
            
<p style="float:left; margin-left: 60%;  font-size: 13px; line-height: 1.2em; margin-top: -8%;" id="g">
    Grade Marks<br> 
    80 - 100 = Excellent<br>
    60 - 79 = Very Good<br>
    50 - 59 = Pass<br>
    40 - 49 = Weak pass
    </p>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px;" style=" font-size: 13px; line-height: 1.6em;">
                <thead>
            <tr>
            <th style=" width: 31%;">Class Teacher's Comment:</th>
            <td style="width: 69%; padding-left:15px;"><?php echo $comment;?></td>
            </tr>
            <tr>
            <th style=" width: 31%;">Class Teacher's Name:</th>
            <td style="width: 69%; padding-left:15px;"><?php echo $class_teacher_name;?></td>
            </tr>
            <tr>
            <th style="width: 31%;">Head Teacher's Name:</th>
            <td style="width: 69%; padding-left:15px;"><?php echo $head_teacher_name;?></td>
            </tr>
                </thead>
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

       