<?php
		session_start();

		$email = $password = "";
		$emailError = $passwordError = "";
		$isValid = true;

		if (isset($_SESSION['email'])) {		
			header("location: /SecH/Login/login.php");
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (!isset($_POST['email']) || empty($_POST['email'])) {
				$emailError = "email is required";
				$isValid = false;
			}
			else{
				$email = $_POST['email'];
			}

			if (!isset($_POST['password']) || empty($_POST['password'])) {
				$passwordError = "Password is required";
				$isValid = false;
			}
			else{
				$password = $_POST['password'];
			}
		
			if($isValid) {
				$myobject = json_decode(file_get_contents('../data/data.json'), true);

				if(is_array($myobject)){
					$message = "User not found";

					foreach($myobject as $key => $value){
						if ($value['email'] == $_POST['email']) {
							if ($value['password'] == $_POST['password']) {
								$_SESSION['data'] = $value;
								$_SESSION['email'] = $email;
								header("location: /SecH/data/data.php");
							}
							else{
								$message = "Password does not match";
							}
						}
					}
				}
				else{
					$message = "User not found";
				}
			}
		}
	?>