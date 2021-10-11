
<?php
	session_start();

	if(isset($_GET['submit']))
    {

		  $uname= $_GET['uname'];
		  $password= $_GET['password'];
        

		  if($uname != '' && $password != '')
        {
			if($_SESSION['user']['uname'] == $uname && $_SESSION['user']['password'] == $password){
					$_SESSION['flag'] = 'true';
					header('location: Dashboard.php');
			}else{
				echo 'Invlaid username/password';
			}

		}else{
			echo "Null value found..";
		}
	}else{
		echo "Invalid request..";
	}

?>