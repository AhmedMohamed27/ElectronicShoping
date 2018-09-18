<?php
include_once '../Model/Product.php';
include_once '../Model/Product.php';
include_once '../Model/Admin_panel.php';


if(isset($_POST['add_product'])){
    $product_name=$_POST['product_name'];
    $product_company=$_POST['product_company'];
    $product_price=$_POST['product_price'];
    $product_discount=$_POST['product_discount'];
    $product_desc=$_POST['product_desc'];
    $product_quantity=$_POST['product_quantity'];
    
    $file = $_FILES ['picture']['tmp']; // img
    $product_image = uniqid(); // img name
    move_uploaded_file($file, "../images/$product_image.jpg");
    
    
    
    
    $AdminPanel=new Admin_panel();
   $product=$AdminPanel->add_product($product_name,$product_company,$product_price,$product_discount,$product_desc,$product_quantity,$product_image,1);
    if($product){
        echo 'addeddddddd';
    }else{
        echo 'not addeddd';
    }
    
    
}


?>