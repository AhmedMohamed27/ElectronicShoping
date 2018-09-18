<?php
include_once 'db_connect.php';
class Product {
    private $product_name;
    private $product_company;
    private $product_price;
    private $product_discount;
    private $product_desc;
    private $productRate;
    private $product_quantity;
    private $approveState;
    private $product_image;
    private $subId;
    function __construct($product_name, $product_company, $product_price, $product_discount, $product_desc, $productRate, $product_quantity, $approveState, $product_image, $subId) {
        $this->product_name = $product_name;
        $this->product_company = $product_company;
        $this->product_price = $product_price;
        $this->product_discount = $product_discount;
        $this->product_desc = $product_desc;
        $this->productRate = $productRate;
        $this->product_quantity = $product_quantity;
        $this->approveState = $approveState;
        $this->product_image =$product_image;
        $this->subId = $subId;
 
    }
   public  function getProductName() {
        return $this->product_name;
    }

    function getProductCompany() {
        return $this->product_company;
    }

    function getProductPrice() {
        return $this->product_price;
    }

    function getProductDiscount() {
        return $this->product_discount;
    }

    function getProductDescription() {
        return $this->product_desc;
    }

    function getProductRate() {
        return $this->productRate;
    }

    function getProductQuantity() {
        return $this->product_quantity;
    }

    function getApproveState() {
        return $this->approveState;
    }

    function getProductPicture() {
        return $this->product_image;
    }

    function getSubId() {
        return $this->subId;
    }

   

}
