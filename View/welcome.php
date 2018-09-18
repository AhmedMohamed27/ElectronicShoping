<?php
session_start();


if(!$_SESSION['login_user']){
    header("Location: index.php?notLogedin=your are not adminstrator!");
}else{

echo "<h6>Welcom : ".$_SESSION['login_user']."</h6>";
echo "<a href='logout.php'>LogOut</a>";
}

?>