<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if(isset($_POST["submit"])){
            require("connection.php");
            $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
            $registered_on=DATE("y-m-d h:i:s");
            $firstname=sanitize($connect,$_POST["firstname"]);
            $middlename=sanitize($connect,$_POST["middlename"]);
            $surname=sanitize($connect,$_POST["surname"]);
            $username=sanitize($connect,$_POST["username"]);
            $email=sanitize($connect,$_POST["email"]);
            $password=sanitize($connect,$_POST["password"]);
            $gender=sanitize($connect,$_POST["gender"]);
            $age=sanitize($connect,$_POST["age"]);
            $class=sanitize($connect,$_POST["class"]);
            $address=sanitize($connect,$_POST["address"]);
            
            $select="SELECT email FROM pre_nursery_register WHERE email='$email'";
            if($query=mysqli_query($connect,$select)){
                $num=mysqli_num_rows($query);
                if($num > 0){
                    $msg="Email <b>$email</b> already exists!";
                    header("location:pre_nursery_form.php?msg=$msg");
                }else{
                        $insert="INSERT INTO pre_nursery_register(first_name,middle_name,surname,username,email,password,confirm_password,gender,age,class,address,registered_on,passport)VALUES('$firstname','$middlename','$surname','$username','$email','$password','$confirm_password','$gender','$age','$class','$address','$registered_on','$file')";
                        if(mysqli_query($connect,$insert)){
                            $msg="Data submitted successfully. Please Print Out this form because it will be require from you during clearance";
                             header("location:pre_nursery_fetch_form.php?msg=$msg");
                        }else{
                            $msg="failed to exercute query on the database!";
                             header("location:pre_nursery_form.php?msg=$msg");
                        }
                            }
            }else{
                $msg="failed to query database";
                 header("location:pre_nursery_form.php?msg=$msg");
            }
  }else{
      $msg="parameter missing! try again later";
       header("location:pre_nursery_form.php?msg=$msg");
  }
                           
            
            ?>
