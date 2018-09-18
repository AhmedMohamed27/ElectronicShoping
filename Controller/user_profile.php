<?php
session_start();
include_once '../Model/User.php';
$myUser=new User();
$username=$_SESSION['login_user'];
if(isset($_POST['Edit_email'])){
    
    $email=$_POST['update_email'];
    
    
    if($myUser->updateEmail($username, $email)){
      
        echo  "<script>"
        . "alert('email has been updated');</script>";
       
        
    }else{
        echo 'Not updated';
    }
     
}
else if(isset ($_POST['update_password'])){
    $password=md5($_POST['edit_password']);
    if($myUser->editPassword($username, $password)){
        echo  "<script>"
        . "alert('password has been updated');</script>";
    }else{
        echo 'Not updated';
    }
}



?>