<?php
	
    session_start();

	if(isset($_POST['submit'])){
		
        $id = $_POST['id'];
		$password = $_POST['password'];

		if($id != ""){
			if($password != ""){
				
                $myfile = fopen('user.txt', 'r');

				while (!feof($myfile)) {
					
                    $data = fgets($myfile);
					$user = explode('|', $data);
					if(trim($user[0]) == $id && trim($user[1]) == $password){
						setcookie('isLoggedIn', 'true', time()+3600, '/');
						header('location: home.php');
					}
				}

				echo "Invalid username/password";

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid ID...";
		}
	}
?>