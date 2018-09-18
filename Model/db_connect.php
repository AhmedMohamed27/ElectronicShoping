<?php


    
   $user="root";
   $host="localhost";
   $password="";
   $dbName="electronicphp";
    
    
    
        $connection=  mysqli_connect($host, $user, $password, $dbName)or die(mysqli_errno($connection));
        if(!$connection){
            return false;
        }else{
            return true;
        }
    


?>