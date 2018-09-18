<?php
include '../Model/User.php';
session_start();
if(isset($_POST['login'])){
    global $connection;
    $username=$_POST['username'];
    $password=  md5($_POST['password']);
    
    $Signinquery="SELECT * FROM `users` WHERE  `username`='$username' AND `password`='$password'";
    $result=  mysqli_query($connection,$Signinquery);
    $num_rows=  mysqli_num_rows($result);
    if($num_rows ==1){
		$row = mysqli_fetch_assoc($result);
		
        $_SESSION['login_user']=$username;
		$_SESSION['usertype']= $row["type"];
        header("Location:../index.php");
      
    }else{
        
        header("Location:../index.php?invalid=your username or password incorrect");
    }
}
elseif (isset ($_POST['register'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $mobile=$_POST['mobile'];
    $type=$_SESSION['type'];
    
    $user=new User();
    $user->signup($username, $email, $password, $address, $mobile,$type);
    if($user){
        header("Location: ../index.php");
    }else{
        echo 'not Register';
    }
}


?>