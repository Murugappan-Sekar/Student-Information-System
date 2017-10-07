<?php
	session_start();
	echo "login page";
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	echo $user." ".$pass." ".$reg;
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
	    $_SESSION['log']=5;
	}
	else{
		//$sql = "INSERT INTO login (uname, pass, regno)VALUES ('".$user."', '".$pass."', '".$reg."')";
		$sql = "select * from login where uname='".$user."' and pass='".$pass."'";
		if ($result=mysqli_query($conn,$sql)){
  			$rowcount=mysqli_num_rows($result);
  			if($rowcount==1){
  				$_SESSION['user']=$user;
  				$_SESSION['log']=1;
  			}
  			else
  				$_SESSION['log']=4;
  		}
  		else
  			$_SESSION['log']=5;
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
