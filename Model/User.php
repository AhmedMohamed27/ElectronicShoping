<?php
include 'db_connect.php';
class User{
	protected $lastErrorMessage;
	function getLastErrorMessage() {
		return $this->lastErrorMessage;
	}
	/*function signin($username, $password) {
	
            global $connection;
		$Password = md5 ($_POST['password']);
                SELECT `userid`, `username`, `email`, `password`, `Address`, `Mobile_Phone` FROM `users` WHERE 1
		$signinQuery = "SELECT * FROM users WHERE `username`='$username' AND `password`='$assword';";
		$result = $connection->query ( $signinQuery );
                
		
	}*/
	function signup($username,$email,  $password, $address, $mobile,$type) {
		global $connection;//INSERT INTO `users`(`userid`, `username`, `email`, `password`, `Address`, `Mobile_Phone`, `image`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])
		$Password = md5 ( $password );
		$registerQuery = "INSERT INTO `users`(`userid`, `username`, `email`, `password`,  `Address`, `Mobile_Phone`,`type`) VALUES ('NULL','$username','$email','$Password','$address','$mobile','$type')";
                
		$result = $connection->query ( $registerQuery );
		if ($result !== false) { // sql query success
			return true;
		} else { // sql query fails no wonder.
			die ( "Database Error : " . $connection->error );
		}
	}
        function updateEmail($username, $email) {
		global $connection;
		$updateEmailQuery = "UPDATE `users` SET `email`='$email' WHERE `username`='$username';";
               
		$result = $connection->query ( $updateEmailQuery );
               
		if ($result !== false) {
                    
			return true;
		} else {
			$this->lastErrorMessage = "Error : " . $conn->error;
			return false;
		}
	}
        function editPassword($username, $password) {
		global $connection;
		$updatePasswordQuery = "UPDATE `users` SET `password`='$password' WHERE `username`='$username';";
		$result = $connection->query ( $updatePasswordQuery );
		if ($result !== false) {
			return true;
		} else {
			$this->lastErrorMessage = "Error : " . $connection->error;
			return false;
		}
	}
        
}
?>
        