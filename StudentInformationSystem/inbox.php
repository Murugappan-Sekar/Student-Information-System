<?php
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
	
	session_start();
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
		$sql = "select * from mailbox where tto='".$_SESSION['user']."'";
		//echo $sql;
		echo "<center><h3>Inbox</h3></center>";
		echo "<center><table style='table-layout:auto;' border='2'><tr><th>From</th><th>To</th><th>Subject</th><th>Message</th></tr>";
		$result=$conn->query($sql);
		while($row = $result->fetch_assoc()) 
        	echo "<tr><td>".$row['fr']."</td><td>".$row['tto']."</td><td>".$row['subject']."</td><td>".$row['msg']."</td></tr>";
        echo "</table></center>";
		$conn->close();
	}
?>