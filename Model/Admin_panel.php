<?php
include 'User.php';
include_once 'db_connect.php';
class Admin_panel extends User{
    protected $lastErrorMessage;
	function getLastErrorMessage() {
		return $this->lastErrorMessage;
	}
 
    private $product_name;
    private $product_company;
    private $product_price;
    private $product_discount;
    private $product_desc;
    private $product_quantity;
    private $product_image;
    private $subcategoryID;        
    function add_product($product_name,$product_company,$product_price,$product_discount,$product_desc,$product_quantity,$product_image,$subcategoryID){
        global $connection;
        $sqlAddproduct="INSERT INTO `product`(`productId`, `productName`, `productCompany`, `productPrice`, `productDiscount`, `productDescription`, `productQuantity`, `productPicture`) VALUES ('NULL','$product_name','$product_company','$product_price','$product_discount','$product_desc','$product_quantity','$product_image')";
       
        $result = $connection->query ( $sqlAddproduct );
		if ($result !== false) { // sql query success
			return true;
		} else { // sql query fails no wonder.
			die ( "Database Error : " . $connection->error );
		}
    }
    function getCategories() {
		global $connection;
		$showCategory = "SELECT * FROM `category`;";
		$result = $connection->query ( $showCategory );
		if ($result !== false) {
			return $result;
		} else {
			$this->lastErrorMessage = "Error : " . $connection->error;
			return false;
		}
	}


}
