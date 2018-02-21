<?php
session_start();
 ?>
<?php
$link = mysqli_connect("localhost", "root", "1234", "kobe") or die("Connect Error " . mysqli_error($link));
	console.dir($link);
	$username = htmlspecialchars($_POST['user']);
	$password = htmlspecialchars($_POST['pass']);
	$type = $_POST["new"];

	$query = "SELECT password FROM user WHERE username = ?";
  $stmt=mysqli_prepare($link, $query) or die("Prepare:".mysql_error());
	 mysqli_stmt_bind_param($stmt, "s", $username) or die("bind param");
	 mysqli_stmt_execute($stmt) or die("execute");
	 mysqli_stmt_store_result($stmt) or die (mysqli_stmt_error($stmt));

if($type == "0"){//login

	 if(mysqli_stmt_num_rows($stmt) == 0){
		          mysqli_stmt_close ($stmt);
	            echo "No such user";
	          }
	  else{
		          mysqli_stmt_bind_result($stmt, $pass) or die (mysqli_stmt_error($stmt));
				    	mysqli_stmt_fetch($stmt) or die(mysqli_stmt_error($stmt));

	           if(strcmp($password, $pass)==0){

							//setcookie('myusername', $username,time()+3600);

              //$_SESSION['username'] = 1;
							$_SESSION["username"] = $username;
				//		echo $_SESSION['username'];
								echo "Welcome";
							echo "<script>window.location.href='home.php';</script>";

              }
	          	else{
			        echo "Wrong username or password";
	          	}
        }
}


else{//register
		  if(mysqli_stmt_num_rows($stmt) == 1 ){
			 mysqli_stmt_close ($stmt);
			 echo "Username already exist";
		  }
		  else{
	    mysqli_stmt_close ($stmt);
			$query1 = "INSERT INTO user VALUES (?,?)";
			$stmt=mysqli_prepare($link, $query1) or die("Prepare:".mysql_error());
			 mysqli_stmt_bind_param($stmt, "ss", $username,$password) or die("bind param");
			if(mysqli_stmt_execute($stmt)) {

				$_SESSION["username"] = $username;
				//setcookie('myusername', $username, time()+3600);
				echo "Register successfully";
				echo "<script>window.location.href='home.php';</script>";
			}
		 }
 }
  mysqli_free_result($stmt);
?>
