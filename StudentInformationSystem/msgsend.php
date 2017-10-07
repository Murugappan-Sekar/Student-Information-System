<?php
	session_start();
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$db="sisdb";

	function Redirect($url, $permanent = false)
	{
	    if (headers_sent() === false)
	    {
	        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
	    }
	    exit();
	}	
	if(!isset($_SESSION["log"])){
		$_SESSION['log']=5;
		Redirect('http://localhost/StudentInformationSystem/master.php', false);
	}
	if($_SESSION["log"]!=1){
		$_SESSION['log']=5;
		Redirect('http://localhost/StudentInformationSystem/master.php', false);
	}
	$conn = mysqli_connect($servername, $username, $password,$db);

	// Check connection
	if (!$conn) {
		echo "error 404";
	    echo '<script>alert("'.mysqli_connect_error().'");<script>';
	}
	else{
		$from=$_SESSION['user'];
		$to=$_SESSION['val'];
		$sub=$_POST['subject'];
		$msg=$_POST['msg'];
		$sql = "insert into mailbox(fr,tto,subject,msg) values ('".$from."','".$to."','".$sub."','".$msg."')";
		mysqli_query($conn, $sql);
		$conn->close();
		Redirect('done.php?val='.$_SESSION['val'], false);
	}
	

?>