 <?php
           include_once("connection.php");
              $id=$_GET["id"];
              $select="SELECT  *FROM pri3a_register WHERE admission_no='$id'";
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
                 
            $select="SELECT *FROM primary3a_second_term_scores WHERE admission_no='$id'";
            $query=mysqli_query($connect,$select);
                while($row=mysqli_fetch_array($query)){
                 $crs_test=$row["crs_test"];  
                 $crs_project=$row["crs_project"];
                 $crs_assessment=$row["crs_assessment"];
                 $crs_exam=$row["crs_exam"];
                 $crs_total=$row["crs_total"];
                 $crs_gl=$row["crs_gl"];
                 $crs_sg=$row["crs_sg"];
                 
                 $civic_test=$row["civic_test"];  
                 $civic_project=$row["civic_project"];
                 $civic_assessment=$row["civic_assessment"];
                 $civic_exam=$row["civic_exam"];
                 $civic_total=$row["civic_total"];
                 $civic_gl=$row["civic_gl"];
                 $civic_sg=$row["civic_sg"];
                 
                 $sos_test=$row["sos_test"];  
                 $sos_project=$row["sos_project"];
                 $sos_assessment=$row["sos_assessment"];
                 $sos_exam=$row["sos_exam"];
                 $sos_total=$row["sos_total"];
                 $sos_gl=$row["sos_gl"];
                 $sos_sg=$row["sos_sg"];
                 
                 $se_test=$row["se_test"];  
                 $se_project=$row["se_project"];
                 $se_assessment=$row["se_assessment"];
                 $se_exam=$row["se_exam"];
                 $se_total=$row["se_total"];
                 $se_gl=$row["se_gl"];
                 $se_sg=$row["se_sg"];
                 
                 $bs_test=$row["bs_test"];  
                 $bs_project=$row["bs_project"];
                 $bs_assessment=$row["bs_assessment"];
                 $bs_exam=$row["bs_exam"];
                 $bs_total=$row["bs_total"];
                 $bs_gl=$row["bs_gl"];
                 $bs_sg=$row["bs_sg"];
                 
                 $bt_test=$row["bt_test"];  
                 $bt_project=$row["bt_project"];
                 $bt_assessment=$row["bt_assessment"];
                 $bt_exam=$row["bt_exam"];
                 $bt_total=$row["bt_total"];
                 $bt_gl=$row["bt_gl"];
                 $bt_sg=$row["bt_sg"];
                 
                 $phe_test=$row["phe_test"];  
                 $phe_project=$row["phe_project"];
                 $phe_assessment=$row["phe_assessment"];
                 $phe_exam=$row["phe_exam"];
                 $phe_total=$row["phe_total"];
                 $phe_gl=$row["phe_gl"];
                 $phe_sg=$row["phe_sg"];
                 
                 $comp_test=$row["comp_test"];  
                 $comp_project=$row["comp_project"];
                 $comp_assessment=$row["comp_assessment"];
                 $comp_exam=$row["comp_exam"];
                 $comp_total=$row["comp_total"];
                 $comp_gl=$row["comp_gl"];
                 $comp_sg=$row["comp_sg"];
                 
                 $math_test=$row["math_test"];  
                 $math_project=$row["math_project"];
                 $math_assessment=$row["math_assessment"];
                 $math_exam=$row["math_exam"];
                 $math_total=$row["math_total"];
                 $math_gl=$row["math_gl"];
                 $math_sg=$row["math_sg"];
                 
                 $agr_test=$row["agr_test"];  
                 $agr_project=$row["agr_project"];
                 $agr_assessment=$row["agr_assessment"];
                 $agr_exam=$row["agr_exam"];
                 $agr_total=$row["agr_total"];
                 $agr_gl=$row["agr_gl"];
                 $agr_sg=$row["agr_sg"];
                 
                 $cca_test=$row["cca_test"];  
                 $cca_project=$row["cca_project"];
                 $cca_assessment=$row["cca_assessment"];
                 $cca_exam=$row["cca_exam"];
                 $cca_total=$row["cca_total"];
                 $cca_gl=$row["cca_gl"];
                 $cca_sg=$row["cca_sg"];
                 
                 $he_test=$row["he_test"];  
                 $he_project=$row["he_project"];
                 $he_assessment=$row["he_assessment"];
                 $he_exam=$row["he_exam"];
                 $he_total=$row["he_total"];
                 $he_gl=$row["he_gl"];
                 $he_sg=$row["he_sg"];
                 
                 $fr_test=$row["fr_test"];  
                 $fr_project=$row["fr_project"];
                 $fr_assessment=$row["fr_assessment"];
                 $fr_exam=$row["fr_exam"];
                 $fr_total=$row["fr_total"];
                 $fr_gl=$row["fr_gl"];
                 $fr_sg=$row["fr_sg"];
                 
                 $eng_test=$row["eng_test"];  
                 $eng_project=$row["eng_project"];
                 $eng_assessment=$row["eng_assessment"];
                 $eng_exam=$row["eng_exam"];
                 $eng_total=$row["eng_total"];
                 $eng_gl=$row["eng_gl"];
                 $eng_sg=$row["eng_sg"];
                 
                 $lit_test=$row["lit_test"];  
                 $lit_project=$row["lit_project"];
                 $lit_assessment=$row["lit_assessment"];
                 $lit_exam=$row["lit_exam"];
                 $lit_total=$row["lit_total"];
                 $lit_gl=$row["lit_gl"];
                 $lit_sg=$row["lit_sg"];
                 
                 $wrt_test=$row["wrt_test"];  
                 $wrt_project=$row["wrt_project"];
                 $wrt_assessment=$row["wrt_assessment"];
                 $wrt_exam=$row["wrt_exam"];
                 $wrt_total=$row["wrt_total"];
                 $wrt_gl=$row["wrt_gl"];
                 $wrt_sg=$row["wrt_sg"];
                 
                 $sp_test=$row["sp_test"];  
                 $sp_project=$row["sp_project"];
                 $sp_assessment=$row["sp_assessment"];
                 $sp_exam=$row["sp_exam"];
                 $sp_total=$row["sp_total"];
                 $sp_gl=$row["sp_gl"];
                 $sp_sg=$row["sp_sg"];
              
                 $class_position=$row["class_position"];
                 $mark_obtained=$row["mark_obtained"];
                 $Average=$row["Average"];
                 
                 
                 
                  $select="SELECT *FROM pri3a_assessment_second_register WHERE admission_no='$id'";
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
              margin-right:-3.9%!important;
             background-size:100% 100% !important;
                     }
                     img{
                   position:relative!important;
                 padding-top: -10%!important;
                  right:-80%!important;
                  width: 100px!important;
                  height: 60px!important;
                  padding-bottom: 0.3%!important;
                  background-image:url(image/shadow_image.jpg)!important;
                 
                }
                .container{
                    padding-top: 9%!important;
                    padding-right: 12%!important;
                    padding-left: 7%!important;
                    padding-bottom: 13%!important;
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
               $query="SELECT *FROM pri3a_register WHERE admission_no='$id'";
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
      
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:1.5em;">
        <thead>
            <tr>
                <th style="width:60%">Name of Student: <?php echo $surname;?>  <?php echo  $middle_name;?>  <?php echo  $first_name;?> </th>
            <th style="width:15%">Age: <?php echo  '8+';?></th>
            <th style="width:25%">Class:  <?php echo  'Primary 3A';?></th>
            </tr>
    </thead>
            </table>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 14px; line-height:1.5em;">
             <thead> 
            <tr>
            <th style="width:40%;">Admission No:  <?php echo $admission_no;?></th>
            <th style="width:31%;">Term Ends:  <?php echo  '7th April';?></th>
            <th style="width:31%;">Next Term :  <?php echo  '24th April 2023';?></th>
            </tr>
            </thead>
            </table>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 15px; line-height:1.5em;">
                <thead>
            <tr>
            <th style="">Total Mark Obtainable: 1500</th>
            <th style="">Total Mark Obtained: <?php echo $mark_obtained;?></th>
            <th style="">Average: <?php echo $Average;?></th>
            <th style="">Term: Second Term</th>
            </tr>
             </thead>
            </table>
          
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="font-size: 12px;">
            <tbody>
                <tr><th style=" text-align: center; line-height: 1.2em;">Acedemic Performance Level for Grade</th></tr>
            </tbody>
                </table>
 <table cellpadding="15px" width="100%" border="1px" cellspacing="0px">
     <thead>
            
            <tr style=" font-size: 9px;">
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
            <tr style=" font-size: 9px;">
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
            <tr style=" font-size: 9px;">
            <th style=" padding-left: 10px; line-height: 1.5em;">4</th>
            <th style=" padding-left: 10px; line-height:1.5em; ">3</th>
            <th style=" padding-left: 10px; line-height:1.5em; ">2</th>
            <th style=" padding-left: 10px; line-height:1.5em;">1</th>
            </tr>
            </thead>
           
            <tr style=" font-size: 9px;">
            <td style="padding-left: 15px; line-height:1.5em;">High</td>
            <td style="  padding-left: 15px; line-height:1.5em;">Satisfactory</td>
            <td style=" padding-left: 15px; line-height:1.5em; ">Progressing</td>
            <td style=" padding-left: 15px; line-height:1.5em; ">need improvement</td>
           
            </tr>
           
           </table>
            <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="">
                <thead>
             <tr style=" font-size: 13px;">
             <th style="text-align: center; line-height:1.2em;">Christian Religion Studies<br> and<br> Nation Value</th>
            <th style=" text-align: center;">Test<br>%</th>
            <th style=" text-align: center;">Project<br>%</th>
            <th style=" text-align: center;">Assessment<br>%</th>
            <th style=" text-align: center;">Exam<br>%</th>
            <th style=" text-align: center;">Total<br>%</th>
            <th style=" text-align: center;">Grade<br>Level</th>
            <th style=" text-align: center;">Skills<br>Grade</th>
            </tr>
                </thead>
              
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td>Christian Religion Studies</td>
            <td style="text-align: center;"><?php echo $crs_test;?></td>
            <td style="text-align: center;"><?php echo $crs_project;?></td>
            <td style="text-align: center;"><?php echo $crs_assessment;?></td>
            <td style="text-align: center;"><?php echo $crs_exam;?></td>
            <td style="text-align: center;"><?php echo $crs_total;?></td>
            <td style="text-align: center;"><?php echo $crs_gl;?></td>
            <td style="text-align: center;"><?php echo $crs_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td>Civic Education</td>
            <td style="text-align: center;"><?php echo $civic_test;?></td>
            <td style="text-align: center;"><?php echo $civic_project;?></td>
            <td style="text-align: center;"><?php echo $civic_assessment;?></td>
            <td style="text-align: center;"><?php echo $civic_exam;?></td>
            <td style="text-align: center;"><?php echo $civic_total;?></td>
            <td style="text-align: center;"><?php echo $civic_gl;?></td>
            <td style="text-align: center;"><?php echo $civic_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td>Social Studies</td>
            <td style="text-align: center;"><?php echo $sos_test;?></td>
            <td style="text-align: center;"><?php echo $sos_project;?></td>
            <td style="text-align: center;"><?php echo $sos_assessment;?></td>
            <td style="text-align: center;"><?php echo $sos_exam;?></td>
            <td style="text-align: center;"><?php echo $sos_total;?></td>
            <td style="text-align: center;"><?php echo $sos_gl;?></td>
            <td style="text-align: center;"><?php echo $sos_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td>Security Education</td>
            <td style="text-align: center;"><?php echo $se_test;?></td>
            <td style="text-align: center;"><?php echo $se_project;?></td>
            <td style="text-align: center;"><?php echo $se_assessment;?></td>
            <td style="text-align: center;"><?php echo $se_exam;?></td>
            <td style="text-align: center;"><?php echo $se_total;?></td>
            <td style="text-align: center;"><?php echo $se_gl;?></td>
            <td style="text-align: center;"><?php echo $se_sg;?></td>
            </tr>
           
           </table>
          <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="" >
              <thead>
             <tr style=" font-size: 13px;">
             <th style="text-align: center; line-height:1.2em;">Basic Science<br> and<br> Technology</th>
            <th style=" text-align: center;">Test<br>%</th>
            <th style=" text-align: center;">Project<br>%</th>
            <th style=" text-align: center;">Assessment<br>%</th>
            <th style=" text-align: center;">Exam<br>%</th>
            <th style=" text-align: center;">Total<br>%</th>
            <th style=" text-align: center;">Grade<br>Level</th>
            <th style=" text-align: center;">Skills<br>Grade</th>
            </tr>
              </thead>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Basic Science</td>
            <td style="text-align: center;"><?php echo $bs_test;?></td>
            <td style="text-align: center;"><?php echo $bs_project;?></td>
            <td style="text-align: center;"><?php echo $bs_assessment;?></td>
            <td style="text-align: center;"><?php echo $bs_exam;?></td>
            <td style="text-align: center;"><?php echo $bs_total;?></td>
            <td style="text-align: center;"><?php echo $bs_gl;?></td>
            <td style="text-align: center;"><?php echo $bs_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Basic Technology</td>
            <td style="text-align: center;"><?php echo $bt_test;?></td>
            <td style="text-align: center;"><?php echo $bt_project;?></td>
            <td style="text-align: center;"><?php echo $bt_assessment;?></td>
            <td style="text-align: center;"><?php echo $bt_exam;?></td>
            <td style="text-align: center;"><?php echo $bt_total;?></td>
            <td style="text-align: center;"><?php echo $bt_gl;?></td>
            <td style="text-align: center;"><?php echo $bt_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Physical Health Ed.</td>
            <td style="text-align: center;"><?php echo $phe_test;?></td>
            <td style="text-align: center;"><?php echo $phe_project;?></td>
            <td style="text-align: center;"><?php echo $phe_assessment;?></td>
            <td style="text-align: center;"><?php echo $phe_exam;?></td>
            <td style="text-align: center;"><?php echo $phe_total;?></td>
            <td style="text-align: center;"><?php echo $phe_gl;?></td>
            <td style="text-align: center;"><?php echo $phe_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Computer</td>
            <td style="text-align: center;"><?php echo $comp_test;?></td>
            <td style="text-align: center;"><?php echo $comp_project;?></td>
            <td style="text-align: center;"><?php echo $comp_assessment;?></td>
            <td style="text-align: center;"><?php echo $comp_exam;?></td>
            <td style="text-align: center;"><?php echo $comp_total;?></td>
            <td style="text-align: center;"><?php echo $comp_gl;?></td>
            <td style="text-align: center;"><?php echo $comp_sg;?></td>
            </tr>
           </table>
           <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="">
            <thead>
             <tr style=" font-size: 13px;">
             <th style="text-align: center; line-height:1.2em;">Mathematics</th>
            <th style=" text-align: center;">Test<br>%</th>
            <th style=" text-align: center;">Project<br>%</th>
            <th style=" text-align: center;">Assessment<br>%</th>
            <th style=" text-align: center;">Exam<br>%</th>
            <th style=" text-align: center;">Total<br>%</th>
            <th style=" text-align: center;">Grade<br>Level</th>
            <th style=" text-align: center;">Skills<br>Grade</th>
            </tr>
            </thead>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Mathematics</td>
            <td style="text-align: center;"><?php echo $math_test;?></td>
            <td style="text-align: center;"><?php echo $math_project;?></td>
            <td style="text-align: center;"><?php echo $math_assessment;?></td>
            <td style="text-align: center;"><?php echo $math_exam;?></td>
            <td style="text-align: center;"><?php echo $math_total;?></td>
            <td style="text-align: center;"><?php echo $math_gl;?></td>
            <td style="text-align: center;"><?php echo $math_sg;?></td>
            </tr>
            </tbody>
           </table>
              <table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="">
                  <thead>
             <tr style=" font-size: 13px;">
                 <th style="text-align: center; line-height:1.2em; ">Pre-Vocational<br> Studies</th>
            <th style=" text-align: center;">Test<br>%</th>
            <th style=" text-align: center;">Project<br>%</th>
            <th style=" text-align: center;">Assessment<br>%</th>
            <th style=" text-align: center;">Exam<br>%</th>
            <th style=" text-align: center;">Total<br>%</th>
            <th style=" text-align: center;">Grade<br>Level</th>
            <th style=" text-align: center;">Skills<br>Grade</th>
            </tr>
                  </thead>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Agricultual Science</td>
            <td style="text-align: center;"><?php echo $agr_test;?></td>
            <td style="text-align: center;"><?php echo $agr_project;?></td>
            <td style="text-align: center;"><?php echo $agr_assessment;?></td>
            <td style="text-align: center;"><?php echo $agr_exam;?></td>
            <td style="text-align: center;"><?php echo $agr_total;?></td>
            <td style="text-align: center;"><?php echo $agr_gl;?></td>
            <td style="text-align: center;"><?php echo $agr_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Cultural $ Creative Arts</td>
            <td style="text-align: center;"><?php echo $cca_test;?></td>
            <td style="text-align: center;"><?php echo $cca_project;?></td>
            <td style="text-align: center;"><?php echo $cca_assessment;?></td>
            <td style="text-align: center;"><?php echo $cca_exam;?></td>
            <td style="text-align: center;"><?php echo $cca_total;?></td>
            <td style="text-align: center;"><?php echo $cca_gl;?></td>
            <td style="text-align: center;"><?php echo $cca_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Home Economics.</td>
            <td style="text-align: center;"><?php echo $he_test;?></td>
            <td style="text-align: center;"><?php echo $he_project;?></td>
            <td style="text-align: center;"><?php echo $he_assessment;?></td>
            <td style="text-align: center;"><?php echo $he_exam;?></td>
            <td style="text-align: center;"><?php echo $he_total;?></td>
            <td style="text-align: center;"><?php echo $he_gl;?></td>
            <td style="text-align: center;"><?php echo $he_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">French</td>
            <td style="text-align: center;"><?php echo $fr_test;?></td>
            <td style="text-align: center;"><?php echo $fr_project;?></td>
            <td style="text-align: center;"><?php echo $fr_assessment;?></td>
            <td style="text-align: center;"><?php echo $fr_exam;?></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            </tr>
           </table> 
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px" style="">
    <thead>
             <tr style=" font-size: 13px;">
             <th style="text-align: center; line-height:1em;">English Language</th>
            <th style=" text-align: center;">Test<br>%</th>
            <th style=" text-align: center;">Project<br>%</th>
            <th style=" text-align: center;">Assessment<br>%</th>
            <th style=" text-align: center;">Exam<br>%</th>
            <th style=" text-align: center;">Total<br>%</th>
            <th style=" text-align: center;">Grade<br>Level</th>
            <th style=" text-align: center;">Skills<br>Grade</th>
            </tr>
    </thead>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">English Language</td>
            <td style="text-align: center;"><?php echo $eng_test;?></td>
            <td style="text-align: center;"><?php echo $eng_project;?></td>
            <td style="text-align: center;"><?php echo $eng_assessment;?></td>
            <td style="text-align: center;"><?php echo $eng_exam;?></td>
            <td style="text-align: center;"><?php echo $eng_total;?></td>
            <td style="text-align: center;"><?php echo $eng_gl;?></td>
            <td style="text-align: center;"><?php echo $eng_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Literature</td>
            <td style="text-align: center;"><?php echo $lit_test;?></td>
            <td style="text-align: center;"><?php echo $lit_project;?></td>
            <td style="text-align: center;"><?php echo $lit_assessment;?></td>
            <td style="text-align: center;"><?php echo $lit_exam;?></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Writting</td>
            <td style="text-align: center;"><?php echo $wrt_test;?></td>
            <td style="text-align: center;"><?php echo $wrt_project;?></td>
            <td style="text-align: center;"><?php echo $wrt_assessment;?></td>
            <td style="text-align: center;"><?php echo $wrt_exam;?></td>
            <td style="text-align: center;"><?php echo $wrt_total;?></td>
            <td style="text-align: center;"><?php echo $wrt_gl;?></td>
            <td style="text-align: center;"><?php echo $wrt_sg;?></td>
            </tr>
            <tr style="font-size: 13px; line-height: 1.2em;">
            <td style="">Spelling</td>
            <td style="text-align: center;"><?php echo $sp_test;?></td>
            <td style="text-align: center;"><?php echo $sp_project;?></td>
            <td style="text-align: center;"><?php echo $sp_assessment;?></td>
            <td style="text-align: center;"><?php echo $sp_exam;?></td>
            <td style="text-align: center;"><?php echo $sp_total;?></td>
            <td style="text-align: center;"><?php echo $sp_gl;?></td>
            <td style="text-align: center;"><?php echo $sp_sg;?></td>
            </tr>
           </table>

<table cellpadding="15px" width="50%" border="1px" cellspacing="0px" style="float:left; margin-top: 3px;">
            <thead>
             <tr style=" font-size: 12px;">
             <th style="text-align: center; width: 35%; line-height: 1em; width: ">Behavioural</th>
            <th style=" text-align: center; width: 5%; line-height: 1em; width:">Assessment</th>
             </tr>
           
             
            <tr style="font-size: 10px; line-height: 1em;">
            <td style=" width: 35%;">Neatness</td>
            <td style="width: 5%; text-align: center;"><?php echo $neatness;?></td>
           
            </tr>
            <tr style="font-size: 10px; line-height: 1em;">
            <td style=" width: 35%; line-height: 1em;">Puntuality</td>
            <td style="width: 5%; line-height: 1em; text-align: center;"><?php echo $puntuality;?></td>
            
            </tr>
            <tr style="font-size: 10px; line-height: 1em;">
            <td style="width: 35%; line-height: 1em;">Self Control</td>
            <td style="width: 5%;line-height: 1em; text-align: center;"><?php echo $self_control;?></td>
            
            </tr>
             <tr style="font-size: 10px; line-height: 1em;">
            <td style=" width: 35%; line-height: 1em;">Relationship With Other</td>
            <td style=" width: 5%; line-height: 1em; text-align: center;"><?php echo $relationship;?></td>
            
            </tr>
             <tr style="font-size: 10px; line-height: 1em;">
            <td style="line-height:1em; width: 35%;">Politeness</td>
            <td style="width: 5%; line-height: 1em; text-align: center;"><?php echo $politeness;?></td>
            
            </tr>
           </table>
          
            
            
<p style="float:left; margin-left: 60%;  font-size: 13px; line-height: 1em; margin-top: -8%;" id="g">
    Grade Marks<br> 
    80 - 100 = Excellent<br>
    60 - 79 = Very Good<br>
    50 - 59 = Pass<br>
    40 - 49 = Weak pass
    </p>
<table cellpadding="15px" width="100%" border="1px" cellspacing="0px;" style=" font-size: 13px; line-height: 1.5em;">
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

       