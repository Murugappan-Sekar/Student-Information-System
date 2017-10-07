<?php
	$cat=$_GET['cat'];
	$val=$_GET['sval'];
	$par="";
	if($cat=="Name")
		$par="uname";
	else if($cat=="RegNo")
		$par="regno";
	else if($cat=="Interest")
		$par="interest";
	else
		$par="department";
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
		$sql = "select * from login where ".$par." like '%".$val."%'";
		//echo $sql;
		echo "<center><table style='table-layout:auto;' border='2'><tr><th>Username</th><th>Register Number</th><th>Department</th><th>Interest</th></tr>";
		$result=$conn->query($sql);
		while($row = $result->fetch_assoc()) 
        	echo "<tr><td><a href='getBio.php?val=".$row['uname']."'>".$row['uname']."</a></td><td>".$row['regno']."</td><td>".$row['department']."</td><td>".$row['interest']."</td></tr>";
        echo "</table></center>";
		$conn->close();
	}
?>