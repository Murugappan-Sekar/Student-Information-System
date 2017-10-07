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
		$sql = "select * from login where uname='".$_GET['val']."'";
		$result=$conn->query($sql);
		while($row = $result->fetch_assoc()) 
        	echo $row['bio']."<br><h4>Interest : </h4>".$row['interest'];
		$conn->close();
		$_SESSION['val']=$_GET['val'];
		include 'sendMessage.php';
	}
	

?>