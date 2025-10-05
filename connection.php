<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>connection</title>
    </head>
    <body>
        <?php
        // put your code herennn
        $host="localhost";
        $database_user="root";
        $password="";
        $database_name="salvation_management_system";
        $connect=mysqli_connect($host,$database_user,$password,$database_name)or die ("Error:".mysqli_connect_error());
        if($connect){
            echo"                  ";
        }else{
            echo"Error in connection";
        }
        
        function sanitize($connect,$value){
            $value=@trim($value);
            if (get_magic_quotes_gpc()){
                $value=stripslashes($value);
                       }
                       return mysqli_real_escape_string($connect, $value);
        }
        
         function hasher($encript){
             $encode="ae1r_qprstux2@=1";
             $encodeall=md5(sha1($encript.$encode)).sha1($encode);
             return $encodeall;
           }
        ?>
    </body>
</html>
