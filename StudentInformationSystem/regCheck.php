<?php
	session_start();
	echo "registration page";
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$reg=$_POST['reg'];
	$dept=$_POST['dept'];
	//echo $user." ".$pass." ".$reg;
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$db="sisdb";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);

	// Check connection
	if (!$conn) {
		echo "error";
	    echo '<script>alert("'.mysqli_connect_error().'");<script>';
	    $_SESSION['sign']=2;
	}
	else{
		//echo "hello";
		$sql = "INSERT INTO login (uname, pass, regno,department,bio,interest) VALUES ('".$user."', '".$pass."', '".$reg."','".$dept."','<html>No Bio set</html>','empty')";
		if (mysqli_query($conn, $sql)) {
 		   $_SESSION['sign']=1;
 		   //echo "gof";
		} else {
    		$_SESSION['sign']=2;
		}
		$conn->close();
	}
	function Redirect($url, $permanent = false)
	{
	    if (headers_sent() === false)
	    {
	        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
	    }
	    exit();
	}	
	Redirect('http://localhost/StudentInformationSystem/master.php', false);
?>
